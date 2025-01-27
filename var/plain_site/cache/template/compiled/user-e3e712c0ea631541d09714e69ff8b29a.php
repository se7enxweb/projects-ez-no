<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl
// Timestamp: 1286250001 (Mon Oct 4 20:40:01 PDT 2010)
$oldSetArray_a35e7218cb6c0e3b00f82e50ac6d7239 = isset( $setArray ) ? $setArray : array();
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
<div class="template-module content-view-full">
<div class="template-object class-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="object-right">
    <form method="post" action="/content/action">
        <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        <input type="image" src="/design/standard/images/edit.gif" name="EditButton" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
    </form>
</div>';
}
unset( $if_cond );
// if ends

$text .= '

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

<div class="attribute-long">
    ';
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
          1 => 'object',
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
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'description',
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
    0 => 25,
    1 => 4,
    2 => 764,
  ),
  1 => 
  array (
    0 => 25,
    1 => 66,
    2 => 826,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</div>

<div class="attribute-image">
    ';
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
          1 => 'object',
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
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'image',
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
    0 => 29,
    1 => 4,
    2 => 871,
  ),
  1 => 
  array (
    0 => 29,
    1 => 60,
    2 => 927,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</div>

</div>
</div>
</div>



<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
';
// def $roleAssignments
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchMemberOf' ),
  array_values( array(     'id' => $var1 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'roleAssignments', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'roleAssignments' is already defined.", array (
  0 => 
  array (
    0 => 42,
    1 => 0,
    2 => 1141,
  ),
  1 => 
  array (
    0 => 44,
    1 => 35,
    2 => 1300,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl',
) );
    $tpl->setVariable( 'roleAssignments', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'roleAssignments', $var, $rootNamespace );
}

// def $memberRoleAssignments
if ( $tpl->hasVariable( 'memberRoleAssignments', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'memberRoleAssignments' is already defined.", array (
  0 => 
  array (
    0 => 42,
    1 => 0,
    2 => 1141,
  ),
  1 => 
  array (
    0 => 44,
    1 => 35,
    2 => 1300,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl',
) );
    $tpl->setVariable( 'memberRoleAssignments', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'memberRoleAssignments', array (
), $rootNamespace );
}

// def $leaderRoleAssignments
if ( $tpl->hasVariable( 'leaderRoleAssignments', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'leaderRoleAssignments' is already defined.", array (
  0 => 
  array (
    0 => 42,
    1 => 0,
    2 => 1141,
  ),
  1 => 
  array (
    0 => 44,
    1 => 35,
    2 => 1300,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl',
) );
    $tpl->setVariable( 'leaderRoleAssignments', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'leaderRoleAssignments', array (
), $rootNamespace );
}

$text .= '
<div class="attribute-heading">
    <h2 class="bullet">Membership info</h2>
</div>
';
// foreach begins
$skipDelimiter = true;
$fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 = [];
$fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_1 = [];
$fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_1  = 0;
$fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
if ( !isset( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_1 ) ) $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_1 = [];
$fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_1[] = @compact( 'fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_1', 'fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_1' );
unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 );
unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 );
$fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'roleAssignments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['roleAssignments'] : null;
if (! isset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 ) ) $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 = NULL;
while ( is_object( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 ) and method_exists( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1, 'templateValue' ) )
    $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1->templateValue();

$fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_1 = is_array( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 ) ? array_keys( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 ) : [];
$fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 = count( $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_1 );
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 = 0;
$fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1;
$fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_1 = false;
if ( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 < 0 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 >= $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 )
{
    $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 = ( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 < 0 ) ? 0 : $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1;
    if ( $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1'. Array count: $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1");   
}
}
if ( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 < 0 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 + $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 > $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 )
{
    if ( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1");
    $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1;
}
if ( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_1 )
{
    $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 - 1 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1;
    $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_1  = 0;
}
else
{
    $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1;
    $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_1  = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 - 1;
}
// foreach
for ( $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_1; $fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_1 < $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 && ( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_1 ? $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1 >= $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 : $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1 <= $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 ); $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_1 ? $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1-- : $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1++ )
{
$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_1[$fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1];
$fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 = $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1[$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_1];
$vars[$rootNamespace]['roleAssignment'] = $fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_1;
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'roleAssignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['roleAssignment'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'roleAssignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['roleAssignment'] : null;
$match1 = compiledFetchAttribute( $match, 'id' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case 9:
    {
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'roleAssignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['roleAssignment'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'memberRoleAssignments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['memberRoleAssignments'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'memberRoleAssignments', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['memberRoleAssignments'] = $var;
    unset( $var );
}
$text .= '    ';
    } break;
    case 7:
    {
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'roleAssignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['roleAssignment'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'leaderRoleAssignments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['leaderRoleAssignments'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'leaderRoleAssignments', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['leaderRoleAssignments'] = $var;
    unset( $var );
}
$text .= '    ';
    } break;
    default:
    {
$text .= '    ';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_1 ) ) extract( array_pop( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_1 ) );

else
{

unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

unset( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_1 );

}

// foreach ends
$text .= '
<div class="attribute-heading">
    <h3 class="bullet">Leader of</h3>
</div>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'leaderRoleAssignments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['leaderRoleAssignments'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<ul>';
// foreach begins
$skipDelimiter = true;
$fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 = [];
$fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_2 = [];
$fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_2  = 0;
$fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
if ( !isset( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_2 ) ) $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_2 = [];
$fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_2[] = @compact( 'fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_2', 'fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_2' );
unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 );
unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 );
$fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'leaderRoleAssignments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['leaderRoleAssignments'] : null;
if (! isset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 ) ) $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 = NULL;
while ( is_object( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 ) and method_exists( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2, 'templateValue' ) )
    $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2->templateValue();

$fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_2 = is_array( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 ) ? array_keys( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 ) : [];
$fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 = count( $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_2 );
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 = 0;
$fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2;
$fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_2 = false;
if ( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 < 0 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 >= $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 )
{
    $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 = ( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 < 0 ) ? 0 : $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2;
    if ( $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2'. Array count: $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2");   
}
}
if ( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 < 0 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 + $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 > $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 )
{
    if ( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2");
    $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2;
}
if ( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_2 )
{
    $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 - 1 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2;
    $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_2  = 0;
}
else
{
    $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2;
    $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_2  = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 - 1;
}
// foreach
for ( $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_2; $fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_2 < $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 && ( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_2 ? $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2 >= $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 : $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2 <= $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 ); $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_2 ? $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2-- : $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2++ )
{
$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_2[$fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2];
$fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 = $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2[$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_2];
$vars[$rootNamespace]['leaderRoleAssignment'] = $fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_2;
$text .= '<li>';
// def $project
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'leaderRoleAssignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['leaderRoleAssignment'] : null;
$var4 = compiledFetchAttribute( $var3, 'limit_value' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if ( is_string( $var3 ) )
{
	$var2 = explode( "/", $var3 );
}
else if ( is_array( $var3 ) )
{
	$var2 = array( array_slice( $var3, 0, "/" ), array_slice( $var3, "/" ) );
}
else
{
	$var2 = null;
}
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
  $var1 = strrev( $var2 );
}
else if( is_array( $var2 ) )
{
  $var1 = array_reverse( $var2 );
}
unset( $var2 );
$var2 = compiledFetchAttribute( $var1, 1 );
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
if ( $tpl->hasVariable( 'project', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'project' is already defined.", array (
  0 => 
  array (
    0 => 70,
    1 => 0,
    2 => 1916,
  ),
  1 => 
  array (
    0 => 70,
    1 => 109,
    2 => 2025,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl',
) );
    $tpl->setVariable( 'project', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'project', $var, $rootNamespace );
}

$text .= '<a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'project', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['project'] : null;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'project', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['project'] : null;
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

$text .= '</a>';
// undef $project
$tpl->unsetLocalVariable( 'project', $rootNamespace );

$text .= '</li>';
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_2 ) ) extract( array_pop( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_2 ) );

