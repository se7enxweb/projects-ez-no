<?php
// URI:       extension/ezprojects2007/design/ezprojects2007/templates/mainmenu.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/mainmenu.tpl
// Timestamp: 1286250000 (Mon Oct 4 20:40:00 PDT 2010)
$oldSetArray_f647a8c4e6f159bc7ce809162404a047 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'path' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) > ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'path' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, '1' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'node_id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
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
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var2 = compiledFetchAttribute( $var1, 'path' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, '1' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array_values( array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['projectNode'] = $var;
unset( $var );
$vars[$currentNamespace]['pathIDArray'] = array (
);
$vars[$currentNamespace]['currentSubmenuItems'] = array (
);
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'projectNode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['projectNode'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'project' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
';
// def $expiry
unset( $var );
unset( $var1 );
unset( $var2 );
$var2 = time();
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'projectNode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['projectNode'] : null;
$var5 = compiledFetchAttribute( $var4, 'object' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'published' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = $var4 + 12000.000000;
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( ( $var2 ) < ( $var3 ) );
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = 300;
}
else
{
    
    if ( true )
    {
        $var = 0;
    }
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'expiry', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'expiry' is already defined.", array (
  0 => 
  array (
    0 => 9,
    1 => 0,
    2 => 385,
  ),
  1 => 
  array (
    0 => 9,
    1 => 89,
    2 => 474,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/templates/mainmenu.tpl',
) );
    $tpl->setVariable( 'expiry', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'expiry', $var, $rootNamespace );
}

unset( $localExpiry );
unset( $localExpiry );
$localExpiry = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'expiry', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['expiry'] : null;
if (! isset( $localExpiry ) ) $localExpiry = NULL;
while ( is_object( $localExpiry ) and method_exists( $localExpiry, 'templateValue' ) )
    $localExpiry = $localExpiry->templateValue();

unset( $cacheKeys );
unset( $cacheKeys );
$cacheKeys = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri_string', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri_string'] : null;
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "10_0_10_65_extension/ezprojects2007/design/ezprojects2007/templates/mainmenu.tpl", "ezprojects" );

list($cacheHandler_69d0bdc079841fdc63df9201e478a258, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, ( $localExpiry > 0 ? $localExpiry : null ), false );
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
// foreach begins
$skipDelimiter = true;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_7 = [];
$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_7 = [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_7  = 0;
$fe_i_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_key_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_val_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_first_val_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_last_val_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
if ( !isset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_7 ) ) $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_7 = [];
$fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_7[] = @compact( 'fe_array_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_i_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_key_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_val_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_offset_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_max_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_reverse_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_first_val_ed216847ead2c6d3ce4465a0117dca57_7', 'fe_last_val_ed216847ead2c6d3ce4465a0117dca57_7' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_71 = compiledFetchAttribute( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7, 'path' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_71;
if (! isset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 ) ) $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 = NULL;
while ( is_object( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 ) and method_exists( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7, 'templateValue' ) )
    $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_7->templateValue();

$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_7 = is_array( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 ) ? array_keys( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 ) : [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 = count( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_7 );
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_7 = false;
if ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 >= $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 )
{
    $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 = ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 < 0 ) ? 0 : $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7;
    if ( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_ed216847ead2c6d3ce4465a0117dca57_7'. Array count: $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7");   
}
}
if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_7 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 + $fe_max_ed216847ead2c6d3ce4465a0117dca57_7 > $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 )
{
    if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ed216847ead2c6d3ce4465a0117dca57_7");
    $fe_max_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7;
}
if ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_7 )
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 - 1 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_7  = 0;
}
else
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_7  = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 - 1;
}
// foreach
for ( $fe_i_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_7; $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_7 < $fe_max_ed216847ead2c6d3ce4465a0117dca57_7 && ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_7 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_7 >= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_7 : $fe_i_ed216847ead2c6d3ce4465a0117dca57_7 <= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_7 ); $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_7 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_7-- : $fe_i_ed216847ead2c6d3ce4465a0117dca57_7++ )
{
$fe_key_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_7[$fe_i_ed216847ead2c6d3ce4465a0117dca57_7];
$fe_val_ed216847ead2c6d3ce4465a0117dca57_7 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_7[$fe_key_ed216847ead2c6d3ce4465a0117dca57_7];
$vars[$rootNamespace]['part'] = $fe_val_ed216847ead2c6d3ce4465a0117dca57_7;
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['part'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pathIDArray', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pathIDArray'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'pathIDArray', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['pathIDArray'] = $var;
    unset( $var );
}
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_7 ) ) extract( array_pop( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_7 ) );

