#!/usr/bin/env php
<?php

require_once 'autoload.php';

$cli = eZCLI::instance();

$scriptSettings = array();
$scriptSettings['description'] = 'your description of this script comes here';
$scriptSettings['use-session'] = true;
$scriptSettings['use-modules'] = true;
$scriptSettings['use-extensions'] = true;

$script = eZScript::instance( $scriptSettings );
$script->startup();

$config = '';
$argumentConfig = '[svn-username][svn-password]';
$optionHelp = false;
$arguments = false;
$useStandardOptions = true;

$options = $script->getOptions( $config, $argumentConfig, $optionHelp, $arguments, $useStandardOptions );
$script->initialize();

if ( count( $options['arguments'] ) != 2 )
{
    $script->shutdown( 1, 'Wrong argument count' );
}

$svnUserName = $options['arguments'][0];
$svnPassword = $options['arguments'][1];

$stdin = fopen( "php://stdin", "r+" );

include_once( 'kernel/classes/ezcontentobjecttreenode.php' );
include_once( 'kernel/classes/datatypes/ezuser/ezuser.php' );

$params = array( 'Limitation' => array(), 'ClassFilterType' => 'include', 'ClassFilterArray' => array( 'subversion' ) );
$subversionNodes = eZContentObjectTreeNode::subTreeByNodeID( $params, 2 );

$commands = array();

$authorReplacements = array();

foreach ( $subversionNodes as $subversionNode )
{
    $authors = array();
    $data = $subversionNode->attribute( 'data_map' );
    $url = $data['repository']->attribute( 'content' );

    // skip empty url
    if ( trim( $url ) == '' )
    {
        continue;
    }

    $cli->output( $url );

    $logs = svn_log( $url );

    foreach ( $logs as $log )
    {
        // some have no author, like revisions for padding ported from pubsvn community repositories
        if ( !isset( $log['author'] ) )
        {
            continue;
        }
        $authors[] = $log['author'];
    }

    $authors = array_unique( $authors );

    foreach ( $authors as $author )
    {
        $user = eZUser::fetchByName( $author );

        if ( !is_object( $user ) )
        {
            $cli->error( 'Author "' . $author . '" not found in user table' );

            if ( array_key_exists( $author, $authorReplacements ) )
            {
                $cli->output( 'using previously entered replacement' );
                break;
            }

            $newAuthor = false;
            // ask for new name, empty to skip
            do
            {
                $cli->output( 'Provide the username to replace ' . $author . ' (empty to skip): ', false );
                $userInput = fgets( $stdin );
                $userInput = trim( $userInput );

                $cli->output();

                if ( $userInput == '' )
                {
                    break;
                }

                $user = eZUser::fetchByName( $userInput );

                if ( !is_object( $user ) )
                {
                    $cli->error( 'User with username ' . $userInput . ' does not exist.' );
                }
                else
                {
                    $authorReplacements[$author] = $userInput;
                }
            } while ( !is_object( $user ) );

        }
    }

    foreach ( $logs as $log )
    {
        // some have no author, like revisions for padding ported from pubsvn community repositories
        if ( !isset( $log['author'] ) )
        {
            continue;
        }

        if ( array_key_exists( $log['author'], $authorReplacements ) )
        {
            $newAuthor = $authorReplacements[$log['author']];

            $rev = $log['rev'];

            $commands[] = "svn --username $svnUserName --password $svnPassword propset svn:author --revprop -r $rev $newAuthor $url";
        }
    }

    //$cli->output( implode( ', ', $authors ) );
    $cli->output( str_repeat( '-', 20 ) );
    $cli->output();
}

$cli->output();
$cli->output();
$cli->output();
$cli->output();

foreach ( $commands as $command )
{
    $cli->output( $command );
}

$script->shutdown( 0 );

?>
