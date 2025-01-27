<?php
// URI:       extension/ezprojects2007/design/ezprojects2007/templates/parts/projects/status.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/parts/projects/status.tpl
// Timestamp: 1286250000 (Mon Oct 4 20:40:00 PDT 2010)
$oldSetArray_477ba385271a7c1a0204713e2dbdb658 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'status_number', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['status_number'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'status_number', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['status_number'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case 0:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'status', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['status'] = 'Stable';
}
    } break;
    case 1:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'status', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['status'] = 'Beta';
}
    } break;
    case 2:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'status', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['status'] = 'Alpha';
}
    } break;
    default:
    {
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'status', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['status'] = 'Stable';
}
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );

$setArray = $oldSetArray_477ba385271a7c1a0204713e2dbdb658;
$tpl->Level--;
?>
