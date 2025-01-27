<?php
// URI:       design:pagelayout.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/pagelayout.tpl
// Timestamp: 1286250000 (Mon Oct 4 20:40:00 PDT 2010)
$oldSetArray_d6159da0ed91aaa68ece3d18a61339d5 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>';
$vars[$currentNamespace]['path_array'] = array (
);
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'path' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '    ';
unset( $show );
unset( $show1 );
unset( $show2 );
unset( $show2 );
$show2 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$show3 = compiledFetchAttribute( $show2, 'text' );
unset( $show2 );
$show2 = $show3;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = ( ( $show2 ) == ( 'ez.no' ) );
unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = !( $show1 );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( array( $var1 ), $var2 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'path_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['path_array'] = $var;
    unset( $var );
}
$text .= '    ';
}

list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '
<title>
    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( $currentIndex > 3 )
        break;
    unset( $item );
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 )
{
$text .= ' / ';
}

$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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

$text .= '    ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '    
</title>';
unset( $vars[$currentNamespace]['path_array'] );
unset( $cacheKeys );
unset( $cacheKeys );
$cacheKeys = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri_string', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri_string'] : null;
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "45_0_45_59_extension/ezprojects2007/design/ezprojects2007/templates/pagelayout.tpl", "ezprojects" );

list($cacheHandler_cd0420875ee3a1d68f0a4d763165b4b9, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, null, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
unset( $show );
unset( $show1 );
unset( $show2 );
$namespace = 'Header';
unset( $show2 );
$show2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = isset( $show2 );unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
unset( $show2 );
unset( $show3 );
$namespace = 'Header';
unset( $show3 );
$show3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $show3 ) ) $show3 = NULL;
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
$show2 = is_array( $show3 );unset( $show3 );
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
if ( !$show1 )
    $show = false;
else if ( !$show2 )
    $show = false;
else
    $show = $show2;
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    ';
unset( $loopItem );
$namespace = 'Header';
unset( $loopItem );
$loopItem = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'ExtraData';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

}

$text .= '

<meta http-equiv="Content-Language" content="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var1 = compiledFetchAttribute( $var, 'http_equiv' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'Content-language' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'meta' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'meta';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '    <meta name="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "meta";
else
    $namespace .= ':meta';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'key', $vars[$namespace] ) ) ? $vars[$namespace]['key'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" content="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "meta";
else
    $namespace .= ':meta';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta name="generator" content="eZ Publish" />

<style type="text/css">
    @import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/core.css);
    @import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/pagelayout.css);
    @import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/classes.css);
    @import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/print.css) print;
</style>

<link type="text/css" rel="stylesheet" href="/extension/ezprojects2007/design/ezprojects2007/stylesheets/print.css" media="print" />

<!-- IE conditional comments; for bug fixes for different IE versions -->
<!--[if IE 5]>     <style type="text/css"> @import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/ie5.css);    </style> <![endif]-->
<!--[if lte IE 6]> <style type="text/css"> @import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/ie6lte.css); </style> <![endif]-->
<!--[if IE 6]>     <style type="text/css"> @import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/ie6.css);    </style> <![endif]-->

<!-- Load special stylesheet (if necessary) for newer Netscape decendants, Mozilla and Firefox, using the Gecko renderer -->
<script type="text/javascript"><!-- if ((navigator.userAgent.indexOf("Gecko") != -1)&&(navigator.userAgent.indexOf("KHTML") == -1)) document.write("<style type=\\"text/css\\">@import url(/extension/ezprojects2007/design/ezprojects2007/stylesheets/gecko.css);</style>");--></script>

<script type="text/javascript" src="/extension/ezprojects2007/design/ezprojects2007/javascripts/switch-width.js"></script>

<script type="text/javascript" src="/extension/ezprojects2007/design/ezprojects2007/javascripts/dropdownmenu.js"></script>
<script type="text/javascript" src="/extension/ezprojects2007/design/ezprojects2007/javascripts/insertmedia.js"></script>
<script type="text/javascript" src="/extension/ezprojects2007/design/ezprojects2007/javascripts/link-target.js"></script>
';
$cachedText = $text;
$cacheHandler_cd0420875ee3a1d68f0a4d763165b4b9->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_cd0420875ee3a1d68f0a4d763165b4b9 );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'node_id' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
$cacheKeys = array( $cacheKeys1 );unset( $cacheKeys1 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "92_0_92_77_extension/ezprojects2007/design/ezprojects2007/templates/pagelayout.tpl", "ezprojects" );

