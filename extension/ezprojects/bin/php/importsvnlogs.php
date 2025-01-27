#!/usr/bin/env php
<?php

require_once 'autoload.php';

$cli = eZCLI::instance();

$scriptSettings = array();
$scriptSettings['description'] = 'Import Subversion logs to eZ Publish';
$scriptSettings['use-session'] = true;
$scriptSettings['use-modules'] = true;
$scriptSettings['use-extensions'] = true;

$script = eZScript::instance( $scriptSettings );
$script->startup();

$config = '';
$argumentConfig = '[SVN-USERNAME][SVN-PASSWORD][REPOSITORY-URL]';
$optionHelp = false;
$arguments = false;
$useStandardOptions = true;

$options = $script->getOptions( $config, $argumentConfig, $optionHelp, $arguments, $useStandardOptions );
$script->initialize();

$argumentCount = count( $options['arguments'] );

if ( $argumentCount < 2 )
{
    $script->shutdown( 1, 'Wrong argument count' );
}

$svnUserName = $options['arguments'][0];
$svnPassword = $options['arguments'][1];

$repositoryURL = $argumentCount > 2 ? $options['arguments'][2] : false;

svn_auth_set_parameter( SVN_AUTH_PARAM_DEFAULT_USERNAME, $svnUserName );
svn_auth_set_parameter( SVN_AUTH_PARAM_DEFAULT_PASSWORD, $svnPassword );

include_once( 'kernel/classes/ezcontentfunctions.php' );
include_once( 'kernel/classes/datatypes/ezuser/ezuser.php' );
include_once( 'kernel/classes/ezcontentobjecttreenode.php' );

$params = array( 'Limitation' => array(), 'ClassFilterType' => 'include', 'ClassFilterArray' => array( 'subversion' ) );
$subversionNodes = eZContentObjectTreeNode::subTreeByNodeID( $params, 2 );

foreach ( $subversionNodes as $subversionNode )
{
    $data = $subversionNode->attribute( 'data_map' );
    $url = trim( $data['repository']->attribute( 'content' ) );

    // skip empty url
    if ( $url == '' )
    {
        continue;
    }

    if ( $repositoryURL && $url != $repositoryURL )
    {
        continue;
    }

    $cli->output( $url );

    $logParams = array( 'Limitation' => array(), 'ClassFilterType' => 'include', 'ClassFilterArray' => array( 'subversion_log_message' ), 'SortBy' => array( 'attribute', false, 'subversion_log_message/revision' ), 'Limit' => 1, 'Offset' => 0 );
    $logMessages = eZContentObjectTreeNode::subTreeByNodeID( $logParams, $subversionNode->attribute( 'node_id' ) );

    if ( count( $logMessages ) > 0 )
    {
        $lastImportedMessageData = $logMessages[0]->attribute( 'data_map' );
        $lastImportedRevision = $lastImportedMessageData['revision']->attribute( 'content' );
    }
    else
    {
        $lastImportedRevision = 0;
    }

    $revisionToImport = $lastImportedRevision + 1;

    while ( true )
    {
        $cli->output( 'Rev: ' . $revisionToImport );

        $logs = svn_log( $url, $revisionToImport );

        if ( $logs === false )
        {
            // most likely: no such revision number
            // continue with next repository then
            break;
        }

        foreach ( $logs as $log )
        {
            $attributes = array();

            foreach ( $log as $property => $value )
            {
                switch ( $property )
                {
                    case 'rev':
                    {
                        $attributes['revision'] = $value;
                    } break;

                    case 'author':
                    {
                        if ( trim( $value ) != '' )
                        {
                            $authorUser = eZUser::fetchByName( $value );
                            if ( $authorUser )
                            {
                                $attributes['author'] = $authorUser->attribute( 'contentobject_id' );
                            }
                        }
                    } break;

                    case 'msg':
                    {
                        $attributes['log'] = $value;
                    } break;

                    case 'date':
                    {
                        $cli->output( $value );
                        sscanf( $value, '%u-%u-%uT%u:%u:%uZ', $year, $month, $day, $hour, $min, $sec );
                        // use gmmktime instead of mktime, because the time in svn log is UTC (GMT) time
                        $timeStamp = gmmktime( $hour, $min, $sec, $month, $day, $year );
                        $attributes['date'] = $timeStamp;
                    } break;
                }
            }

            $createParams = array(
                'attributes' => $attributes,
                'parent_node_id' => $subversionNode->attribute( 'node_id' ),
                'creator_id' => 14,
                'class_identifier' => 'subversion_log_message',
            );

            if ( array_key_exists( 'author', $attributes ) )
            {
                $cli->output( 'Creating object' );
                $object = eZContentFunctions::createAndPublishObject( $createParams );
            }
        }

        $revisionToImport++;
    }
}

$script->shutdown( 0 );

?>