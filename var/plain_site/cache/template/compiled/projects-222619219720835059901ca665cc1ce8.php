<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/override/templates/node/projects.tpl
// Timestamp: 1286250001 (Mon Oct 4 20:40:01 PDT 2010)
$oldSetArray_fc5e6a5ad390cea20bda14e8f6905c6f = isset( $setArray ) ? $setArray : array();
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
<div class="template-design area-main-normal">
<div class="template-module node-view-projects">
<div class="template-object">


';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'field1' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
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
        2 => 'node',
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
          1 => 'field1',
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
    0 => 9,
    1 => 4,
    2 => 206,
  ),
  1 => 
  array (
    0 => 9,
    1 => 54,
    2 => 256,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/node/projects.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

}
unset( $if_cond );
// if ends

$text .= '
';
$cacheKeys = false;
unset( $subtreeExpiry );
unset( $subtreeExpiry );
$subtreeExpiry = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$subtreeExpiry1 = compiledFetchAttribute( $subtreeExpiry, 'path_identification_string' );
unset( $subtreeExpiry );
$subtreeExpiry = $subtreeExpiry1;
if (! isset( $subtreeExpiry ) ) $subtreeExpiry = NULL;
while ( is_object( $subtreeExpiry ) and method_exists( $subtreeExpiry, 'templateValue' ) )
    $subtreeExpiry = $subtreeExpiry->templateValue();

$cacheKeys = array( $cacheKeys, "13_0_13_59_extension/ezprojects2007/design/ezprojects2007/override/templates/node/projects.tpl", "ezprojects" );

list($cacheHandler_b36f736fb6beb78d4d917694bf395681, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
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
$text .= '<div class="attribute-heading">
    <h1>Latest project news</h1>
</div>
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
    'sort_by' => array( "published",
       false ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => 7,
    'depth' => false,
    'depth_operator' => false,
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "article" ),
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
$vars[$currentNamespace]['news_list'] = $var;
unset( $var );
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news_list'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
$fe_array_e6f2bc1eba6c8a2250548a3881860739_1 = [];
$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_1 = [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_1  = 0;
$fe_i_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_key_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_val_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_first_val_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_last_val_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
if ( !isset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_1 ) ) $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_1 = [];
$fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_1[] = @compact( 'fe_array_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_i_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_key_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_val_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_offset_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_max_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_reverse_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_first_val_e6f2bc1eba6c8a2250548a3881860739_1', 'fe_last_val_e6f2bc1eba6c8a2250548a3881860739_1' );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 );
$fe_array_e6f2bc1eba6c8a2250548a3881860739_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news_list'] : null;
if (! isset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 ) ) $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 = NULL;
while ( is_object( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 ) and method_exists( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1, 'templateValue' ) )
    $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_1->templateValue();