else
{

unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

unset( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_2 );

}

// foreach ends
$text .= '</ul>';
}
else
{
$text .= 'None.';
}
unset( $if_cond );
// if ends

$text .= '
<div class="attribute-heading">
    <h3 class="bullet">Member of</h3>
</div>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'memberRoleAssignments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['memberRoleAssignments'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<ul>';
// foreach begins
$skipDelimiter = true;
$fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 = [];
$fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_3 = [];
$fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_3  = 0;
$fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
if ( !isset( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_3 ) ) $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_3 = [];
$fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_3[] = @compact( 'fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_3', 'fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_3' );
unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 );
unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 );
$fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'memberRoleAssignments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['memberRoleAssignments'] : null;
if (! isset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 ) ) $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 = NULL;
while ( is_object( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 ) and method_exists( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3, 'templateValue' ) )
    $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3->templateValue();

$fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_3 = is_array( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 ) ? array_keys( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 ) : [];
$fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 = count( $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_3 );
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 = 0;
$fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3;
$fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_3 = false;
if ( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 < 0 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 >= $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 )
{
    $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 = ( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 < 0 ) ? 0 : $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3;
    if ( $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3'. Array count: $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3");   
}
}
if ( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 < 0 || $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 + $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 > $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 )
{
    if ( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3");
    $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3;
}
if ( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_3 )
{
    $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 - 1 - $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3;
    $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_3  = 0;
}
else
{
    $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3;
    $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_3  = $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 - 1;
}
// foreach
for ( $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_3; $fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_3 < $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 && ( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_3 ? $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3 >= $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 : $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3 <= $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 ); $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_3 ? $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3-- : $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3++ )
{
$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_3[$fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3];
$fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 = $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3[$fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_3];
$vars[$rootNamespace]['memberRoleAssignment'] = $fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_3;
$text .= '<li>';
// def $project
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'memberRoleAssignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['memberRoleAssignment'] : null;
$var4 = compiledFetchAttribute( $var3, 'limit_value' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if ( is_string( $var3 ) )
{
	$var2 = explode( "/", $var3 );
}
else if ( is_array( $var3 ) )
{
	$var2 = array( array_slice( $var3, 0, "/" ), array_slice( $var3, "/" ) );
}
else
{
	$var2 = null;
}
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
  $var1 = strrev( $var2 );
}
else if( is_array( $var2 ) )
{
  $var1 = array_reverse( $var2 );
}
unset( $var2 );
$var2 = compiledFetchAttribute( $var1, 1 );
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
if ( $tpl->hasVariable( 'project', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'project' is already defined.", array (
  0 => 
  array (
    0 => 87,
    1 => 0,
    2 => 2321,
  ),
  1 => 
  array (
    0 => 87,
    1 => 109,
    2 => 2430,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/user.tpl',
) );
    $tpl->setVariable( 'project', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'project', $var, $rootNamespace );
}

$text .= '<a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'project', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['project'] : null;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'project', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['project'] : null;
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

$text .= '</a>';
// undef $project
$tpl->unsetLocalVariable( 'project', $rootNamespace );

$text .= '</li>';
$fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_3 ) ) extract( array_pop( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_3 ) );

else
{

unset( $fe_array_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_array_keys_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_n_items_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_n_items_processed_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_i_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_key_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_offset_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_max_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_reverse_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_first_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_last_val_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

unset( $fe_variable_stack_6ad41496c3e5fd5163ee57e5c846ef7d_3 );

}

// foreach ends
$text .= '</ul>';
}
else
{
$text .= 'None.';
}
unset( $if_cond );
// if ends

// undef $roleAssignments
$tpl->unsetLocalVariable( 'roleAssignments', $rootNamespace );

$text .= '
</div>
</div>
</div>';

$setArray = $oldSetArray_a35e7218cb6c0e3b00f82e50ac6d7239;
$tpl->Level--;
?>
