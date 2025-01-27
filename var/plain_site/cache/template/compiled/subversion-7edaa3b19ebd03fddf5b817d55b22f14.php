<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/override/templates/full/subversion.tpl
// Timestamp: 1286250001 (Mon Oct 4 20:40:01 PDT 2010)
$oldSetArray_59618de84e0f2eaf3837cf6c30829055 = isset( $setArray ) ? $setArray : array();
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

$node = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
if ( is_object( $node ) )
$object = $node->attribute( 'object' );
if ( isset( $object ) && is_object( $object ) )
$nod_59618de84e0f2eaf3837cf6c30829055 = $object->attribute( 'data_map' );
else
$nod_59618de84e0f2eaf3837cf6c30829055 = false;
unset( $node, $object );

$text .= '


<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-subversion">


<div class="attribute-heading">
    <h1>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</h1>
</div>

<div class="attribute-long">';
// if begins
unset( $if_cond );
$if_cond = $nod_59618de84e0f2eaf3837cf6c30829055;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['repository'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['repository'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['repository'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<p>You can anonymously check out the source code released by this project from its Subversion repository:</p>
<code>svn checkout <a href="';
unset( $var );
$var = $nod_59618de84e0f2eaf3837cf6c30829055;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['repository'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['repository'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['repository'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
$var = $nod_59618de84e0f2eaf3837cf6c30829055;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['repository'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['repository'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['repository'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a></code>
<p>To be able to commit changes to the project\'s repository, you need to be a member of the project.</p>';
}
else
{
$text .= 'The repository is being initialized. Please visit this page again in a few minutes.';
}
unset( $if_cond );
// if ends

$text .= '</div>
';
// if begins
unset( $if_cond );
$if_cond = $nod_59618de84e0f2eaf3837cf6c30829055;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['repository'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['repository'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['repository'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="attribute-heading">
    <h2>Latest log messages</h2>

    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array_values( array(     'parent_node_id' => $var1,
    'sort_by' => array( "attribute",
       false,
       "subversion_log_message/revision" ),
    'only_translated' => false,
    'language' => false,
    'offset' => 0,
    'limit' => 10,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "subversion_log_message" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['logs'] = $var;
unset( $var );
$text .= '    <ul>
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 = [];
$fe_array_keys_3fe4dc413e116aaad7ad338b144e6c53_1 = [];
$fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_n_items_processed_3fe4dc413e116aaad7ad338b144e6c53_1  = 0;
$fe_i_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_key_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_val_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_reverse_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_first_val_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_last_val_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
if ( !isset( $fe_variable_stack_3fe4dc413e116aaad7ad338b144e6c53_1 ) ) $fe_variable_stack_3fe4dc413e116aaad7ad338b144e6c53_1 = [];
$fe_variable_stack_3fe4dc413e116aaad7ad338b144e6c53_1[] = @compact( 'fe_array_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_array_keys_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_n_items_processed_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_i_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_key_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_val_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_max_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_reverse_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_first_val_3fe4dc413e116aaad7ad338b144e6c53_1', 'fe_last_val_3fe4dc413e116aaad7ad338b144e6c53_1' );
unset( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 );
unset( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 );
$fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'logs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['logs'] : null;
if (! isset( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 ) ) $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 = NULL;
while ( is_object( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 ) and method_exists( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1, 'templateValue' ) )
    $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1->templateValue();

$fe_array_keys_3fe4dc413e116aaad7ad338b144e6c53_1 = is_array( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 ) ? array_keys( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 ) : [];
$fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 = count( $fe_array_keys_3fe4dc413e116aaad7ad338b144e6c53_1 );
$fe_n_items_processed_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 = 0;
$fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 - $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1;
$fe_reverse_3fe4dc413e116aaad7ad338b144e6c53_1 = false;
if ( $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 < 0 || $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 >= $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 )
{
    $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 = ( $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 < 0 ) ? 0 : $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1;
    if ( $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 || $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1'. Array count: $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1");   
}
}
if ( $fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 < 0 || $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 + $fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 > $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 )
{
    if ( $fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_3fe4dc413e116aaad7ad338b144e6c53_1");
    $fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 - $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1;
}
if ( $fe_reverse_3fe4dc413e116aaad7ad338b144e6c53_1 )
{
    $fe_first_val_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 - 1 - $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1;
    $fe_last_val_3fe4dc413e116aaad7ad338b144e6c53_1  = 0;
}
else
{
    $fe_first_val_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1;
    $fe_last_val_3fe4dc413e116aaad7ad338b144e6c53_1  = $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 - 1;
}
// foreach
for ( $fe_i_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_first_val_3fe4dc413e116aaad7ad338b144e6c53_1; $fe_n_items_processed_3fe4dc413e116aaad7ad338b144e6c53_1 < $fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 && ( $fe_reverse_3fe4dc413e116aaad7ad338b144e6c53_1 ? $fe_i_3fe4dc413e116aaad7ad338b144e6c53_1 >= $fe_last_val_3fe4dc413e116aaad7ad338b144e6c53_1 : $fe_i_3fe4dc413e116aaad7ad338b144e6c53_1 <= $fe_last_val_3fe4dc413e116aaad7ad338b144e6c53_1 ); $fe_reverse_3fe4dc413e116aaad7ad338b144e6c53_1 ? $fe_i_3fe4dc413e116aaad7ad338b144e6c53_1-- : $fe_i_3fe4dc413e116aaad7ad338b144e6c53_1++ )
{
$fe_key_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_array_keys_3fe4dc413e116aaad7ad338b144e6c53_1[$fe_i_3fe4dc413e116aaad7ad338b144e6c53_1];
$fe_val_3fe4dc413e116aaad7ad338b144e6c53_1 = $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1[$fe_key_3fe4dc413e116aaad7ad338b144e6c53_1];
$vars[$rootNamespace]['log'] = $fe_val_3fe4dc413e116aaad7ad338b144e6c53_1;
$text .= '    ';
// def $websvn_diff_url
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'parent' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'data_map' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'unix_name' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'content' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'log', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['log'] : null;
$var9 = compiledFetchAttribute( $var8, 'data_map' );
unset( $var8 );
$var8 = $var9;
$var9 = compiledFetchAttribute( $var8, 'revision' );
unset( $var8 );
$var8 = $var9;
$var9 = compiledFetchAttribute( $var8, 'content' );
unset( $var8 );
$var8 = $var9;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var7 = $var8 + -1;
unset( $var8 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'log', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['log'] : null;
$var11 = compiledFetchAttribute( $var10, 'data_map' );
unset( $var10 );
$var10 = $var11;
$var11 = compiledFetchAttribute( $var10, 'revision' );
unset( $var10 );
$var10 = $var11;
$var11 = compiledFetchAttribute( $var10, 'content' );
unset( $var10 );
$var10 = $var11;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var = ( 'http://websvn.projects.ez.no/wsvn/' . $var2 . '?' . 'op=comp' . '&' . 'compare[]=%2F@' . $var7 . '&' . 'compare[]=%2F@' . $var10 );
unset( $var2, $var7, $var10 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'websvn_diff_url', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'websvn_diff_url' is already defined.", array (
  0 => 
  array (
    0 => 37,
    1 => 4,
    2 => 1311,
  ),
  1 => 
  array (
    0 => 44,
    1 => 83,
    2 => 1786,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/subversion.tpl',
) );
    $tpl->setVariable( 'websvn_diff_url', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'websvn_diff_url', $var, $rootNamespace );
}

$text .= '    <li><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'log', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['log'] : null;
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
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'log', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['log'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'revision' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a> on ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'log', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['log'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'date' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'timestamp' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' by ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'log',
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
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'author',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 45,
    1 => 137,
    2 => 1932,
  ),
  1 => 
  array (
    0 => 45,
    1 => 186,
    2 => 1981,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/subversion.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= ' [<a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'websvn_diff_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['websvn_diff_url'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">WebSVN diff</a>]</li>
    ';
// undef $websvn_diff_url
$tpl->unsetLocalVariable( 'websvn_diff_url', $rootNamespace );

$text .= '    ';
$fe_n_items_processed_3fe4dc413e116aaad7ad338b144e6c53_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_3fe4dc413e116aaad7ad338b144e6c53_1 ) ) extract( array_pop( $fe_variable_stack_3fe4dc413e116aaad7ad338b144e6c53_1 ) );

else
{

unset( $fe_array_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_array_keys_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_n_items_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_n_items_processed_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_i_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_key_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_val_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_offset_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_max_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_reverse_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_first_val_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_last_val_3fe4dc413e116aaad7ad338b144e6c53_1 );

unset( $fe_variable_stack_3fe4dc413e116aaad7ad338b144e6c53_1 );

}

// foreach ends
$text .= '    </ul>
    ';
unset( $vars[$currentNamespace]['logs'] );
$text .= '</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>
</div>
</div>




<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-subversion">

<div class="attribute-heading">
    <h2 class="bullet">Useful Subversion links</h2>
</div>

<ul class="linklist">
    <li><a href="http://subversion.tigris.org/">Subversion homepage</a></li>
    <li><a href="http://svnbook.red-bean.com/">Version Control with Subversion: a free book</a></li>
    <li><a href="http://subversion.tigris.org/links.html#clients">List of links to Subversion GUI clients and plugins</a></li>
</ul>

</div>
</div>
</div>
';
$oldRestoreIncludeArray_95fdf62a247efe295b88a56b9ccfb743 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['node'] ) )
    $restoreIncludeArray[] = array( $namespace, 'node', $vars[$namespace]['node'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "actions";
else
    $namespace .= ':actions';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/sidebar_actions-349a4d64bf7c365b851cd1cffd3baf44.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'actions' : ( $currentNamespace . ':' . 'actions' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/sidebar_actions.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/sidebar_actions-349a4d64bf7c365b851cd1cffd3baf44.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'actions' : ( $currentNamespace . ':' . 'actions' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/sidebar_actions.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_95fdf62a247efe295b88a56b9ccfb743;

$text .= '

';

$setArray = $oldSetArray_59618de84e0f2eaf3837cf6c30829055;
$tpl->Level--;
?>
