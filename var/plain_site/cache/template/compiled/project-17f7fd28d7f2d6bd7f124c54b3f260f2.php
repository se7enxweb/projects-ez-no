<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl
// Timestamp: 1286250001 (Mon Oct 4 20:40:01 PDT 2010)
$oldSetArray_954394afd3fcfd827c36a1541af80295 = isset( $setArray ) ? $setArray : array();
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
$nod_954394afd3fcfd827c36a1541af80295 = $object->attribute( 'data_map' );
else
$nod_954394afd3fcfd827c36a1541af80295 = false;
unset( $node, $object );

unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( !isset( $vars[$currentNamespace]['current_user'] ) )
{
    $vars[$currentNamespace]['current_user'] = $var;
    unset( $var );
    $setArray[$currentNamespace]['current_user'] = true;
}

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


<div class="attribute-heading">
    <h1>';
unset( $var );
unset( $var1 );
$var1 = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$var1 )
{
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
}
if ( !isset( $var1['name'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1['name'] does not exist, cannot fetch the value." );
    $var1 = null;
}
else
    $var1 = $var1['name'];
if ( !is_object( $var1 ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1 is not an object, cannot fetch content()" );
    $var1 = null;
}
else
{
     $var1Tmp = $var1->content();
     unset( $var1 );
     $var1 = $var1Tmp;
     unset( $var1Tmp );
}
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


<div class="attribute-byline float-break">
    <p class="date">Last updated: ';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%l %d %F %Y %H:%i', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
</div>


<table class="list nohighlight" cellspacing="0">
<tr>
    <th>UNIX name</th>
    <th>Owner</th>
    <th>Status</th>
    <th>Version</th>
    <th>Compatible with</th>
</tr>
<tr class="bglight">
    <td>';
unset( $var );
$var = $nod_954394afd3fcfd827c36a1541af80295;
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
if ( !isset( $var['unix_name'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['unix_name'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['unix_name'];
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

$text .= '</td>
    <td><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'owner' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'main_node' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'owner' );
unset( $var1 );
$var1 = $var2;
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

$text .= '</a></td>
    ';
$vars[$currentNamespace]['status'] = 'Stable';
$text .= '    <td>';
$oldRestoreIncludeArray_0f3ba7376cd56177f5ea0ab85f32ec9d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['status_number'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'status_number', $vars[$currentNamespace]['status_number'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['status_number'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'status_number', 'unset' );

unset( $var );
$var = $nod_954394afd3fcfd827c36a1541af80295;
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
if ( !isset( $var['status'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['status'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['status'];
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
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['status_number'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/status-00f024b79e52c6516aad784785064f7c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/projects/status.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/status-00f024b79e52c6516aad784785064f7c.php' );
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
$tpl->processURI( 'extension/ezprojects2007/design/ezprojects2007/templates/parts/projects/status.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_0f3ba7376cd56177f5ea0ab85f32ec9d;

$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'status', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['status'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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
    </td>
    ';
unset( $vars[$currentNamespace]['status'] );
$text .= '    <td>
    ';
unset( $show );
$show = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$show )
{
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show1 = compiledFetchAttribute( $show, 'object' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'data_map' );
unset( $show );
$show = $show1;
}
if ( !isset( $show['version'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show['version'] does not exist, cannot fetch the value." );
    $show = null;
}
else
    $show = $show['version'];
if ( !is_object( $show ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show is not an object, cannot fetch content()" );
    $show = null;
}
else
{
     $showTmp = $show->content();
     unset( $show );
     $show = $showTmp;
     unset( $showTmp );
}
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        ';
unset( $var );
unset( $var1 );
$var1 = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$var1 )
{
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
}
if ( !isset( $var1['version'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1['version'] does not exist, cannot fetch the value." );
    $var1 = null;
}
else
    $var1 = $var1['version'];
if ( !is_object( $var1 ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1 is not an object, cannot fetch content()" );
    $var1 = null;
}
else
{
     $var1Tmp = $var1->content();
     unset( $var1 );
     $var1 = $var1Tmp;
     unset( $var1Tmp );
}
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

$text .= '
    ';
}
else
{

unset( $show );

$text .= '        N/A
    ';
}

$text .= '    </td>
    <td>
    ';
unset( $show );
$show = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$show )
{
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show1 = compiledFetchAttribute( $show, 'object' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'data_map' );
unset( $show );
$show = $show1;
}
if ( !isset( $show['compatible_with'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show['compatible_with'] does not exist, cannot fetch the value." );
    $show = null;
}
else
    $show = $show['compatible_with'];
if ( !is_object( $show ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show is not an object, cannot fetch content()" );
    $show = null;
}
else
{
     $showTmp = $show->content();
     unset( $show );
     $show = $showTmp;
     unset( $showTmp );
}
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        ';
unset( $var );
unset( $var1 );
$var1 = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$var1 )
{
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
}
if ( !isset( $var1['compatible_with'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1['compatible_with'] does not exist, cannot fetch the value." );
    $var1 = null;
}
else
    $var1 = $var1['compatible_with'];
if ( !is_object( $var1 ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1 is not an object, cannot fetch content()" );
    $var1 = null;
}
else
{
     $var1Tmp = $var1->content();
     unset( $var1 );
     $var1 = $var1Tmp;
     unset( $var1Tmp );
}
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

$text .= '
    ';
}
else
{

unset( $show );

$text .= '        N/A
    ';
}

$text .= '    </td>
</tr>
</table>

';
unset( $show );
$show = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$show )
{
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show1 = compiledFetchAttribute( $show, 'object' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'data_map' );
unset( $show );
$show = $show1;
}
if ( !isset( $show['brief'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show['brief'] does not exist, cannot fetch the value." );
    $show = null;
}
else
    $show = $show['brief'];
if ( !is_object( $show ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show is not an object, cannot fetch content()" );
    $show = null;
}
else
{
     $showTmp = $show->content();
     unset( $show );
     $show = $showTmp;
     unset( $showTmp );
}
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <div class="attribute-short">
        ';
unset( $var );
$var = $nod_954394afd3fcfd827c36a1541af80295;
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
if ( !isset( $var['brief'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['brief'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['brief'];
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
$varData = array( 'value' => $var );
$tpl->processOperator( 'simpletags',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'autolink',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    </div>';
}

$text .= '
';
unset( $show );
$show = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$show )
{
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show1 = compiledFetchAttribute( $show, 'object' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'data_map' );
unset( $show );
$show = $show1;
}
if ( !isset( $show['full'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show['full'] does not exist, cannot fetch the value." );
    $show = null;
}
else
    $show = $show['full'];
if ( !is_object( $show ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show is not an object, cannot fetch content()" );
    $show = null;
}
else
{
     $showTmp = $show->content();
     unset( $show );
     $show = $showTmp;
     unset( $showTmp );
}
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <div class="attribute-long">
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
          1 => 'full',
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
    0 => 63,
    1 => 8,
    2 => 1813,
  ),
  1 => 
  array (
    0 => 63,
    1 => 63,
    2 => 1868,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>';
}

$text .= '
';
unset( $show );
$show = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$show )
{
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show1 = compiledFetchAttribute( $show, 'object' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'data_map' );
unset( $show );
$show = $show1;
}
if ( !isset( $show['screenshot'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show['screenshot'] does not exist, cannot fetch the value." );
    $show = null;
}
else
    $show = $show['screenshot'];
if ( !is_object( $show ) )
{
    $show = null;
}
else if ( $show->hasAttribute( "has_content" ) )
{
    $show = $show->attribute( "has_content" );
}
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <h2>Screenshot</h2>
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
          1 => 'screenshot',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'smallbanner',
      2 => false,
    ),
  ),
  'href' => 
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
          1 => 'screenshot',
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
          1 => 'content',
          2 => false,
        ),
      ),
      2 => false,
    ),
    4 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'original',
          2 => false,
        ),
      ),
      2 => false,
    ),
    5 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'full_path',
          2 => false,
        ),
      ),
      2 => false,
    ),
    6 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezroot',
        1 => 
        array (
          0 => 
          array (
            0 => 3,
            1 => 'no',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'target' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => '_blank',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 71,
    1 => 8,
    2 => 2037,
  ),
  1 => 
  array (
    0 => 71,
    1 => 181,
    2 => 2210,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>
    ';
unset( $show );
$show = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$show )
{
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$show1 = compiledFetchAttribute( $show, 'object' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'data_map' );
unset( $show );
$show = $show1;
}
if ( !isset( $show['screenshot'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show['screenshot'] does not exist, cannot fetch the value." );
    $show = null;
}
else
    $show = $show['screenshot'];
if ( !is_object( $show ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$show is not an object, cannot fetch content()" );
    $show = null;
}
else
{
     $showTmp = $show->content();
     unset( $show );
     $show = $showTmp;
     unset( $showTmp );
}
$show1 = compiledFetchAttribute( $show, 'alternative_text' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '        <div class="attribute-caption" style="width: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'screenshot' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'smallbanner' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'width' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= 'px">
            ';
unset( $var );
unset( $var1 );
$var1 = $nod_954394afd3fcfd827c36a1541af80295;
if ( !$var1 )
{
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
}
if ( !isset( $var1['screenshot'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1['screenshot'] does not exist, cannot fetch the value." );
    $var1 = null;
}
else
    $var1 = $var1['screenshot'];
if ( !is_object( $var1 ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var1 is not an object, cannot fetch content()" );
    $var1 = null;
}
else
{
     $var1Tmp = $var1->content();
     unset( $var1 );
     $var1 = $var1Tmp;
     unset( $var1Tmp );
}
$var2 = compiledFetchAttribute( $var1, 'alternative_text' );
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

$text .= '
        </div>
    ';
}

}

$text .= '
</div>
</div>
</div>



';
$oldRestoreIncludeArray_4dc7e96c1ad862acec6da34e52c7f680 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
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
if ( isset( $namespace ) and isset( $vars[$namespace]['showTrackChanges'] ) )
    $restoreIncludeArray[] = array( $namespace, 'showTrackChanges', $vars[$namespace]['showTrackChanges'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['showTrackChanges'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'showTrackChanges', 'unset' );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "actions";
else
    $namespace .= ':actions';
$vars[$namespace]['showTrackChanges'] = true;
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
$restoreIncludeArray = $oldRestoreIncludeArray_4dc7e96c1ad862acec6da34e52c7f680;

$text .= '


';
// def $newsContainers
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
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "news" ),
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
if ( $tpl->hasVariable( 'newsContainers', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'newsContainers' is already defined.", array (
  0 => 
  array (
    0 => 116,
    1 => 0,
    2 => 3363,
  ),
  1 => 
  array (
    0 => 117,
    1 => 38,
    2 => 3547,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
) );
    $tpl->setVariable( 'newsContainers', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'newsContainers', $var, $rootNamespace );
}

// def $newsContainer
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'newsContainers', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['newsContainers'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'newsContainer', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'newsContainer' is already defined.", array (
  0 => 
  array (
    0 => 116,
    1 => 0,
    2 => 3363,
  ),
  1 => 
  array (
    0 => 117,
    1 => 38,
    2 => 3547,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
) );
    $tpl->setVariable( 'newsContainer', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'newsContainer', $var, $rootNamespace );
}

$cacheKeys = false;
unset( $subtreeExpiry );
unset( $subtreeExpiry );
$subtreeExpiry = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'newsContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['newsContainer'] : null;
$subtreeExpiry1 = compiledFetchAttribute( $subtreeExpiry, 'path_identification_string' );
unset( $subtreeExpiry );
$subtreeExpiry = $subtreeExpiry1;
if (! isset( $subtreeExpiry ) ) $subtreeExpiry = NULL;
while ( is_object( $subtreeExpiry ) and method_exists( $subtreeExpiry, 'templateValue' ) )
    $subtreeExpiry = $subtreeExpiry->templateValue();

$cacheKeys = array( $cacheKeys, "118_0_118_68_extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl", "ezprojects" );

list($cacheHandler_2f8690e1a0696768d28c434fc34910e9, $contentData) =
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
$text .= '<div class="template-design area-sidebar-normal">
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

<div class="attribute-heading">
    <h2 class="bullet"><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'newsContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['newsContainer'] : null;
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

$text .= '>Latest news</a></h2>
</div>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'newsContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['newsContainer'] : null;
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
       "0" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => "5",
    'depth' => "1",
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
$text .= '<ul class="linklist">';
// foreach begins
$skipDelimiter = true;
$fe_array_34420a03402badeba8f6f61b5e4729dc_1 = [];
$fe_array_keys_34420a03402badeba8f6f61b5e4729dc_1 = [];
$fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_1  = 0;
$fe_i_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_key_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_val_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_offset_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_max_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_reverse_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_first_val_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_last_val_34420a03402badeba8f6f61b5e4729dc_1 = 0;
if ( !isset( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 ) ) $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 = [];
$fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_1[] = @compact( 'fe_array_34420a03402badeba8f6f61b5e4729dc_1', 'fe_array_keys_34420a03402badeba8f6f61b5e4729dc_1', 'fe_n_items_34420a03402badeba8f6f61b5e4729dc_1', 'fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_1', 'fe_i_34420a03402badeba8f6f61b5e4729dc_1', 'fe_key_34420a03402badeba8f6f61b5e4729dc_1', 'fe_val_34420a03402badeba8f6f61b5e4729dc_1', 'fe_offset_34420a03402badeba8f6f61b5e4729dc_1', 'fe_max_34420a03402badeba8f6f61b5e4729dc_1', 'fe_reverse_34420a03402badeba8f6f61b5e4729dc_1', 'fe_first_val_34420a03402badeba8f6f61b5e4729dc_1', 'fe_last_val_34420a03402badeba8f6f61b5e4729dc_1' );
unset( $fe_array_34420a03402badeba8f6f61b5e4729dc_1 );
unset( $fe_array_34420a03402badeba8f6f61b5e4729dc_1 );
$fe_array_34420a03402badeba8f6f61b5e4729dc_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news_list'] : null;
if (! isset( $fe_array_34420a03402badeba8f6f61b5e4729dc_1 ) ) $fe_array_34420a03402badeba8f6f61b5e4729dc_1 = NULL;
while ( is_object( $fe_array_34420a03402badeba8f6f61b5e4729dc_1 ) and method_exists( $fe_array_34420a03402badeba8f6f61b5e4729dc_1, 'templateValue' ) )
    $fe_array_34420a03402badeba8f6f61b5e4729dc_1 = $fe_array_34420a03402badeba8f6f61b5e4729dc_1->templateValue();

$fe_array_keys_34420a03402badeba8f6f61b5e4729dc_1 = is_array( $fe_array_34420a03402badeba8f6f61b5e4729dc_1 ) ? array_keys( $fe_array_34420a03402badeba8f6f61b5e4729dc_1 ) : [];
$fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 = count( $fe_array_keys_34420a03402badeba8f6f61b5e4729dc_1 );
$fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_offset_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$fe_max_34420a03402badeba8f6f61b5e4729dc_1 = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 - $fe_offset_34420a03402badeba8f6f61b5e4729dc_1;
$fe_reverse_34420a03402badeba8f6f61b5e4729dc_1 = false;
if ( $fe_offset_34420a03402badeba8f6f61b5e4729dc_1 < 0 || $fe_offset_34420a03402badeba8f6f61b5e4729dc_1 >= $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 )
{
    $fe_offset_34420a03402badeba8f6f61b5e4729dc_1 = ( $fe_offset_34420a03402badeba8f6f61b5e4729dc_1 < 0 ) ? 0 : $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1;
    if ( $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 || $fe_offset_34420a03402badeba8f6f61b5e4729dc_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_34420a03402badeba8f6f61b5e4729dc_1'. Array count: $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1");   
}
}
if ( $fe_max_34420a03402badeba8f6f61b5e4729dc_1 < 0 || $fe_offset_34420a03402badeba8f6f61b5e4729dc_1 + $fe_max_34420a03402badeba8f6f61b5e4729dc_1 > $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 )
{
    if ( $fe_max_34420a03402badeba8f6f61b5e4729dc_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_34420a03402badeba8f6f61b5e4729dc_1");
    $fe_max_34420a03402badeba8f6f61b5e4729dc_1 = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 - $fe_offset_34420a03402badeba8f6f61b5e4729dc_1;
}
if ( $fe_reverse_34420a03402badeba8f6f61b5e4729dc_1 )
{
    $fe_first_val_34420a03402badeba8f6f61b5e4729dc_1 = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 - 1 - $fe_offset_34420a03402badeba8f6f61b5e4729dc_1;
    $fe_last_val_34420a03402badeba8f6f61b5e4729dc_1  = 0;
}
else
{
    $fe_first_val_34420a03402badeba8f6f61b5e4729dc_1 = $fe_offset_34420a03402badeba8f6f61b5e4729dc_1;
    $fe_last_val_34420a03402badeba8f6f61b5e4729dc_1  = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 - 1;
}
// foreach
for ( $fe_i_34420a03402badeba8f6f61b5e4729dc_1 = $fe_first_val_34420a03402badeba8f6f61b5e4729dc_1; $fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_1 < $fe_max_34420a03402badeba8f6f61b5e4729dc_1 && ( $fe_reverse_34420a03402badeba8f6f61b5e4729dc_1 ? $fe_i_34420a03402badeba8f6f61b5e4729dc_1 >= $fe_last_val_34420a03402badeba8f6f61b5e4729dc_1 : $fe_i_34420a03402badeba8f6f61b5e4729dc_1 <= $fe_last_val_34420a03402badeba8f6f61b5e4729dc_1 ); $fe_reverse_34420a03402badeba8f6f61b5e4729dc_1 ? $fe_i_34420a03402badeba8f6f61b5e4729dc_1-- : $fe_i_34420a03402badeba8f6f61b5e4729dc_1++ )
{
$fe_key_34420a03402badeba8f6f61b5e4729dc_1 = $fe_array_keys_34420a03402badeba8f6f61b5e4729dc_1[$fe_i_34420a03402badeba8f6f61b5e4729dc_1];
$fe_val_34420a03402badeba8f6f61b5e4729dc_1 = $fe_array_34420a03402badeba8f6f61b5e4729dc_1[$fe_key_34420a03402badeba8f6f61b5e4729dc_1];
$vars[$rootNamespace]['news'] = $fe_val_34420a03402badeba8f6f61b5e4729dc_1;
$text .= '<li>';
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
$vars[$namespace]['show_project'] = false;
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
if ( file_exists( 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/listitem.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' );
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
$text .= '</li>';
$fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 ) ) extract( array_pop( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 ) );

else
{

unset( $fe_array_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_array_keys_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_n_items_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_i_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_key_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_val_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_offset_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_max_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_reverse_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_first_val_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_last_val_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 );

}

// foreach ends
$text .= '</ul>
';
}
else
{
$text .= '<p>No news yet.</p>';
}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['news_list'] );
$text .= '
</div>
</div>
</div>';
$cachedText = $text;
$cacheHandler_2f8690e1a0696768d28c434fc34910e9->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_2f8690e1a0696768d28c434fc34910e9 );
}

// undef $newsContainers
$tpl->unsetLocalVariable( 'newsContainers', $rootNamespace );

// undef $newsContainer
$tpl->unsetLocalVariable( 'newsContainer', $rootNamespace );

$text .= '

';
// def $reviewContainers
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
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "reviews" ),
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
if ( $tpl->hasVariable( 'reviewContainers', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reviewContainers' is already defined.", array (
  0 => 
  array (
    0 => 152,
    1 => 0,
    2 => 4359,
  ),
  1 => 
  array (
    0 => 153,
    1 => 42,
    2 => 4552,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
) );
    $tpl->setVariable( 'reviewContainers', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reviewContainers', $var, $rootNamespace );
}

// def $reviewContainer
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reviewContainers', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reviewContainers'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reviewContainer', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reviewContainer' is already defined.", array (
  0 => 
  array (
    0 => 152,
    1 => 0,
    2 => 4359,
  ),
  1 => 
  array (
    0 => 153,
    1 => 42,
    2 => 4552,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
) );
    $tpl->setVariable( 'reviewContainer', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reviewContainer', $var, $rootNamespace );
}

$text .= '
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

<div class="attribute-heading">
    <h2 class="bullet"><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reviewContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reviewContainer'] : null;
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

$text .= '>Latest reviews</a></h2>
</div>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reviewContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reviewContainer'] : null;
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
       "0" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => "3",
    'depth' => "1",
    'depth_operator' => false,
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "review" ),
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
$vars[$currentNamespace]['review_list'] = $var;
unset( $var );
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'review_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['review_list'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
    ';
// def $avgRating
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezrating_summary',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 239,
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'reviewContainer',
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
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'avgRating', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'avgRating' is already defined.", array (
  0 => 
  array (
    0 => 166,
    1 => 4,
    2 => 4981,
  ),
  1 => 
  array (
    0 => 166,
    1 => 65,
    2 => 5042,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
) );
    $tpl->setVariable( 'avgRating', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'avgRating', $var, $rootNamespace );
}

$text .= '
    <p>
    ';
$for_firstval_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$for_lastval_34420a03402badeba8f6f61b5e4729dc_1 = 0;
$for_i_34420a03402badeba8f6f61b5e4729dc_1 = 0;
// for begins
if ( !isset( $for_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 ) ) $for_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 = [];
$for_variable_stack_34420a03402badeba8f6f61b5e4729dc_1[] = @compact( 'for_firstval_34420a03402badeba8f6f61b5e4729dc_1', 'for_lastval_34420a03402badeba8f6f61b5e4729dc_1', 'for_i_34420a03402badeba8f6f61b5e4729dc_1' );
$for_firstval_34420a03402badeba8f6f61b5e4729dc_1 = 1;
$for_lastval_34420a03402badeba8f6f61b5e4729dc_1 = 5;
$skipDelimiter = true;
for ( $for_i_34420a03402badeba8f6f61b5e4729dc_1 = $for_firstval_34420a03402badeba8f6f61b5e4729dc_1 ; ; $for_firstval_34420a03402badeba8f6f61b5e4729dc_1 < $for_lastval_34420a03402badeba8f6f61b5e4729dc_1 ? $for_i_34420a03402badeba8f6f61b5e4729dc_1++ : $for_i_34420a03402badeba8f6f61b5e4729dc_1-- )
{
$vars[$rootNamespace]['i'] = $for_i_34420a03402badeba8f6f61b5e4729dc_1;
if ( !( $for_firstval_34420a03402badeba8f6f61b5e4729dc_1 < $for_lastval_34420a03402badeba8f6f61b5e4729dc_1 ? $for_i_34420a03402badeba8f6f61b5e4729dc_1 <= $for_lastval_34420a03402badeba8f6f61b5e4729dc_1 : $for_i_34420a03402badeba8f6f61b5e4729dc_1 >= $for_lastval_34420a03402badeba8f6f61b5e4729dc_1 ) )
   break;

$text .= '        ';
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22->templateValue();
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22->templateValue();
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_21 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 - 0.000000;
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 );
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21->templateValue();
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avgRating', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avgRating'] : null;
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_23 = compiledFetchAttribute( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22, 'average_rating' );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_23;
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22->templateValue();
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22->templateValue();
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 = ( ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21 ) <= ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 ) );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_21, $elseif_cond_34420a03402badeba8f6f61b5e4729dc_22 );
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2->templateValue();

unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32->templateValue();
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32->templateValue();
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_31 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 - 0.000000;
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 );
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31->templateValue();
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avgRating', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avgRating'] : null;
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_33 = compiledFetchAttribute( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32, 'average_rating' );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_33;
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32->templateValue();
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32->templateValue();
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 = ( ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31 ) <= ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 ) );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_31, $elseif_cond_34420a03402badeba8f6f61b5e4729dc_32 );
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3->templateValue();

unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42->templateValue();
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42->templateValue();
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_41 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 - 0.000000;
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 );
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41->templateValue();
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avgRating', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avgRating'] : null;
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_43 = compiledFetchAttribute( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42, 'average_rating' );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 );
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_43;
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42->templateValue();
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42->templateValue();
$elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 = ( ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41 ) <= ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 ) );
unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_41, $elseif_cond_34420a03402badeba8f6f61b5e4729dc_42 );
if (! isset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 ) ) $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 = NULL;
while ( is_object( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 ) and method_exists( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4, 'templateValue' ) )
    $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 = $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avgRating', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avgRating'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'average_rating' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) <= ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <img src="/extension/ezrating/design/standard/images/rating/star.gif" />
        ';
}
elseif ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 )
{
$text .= '            <img src="/extension/ezrating/design/standard/images/rating/star-three-fourth.gif" />
        ';
}
elseif ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 )
{
$text .= '            <img src="/extension/ezrating/design/standard/images/rating/star-half.gif" />
        ';
}
elseif ( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 )
{
$text .= '            <img src="/extension/ezrating/design/standard/images/rating/star-one-fourth.gif" />
        ';
}
else
{
$text .= '            <img src="/extension/ezrating/design/standard/images/rating/star-empty.gif" />
        ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_3 );