$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_1 = is_array( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 ) ? array_keys( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 ) : [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 = count( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_1 );
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_1 = 2;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_1 = false;
if ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 >= $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 )
{
    $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 = ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 < 0 ) ? 0 : $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1;
    if ( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e6f2bc1eba6c8a2250548a3881860739_1'. Array count: $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1");   
}
}
if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_1 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 + $fe_max_e6f2bc1eba6c8a2250548a3881860739_1 > $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 )
{
    if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e6f2bc1eba6c8a2250548a3881860739_1");
    $fe_max_e6f2bc1eba6c8a2250548a3881860739_1 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1;
}
if ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_1 )
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_1 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 - 1 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_1  = 0;
}
else
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_1 = $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_1  = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 - 1;
}
// foreach
for ( $fe_i_e6f2bc1eba6c8a2250548a3881860739_1 = $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_1; $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_1 < $fe_max_e6f2bc1eba6c8a2250548a3881860739_1 && ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_1 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_1 >= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_1 : $fe_i_e6f2bc1eba6c8a2250548a3881860739_1 <= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_1 ); $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_1 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_1-- : $fe_i_e6f2bc1eba6c8a2250548a3881860739_1++ )
{
$fe_key_e6f2bc1eba6c8a2250548a3881860739_1 = $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_1[$fe_i_e6f2bc1eba6c8a2250548a3881860739_1];
$fe_val_e6f2bc1eba6c8a2250548a3881860739_1 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_1[$fe_key_e6f2bc1eba6c8a2250548a3881860739_1];
$vars[$rootNamespace]['news'] = $fe_val_e6f2bc1eba6c8a2250548a3881860739_1;
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['show_project'] = true;
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "review", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "review" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/review-cbf82ddf2907edace285b95134398882.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-cbf82ddf2907edace285b95134398882.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/review.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "rss_import", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "rss_import" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-f81ef988044e70258d0044933523c37d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-f81ef988044e70258d0044933523c37d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/rss_import.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article-48e9e9a6a24b08cb29d38dd5fc0cb5e3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-48e9e9a6a24b08cb29d38dd5fc0cb5e3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_container", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_container" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-77949d2ca195cf59bc543685f1088298.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-77949d2ca195cf59bc543685f1088298.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article_container.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "book_product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "book_product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "bug", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "bug" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/bug-1e3b013e3e5d6ae2ab3ccd9a3b43c85d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/bug.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/bug-1e3b013e3e5d6ae2ab3ccd9a3b43c85d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/bug.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "contrib_cat", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "contrib_cat" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/contrib_category-19213dac9ccfb42bd5d7c82731de3c61.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/contrib_category.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/contrib_category-19213dac9ccfb42bd5d7c82731de3c61.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/contrib_category.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "project", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "project" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/project-5b2937ea05771440535694d813a3e006.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-5b2937ea05771440535694d813a3e006.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/project.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "employee", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "employee" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/employee-a497d375d40a22c517ef1e5657cb7da4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/employee.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/employee-a497d375d40a22c517ef1e5657cb7da4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/employee.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "exam", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "exam" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/exam-645eb31c95841b51491ffb3489c7f07f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/exam.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/exam-645eb31c95841b51491ffb3489c7f07f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/exam.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/file-5837573ce6efc192417774676f091379.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/file.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/file-5837573ce6efc192417774676f091379.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/flash-8aafbbcdff0a26e8b54dbc3db5cb094b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/flash.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/flash-8aafbbcdff0a26e8b54dbc3db5cb094b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infopage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infopage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/infopage-180feb5ae78f01e908d1a61cadaddfd4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/infopage.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/infopage-180feb5ae78f01e908d1a61cadaddfd4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/infopage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image_gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image_gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/image_gallery-5b506fd20b160ff8af7029da5882a879.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/image_gallery.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/image_gallery-5b506fd20b160ff8af7029da5882a879.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/image_gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "log", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "log" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/log-8b3ddc8ac79bdd9743d09b5f41cfa5ca.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-8b3ddc8ac79bdd9743d09b5f41cfa5ca.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/log.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "faq_category", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "faq_category" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/faq_category-7268291418c46b200f7f633e2e6cfea1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/faq_category.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/faq_category-7268291418c46b200f7f633e2e6cfea1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/faq_category.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/forum-427962db48893090a8b53443ca1bed4f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum-427962db48893090a8b53443ca1bed4f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_message", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_message" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-bee05a460ceb6165bac16e4cc492d415.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-bee05a460ceb6165bac16e4cc492d415.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum_message.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "licenced_product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "licenced_product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "partner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "partner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/partner-e3b6eb2a6b6a5f0ddb31a24984dbe960.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/partner.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/partner-e3b6eb2a6b6a5f0ddb31a24984dbe960.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/partner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "presentation", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "presentation" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/presentation-9ed3976442fc28640be9582f1f00febf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/presentation.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/presentation-9ed3976442fc28640be9582f1f00febf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/presentation.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "question", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "question" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/question-781d7a8794850c300410172482daacae.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/question.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/question-781d7a8794850c300410172482daacae.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/question.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "page_link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "page_link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/reference-e5c632a6ec6354c6d87070f109ec15b1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/reference.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/reference-e5c632a6ec6354c6d87070f109ec15b1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/reference.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "specification", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "specification" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-37ddfa669f00245623693eb36484e8e8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-37ddfa669f00245623693eb36484e8e8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/specification.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "template_mechanism", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "template_mechanism" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/template_mechanism-72ed78095c14f89ce18eba2f8490a6de.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/template_mechanism.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/template_mechanism-72ed78095c14f89ce18eba2f8490a6de.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/template_mechanism.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "user_groups", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "user_groups" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/user_groups-c1217ffaa49bc1a36f4be251f7484490.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/user_groups.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/user_groups-c1217ffaa49bc1a36f4be251f7484490.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/user_groups.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/line-d0bdedf179c42d4ed87649df12e61618.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/line.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/line-d0bdedf179c42d4ed87649df12e61618.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['show_project'] );
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_1 ) ) extract( array_pop( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_1 ) );

