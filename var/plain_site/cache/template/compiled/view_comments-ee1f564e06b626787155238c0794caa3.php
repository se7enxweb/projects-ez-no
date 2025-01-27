<?php
// URI:       extension/ezprojects2007/design/ezprojects2007/templates/parts/view_comments.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/parts/view_comments.tpl
// Timestamp: 1333095505 (Fri Mar 30 1:18:25 PDT 2012)
$oldSetArray_8aa491c06ca674bcbd4f258178781f44 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="content-view-children">
<div class="class-comment">
';
$vars[$currentNamespace]['page_limit'] = 20;
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'main_node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTreeCount' ),
  array_values( array(     'parent_node_id' => $var1,
    'only_translated' => false,
    'language' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "article_comment",
       "comment" ),
    'attribute_filter' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'ignore_visibility' => false,
    'limitation' => null,
    'main_node_only' => false,
    'extended_attribute_filter' => false,
    'objectname_filter' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['child_count'] = $var;
unset( $var );
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'main_node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var3 = compiledFetchAttribute( $var2, 'offset' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array_values( array(     'parent_node_id' => $var1,
    'sort_by' => array( "published",
       "0" ),
    'only_translated' => false,
    'language' => false,
    'offset' => $var2,
    'limit' => $var3,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "article_comment",
       "comment" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['children'] = $var;
unset( $var );
$text .= '    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <h1 id="comments">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</h1>
    ';
}
else
{

unset( $show );

$text .= '        <h1 id="comments">Comments</h1>
    ';
}

$oldRestoreIncludeArray_aa03ea52e7c4259a00cea0091f60ac60 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['show_extra_info'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'show_extra_info', $vars[$currentNamespace]['show_extra_info'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['show_extra_info'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'show_extra_info', 'unset' );

$vars[$currentNamespace]['show_extra_info'] = true;
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['sequence'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'sequence', $vars[$currentNamespace]['sequence'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['sequence'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'sequence', 'unset' );

$vars[$currentNamespace]['sequence'] = array (
  0 => 'bglight',
  1 => 'bgdark',
);
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/list_children-e0ccf7824f9d7cfe32db4db0e9740afd.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/list_children.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/list_children-e0ccf7824f9d7cfe32db4db0e9740afd.php' );
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
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/list_children.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_aa03ea52e7c4259a00cea0091f60ac60;

unset( $vars[$currentNamespace]['page_limit'] );
unset( $vars[$currentNamespace]['child_count'] );
unset( $vars[$currentNamespace]['children'] );
$text .= '
</div>
</div>

<div class="block float-break">
    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show1 = compiledFetchAttribute( $show, 'object' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'can_create' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <form method="post" action="/index.php//content/action">
            <input class="button" type="submit" name="NewButton" value="New comment" />
            <input type="hidden" name="RedirectURIAfterPublish" value=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( $var1 . '#comments' );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' />
            <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'main_node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) == ( 'comment' ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                <input type="hidden" name="ClassIdentifier" value="comment" />
            ';
}
else
{

unset( $show );

$text .= '               <input type="hidden" name="ClassIdentifier" value="article_comment" />
            ';
}

$text .= '            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        </form>
    ';
}
else
{

unset( $show );

$text .= '        <p><a href="/user/login">Log in</a> or <a href="/user/register">create a user account</a> to comment.</p>
    ';
}

$text .= '</div>
';

$setArray = $oldSetArray_8aa491c06ca674bcbd4f258178781f44;
$tpl->Level--;
?>
