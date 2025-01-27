<?php
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ publish projects extension
// SOFTWARE RELEASE: 0.x
// COPYRIGHT NOTICE: Copyright (C) 2006-2007 Kristof Coomans <http://blog.kristofcoomans.be>
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

class CreateSVNRepositoryType extends eZWorkflowEventType
{
    function CreateSVNRepositoryType()
    {
        $this->eZWorkflowEventType( 'createsvnrepository', ezi18n( 'extension/projects', 'Create SVN repository' ) );
        // limit workflows which use this event to be used only on the post-publish trigger
        $this->setTriggerTypes( array( 'content' => array( 'publish' => array( 'after' ) ) ) );
    }

    function execute( $process, $event )
    {
        $parameters = $process->attribute( 'parameter_list' );
        $object = eZContentObject::fetch( $parameters['object_id'] );

        // this is normally not needed
        // but let's add it anyway, in case the workflow event is used wrongly (= not after a multiplexer)
        if ( $object->attribute( 'class_identifier' ) != 'subversion' )
        {
            eZDebug::writeWarning( 'The object in the workflow is not a subversion object, workflow status accepted without doing anything', 'CreateSVNRepositoryType::execute' );
            return eZWorkflowType::STATUS_ACCEPTED;
        }

        $dataMap = $object->attribute( 'data_map' );
        // if the link to the repository is already filled in, then don't do anything
        if ( $dataMap['repository']->attribute( 'has_content' ) )
        {
            return eZWorkflowType::STATUS_ACCEPTED;
        }

        // get the project unix name
        $mainNode = $object->attribute( 'main_node' );
        $projectNode = $mainNode->attribute( 'parent' );

        // if the parent is not a project (for example in the project skeleton), then skip this event
        if ( $projectNode->attribute( 'class_identifier' ) != 'project' )
        {
            return eZWorkflowType::STATUS_ACCEPTED;
        }

        $projectsIni = eZINI::instance( 'ezprojects.ini' );

        $defer = ( $projectsIni->hasVariable( 'Subversion', 'Defer' ) && strtolower( trim( $projectsIni->variable( 'Subversion', 'Defer' ) ) ) == 'enabled' ) ? true : false;

        eZDebug::writeDebug( strtolower( trim( $projectsIni->variable( 'Subversion', 'Defer' ) ) ) );
        eZDebug::writeDebug( $defer, 'defer' );
        // defer to cron, this is safer because we are maybe going to do some ssh
        include_once( 'lib/ezutils/classes/ezsys.php' );
        if ( $defer && eZSys::isShellExecution() == false )
        {
            return eZWorkflowType::STATUS_DEFERRED_TO_CRON_REPEAT;
        }

        $projectData = $projectNode->attribute( 'data_map' );
        $unixName = $projectData['unix_name']->attribute( 'content' );



        $server = $projectsIni->hasVariable( 'Subversion', 'Server' ) && trim( $projectsIni->variable( 'Subversion', 'Server' ) ) != '' ? $projectsIni->variable( 'Subversion', 'Server' )  : false;
        $urlBase = $projectsIni->variable( 'Subversion', 'URLBase' );
        $parentPath = $projectsIni->variable( 'Subversion', 'ParentPath' );

        $hooks = $projectsIni->hasVariable( 'Subversion', 'Hooks' ) ? $projectsIni->variable( 'Subversion', 'Hooks' ) : array();

        $success = $this->createRepository( $unixName, $parentPath, $server, $hooks );

        // debug
        //$success = false;
        if ( !$success )
        {
            // repository creation failed, let's try again the next time the cron runs
            return eZWorkflowType::STATUS_DEFERRED_TO_CRON_REPEAT;
        }

        // set link to repository
        $this->updateRepositoryURL( $object, $urlBase, $unixName );

        return eZWorkflowType::STATUS_ACCEPTED;
    }

    function createRepository( $unixName, $parentPath, $server, $hooks )
    {
        $hooksDir = eZDir::path( array( eZSys::rootDir(), 'extension', 'ezprojects', 'svn_hooks' ) );

        $commands = array();
        $commands[] = "cd $parentPath";
        $commands[] = "svnadmin create $unixName";
        $commands[] = "chmod -R a+w $unixName";
        foreach ( $hooks as $hook )
        {
            $hookPath = eZDir::path( array( $hooksDir, $hook ) );
            $commands[] = "cp $hookPath {$unixName}/hooks/";
        }
        $command = implode( ' && ', $commands );

        if ( $server )
        {
            $command = "ssh -v $server '$command'";
        }

        return $this->executeCommand( $command );
    }

    function updateRepositoryURL( $object, $urlBase, $unixName )
    {
        $dataMap = $object->attribute( 'data_map' );

        $url = $urlBase . $unixName;

        $dataMap['repository']->setContent( $url );
        $dataMap['repository']->store();

        /*
            /todo Clear the necessary caches as if the object was re-published
        */
    }

    function executeCommand( $command )
    {
        eZDebug::writeDebug( $command, __METHOD__ );
        exec( $command . ' 2>&1', $output, $return );
        eZDebug::writeDebug( implode( "\n", $output ), 'CreateSVNRepositoryType::executeCommand' );
        // see if command executed succesfully
        if ( $return != 0 )
        {
             eZDebug::writeError( 'command failed, exit code: ' . $return, 'CreateSVNRepositoryType::executeCommand' );
             eZDebug::writeError( implode( "\n", $output ), 'CreateSVNRepositoryType::executeCommand' );
             return false;
         }

        return true;
    }
}

eZWorkflowEventType::registerEventType( 'createsvnrepository', 'CreateSVNRepositoryType' );

?>