else
{

unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_i_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_key_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_val_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_max_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_1 );

unset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_1 );

}

// foreach ends
$text .= '


<div class="article-list">';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_2 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_2 = current( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_2 );

$fe_array_e6f2bc1eba6c8a2250548a3881860739_2 = [];
$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_2 = [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_2  = 0;
$fe_i_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_key_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_val_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_first_val_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_last_val_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
if ( !isset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_2 ) ) $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_2 = [];
$fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_2[] = @compact( 'fe_array_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_i_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_key_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_val_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_offset_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_max_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_reverse_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_first_val_e6f2bc1eba6c8a2250548a3881860739_2', 'fe_last_val_e6f2bc1eba6c8a2250548a3881860739_2' );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 );
$fe_array_e6f2bc1eba6c8a2250548a3881860739_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news_list'] : null;
if (! isset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 ) ) $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 = NULL;
while ( is_object( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 ) and method_exists( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2, 'templateValue' ) )
    $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_2->templateValue();

$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_2 = is_array( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 ) ? array_keys( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 ) : [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 = count( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_2 );
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_2 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 = 2;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_2 = false;
if ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 >= $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 )
{
    $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 = ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 < 0 ) ? 0 : $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2;
    if ( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e6f2bc1eba6c8a2250548a3881860739_2'. Array count: $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2");   
}
}
if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_2 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 + $fe_max_e6f2bc1eba6c8a2250548a3881860739_2 > $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 )
{
    if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e6f2bc1eba6c8a2250548a3881860739_2");
    $fe_max_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2;
}
if ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_2 )
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 - 1 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_2  = 0;
}
else
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_2  = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 - 1;
}
// foreach
for ( $fe_i_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_2; $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_2 < $fe_max_e6f2bc1eba6c8a2250548a3881860739_2 && ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_2 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_2 >= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_2 : $fe_i_e6f2bc1eba6c8a2250548a3881860739_2 <= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_2 ); $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_2 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_2-- : $fe_i_e6f2bc1eba6c8a2250548a3881860739_2++ )
{
$fe_key_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_2[$fe_i_e6f2bc1eba6c8a2250548a3881860739_2];
$fe_val_e6f2bc1eba6c8a2250548a3881860739_2 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_2[$fe_key_e6f2bc1eba6c8a2250548a3881860739_2];
$vars[$rootNamespace]['news'] = $fe_val_e6f2bc1eba6c8a2250548a3881860739_2;
// setting current sequence value
$vars[$rootNamespace]['sequence'] = $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_2;
$text .= '        <div class="article-listitem ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sequence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sequence'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['show_extra_info'] = true;
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['show_project'] = true;
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "review", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "review" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/review-eb44d4dae563fc40f02bf3ff7bd233fb.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-eb44d4dae563fc40f02bf3ff7bd233fb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article-eee2d42dfa0d3debc6c07cab1730379a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-eee2d42dfa0d3debc6c07cab1730379a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "rss_import", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "rss_import" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-1dad5fdf204571a33911d28a6efac1f3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-1dad5fdf204571a33911d28a6efac1f3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_container", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_container" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-320deaf4b7790ef498bdedb0f0718fe1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-320deaf4b7790ef498bdedb0f0718fe1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "project", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "project" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/project-14e4359b6fe9f3a9e0598b49ec75a6ec.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-14e4359b6fe9f3a9e0598b49ec75a6ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_message", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_message" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-107c233f90d2d683d031f3565044055a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-107c233f90d2d683d031f3565044055a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "log", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "log" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/log-7375f95eadf22438a09fa078f6306483.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-7375f95eadf22438a09fa078f6306483.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "specification", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "specification" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-c7aa6aff9f6396ba588afe37e2e5b555.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-c7aa6aff9f6396ba588afe37e2e5b555.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/listitem-bd326aa7df5ef47894eb19e5cc92db19.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/listitem.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/listitem-bd326aa7df5ef47894eb19e5cc92db19.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/node/view/listitem.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['show_extra_info'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['show_project'] );
$text .= '        </div>';
// sequence iteration
if ( ( $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_2 = next( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_2 ) ) === false )
{
   reset( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_2 );
   $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_2 = current( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_2 );
}

$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_2++;
} // foreach
unset( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $vars[$rootNamespace]['sequence'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_2 ) ) extract( array_pop( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_2 ) );

