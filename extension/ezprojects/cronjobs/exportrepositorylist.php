<?php

$db = eZDB::instance();
$fileName = 'repositories.csv';
$classIdentifier = 'subversion';

$sql = "SELECT MAX(o.modified) AS last_modified
        FROM ezcontentobject o, ezcontentclass c
        WHERE o.contentclass_id=c.id AND
              o.is_published=0 AND
              c.identifier='" . $db->escapeString( $classIdentifier ) . "'";

$result = $db->arrayQuery( $sql );

$dbMTime = $result[0]['last_modified'];

$fileExists = file_exists( $fileName );

$cli->output( 'last mod time in database: ' . $dbMTime );
if ( fileExists )
{
    $cli->output( 'mod time of file: ' . filemtime( $fileName ) );
}

if ( !$fileExists || $dbMTime > filemtime( $fileName ) )
{
    $repositories = eZContentObjectTreeNode::subTreeByNodeID( array( 'ClassFilterType' => 'include',
                                                                     'ClassFilterArray' => array( $classIdentifier ) ),
					                      2 );

    $cli->output( 'Repository objects found: ' . count( $repositories ) );

    $h = fopen( $fileName, 'w' );

    foreach ( $repositories as $repository )
    {
        $parent = $repository->attribute( 'parent' );
        $cli->output( $parent->attribute( 'name' ) );

        $repoData = $repository->attribute( 'data_map' );

        if ( !$repoData['repository']->attribute( 'has_content' ) )
        {
	    $cli->warning( 'repository object without link: ' . $repository->attribute( 'url_alias'  ));
            continue;
        }

        $link = $repoData['repository']->attribute( 'content' );

        fwrite( $h, $link . "\r\n" );
    }

    fclose( $h );

    $cli->output( 'Repository list saved to ' . realpath( $fileName ) );
}

?>