unset( $elseif_cond_34420a03402badeba8f6f61b5e4729dc_4 );

$text .= '    ';
} // for
if ( count( $for_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 ) ) extract( array_pop( $for_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 ) );

else
{

unset( $vars[$rootNamespace]['i'] );
unset( $for_firstval_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $for_lastval_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $for_i_34420a03402badeba8f6f61b5e4729dc_1 );

unset( $for_variable_stack_34420a03402badeba8f6f61b5e4729dc_1 );

}

$skipDelimiter = false;
// for ends

$text .= '    </p>

    <p>Average rating ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avgRating', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avgRating'] : null;
$var2 = compiledFetchAttribute( $var1, 'average_rating' );
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

$var = $locale->formatNumber( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' by ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avgRating', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avgRating'] : null;
$var1 = compiledFetchAttribute( $var, 'reviewer_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' reviewers.</p>

    ';
// undef $avgRating
$tpl->unsetLocalVariable( 'avgRating', $rootNamespace );

$text .= '
    <ul class="linklist">
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_34420a03402badeba8f6f61b5e4729dc_2 = [];
$fe_array_keys_34420a03402badeba8f6f61b5e4729dc_2 = [];
$fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_2  = 0;
$fe_i_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_key_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_val_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_offset_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_max_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_reverse_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_first_val_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_last_val_34420a03402badeba8f6f61b5e4729dc_2 = 0;
if ( !isset( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_2 ) ) $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_2 = [];
$fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_2[] = @compact( 'fe_array_34420a03402badeba8f6f61b5e4729dc_2', 'fe_array_keys_34420a03402badeba8f6f61b5e4729dc_2', 'fe_n_items_34420a03402badeba8f6f61b5e4729dc_2', 'fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_2', 'fe_i_34420a03402badeba8f6f61b5e4729dc_2', 'fe_key_34420a03402badeba8f6f61b5e4729dc_2', 'fe_val_34420a03402badeba8f6f61b5e4729dc_2', 'fe_offset_34420a03402badeba8f6f61b5e4729dc_2', 'fe_max_34420a03402badeba8f6f61b5e4729dc_2', 'fe_reverse_34420a03402badeba8f6f61b5e4729dc_2', 'fe_first_val_34420a03402badeba8f6f61b5e4729dc_2', 'fe_last_val_34420a03402badeba8f6f61b5e4729dc_2' );
unset( $fe_array_34420a03402badeba8f6f61b5e4729dc_2 );
unset( $fe_array_34420a03402badeba8f6f61b5e4729dc_2 );
$fe_array_34420a03402badeba8f6f61b5e4729dc_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'review_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['review_list'] : null;
if (! isset( $fe_array_34420a03402badeba8f6f61b5e4729dc_2 ) ) $fe_array_34420a03402badeba8f6f61b5e4729dc_2 = NULL;
while ( is_object( $fe_array_34420a03402badeba8f6f61b5e4729dc_2 ) and method_exists( $fe_array_34420a03402badeba8f6f61b5e4729dc_2, 'templateValue' ) )
    $fe_array_34420a03402badeba8f6f61b5e4729dc_2 = $fe_array_34420a03402badeba8f6f61b5e4729dc_2->templateValue();

$fe_array_keys_34420a03402badeba8f6f61b5e4729dc_2 = is_array( $fe_array_34420a03402badeba8f6f61b5e4729dc_2 ) ? array_keys( $fe_array_34420a03402badeba8f6f61b5e4729dc_2 ) : [];
$fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 = count( $fe_array_keys_34420a03402badeba8f6f61b5e4729dc_2 );
$fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_offset_34420a03402badeba8f6f61b5e4729dc_2 = 0;
$fe_max_34420a03402badeba8f6f61b5e4729dc_2 = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 - $fe_offset_34420a03402badeba8f6f61b5e4729dc_2;
$fe_reverse_34420a03402badeba8f6f61b5e4729dc_2 = false;
if ( $fe_offset_34420a03402badeba8f6f61b5e4729dc_2 < 0 || $fe_offset_34420a03402badeba8f6f61b5e4729dc_2 >= $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 )
{
    $fe_offset_34420a03402badeba8f6f61b5e4729dc_2 = ( $fe_offset_34420a03402badeba8f6f61b5e4729dc_2 < 0 ) ? 0 : $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2;
    if ( $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 || $fe_offset_34420a03402badeba8f6f61b5e4729dc_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_34420a03402badeba8f6f61b5e4729dc_2'. Array count: $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2");   
}
}
if ( $fe_max_34420a03402badeba8f6f61b5e4729dc_2 < 0 || $fe_offset_34420a03402badeba8f6f61b5e4729dc_2 + $fe_max_34420a03402badeba8f6f61b5e4729dc_2 > $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 )
{
    if ( $fe_max_34420a03402badeba8f6f61b5e4729dc_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_34420a03402badeba8f6f61b5e4729dc_2");
    $fe_max_34420a03402badeba8f6f61b5e4729dc_2 = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 - $fe_offset_34420a03402badeba8f6f61b5e4729dc_2;
}
if ( $fe_reverse_34420a03402badeba8f6f61b5e4729dc_2 )
{
    $fe_first_val_34420a03402badeba8f6f61b5e4729dc_2 = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 - 1 - $fe_offset_34420a03402badeba8f6f61b5e4729dc_2;
    $fe_last_val_34420a03402badeba8f6f61b5e4729dc_2  = 0;
}
else
{
    $fe_first_val_34420a03402badeba8f6f61b5e4729dc_2 = $fe_offset_34420a03402badeba8f6f61b5e4729dc_2;
    $fe_last_val_34420a03402badeba8f6f61b5e4729dc_2  = $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 - 1;
}
// foreach
for ( $fe_i_34420a03402badeba8f6f61b5e4729dc_2 = $fe_first_val_34420a03402badeba8f6f61b5e4729dc_2; $fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_2 < $fe_max_34420a03402badeba8f6f61b5e4729dc_2 && ( $fe_reverse_34420a03402badeba8f6f61b5e4729dc_2 ? $fe_i_34420a03402badeba8f6f61b5e4729dc_2 >= $fe_last_val_34420a03402badeba8f6f61b5e4729dc_2 : $fe_i_34420a03402badeba8f6f61b5e4729dc_2 <= $fe_last_val_34420a03402badeba8f6f61b5e4729dc_2 ); $fe_reverse_34420a03402badeba8f6f61b5e4729dc_2 ? $fe_i_34420a03402badeba8f6f61b5e4729dc_2-- : $fe_i_34420a03402badeba8f6f61b5e4729dc_2++ )
{
$fe_key_34420a03402badeba8f6f61b5e4729dc_2 = $fe_array_keys_34420a03402badeba8f6f61b5e4729dc_2[$fe_i_34420a03402badeba8f6f61b5e4729dc_2];
$fe_val_34420a03402badeba8f6f61b5e4729dc_2 = $fe_array_34420a03402badeba8f6f61b5e4729dc_2[$fe_key_34420a03402badeba8f6f61b5e4729dc_2];
$vars[$rootNamespace]['review'] = $fe_val_34420a03402badeba8f6f61b5e4729dc_2;
$text .= '        <li>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'review', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['review'] : null;
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
if ( file_exists( 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/listitem.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' );
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
$fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_2 ) ) extract( array_pop( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_2 ) );

else
{

unset( $fe_array_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_array_keys_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_n_items_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_n_items_processed_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_i_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_key_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_val_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_offset_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_max_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_reverse_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_first_val_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_last_val_34420a03402badeba8f6f61b5e4729dc_2 );

unset( $fe_variable_stack_34420a03402badeba8f6f61b5e4729dc_2 );

}

// foreach ends
$text .= '    </ul>
';
}
else
{
$text .= '
    <p>This project has no reviews yet. <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reviewContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reviewContainer'] : null;
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

$text .= '>Be the first one to review it!</a></p>
';
}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['review_list'] );
$text .= '
</div>
</div>
</div>

';
// def $forumContainers
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
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "forums" ),
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
if ( $tpl->hasVariable( 'forumContainers', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'forumContainers' is already defined.", array (
  0 => 
  array (
    0 => 206,
    1 => 0,
    2 => 6159,
  ),
  1 => 
  array (
    0 => 207,
    1 => 40,
    2 => 6348,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
) );
    $tpl->setVariable( 'forumContainers', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'forumContainers', $var, $rootNamespace );
}

// def $forumContainer
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'forumContainers', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['forumContainers'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'forumContainer', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'forumContainer' is already defined.", array (
  0 => 
  array (
    0 => 206,
    1 => 0,
    2 => 6159,
  ),
  1 => 
  array (
    0 => 207,
    1 => 40,
    2 => 6348,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl',
) );
    $tpl->setVariable( 'forumContainer', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'forumContainer', $var, $rootNamespace );
}

