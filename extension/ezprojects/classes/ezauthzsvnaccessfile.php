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

define( 'AUTHZ_SVN_ACCESS_DENY', 0 );
define( 'AUTHZ_SVN_ACCESS_READ', 1 );
define( 'AUTHZ_SVN_ACCESS_WRITE', 2 );

class eZAuthzSVNAccessFile extends eZINI
{
    static function create( $fileName = "site.ini", $rootDir = "settings", $useTextCodec = null, $useCache = null, $useLocalOverrides = null )
    {
        $impl = new eZAuthzSVNAccessFile( $fileName, $rootDir, $useTextCodec, $useCache, $useLocalOverrides );
        return $impl;
    }

    function authzSVNGetGroups()
    {
        $groups = array();
        if ( $this->hasGroup( 'groups' ) )
        {
            $groupSettings = $this->group( 'groups' );
            foreach( $groupSettings as $groupName => $members )
            {
                $groups[] = $groupName;
            }
        }
        return $groups;
    }

    /* user group functions */
    function authzSVNGetGroupMembers( $groupName )
    {
        $members = array();
        if ( $this->hasGroup( 'groups' ) && $this->hasVariable( 'groups', $groupName ) )
        {
            foreach( explode( ',',  $this->variable( 'groups', $groupName ) ) as $member )
            {
                $members[] = trim( $member );
            }
        }
        return $members;
    }

    function authzSVNRemoveGroup( $groupName )
    {
        if ( $this->hasGroup( 'groups' ) && $this->hasVariable( 'groups', $groupName ) )
        {
            $this->removeVariable( 'groups', $groupName );
        }
    }

    function authzSVNSetGroupMembers( $groupName, $members )
    {
        $this->setVariable( 'groups', $groupName, implode( ', ', $members ) );
    }

    function authzSVNSetPolicy( $path, $name, $policy, $repository = false, $isGroup = false )
    {
        $policyString = '';

        if ( $policy & AUTHZ_SVN_ACCESS_READ )
        {
            $policyString = $policyString . 'r';
        }

        if ( $policy & AUTHZ_SVN_ACCESS_WRITE )
        {
            $policyString = $policyString . 'w';
        }

        $section = '';

        if ( is_string( $repository ) )
        {
            $section = $section . $repository . ':';
        }

        $section = $section . $path;

        if ( $isGroup )
        {
            $name = '@' . $name;
        }

        $this->setVariable( $section, $name, $policyString );
    }

    /* repository policy functions */
    function authzSVNSetGroupPolicy( $path, $groupName, $policy, $repository = false )
    {
        return $this->authzSVNSetPolicy( $path, $groupName, $policy, $repository, true );
    }

    function authzSVNSetUserPolicy( $path, $userName, $policy, $repository = false )
    {
        return $this->authzSVNSetPolicy( $path, $userName, $policy, $repository );
    }

    static function instance( $fileName = "site.ini", $rootDir = "settings", $useTextCodec = null, $useCache = null, $useLocalOverrides = null, $directAccess = false, $addArrayDefinition = false )
     {
         $impl =& $GLOBALS["eZINIGlobalInstance-$rootDir-$fileName-$useLocalOverrides"];
         $isLoaded =& $GLOBALS["eZINIGlobalIsLoaded-$rootDir-$fileName-$useLocalOverrides"];

         if ( !$impl instanceof eZINI )
         {
             $isLoaded = false;

             $impl = new eZAuthzSVNAccessFile( $fileName, $rootDir, $useTextCodec, $useCache, $useLocalOverrides, $directAccess, $addArrayDefinition );

             $isLoaded = true;
         }
         return $impl;
     }

    static function fetchFromFile( $fileName, $useTextCodec = null )
    {
        $impl = new eZAuthzSVNAccessFile( $fileName, false, $useTextCodec, false, false, true );
        return $impl;
    }
}

?>
