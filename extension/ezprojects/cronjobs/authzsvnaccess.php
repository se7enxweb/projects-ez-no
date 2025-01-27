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

require_once 'autoload.php';

include_once( 'extension/ezprojects/classes/ezauthzsvnaccessfile.php' );

$projectsIni = eZINI::instance( 'ezprojects.ini' );

$filePath = $projectsIni->variable( 'Subversion', 'AuthzSVNAccessFile' );

/*
if ( file_exists( $filePath ) )
{
    unlink( $filePath );
}
*/

$ini = eZAuthzSVNAccessFile::create( $filePath, false, false );

$svnRoles = $projectsIni->variable( 'Subversion', 'Roles' );
$accessConfig = array();

foreach ( $svnRoles as $svnRole )
{
    $groupName = 'SVNRole_' . $svnRole;

    if ( $projectsIni->hasGroup( $groupName ) )
    {
        $svnRights = 0;

        if ( $projectsIni->hasVariable( $groupName, 'Read' ) && strtolower( trim( $projectsIni->variable( $groupName, 'Read' ) ) ) == 'enabled' )
        {
            $svnRights = $svnRights | AUTHZ_SVN_ACCESS_READ;
        }

        if ( $projectsIni->hasVariable( $groupName, 'Write' ) && strtolower( trim( $projectsIni->variable( $groupName, 'Write' ) ) ) == 'enabled' )
        {
            $svnRights = $svnRights | AUTHZ_SVN_ACCESS_WRITE;
        }

        $accessConfig[] = array( 'role_id' => $projectsIni->variable( $groupName, 'RoleID' ), 'svn_rights' => $svnRights );
    }
}

$userClasses = $projectsIni->hasVariable( 'Subversion', 'UserClasses' ) ? $projectsIni->variable( 'Subversion', 'UserClasses' ) : array( 'user' );
$alwaysAddUsers = $projectsIni->variable( 'Subversion', 'AlwaysAddUsers' );

foreach ( $accessConfig as $config )
{
    $role = eZRole::fetch( $config['role_id'] );
    $roleAssignments = $role->fetchUserByRole();

    foreach ( $roleAssignments as $assignment )
    {
        if ( $assignment['limit_ident'] == 'Subtree' )
        {
            $targetNode = eZContentObjectTreeNode::fetchByPath( $assignment['limit_value'] );

            // skip when node doesn't exist anymore or when it's not a project
            if ( !is_object( $targetNode ) || $targetNode->attribute( 'class_identifier' ) != 'project' )
            {
                continue;
            }

            $projectData = $targetNode->attribute( 'data_map' );
            $unixName = $projectData['unix_name']->attribute( 'content' );

            $groupNode = $assignment['user_object']->attribute( 'main_node' );

            $cli->output( $targetNode->attribute( 'name' ) . ' - ' . $groupNode->attribute( 'name' ) );

            // build group list in authz access file
            $subTreeParams = array(
                'ClassFilterType' => 'include',
                'ClassFilterArray' => $userClasses,
                'Limitation' => array(),
                'MainNodeOnly' => false
                );

            $users = $groupNode->subTree( $subTreeParams );

            $authzGroupName = 'subtree_' . $groupNode->attribute( 'node_id' );

            $loginArray = array();
            foreach ( $users as $user )
            {
                $cli->output( '  ' . $user->attribute( 'name' ) );
                $userData = $user->attribute( 'data_map' );
                $accountData = $userData['user_account']->attribute( 'content' );
        		$login = $accountData->attribute( 'login' );

        		// we don't allow @ as first char of login, because user groups start with @ in svnaccess config file
        		// we don't allow , anywhere in login, because it is delimits users in svnaccess config file
        		// we don't allow : anywhere in login, because it is htpasswd seperator between login and password
        		if ( strpos( $login, '@' ) === 0 || strpos( $login, ':' ) !== false || strpos( $login, ',' ) !== false )
        		{
        		    // skip this user
        		    continue;
        		}

                if ( !$accountData->attribute( 'is_locked' ) && $accountData->attribute( 'is_enabled' ) )
                {
                    $loginArray[] = $accountData->attribute( 'login' );
                }
            }

    	    $loginArray = array_merge( $loginArray, $alwaysAddUsers );
    	    $loginArray = array_unique( $loginArray );

            if ( count( $loginArray ) > 0 )
            {
                $ini->authzSVNSetGroupMembers( $authzGroupName, $loginArray );
                $ini->authzSVNSetGroupPolicy( '/', $authzGroupName, $config['svn_rights'], $unixName );
            }

            $ini->authzSVNSetUserPolicy( '/', '*', AUTHZ_SVN_ACCESS_READ, $unixName );
        }
    }
}

$success = $ini->save( false, false, false, false, true, false, false );

?>