list($cacheHandler_bb040b82d6ee67284370bcca9ed8ad45, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, null, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$vars[$currentNamespace]['max_depth'] = 2;
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 2 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'max_depth', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['max_depth'] = 0;
}
}
unset( $if_cond );
// if ends

// def $rssList
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'fetch',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'rss',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'subtree_list',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'node_id',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'module_result',
            ),
            2 => false,
          ),
          1 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'node_id',
                2 => false,
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'max_depth',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'max_depth',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'rssList', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'rssList' is already defined.", array (
  0 => 
  array (
    0 => 97,
    1 => 0,
    2 => 3568,
  ),
  1 => 
  array (
    0 => 97,
    1 => 104,
    2 => 3672,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'rssList', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'rssList', $var, $rootNamespace );
}

// foreach begins
$skipDelimiter = true;
$fe_array_5d93cc14732adce7eb96058ed7b796f3_6 = [];
$fe_array_keys_5d93cc14732adce7eb96058ed7b796f3_6 = [];
$fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_n_items_processed_5d93cc14732adce7eb96058ed7b796f3_6  = 0;
$fe_i_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_key_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_val_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_max_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_reverse_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_first_val_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_last_val_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
if ( !isset( $fe_variable_stack_5d93cc14732adce7eb96058ed7b796f3_6 ) ) $fe_variable_stack_5d93cc14732adce7eb96058ed7b796f3_6 = [];
$fe_variable_stack_5d93cc14732adce7eb96058ed7b796f3_6[] = @compact( 'fe_array_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_array_keys_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_n_items_processed_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_i_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_key_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_val_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_offset_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_max_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_reverse_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_first_val_5d93cc14732adce7eb96058ed7b796f3_6', 'fe_last_val_5d93cc14732adce7eb96058ed7b796f3_6' );
unset( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 );
unset( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 );
$fe_array_5d93cc14732adce7eb96058ed7b796f3_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rssList', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rssList'] : null;
if (! isset( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 ) ) $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 = NULL;
while ( is_object( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 ) and method_exists( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6, 'templateValue' ) )
    $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_array_5d93cc14732adce7eb96058ed7b796f3_6->templateValue();

$fe_array_keys_5d93cc14732adce7eb96058ed7b796f3_6 = is_array( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 ) ? array_keys( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 ) : [];
$fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 = count( $fe_array_keys_5d93cc14732adce7eb96058ed7b796f3_6 );
$fe_n_items_processed_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 = 0;
$fe_max_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 - $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6;
$fe_reverse_5d93cc14732adce7eb96058ed7b796f3_6 = false;
if ( $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 < 0 || $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 >= $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 )
{
    $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 = ( $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 < 0 ) ? 0 : $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6;
    if ( $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 || $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_5d93cc14732adce7eb96058ed7b796f3_6'. Array count: $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6");   
}
}
if ( $fe_max_5d93cc14732adce7eb96058ed7b796f3_6 < 0 || $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 + $fe_max_5d93cc14732adce7eb96058ed7b796f3_6 > $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 )
{
    if ( $fe_max_5d93cc14732adce7eb96058ed7b796f3_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_5d93cc14732adce7eb96058ed7b796f3_6");
    $fe_max_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 - $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6;
}
if ( $fe_reverse_5d93cc14732adce7eb96058ed7b796f3_6 )
{
    $fe_first_val_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 - 1 - $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6;
    $fe_last_val_5d93cc14732adce7eb96058ed7b796f3_6  = 0;
}
else
{
    $fe_first_val_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6;
    $fe_last_val_5d93cc14732adce7eb96058ed7b796f3_6  = $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 - 1;
}
// foreach
for ( $fe_i_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_first_val_5d93cc14732adce7eb96058ed7b796f3_6; $fe_n_items_processed_5d93cc14732adce7eb96058ed7b796f3_6 < $fe_max_5d93cc14732adce7eb96058ed7b796f3_6 && ( $fe_reverse_5d93cc14732adce7eb96058ed7b796f3_6 ? $fe_i_5d93cc14732adce7eb96058ed7b796f3_6 >= $fe_last_val_5d93cc14732adce7eb96058ed7b796f3_6 : $fe_i_5d93cc14732adce7eb96058ed7b796f3_6 <= $fe_last_val_5d93cc14732adce7eb96058ed7b796f3_6 ); $fe_reverse_5d93cc14732adce7eb96058ed7b796f3_6 ? $fe_i_5d93cc14732adce7eb96058ed7b796f3_6-- : $fe_i_5d93cc14732adce7eb96058ed7b796f3_6++ )
{
$fe_key_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_array_keys_5d93cc14732adce7eb96058ed7b796f3_6[$fe_i_5d93cc14732adce7eb96058ed7b796f3_6];
$fe_val_5d93cc14732adce7eb96058ed7b796f3_6 = $fe_array_5d93cc14732adce7eb96058ed7b796f3_6[$fe_key_5d93cc14732adce7eb96058ed7b796f3_6];
$vars[$rootNamespace]['rss'] = $fe_val_5d93cc14732adce7eb96058ed7b796f3_6;
$text .= '<link rel="alternate" type="application/rss+xml" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '" href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss'] : null;
$var4 = compiledFetchAttribute( $var3, 'access_url' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/rss/feed/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' />';
$fe_n_items_processed_5d93cc14732adce7eb96058ed7b796f3_6++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_5d93cc14732adce7eb96058ed7b796f3_6 ) ) extract( array_pop( $fe_variable_stack_5d93cc14732adce7eb96058ed7b796f3_6 ) );

else
{

unset( $fe_array_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_array_keys_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_n_items_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_n_items_processed_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_i_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_key_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_val_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_offset_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_max_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_reverse_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_first_val_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_last_val_5d93cc14732adce7eb96058ed7b796f3_6 );

unset( $fe_variable_stack_5d93cc14732adce7eb96058ed7b796f3_6 );

}

// foreach ends
// undef $rssList
$tpl->unsetLocalVariable( 'rssList', $rootNamespace );

unset( $vars[$currentNamespace]['max_depth'] );
$cachedText = $text;
$cacheHandler_bb040b82d6ee67284370bcca9ed8ad45->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_bb040b82d6ee67284370bcca9ed8ad45 );
}

}
unset( $if_cond );
// if ends