else
{

unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_i_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_key_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_val_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_max_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_2 );

unset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_2 );

}

// foreach ends
$text .= '</div>';
}
else
{
$text .= '<p>No news yet.</p>';
}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['news_list'] );
$cachedText = $text;
$cacheHandler_b36f736fb6beb78d4d917694bf395681->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_b36f736fb6beb78d4d917694bf395681 );
}

$text .= '

';
$cacheKeys = false;
unset( $subtreeExpiry );
unset( $subtreeExpiry );
$subtreeExpiry = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$subtreeExpiry1 = compiledFetchAttribute( $subtreeExpiry, 'path_identification_string' );
unset( $subtreeExpiry );
$subtreeExpiry = $subtreeExpiry1;
if (! isset( $subtreeExpiry ) ) $subtreeExpiry = NULL;
while ( is_object( $subtreeExpiry ) and method_exists( $subtreeExpiry, 'templateValue' ) )
    $subtreeExpiry = $subtreeExpiry->templateValue();

$cacheKeys = array( $cacheKeys, "46_0_46_59_extension/ezprojects2007/design/ezprojects2007/override/templates/node/projects.tpl", "ezprojects" );

list($cacheHandler_c825b1e303afe5c13df16d314bb39b39, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
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
$text .= '<div class="attribute-heading" style="margin-top:3.5em;">
    <h1><a href="http://ez.no/community/open_funding">Latest Open Funding suggestions</a></h1>
</div>
';
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array_values( array(     'parent_node_id' => 1009,
    'sort_by' => array( "published",
       false ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => 7,
    'depth' => false,
    'depth_operator' => false,
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "rss_import" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['suggestions'] = $var;
unset( $var );
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'suggestions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['suggestions'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
$fe_array_e6f2bc1eba6c8a2250548a3881860739_3 = [];
$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_3 = [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_3  = 0;
$fe_i_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_key_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_val_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_first_val_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_last_val_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
if ( !isset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_3 ) ) $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_3 = [];
$fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_3[] = @compact( 'fe_array_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_i_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_key_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_val_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_offset_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_max_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_reverse_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_first_val_e6f2bc1eba6c8a2250548a3881860739_3', 'fe_last_val_e6f2bc1eba6c8a2250548a3881860739_3' );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 );
$fe_array_e6f2bc1eba6c8a2250548a3881860739_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'suggestions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['suggestions'] : null;
if (! isset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 ) ) $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 = NULL;
while ( is_object( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 ) and method_exists( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3, 'templateValue' ) )
    $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_3->templateValue();

$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_3 = is_array( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 ) ? array_keys( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 ) : [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 = count( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_3 );
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_3 = 2;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_3 = false;
if ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 >= $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 )
{
    $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 = ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 < 0 ) ? 0 : $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3;
    if ( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e6f2bc1eba6c8a2250548a3881860739_3'. Array count: $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3");   
}
}
if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_3 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 + $fe_max_e6f2bc1eba6c8a2250548a3881860739_3 > $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 )
{
    if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e6f2bc1eba6c8a2250548a3881860739_3");
    $fe_max_e6f2bc1eba6c8a2250548a3881860739_3 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3;
}
if ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_3 )
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_3 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 - 1 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_3  = 0;
}
else
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_3 = $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_3  = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 - 1;
}
// foreach
for ( $fe_i_e6f2bc1eba6c8a2250548a3881860739_3 = $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_3; $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_3 < $fe_max_e6f2bc1eba6c8a2250548a3881860739_3 && ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_3 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_3 >= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_3 : $fe_i_e6f2bc1eba6c8a2250548a3881860739_3 <= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_3 ); $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_3 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_3-- : $fe_i_e6f2bc1eba6c8a2250548a3881860739_3++ )
{
$fe_key_e6f2bc1eba6c8a2250548a3881860739_3 = $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_3[$fe_i_e6f2bc1eba6c8a2250548a3881860739_3];
$fe_val_e6f2bc1eba6c8a2250548a3881860739_3 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_3[$fe_key_e6f2bc1eba6c8a2250548a3881860739_3];
$vars[$rootNamespace]['suggestion'] = $fe_val_e6f2bc1eba6c8a2250548a3881860739_3;
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'suggestion', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['suggestion'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "review", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "review" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/review-cbf82ddf2907edace285b95134398882.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-cbf82ddf2907edace285b95134398882.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/review.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "rss_import", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "rss_import" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-f81ef988044e70258d0044933523c37d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-f81ef988044e70258d0044933523c37d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/rss_import.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article-48e9e9a6a24b08cb29d38dd5fc0cb5e3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-48e9e9a6a24b08cb29d38dd5fc0cb5e3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_container", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_container" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-77949d2ca195cf59bc543685f1088298.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-77949d2ca195cf59bc543685f1088298.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/article_container.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "book_product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "book_product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "bug", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "bug" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/bug-1e3b013e3e5d6ae2ab3ccd9a3b43c85d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/bug.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/bug-1e3b013e3e5d6ae2ab3ccd9a3b43c85d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/bug.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-87f13d80fc9a78d7c273825898939979.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "contrib_cat", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "contrib_cat" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/contrib_category-19213dac9ccfb42bd5d7c82731de3c61.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/contrib_category.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/contrib_category-19213dac9ccfb42bd5d7c82731de3c61.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/contrib_category.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "project", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "project" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/project-5b2937ea05771440535694d813a3e006.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-5b2937ea05771440535694d813a3e006.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/project.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "employee", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "employee" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/employee-a497d375d40a22c517ef1e5657cb7da4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/employee.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/employee-a497d375d40a22c517ef1e5657cb7da4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/employee.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "exam", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "exam" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/exam-645eb31c95841b51491ffb3489c7f07f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/exam.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/exam-645eb31c95841b51491ffb3489c7f07f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/exam.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/file-5837573ce6efc192417774676f091379.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/file.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/file-5837573ce6efc192417774676f091379.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/flash-8aafbbcdff0a26e8b54dbc3db5cb094b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/flash.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/flash-8aafbbcdff0a26e8b54dbc3db5cb094b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infopage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infopage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/infopage-180feb5ae78f01e908d1a61cadaddfd4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/infopage.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/infopage-180feb5ae78f01e908d1a61cadaddfd4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/infopage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image_gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image_gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/image_gallery-5b506fd20b160ff8af7029da5882a879.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/image_gallery.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/image_gallery-5b506fd20b160ff8af7029da5882a879.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/image_gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "log", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "log" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/log-8b3ddc8ac79bdd9743d09b5f41cfa5ca.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-8b3ddc8ac79bdd9743d09b5f41cfa5ca.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/log.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "faq_category", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "faq_category" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/faq_category-7268291418c46b200f7f633e2e6cfea1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/faq_category.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/faq_category-7268291418c46b200f7f633e2e6cfea1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/faq_category.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/forum-427962db48893090a8b53443ca1bed4f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum-427962db48893090a8b53443ca1bed4f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_message", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_message" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-bee05a460ceb6165bac16e4cc492d415.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-bee05a460ceb6165bac16e4cc492d415.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/forum_message.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "licenced_product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "licenced_product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "partner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "partner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/partner-e3b6eb2a6b6a5f0ddb31a24984dbe960.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/partner.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/partner-e3b6eb2a6b6a5f0ddb31a24984dbe960.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/partner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "presentation", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "presentation" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/presentation-9ed3976442fc28640be9582f1f00febf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/presentation.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/presentation-9ed3976442fc28640be9582f1f00febf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/presentation.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/product-9dec7cdd2064dd0747bd75e734dd6eff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "question", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "question" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/question-781d7a8794850c300410172482daacae.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/question.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/question-781d7a8794850c300410172482daacae.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/question.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "page_link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "page_link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/reference-e5c632a6ec6354c6d87070f109ec15b1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/reference.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/reference-e5c632a6ec6354c6d87070f109ec15b1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/reference.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "specification", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "specification" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-37ddfa669f00245623693eb36484e8e8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-37ddfa669f00245623693eb36484e8e8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/specification.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "template_mechanism", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "template_mechanism" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/template_mechanism-72ed78095c14f89ce18eba2f8490a6de.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/template_mechanism.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/template_mechanism-72ed78095c14f89ce18eba2f8490a6de.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/template_mechanism.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "user_groups", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "user_groups" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/user_groups-c1217ffaa49bc1a36f4be251f7484490.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/user_groups.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/user_groups-c1217ffaa49bc1a36f4be251f7484490.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/line/user_groups.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/line-d0bdedf179c42d4ed87649df12e61618.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/line.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/line-d0bdedf179c42d4ed87649df12e61618.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_3 ) ) extract( array_pop( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_3 ) );