else
{

unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_i_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_key_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_val_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_max_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_7 );

unset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_7 );

}

// foreach ends
$text .= '
<script type="text/javascript">
<!--
var menu = new Array();

menu[0] = [];
';
// foreach begins
$skipDelimiter = true;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_9 = [];
$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_9 = [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_9  = 0;
$fe_i_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_key_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_val_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_first_val_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_last_val_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
if ( !isset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_9 ) ) $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_9 = [];
$fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_9[] = @compact( 'fe_array_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_i_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_key_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_val_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_offset_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_max_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_reverse_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_first_val_ed216847ead2c6d3ce4465a0117dca57_9', 'fe_last_val_ed216847ead2c6d3ce4465a0117dca57_9' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'projectNode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['projectNode'] : null;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_91 = compiledFetchAttribute( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9, 'children' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_91;
if (! isset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 ) ) $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 = NULL;
while ( is_object( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 ) and method_exists( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9, 'templateValue' ) )
    $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_9->templateValue();

$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_9 = is_array( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 ) ? array_keys( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 ) : [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 = count( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_9 );
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_9 = false;
if ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 >= $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 )
{
    $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 = ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 < 0 ) ? 0 : $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9;
    if ( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_ed216847ead2c6d3ce4465a0117dca57_9'. Array count: $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9");   
}
}
if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_9 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 + $fe_max_ed216847ead2c6d3ce4465a0117dca57_9 > $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 )
{
    if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ed216847ead2c6d3ce4465a0117dca57_9");
    $fe_max_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9;
}
if ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_9 )
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 - 1 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_9  = 0;
}
else
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_9  = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 - 1;
}
// foreach
for ( $fe_i_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_9; $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_9 < $fe_max_ed216847ead2c6d3ce4465a0117dca57_9 && ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_9 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_9 >= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_9 : $fe_i_ed216847ead2c6d3ce4465a0117dca57_9 <= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_9 ); $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_9 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_9-- : $fe_i_ed216847ead2c6d3ce4465a0117dca57_9++ )
{
$fe_key_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_9[$fe_i_ed216847ead2c6d3ce4465a0117dca57_9];
$fe_val_ed216847ead2c6d3ce4465a0117dca57_9 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_9[$fe_key_ed216847ead2c6d3ce4465a0117dca57_9];
$vars[$rootNamespace]['child'] = $fe_val_ed216847ead2c6d3ce4465a0117dca57_9;
$vars[$rootNamespace]['key'] = $fe_key_ed216847ead2c6d3ce4465a0117dca57_9;
$text .= 'menu[';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '] = [';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = in_array( $if_cond1, array( "forums",
       "team",
       "gallery" ) );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_8 = [];
$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_8 = [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_8  = 0;
$fe_i_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_key_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_val_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_first_val_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_last_val_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
if ( !isset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_8 ) ) $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_8 = [];
$fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_8[] = @compact( 'fe_array_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_i_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_key_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_val_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_offset_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_max_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_reverse_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_first_val_ed216847ead2c6d3ce4465a0117dca57_8', 'fe_last_val_ed216847ead2c6d3ce4465a0117dca57_8' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_81 = compiledFetchAttribute( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8, 'children' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_81;
if (! isset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 ) ) $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 = NULL;
while ( is_object( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 ) and method_exists( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8, 'templateValue' ) )
    $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_8->templateValue();

$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_8 = is_array( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 ) ? array_keys( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 ) : [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 = count( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_8 );
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_8 = false;
if ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 >= $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 )
{
    $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 = ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 < 0 ) ? 0 : $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8;
    if ( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_ed216847ead2c6d3ce4465a0117dca57_8'. Array count: $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8");   
}
}
if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_8 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 + $fe_max_ed216847ead2c6d3ce4465a0117dca57_8 > $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 )
{
    if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ed216847ead2c6d3ce4465a0117dca57_8");
    $fe_max_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8;
}
if ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_8 )
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 - 1 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_8  = 0;
}
else
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_8  = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 - 1;
}
// foreach
for ( $fe_i_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_8; $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_8 < $fe_max_ed216847ead2c6d3ce4465a0117dca57_8 && ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_8 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_8 >= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_8 : $fe_i_ed216847ead2c6d3ce4465a0117dca57_8 <= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_8 ); $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_8 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_8-- : $fe_i_ed216847ead2c6d3ce4465a0117dca57_8++ )
{
$fe_key_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_8[$fe_i_ed216847ead2c6d3ce4465a0117dca57_8];
$fe_val_ed216847ead2c6d3ce4465a0117dca57_8 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_8[$fe_key_ed216847ead2c6d3ce4465a0117dca57_8];
$vars[$rootNamespace]['grandChild'] = $fe_val_ed216847ead2c6d3ce4465a0117dca57_8;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ', ';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grandChild', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grandChild'] : null;
$var3 = compiledFetchAttribute( $var2, 'name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = htmlspecialchars( (string) $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = addslashes( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\', \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grandChild', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grandChild'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\'';
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_8 ) ) extract( array_pop( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_8 ) );

