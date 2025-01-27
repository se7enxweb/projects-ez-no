<?php
// URI:       design:error/kernel/20.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/error/kernel/20.tpl
// Timestamp: 1286250000 (Mon Oct 4 20:40:00 PDT 2010)
$oldSetArray_5a8a642ee1c486c053a88f6aef5439bb = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="template-design area-main-normal">
<div class="template-module kernel-error">
<div class="template-object">

<div class="attribute-heading">
    <h1>We are sorry!</h1>
</div>

<h2>The page you requested could not be found (404).</h2>

<ul>
<li>If you typed the URL yourself, make sure the spelling is correct.</li>
<li>If you clicked on a link to get here please help us fix it by <a href=';
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'redirect_uri', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['redirect_uri'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( '/company/contact/(page_not_found)' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>reporting it.</a></li>
</ul>

<br/>
<p>We apologize for the inconvenience!</p>

<br /><br />
<p><a href="/index.php/">Click to return to the front page</a></p>

</div>
</div>
</div>


';

$setArray = $oldSetArray_5a8a642ee1c486c053a88f6aef5439bb;
$tpl->Level--;
?>