else
{

unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_i_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_key_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_val_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_max_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_3 );

unset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_3 );

}

// foreach ends
$text .= '
<div class="article-list">';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_4 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_4 = current( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_4 );

$fe_array_e6f2bc1eba6c8a2250548a3881860739_4 = [];
$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_4 = [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_4  = 0;
$fe_i_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_key_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_val_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_first_val_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_last_val_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
if ( !isset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_4 ) ) $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_4 = [];
$fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_4[] = @compact( 'fe_array_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_i_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_key_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_val_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_offset_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_max_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_reverse_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_first_val_e6f2bc1eba6c8a2250548a3881860739_4', 'fe_last_val_e6f2bc1eba6c8a2250548a3881860739_4' );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 );
$fe_array_e6f2bc1eba6c8a2250548a3881860739_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'suggestions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['suggestions'] : null;
if (! isset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 ) ) $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 = NULL;
while ( is_object( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 ) and method_exists( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4, 'templateValue' ) )
    $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_4->templateValue();

$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_4 = is_array( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 ) ? array_keys( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 ) : [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 = count( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_4 );
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_4 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 = 2;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_4 = false;
if ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 >= $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 )
{
    $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 = ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 < 0 ) ? 0 : $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4;
    if ( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e6f2bc1eba6c8a2250548a3881860739_4'. Array count: $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4");   
}
}
if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_4 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 + $fe_max_e6f2bc1eba6c8a2250548a3881860739_4 > $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 )
{
    if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e6f2bc1eba6c8a2250548a3881860739_4");
    $fe_max_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4;
}
if ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_4 )
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 - 1 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_4  = 0;
}
else
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_4  = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 - 1;
}
// foreach
for ( $fe_i_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_4; $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_4 < $fe_max_e6f2bc1eba6c8a2250548a3881860739_4 && ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_4 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_4 >= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_4 : $fe_i_e6f2bc1eba6c8a2250548a3881860739_4 <= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_4 ); $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_4 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_4-- : $fe_i_e6f2bc1eba6c8a2250548a3881860739_4++ )
{
$fe_key_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_4[$fe_i_e6f2bc1eba6c8a2250548a3881860739_4];
$fe_val_e6f2bc1eba6c8a2250548a3881860739_4 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_4[$fe_key_e6f2bc1eba6c8a2250548a3881860739_4];
$vars[$rootNamespace]['suggestion'] = $fe_val_e6f2bc1eba6c8a2250548a3881860739_4;
// setting current sequence value
$vars[$rootNamespace]['sequence'] = $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_4;
$text .= '        <div class="article-listitem ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sequence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sequence'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'suggestion', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['suggestion'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "review", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "review" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/review-eb44d4dae563fc40f02bf3ff7bd233fb.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-eb44d4dae563fc40f02bf3ff7bd233fb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article-eee2d42dfa0d3debc6c07cab1730379a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-eee2d42dfa0d3debc6c07cab1730379a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "rss_import", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "rss_import" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-1dad5fdf204571a33911d28a6efac1f3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-1dad5fdf204571a33911d28a6efac1f3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_container", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_container" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-320deaf4b7790ef498bdedb0f0718fe1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-320deaf4b7790ef498bdedb0f0718fe1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "project", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "project" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/project-14e4359b6fe9f3a9e0598b49ec75a6ec.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-14e4359b6fe9f3a9e0598b49ec75a6ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_message", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_message" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-107c233f90d2d683d031f3565044055a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-107c233f90d2d683d031f3565044055a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "log", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "log" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/log-7375f95eadf22438a09fa078f6306483.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-7375f95eadf22438a09fa078f6306483.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "specification", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "specification" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-c7aa6aff9f6396ba588afe37e2e5b555.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-c7aa6aff9f6396ba588afe37e2e5b555.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/listitem-bd326aa7df5ef47894eb19e5cc92db19.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/listitem.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/listitem-bd326aa7df5ef47894eb19e5cc92db19.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/node/view/listitem.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '        </div>';
// sequence iteration
if ( ( $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_4 = next( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_4 ) ) === false )
{
   reset( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_4 );
   $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_4 = current( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_4 );
}

$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_4++;
} // foreach
unset( $foreach_sequence_array_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $foreach_sequence_var_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $vars[$rootNamespace]['sequence'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_4 ) ) extract( array_pop( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_4 ) );

else
{

unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_i_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_key_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_val_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_max_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_4 );

unset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_4 );

}