else
{

unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_i_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_key_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_val_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_max_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_8 );

unset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_8 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '];
';
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_9 ) ) extract( array_pop( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_9 ) );

else
{

unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_i_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_key_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_val_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_max_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_9 );

unset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_9 );

}

// foreach ends
$text .= '
-->
</script>
<div id="menuborder">

<!-- Main menu area: START -->
<div id="menu" onmouseover="menuHover();" onmouseout="tryHideSubMenues();">

<div id="mainmenu" class="float-break">
<div id="page-width2">
    <ul id="mainmenulist" class="float-break">

    <li class="project" ><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'projectNode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['projectNode'] : null;
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

$text .= ' onmouseover="switchSubMenu( this );">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'projectNode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['projectNode'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
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

$text .= ' &nbsp;&nbsp;&gt;&gt;</a></li>
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_10 = [];
$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_10 = [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_10  = 0;
$fe_i_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_key_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_val_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_first_val_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_last_val_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
if ( !isset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_10 ) ) $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_10 = [];
$fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_10[] = @compact( 'fe_array_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_i_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_key_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_val_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_offset_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_max_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_reverse_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_first_val_ed216847ead2c6d3ce4465a0117dca57_10', 'fe_last_val_ed216847ead2c6d3ce4465a0117dca57_10' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'projectNode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['projectNode'] : null;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_101 = compiledFetchAttribute( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10, 'children' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_101;
if (! isset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 ) ) $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 = NULL;
while ( is_object( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 ) and method_exists( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10, 'templateValue' ) )
    $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_10->templateValue();

$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_10 = is_array( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 ) ? array_keys( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 ) : [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 = count( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_10 );
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_10 = false;
if ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 >= $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 )
{
    $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 = ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 < 0 ) ? 0 : $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10;
    if ( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_ed216847ead2c6d3ce4465a0117dca57_10'. Array count: $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10");   
}
}
if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_10 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 + $fe_max_ed216847ead2c6d3ce4465a0117dca57_10 > $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 )
{
    if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ed216847ead2c6d3ce4465a0117dca57_10");
    $fe_max_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10;
}
if ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_10 )
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 - 1 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_10  = 0;
}
else
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_10  = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 - 1;
}
// foreach
for ( $fe_i_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_10; $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_10 < $fe_max_ed216847ead2c6d3ce4465a0117dca57_10 && ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_10 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_10 >= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_10 : $fe_i_ed216847ead2c6d3ce4465a0117dca57_10 <= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_10 ); $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_10 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_10-- : $fe_i_ed216847ead2c6d3ce4465a0117dca57_10++ )
{
$fe_key_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_10[$fe_i_ed216847ead2c6d3ce4465a0117dca57_10];
$fe_val_ed216847ead2c6d3ce4465a0117dca57_10 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_10[$fe_key_ed216847ead2c6d3ce4465a0117dca57_10];
$vars[$rootNamespace]['child'] = $fe_val_ed216847ead2c6d3ce4465a0117dca57_10;
$vars[$rootNamespace]['key'] = $fe_key_ed216847ead2c6d3ce4465a0117dca57_10;
$text .= '    ';
$vars[$currentNamespace]['classes'] = array (
);
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'path' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) > ( 2 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'path_array' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'path' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
$if_cond5 = compiledFetchAttribute( $if_cond4, '2' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'node_id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if( is_string( $if_cond3 ) )
{
  $if_cond2 = ( mb_strpos( $if_cond3, $if_cond4 ) !== false );
}
else if ( is_array( $if_cond3 ) )
{
  $if_cond2 = in_array( $if_cond4, $if_cond3 );
}
else
{
$if_cond2 = false;
}unset( $if_cond3, $if_cond4 );
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
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "current" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "current" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = $var;
    unset( $var );
}
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = in_array( $if_cond1, array( "forums",
       "team",
       "gallery" ) );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var1 = compiledFetchAttribute( $var, 'children' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'currentSubmenuItems', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['currentSubmenuItems'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'projectNode', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['projectNode'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'children' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond3Data = array( 'value' => $if_cond3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond3Data, false, false );
$if_cond3 = $if_cond3Data['value'];
unset( $if_cond3Data );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = $if_cond3 + -1;
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "last" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "last" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '        <li ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
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

$text .= ' onmouseover="switchSubMenu( this );">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
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

$text .= '</a></li>
    ';
unset( $vars[$currentNamespace]['classes'] );
$text .= '    ';
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_10 ) ) extract( array_pop( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_10 ) );

else
{

unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_i_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_key_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_val_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_max_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_10 );

unset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_10 );

}