$cacheKeys = false;
unset( $subtreeExpiry );
unset( $subtreeExpiry );
$subtreeExpiry = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'forumContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['forumContainer'] : null;
$subtreeExpiry1 = compiledFetchAttribute( $subtreeExpiry, 'path_identification_string' );
unset( $subtreeExpiry );
$subtreeExpiry = $subtreeExpiry1;
if (! isset( $subtreeExpiry ) ) $subtreeExpiry = NULL;
while ( is_object( $subtreeExpiry ) and method_exists( $subtreeExpiry, 'templateValue' ) )
    $subtreeExpiry = $subtreeExpiry->templateValue();

$cacheKeys = array( $cacheKeys, "208_0_208_69_extension/ezprojects2007/design/ezprojects2007/override/templates/full/project.tpl", "ezprojects" );

list($cacheHandler_74f37883743e338f872ee9bbbd967b12, $contentData) =
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
$text .= '<div class="template-design area-sidebar-normal">
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

<div class="attribute-heading">
    <h2 class="bullet"><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'forumContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['forumContainer'] : null;
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

$text .= '>Latest forum activity</a></h2>
</div>
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'forumContainer', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['forumContainer'] : null;
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
    'sort_by' => array( "modified_subnode",
       "0" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => "10",
    'depth' => "2",
    'depth_operator' => false,
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "forum_message" ),
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
$vars[$currentNamespace]['forum_list'] = $var;
unset( $var );
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'forum_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['forum_list'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <ul class="linklist">
        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'forum_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['forum_list'] : null;
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