// foreach ends
$text .= '</div>';
}
else
{
$text .= '<p>No suggestions yet.</p>';
}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['suggestions'] );
$cachedText = $text;
$cacheHandler_c825b1e303afe5c13df16d314bb39b39->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_c825b1e303afe5c13df16d314bb39b39 );
}

$text .= '

</div>
</div>
</div>




<div class="area-sidebar-normal">


<div class="template-design">
<div class="template-module node-view-projects">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Add your project!</h2>
</div>';
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
        2 => 'node',
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
          1 => 'field2',
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
    0 => 93,
    1 => 0,
    2 => 2738,
  ),
  1 => 
  array (
    0 => 93,
    1 => 50,
    2 => 2788,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/node/projects.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

// def $canCreateProject
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array_values( array(     'access' => "create",
    'contentobject' => $var1,
    'contentclass_id' => "project",
    'parent_contentclass_id' => false,
    'language' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'canCreateProject', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'canCreateProject' is already defined.", array (
  0 => 
  array (
    0 => 95,
    1 => 0,
    2 => 2792,
  ),
  1 => 
  array (
    0 => 97,
    1 => 80,
    2 => 3021,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/node/projects.tpl',
) );
    $tpl->setVariable( 'canCreateProject', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'canCreateProject', $var, $rootNamespace );
}

$text .= '<div class="block float-break">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'canCreateProject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['canCreateProject'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="element">
    <form method="post" action="/index.php//content/action">
        <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        <input type="hidden" name="ClassIdentifier" value="project" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        <input class="button" type="submit" name="NewButton" value="Create a new project" />
    </form>
    </div>';
}
else
{
$text .= '<p>You need to be logged in to add a new project. You can do so <a href="/index.php//user/login">here</a>.</p>';
}
unset( $if_cond );
// if ends

$text .= '</div>';
// undef $canCreateProject
$tpl->unsetLocalVariable( 'canCreateProject', $rootNamespace );

$text .= '
</div>
</div>
</div>
';
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array_values( array(     'parent_node_id' => "2",
    'sort_by' => array( "published",
       "0" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => "10",
    'depth' => "2",
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "project" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['recent_projects'] = $var;
unset( $var );
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'recent_projects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['recent_projects'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="template-design">
<div class="template-module node-view-projects">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">New projects</h2>
</div>
    <ul class="linklist">
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_e6f2bc1eba6c8a2250548a3881860739_5 = [];
$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_5 = [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_5  = 0;
$fe_i_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_key_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_val_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_first_val_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_last_val_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
if ( !isset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_5 ) ) $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_5 = [];
$fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_5[] = @compact( 'fe_array_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_i_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_key_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_val_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_offset_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_max_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_reverse_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_first_val_e6f2bc1eba6c8a2250548a3881860739_5', 'fe_last_val_e6f2bc1eba6c8a2250548a3881860739_5' );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 );
unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 );
$fe_array_e6f2bc1eba6c8a2250548a3881860739_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'recent_projects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['recent_projects'] : null;
if (! isset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 ) ) $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 = NULL;
while ( is_object( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 ) and method_exists( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5, 'templateValue' ) )
    $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_5->templateValue();

$fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_5 = is_array( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 ) ? array_keys( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 ) : [];
$fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 = count( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_5 );
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 = 0;
$fe_max_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5;
$fe_reverse_e6f2bc1eba6c8a2250548a3881860739_5 = false;
if ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 >= $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 )
{
    $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 = ( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 < 0 ) ? 0 : $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5;
    if ( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e6f2bc1eba6c8a2250548a3881860739_5'. Array count: $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5");   
}
}
if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_5 < 0 || $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 + $fe_max_e6f2bc1eba6c8a2250548a3881860739_5 > $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 )
{
    if ( $fe_max_e6f2bc1eba6c8a2250548a3881860739_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e6f2bc1eba6c8a2250548a3881860739_5");
    $fe_max_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5;
}
if ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_5 )
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 - 1 - $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_5  = 0;
}
else
{
    $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5;
    $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_5  = $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 - 1;
}
// foreach
for ( $fe_i_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_5; $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_5 < $fe_max_e6f2bc1eba6c8a2250548a3881860739_5 && ( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_5 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_5 >= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_5 : $fe_i_e6f2bc1eba6c8a2250548a3881860739_5 <= $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_5 ); $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_5 ? $fe_i_e6f2bc1eba6c8a2250548a3881860739_5-- : $fe_i_e6f2bc1eba6c8a2250548a3881860739_5++ )
{
$fe_key_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_5[$fe_i_e6f2bc1eba6c8a2250548a3881860739_5];
$fe_val_e6f2bc1eba6c8a2250548a3881860739_5 = $fe_array_e6f2bc1eba6c8a2250548a3881860739_5[$fe_key_e6f2bc1eba6c8a2250548a3881860739_5];
$vars[$rootNamespace]['project'] = $fe_val_e6f2bc1eba6c8a2250548a3881860739_5;
$text .= '            <li>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'project', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['project'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['show_extra_info'] = true;
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "review", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "review" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/review-eb44d4dae563fc40f02bf3ff7bd233fb.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-eb44d4dae563fc40f02bf3ff7bd233fb.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article-eee2d42dfa0d3debc6c07cab1730379a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-eee2d42dfa0d3debc6c07cab1730379a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "rss_import", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "rss_import" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-1dad5fdf204571a33911d28a6efac1f3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-1dad5fdf204571a33911d28a6efac1f3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_container", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_container" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-320deaf4b7790ef498bdedb0f0718fe1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-320deaf4b7790ef498bdedb0f0718fe1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-ef9cf9891dbcdc4fad053bbe9e937691.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "project", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "project" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/project-14e4359b6fe9f3a9e0598b49ec75a6ec.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-14e4359b6fe9f3a9e0598b49ec75a6ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_message", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_message" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-107c233f90d2d683d031f3565044055a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-107c233f90d2d683d031f3565044055a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "log", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "log" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/log-7375f95eadf22438a09fa078f6306483.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-7375f95eadf22438a09fa078f6306483.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "specification", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "specification" ) )
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-c7aa6aff9f6396ba588afe37e2e5b555.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-c7aa6aff9f6396ba588afe37e2e5b555.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/listitem-bd326aa7df5ef47894eb19e5cc92db19.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/listitem.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/listitem-bd326aa7df5ef47894eb19e5cc92db19.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/node/view/listitem.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['show_extra_info'] );
$text .= '</li>
        ';
$fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_5 ) ) extract( array_pop( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_5 ) );

else
{

unset( $fe_array_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_array_keys_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_n_items_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_n_items_processed_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_i_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_key_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_val_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_offset_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_max_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_reverse_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_first_val_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_last_val_e6f2bc1eba6c8a2250548a3881860739_5 );

unset( $fe_variable_stack_e6f2bc1eba6c8a2250548a3881860739_5 );

}

// foreach ends
$text .= '    </ul>
</div>
</div>
</div>';
}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['recent_projects'] );
$text .= '
<div class="template-design">
<div class="template-module node-view-projects">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Browse</h2>
</div>
';
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTreeCount' ),
  array_values( array(     'parent_node_id' => 2,
    'only_translated' => false,
    'language' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "project" ),
    'attribute_filter' => false,
    'depth' => false,
    'depth_operator' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'main_node_only' => false,
    'extended_attribute_filter' => false,
    'objectname_filter' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['project_count'] = $var;
unset( $var );
$text .= '
<p>There are currently ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'project_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['project_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' registered projects.</p>
';
unset( $vars[$currentNamespace]['project_count'] );
$text .= '
<p><a href="/index.php//types">Browse...</a></p>

</div>
</div>
</div>

</div>

';

$setArray = $oldSetArray_fc5e6a5ad390cea20bda14e8f6905c6f;
$tpl->Level--;
?>