// foreach ends
$text .= '
    </ul>

</div>
</div>


<div id="submenu">
<div id="page-width3">
    <ul class="float-break">

    ';
// foreach begins
$skipDelimiter = true;
$fe_array_ed216847ead2c6d3ce4465a0117dca57_11 = [];
$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_11 = [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_11  = 0;
$fe_i_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_key_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_val_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_first_val_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_last_val_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
if ( !isset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_11 ) ) $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_11 = [];
$fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_11[] = @compact( 'fe_array_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_i_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_key_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_val_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_offset_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_max_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_reverse_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_first_val_ed216847ead2c6d3ce4465a0117dca57_11', 'fe_last_val_ed216847ead2c6d3ce4465a0117dca57_11' );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 );
unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 );
$fe_array_ed216847ead2c6d3ce4465a0117dca57_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currentSubmenuItems', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currentSubmenuItems'] : null;
if (! isset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 ) ) $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 = NULL;
while ( is_object( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 ) and method_exists( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11, 'templateValue' ) )
    $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_11->templateValue();

$fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_11 = is_array( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 ) ? array_keys( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 ) : [];
$fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 = count( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_11 );
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 = 0;
$fe_max_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11;
$fe_reverse_ed216847ead2c6d3ce4465a0117dca57_11 = false;
if ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 >= $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 )
{
    $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 = ( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 < 0 ) ? 0 : $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11;
    if ( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_ed216847ead2c6d3ce4465a0117dca57_11'. Array count: $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11");   
}
}
if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_11 < 0 || $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 + $fe_max_ed216847ead2c6d3ce4465a0117dca57_11 > $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 )
{
    if ( $fe_max_ed216847ead2c6d3ce4465a0117dca57_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ed216847ead2c6d3ce4465a0117dca57_11");
    $fe_max_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11;
}
if ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_11 )
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 - 1 - $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_11  = 0;
}
else
{
    $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11;
    $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_11  = $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 - 1;
}
// foreach
for ( $fe_i_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_11; $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_11 < $fe_max_ed216847ead2c6d3ce4465a0117dca57_11 && ( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_11 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_11 >= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_11 : $fe_i_ed216847ead2c6d3ce4465a0117dca57_11 <= $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_11 ); $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_11 ? $fe_i_ed216847ead2c6d3ce4465a0117dca57_11-- : $fe_i_ed216847ead2c6d3ce4465a0117dca57_11++ )
{
$fe_key_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_11[$fe_i_ed216847ead2c6d3ce4465a0117dca57_11];
$fe_val_ed216847ead2c6d3ce4465a0117dca57_11 = $fe_array_ed216847ead2c6d3ce4465a0117dca57_11[$fe_key_ed216847ead2c6d3ce4465a0117dca57_11];
$vars[$rootNamespace]['submenuItem'] = $fe_val_ed216847ead2c6d3ce4465a0117dca57_11;
$vars[$rootNamespace]['key'] = $fe_key_ed216847ead2c6d3ce4465a0117dca57_11;
$text .= '    ';
$vars[$currentNamespace]['classes'] = array (
);
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currentSubmenuItems', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currentSubmenuItems'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = $if_cond2 + -1;
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "last" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "last" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'path' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) > ( 3 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'submenuItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['submenuItem'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'path_array' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'path' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
$if_cond5 = compiledFetchAttribute( $if_cond4, '3' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'node_id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if( is_string( $if_cond3 ) )
{
  $if_cond2 = ( mb_strpos( $if_cond3, $if_cond4 ) !== false );
}
else if ( is_array( $if_cond3 ) )
{
  $if_cond2 = in_array( $if_cond4, $if_cond3 );
}
else
{
$if_cond2 = false;
}unset( $if_cond3, $if_cond4 );
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
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "current" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "current" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    <li ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'submenuItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['submenuItem'] : null;
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
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'submenuItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['submenuItem'] : null;
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

$text .= '</a></li>

    ';
unset( $vars[$currentNamespace]['classes'] );
$text .= '    ';
$fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_11 ) ) extract( array_pop( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_11 ) );

else
{

unset( $fe_array_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_array_keys_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_n_items_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_n_items_processed_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_i_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_key_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_val_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_offset_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_max_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_reverse_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_first_val_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_last_val_ed216847ead2c6d3ce4465a0117dca57_11 );

unset( $fe_variable_stack_ed216847ead2c6d3ce4465a0117dca57_11 );

}

// foreach ends
$text .= '

</ul>
</div>
</div>

<script type="text/javascript"><!--
document.getElementById(\'submenu\').style.display = \'none\';
--></script>

</div>
<!-- Main menu area: END -->

</div>
';
$cachedText = $text;
$cacheHandler_69d0bdc079841fdc63df9201e478a258->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_69d0bdc079841fdc63df9201e478a258 );
}

}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['projectNode'] );
unset( $vars[$currentNamespace]['pathIDArray'] );
unset( $vars[$currentNamespace]['currentSubmenuItems'] );
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_f647a8c4e6f159bc7ce809162404a047;
$tpl->Level--;
?>
