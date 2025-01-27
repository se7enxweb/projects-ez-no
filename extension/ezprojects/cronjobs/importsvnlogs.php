<?php

if ( !$isQuiet )
{
    $cli->output( "Processing pending SVN log imports" );
}

$db = eZDB::instance();

$rows = $db->arrayQuery( "SELECT * FROM ezpending_actions WHERE action='import_svn_log'" );

$URLToNodeIDMap = array();

foreach ( $rows as $row )
{
    list( $repository, $revision ) = explode( ';', $row['param'] );

    $repositoryURL = 'http://svn.projects.ez.no/' . $repository;

    if ( !$isQuiet )
    {
        $cli->output( "Processing revision $revision of $repositoryURL" );
    }

    if ( array_key_exists( $repositoryURL, $URLToNodeIDMap ) )
    {
        $subversionNodeID = $URLToNodeIDMap[$repositoryURL];
    }
    else
    {
        // fetch related Subversion node, by using url filter
        $params = array( 'Limitation' => array(),
                         'ClassFilterType' => 'include',
                         'ClassFilterArray' => array( 'subversion' ),
                         'ExtendedAttributeFilter' => array( 'id' => 'eZURLFilter',
                                                             'params' => array( array( 'subversion/repository', '=', $repositoryURL ) ) )
                       );

       $subversionNodes = eZContentObjectTreeNode::subTreeByNodeID( $params, 2 );

       if ( count( $subversionNodes ) == 0 )
       {
           if ( !$isQuiet )
           {
               $cli->error( 'Unable to find Subversion node with repository URL ' . $repositoryURL );
           }

           // skip to next pending action
           continue;
       }
       elseif ( count( $subversionNodes ) > 1 )
       {
           if ( !$isQuiet )
           {
               $cli->error( 'Found more than one Subversion node with repository URL ' . $repositoryURL );
           }

           // skip to next pending action
           continue;
       }

       $subversionNodeID = $subversionNodes[0]->attribute( 'node_id' );
   }

    $logs = svn_log( $repositoryURL, $revision );

    if ( $logs === false )
    {
        // most likely: no such revision number
        if ( !$isQuiet )
        {
            $cli->error( "Unable to fetch log of revision $revision from $repositoryURL" );
        }

        // continue with next pending action
        continue;
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
                    sscanf( $value, '%u-%u-%uT%u:%u:%uZ', $year, $month, $day, $hour, $min, $sec );
                    // use gmmktime instead of mktime, because the time in svn log is UTC (GMT) time
                    $timeStamp = gmmktime( $hour, $min, $sec, $month, $day, $year );
                    $attributes['date'] = $timeStamp;
                } break;
            }
        }

        $createParams = array(
            'attributes' => $attributes,
            'parent_node_id' => $subversionNodeID,
            'creator_id' => 14,
            'class_identifier' => 'subversion_log_message',
        );

        if ( array_key_exists( 'author', $attributes ) )
        {
            $object = eZContentFunctions::createAndPublishObject( $createParams );
        }
        else
        {
            if ( !$isQuiet )
            {
                $cli->output( 'No SVN author, skipping' );
            }

            continue;
        }
     }

     $escapedParam = $db->escapeString( $row['param'] );
     $db->query( "DELETE FROM ezpending_actions WHERE action='import_svn_log' AND param='$escapedParam'" );
}

?>
