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

$projectsIni = eZINI::instance( 'ezprojects.ini' );

$filePath = $projectsIni->variable( 'Subversion', 'HTPasswdFile' );

$contentObjectStatus = eZContentObject::STATUS_PUBLISHED;
$supportedHashTypes = array( eZUser::PASSWORD_HASH_PLAINTEXT, eZUser::PASSWORD_HASH_CRYPT );

$htpasswd = '';

// query for all enabled users with a supported password hash

$query = "SELECT ezuser.*
              FROM ezuser, ezcontentobject, ezuser_setting
              WHERE ezcontentobject.status = '$contentObjectStatus' AND
                    ezuser_setting.is_enabled = 1 AND
                    ezuser.password_hash_type IN (" . implode( ', ', $supportedHashTypes ) . ") AND
                    ezcontentobject.id = ezuser.contentobject_id AND
                    ezuser_setting.user_id = ezuser.contentobject_id";

$db = eZDB::instance();
$rows = $db->arrayQuery( $query );
$rowCount = count( $rows );

$cli->output( "Found $rowCount user accounts to put in the htpasswd authentication file" );

foreach ( $rows as $row )
{
    $login = $row['login'];
    //$cli->output( $login );

    // we don't allow @ as first char of login, because user groups start with @ in svnaccess config file
    // we don't allow , anywhere in login, because it is delimits users in svnaccess config file
    // we don't allow : anywhere in login, because it is htpasswd seperator between login and password
    if ( strpos( $login, '@' ) === 0 || strpos( $login, ':' ) !== false || strpos( $login, ',' ) !== false )
    {
       // skip this user
       continue;
    }

    switch( $row['password_hash_type'] )
    {
        case eZUser::PASSWORD_HASH_CRYPT:
        {
            $passwordHash = $row['password_hash'];
        } break;

        // plain password stored
        default:
        {
            $passwordHash = crypt( $row['password_hash'] );
        } break;
    }

    $htpasswd .= implode( ':', array( $login, $passwordHash ) ). "\r\n";
}

$result = eZFile::create( $filePath, false, $htpasswd );
eZDebug::writeDebug( 'file creation result: ' . var_export( $result, true ) );

?>