unset( $cacheKeys );
unset( $cacheKeys );
$cacheKeys = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri_string', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri_string'] : null;
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "106_0_106_59_extension/ezprojects2007/design/ezprojects2007/templates/pagelayout.tpl", "ezprojects" );

list($cacheHandler_90580efaf66308ed150db538188df37a, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, null, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
</head>
<body onload="menuInit();">

<!-- Complete page area: START -->
<div id="page">

<!-- Header area: START -->
<div id="header">
<div id="header-insert">

<!-- User menu area: START -->
<div id="usermenu">

<div id="page-width1">

<div id="logo">
<h1><a href="/index.php/"><span class="hide">eZ Systems</span></a></h1>
</div>

<h2 id="slogan">Share your information</h2>

<p class="hide"><a href="#main">Skip to main content</a></p>

<hr class="hide" />
';
$oldRestoreIncludeArray_4ce5c105c498cd97768f31d3300b8e4f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/searchbox-90fbf16124038d530331bec931d6baf3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/searchbox.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/searchbox-90fbf16124038d530331bec931d6baf3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/searchbox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_4ce5c105c498cd97768f31d3300b8e4f;

$text .= '
<hr class="hide" />';
$cachedText = $text;
$cacheHandler_90580efaf66308ed150db538188df37a->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_90580efaf66308ed150db538188df37a );
}

$text .= '
<h2 class="hide">User menu</h2>

<!-- User menu content: START -->
<ul>
    ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$show2 = compiledFetchAttribute( $show1, 'is_logged_in' );
unset( $show1 );
$show1 = $show2;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = !( $show1 );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <li><a href="http://ez.no/user/register">Register new user</a></li>
    ';
}
else
{

unset( $show );

$text .= '        <li><a href="/index.php//notification/settings">Notification settings</a></li>
        <li><a href="/index.php//collaboration/view/summary">Collaboration</a></li>

    ';
}

