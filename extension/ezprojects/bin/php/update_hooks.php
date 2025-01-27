#!/usr/bin/env php
<?php

require 'autoload.php';

$cli = eZCLI::instance();

/*
    general script settings

    array with the following keys:

    debug-message: false
    debug-output: false
    debug-include: false
    debug-levels: false
    debug-accumulator: false
    debug-timing: false
    use-session: false
    use-extensions: false
    use-modules: false
    user: false, or an array with the keys 'login' and 'password'
    description: 'eZ publish script',
    site-access: false
    min-version: false
    max-version: false

*/
$scriptSettings = array();
$scriptSettings['description'] = 'your description of this script comes here';
$scriptSettings['use-session'] = true;
$scriptSettings['use-modules'] = true;
$scriptSettings['use-extensions'] = true;

$script = eZScript::instance( $scriptSettings );
$script->startup();

/*
    script option configuration

    [optionname]

    value indications
    --------------------
    : -> must have a value
    ; -> can have a value

    quantity indications
    ----------------------
    ? -> min: 0; max: 1
    * -> min: 0, max: unbounded
    + -> min: 1, max: unbounded
*/
$config = '';

/*
    script argument configuration
*/
$argumentConfig = '';

/*
    script option help

    specify a hash with option identifiers as keys and their help text as values
*/
$optionHelp = false;

/*
    arguments
*/
$arguments = false;

/*
    standard options

    array( 'debug' => true,
          'colors' => true,
          'log' => true,
          'siteaccess' => true,
          'verbose' => true,
          'user' => false )
*/
$useStandardOptions = true;

$options = $script->getOptions( $config, $argumentConfig, $optionHelp, $arguments, $useStandardOptions );
$script->initialize();

$projectsIni = eZINI::instance( 'ezprojects.ini' );

$parentPath = $projectsIni->variable( 'Subversion', 'ParentPath' );

$hooks = $projectsIni->hasVariable( 'Subversion', 'Hooks' ) ? $projectsIni->variable( 'Subversion', 'Hooks' ) : array();
$hooksDir = eZDir::path( array( eZSys::rootDir(), 'extension', 'ezprojects', 'svn_hooks' ) );

$dir = new DirectoryIterator( $parentPath );
foreach ( $dir as $fileInfo )
{
    if ( !in_array( $fileInfo->getFileName(), array( '.', '..' ) ) && $fileInfo->isDir() )
    {
        $cli->output( $fileInfo->getFileName() );
        foreach ( $hooks as $hook )
        {
            $hookPath = eZDir::path( array( $hooksDir, $hook ) );
            copy( $hookPath, $fileInfo->getPathname() . '/hooks/' . $hook );
        }
    }
}


$script->shutdown( 0 );

?>