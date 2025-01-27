<?php
// URI:       design:content/datatype/view/ezimage.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/content/datatype/view/ezimage.tpl
// Timestamp: 1286250000 (Mon Oct 4 20:40:00 PDT 2010)
$oldSetArray_e531193bd6192bf93b6f200f71ab0bc3 = isset( $setArray ) ? $setArray : array();
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

$text .= '
';
if ( !isset( $vars[$currentNamespace]['image_class'] ) )
{
    $vars[$currentNamespace]['image_class'] = 'large';
    $setArray[$currentNamespace]['image_class'] = true;
}

if ( !isset( $vars[$currentNamespace]['css_class'] ) )
{
    $vars[$currentNamespace]['css_class'] = false;
    $setArray[$currentNamespace]['css_class'] = true;
}

if ( !isset( $vars[$currentNamespace]['alignment'] ) )
{
    $vars[$currentNamespace]['alignment'] = false;
    $setArray[$currentNamespace]['alignment'] = true;
}

if ( !isset( $vars[$currentNamespace]['link_to_image'] ) )
{
    $vars[$currentNamespace]['link_to_image'] = false;
    $setArray[$currentNamespace]['link_to_image'] = true;
}

if ( !isset( $vars[$currentNamespace]['href'] ) )
{
    $vars[$currentNamespace]['href'] = false;
    $setArray[$currentNamespace]['href'] = true;
}

if ( !isset( $vars[$currentNamespace]['target'] ) )
{
    $vars[$currentNamespace]['target'] = false;
    $setArray[$currentNamespace]['target'] = true;
}

if ( !isset( $vars[$currentNamespace]['hspace'] ) )
{
    $vars[$currentNamespace]['hspace'] = false;
    $setArray[$currentNamespace]['hspace'] = true;
}

if ( !isset( $vars[$currentNamespace]['border_size'] ) )
{
    $vars[$currentNamespace]['border_size'] = 0;
    $setArray[$currentNamespace]['border_size'] = true;
}

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['image_content'] = $var;
unset( $var );
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_content'] : null;
$show1 = compiledFetchAttribute( $show, 'is_valid' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_content'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_class'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['image'] = $var;
unset( $var );
$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_to_image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_to_image'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_content'] : null;
$var1 = compiledFetchAttribute( $var, 'original' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['image_original'] = $var;
unset( $var );
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_original', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_original'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( !is_null( $var1 ) && preg_match( "#^[a-zA-Z0-9]+:#", $var1 ) or
!is_null( $var1 ) && substr( $var1, 0, 2 ) == '//' )
  $var1 = '/';
else if ( !is_null( $var1 ) && strlen( $var1 ) > 0 and
  $var1[0] != '/' )
$var1 = '/' . $var1;
eZURI::transformURI( $var1, true, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'href', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['href'] = $var;
    unset( $var );
}
$text .= '        ';
unset( $vars[$currentNamespace]['image_original'] );
$text .= '    ';
}

$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "left":
    {
$text .= '        <div class="imageleft">
    ';
    } break;
    case "right":
    {
$text .= '        <div class="imageright">
    ';
    } break;
    default:
    {
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_class'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <div class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
    ';
}

$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'href', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['href'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<a href=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'href', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['href'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'target', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['target'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= 'target="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'target', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['target'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
}

$text .= '>';
}

$text .= '<img src=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( !is_null( $var1 ) && preg_match( "#^[a-zA-Z0-9]+:#", $var1 ) or
!is_null( $var1 ) && substr( $var1, 0, 2 ) == '//' )
  $var1 = '/';
else if ( !is_null( $var1 ) && strlen( $var1 ) > 0 and
  $var1[0] != '/' )
$var1 = '/' . $var1;
eZURI::transformURI( $var1, true, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' width="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var1 = compiledFetchAttribute( $var, 'width' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" height="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var1 = compiledFetchAttribute( $var, 'height' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hspace', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hspace'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= 'hspace="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hspace', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hspace'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
}

$text .= ' border="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'border_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['border_size'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'href', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['href'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '</a>';
}

$text .= '
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css_class'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        </div>
    ';
}

$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alignment'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "left":
    {
$text .= '        </div>
    ';
    } break;
    case "right":
    {
$text .= '        </div>
    ';
    } break;
    default:
    {
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    ';
unset( $vars[$currentNamespace]['image'] );
}

unset( $vars[$currentNamespace]['image_content'] );
if ( isset( $setArray[$currentNamespace]['image_class'] ) )
{
unset( $vars[$currentNamespace]['image_class'] );
}

if ( isset( $setArray[$currentNamespace]['css_class'] ) )
{
unset( $vars[$currentNamespace]['css_class'] );
}

if ( isset( $setArray[$currentNamespace]['alignment'] ) )
{
unset( $vars[$currentNamespace]['alignment'] );
}

if ( isset( $setArray[$currentNamespace]['link_to_image'] ) )
{
unset( $vars[$currentNamespace]['link_to_image'] );
}

if ( isset( $setArray[$currentNamespace]['href'] ) )
{
unset( $vars[$currentNamespace]['href'] );
}

if ( isset( $setArray[$currentNamespace]['target'] ) )
{
unset( $vars[$currentNamespace]['target'] );
}

if ( isset( $setArray[$currentNamespace]['hspace'] ) )
{
unset( $vars[$currentNamespace]['hspace'] );
}

if ( isset( $setArray[$currentNamespace]['border_size'] ) )
{
unset( $vars[$currentNamespace]['border_size'] );
}


$setArray = $oldSetArray_e531193bd6192bf93b6f200f71ab0bc3;
$tpl->Level--;
?>