$text .= '
    <li>
    
    <script type="text/javascript">
    <!--
    if ( fixedSize )
    {
        document.write(\'<a id="setwidth" href="#" onclick="setWidth(); return false;">Dynamic width</a>\');
    }
    else
    {
        document.write(\'<a id="setwidth" href="#" onclick="setWidth(); return false;">Fixed width</a>\');
    }
    -->
    </script>
    
    </li>
    
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$show1 = compiledFetchAttribute( $show, 'is_logged_in' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <li><a href="/index.php//redirect/profile">My profile</a></li>
        <li><a href="/index.php//user/logout">Log out</a></li>
    ';
}
else
{

unset( $show );

$text .= '        <li><a href="/index.php//user/login">Log in</a></li>
    ';
}

$text .= '</ul>
<!-- User menu content: END -->

</div>

</div>
<!-- User menu area: END -->

</div>
</div>
<!-- Header area: END -->
';
$oldRestoreIncludeArray_a7ede7fe48233e3570f1e21cc85e347a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/mainmenu-8211ec912065d8a6f07ca73abc807b5d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/templates/mainmenu.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/mainmenu-8211ec912065d8a6f07ca73abc807b5d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/templates/mainmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_a7ede7fe48233e3570f1e21cc85e347a;

$text .= '
<hr class="hide" />
<!-- Path area: START -->
<div id="path">

<div id="page-width4">
<h2 class="hide">Path</h2>

<!-- Path content: START -->
<p>
    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'path' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Path';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 )
{
$text .= '            /
        ';
}

$text .= '        ';
unset( $show );
unset( $show1 );
unset( $show2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $show2 );
$show2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$show3 = compiledFetchAttribute( $show2, 'url_alias' );
unset( $show2 );
$show2 = $show3;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = isset( $show2 );unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
unset( $show2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $show2 );
$show2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$show3 = compiledFetchAttribute( $show2, 'url_alias' );
unset( $show2 );
$show2 = $show3;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
if ( !$show1 )
    $show = false;
else if ( !$show2 )
    $show = false;
else
    $show = $show2;
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '            <a href=';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $var3 );
$var3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var4 = compiledFetchAttribute( $var3, 'text' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = 30;
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var3 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var3 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var2 = trim( $substrFunc( $var3, 0, $leftPartLength ) . $seq . $substrFunc( $var3, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var2 = $var3;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var3 ) > $length ) && $strlenFunc( $var3 ) > $maxLength )
                                                                      {
                                                                          $var2 = trim( $substrFunc( $var3, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var2 = $var3;
                                                                      }
                                                                  }
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = htmlspecialchars( (string) $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = mb_strtolower( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
        ';
}
else
{

unset( $show );

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'url' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'url' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $var3 );
$var3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var4 = compiledFetchAttribute( $var3, 'text' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = 30;
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var3 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var3 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var2 = trim( $substrFunc( $var3, 0, $leftPartLength ) . $seq . $substrFunc( $var3, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var2 = $var3;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var3 ) > $length ) && $strlenFunc( $var3 ) > $maxLength )
                                                                      {
                                                                          $var2 = trim( $substrFunc( $var3, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var2 = $var3;
                                                                      }
                                                                  }
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = htmlspecialchars( (string) $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = mb_strtolower( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
            ';
}
else
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $var3 );
$var3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var4 = compiledFetchAttribute( $var3, 'text' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = 30;
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var3 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var3 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var2 = trim( $substrFunc( $var3, 0, $leftPartLength ) . $seq . $substrFunc( $var3, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var2 = $var3;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var3 ) > $length ) && $strlenFunc( $var3 ) > $maxLength )
                                                                      {
                                                                          $var2 = trim( $substrFunc( $var3, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var2 = $var3;
                                                                      }
                                                                  }
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = htmlspecialchars( (string) $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = mb_strtolower( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}

$text .= '
            ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '</p>
<!-- Path content: END -->

</div>

</div>
<!-- Path area: END -->

<hr class="hide" />

<!-- Main area: START -->

<div id="page-width5">
<div id="main" class="float-break">

<!-- Main area content: START -->


';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '

<!-- Main area content: END -->

</div>
</div>
<!-- Main area: END -->
<hr class="hide" />

<!-- Footer area: START -->
<div id="page-width6">
<div id="footer">

<address>Powered by eZ Publish&reg; Content Management System.</address>
<address>Copyright &copy; 2007-2008 eZ Systems AS (except where otherwise noted). All rights reserved.</address>
</div>
</div>
<!-- Footer area: END -->

</div>
<!-- Complete page area: END -->



<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

<script type="text/javascript">
    _uacct = "UA-581888-4";
    urchinTracker();
</script>

</body>
</html>
';

$setArray = $oldSetArray_d6159da0ed91aaa68ece3d18a61339d5;
$tpl->Level--;
?>