$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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
       "0" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => "1",
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "forum_message" ),
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
$vars[$currentNamespace]['last_reply_array'] = $var;
unset( $var );
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'last_reply_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['last_reply_array'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['last_reply'] = $var;
unset( $var );
$text .= '            <li>
                ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'last_reply', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['last_reply'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'last_reply', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['last_reply'] : null;
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
if ( file_exists( 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/listitem.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' );
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
$text .= '                ';
}
else
{

unset( $show );

$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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
if ( file_exists( 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/review.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/review-a4739d41a8ebe683bf94dd5ce2f14695.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article-19dd3b427247c16cc23f5210854a86ce.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/rss_import.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/rss_import-ae1a0f7192a154a501af288f3c41e4b7.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/article_container.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/article_container-b5c01a96dd07517288342ad8d84b5270.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/comment.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/comment-f360b9214a38dc78a7050ae34ff42038.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/project.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/project-73bea2c3edd32011fcab1a1b9535313f.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/forum_message.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/forum_message-4b81a57203eca095a8cc0facafaac288.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/log.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/log-7400c172946524d256cb9941c1e9fe7d.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezprojects2007/design/ezprojects2007/override/templates/listitem/specification.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/specification-8c208f75fdc54375b7a09e68b92da9a1.php' );
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
if ( file_exists( 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/node/view/listitem.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/listitem-79fccac5e16076a9518986b7d7a5fe8d.php' );
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
$text .= '                ';
}

$text .= '            </li>
            ';
unset( $vars[$currentNamespace]['last_reply_array'] );
unset( $vars[$currentNamespace]['last_reply'] );
$text .= '        ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '    </ul>';
}
else
{
$text .= '<p>No forum messages yet.</p>';
}
unset( $if_cond );
// if ends

unset( $vars[$currentNamespace]['forum_list'] );
$text .= '
</div>
</div>
</div>';
$cachedText = $text;
$cacheHandler_74f37883743e338f872ee9bbbd967b12->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_74f37883743e338f872ee9bbbd967b12 );
}

// undef $forumContainers
$tpl->unsetLocalVariable( 'forumContainers', $rootNamespace );

// undef $forumContainer
$tpl->unsetLocalVariable( 'forumContainer', $rootNamespace );

$text .= '

';
if ( isset( $setArray[$currentNamespace]['current_user'] ) )
{
unset( $vars[$currentNamespace]['current_user'] );
}


$setArray = $oldSetArray_954394afd3fcfd827c36a1541af80295;
$tpl->Level--;
?>
