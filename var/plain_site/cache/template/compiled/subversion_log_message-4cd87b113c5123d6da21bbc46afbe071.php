<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/override/templates/full/subversion_log_message.tpl
// Timestamp: 1286250001 (Mon Oct 4 20:40:01 PDT 2010)
$oldSetArray_ef2ff6be6964099be840ec3caba59703 = isset( $setArray ) ? $setArray : array();
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
$nod_ef2ff6be6964099be840ec3caba59703 = $object->attribute( 'data_map' );
else
$nod_ef2ff6be6964099be840ec3caba59703 = false;
unset( $node, $object );

$text .= '


<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-subversion_log_message">


<div class="attribute-heading">
    <h1>Revision ';
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
';
// def $websvn_diff_url
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'parent' );
unset( $var2 );
$var2 = $var3;
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
$var8 = $nod_ef2ff6be6964099be840ec3caba59703;
if ( !$var8 )
{
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var9 = compiledFetchAttribute( $var8, 'object' );
unset( $var8 );
$var8 = $var9;
$var9 = compiledFetchAttribute( $var8, 'data_map' );
unset( $var8 );
$var8 = $var9;
}
if ( !isset( $var8['revision'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var8['revision'] does not exist, cannot fetch the value." );
    $var8 = null;
}
else
    $var8 = $var8['revision'];
if ( !is_object( $var8 ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var8 is not an object, cannot fetch content()" );
    $var8 = null;
}
else
{
     $var8Tmp = $var8->content();
     unset( $var8 );
     $var8 = $var8Tmp;
     unset( $var8Tmp );
}
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
$var10 = $nod_ef2ff6be6964099be840ec3caba59703;
if ( !$var10 )
{
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var11 = compiledFetchAttribute( $var10, 'object' );
unset( $var10 );
$var10 = $var11;
$var11 = compiledFetchAttribute( $var10, 'data_map' );
unset( $var10 );
$var10 = $var11;
}
if ( !isset( $var10['revision'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var10['revision'] does not exist, cannot fetch the value." );
    $var10 = null;
}
else
    $var10 = $var10['revision'];
if ( !is_object( $var10 ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var10 is not an object, cannot fetch content()" );
    $var10 = null;
}
else
{
     $var10Tmp = $var10->content();
     unset( $var10 );
     $var10 = $var10Tmp;
     unset( $var10Tmp );
}
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
    0 => 13,
    1 => 0,
    2 => 315,
  ),
  1 => 
  array (
    0 => 20,
    1 => 87,
    2 => 785,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/subversion_log_message.tpl',
) );
    $tpl->setVariable( 'websvn_diff_url', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'websvn_diff_url', $var, $rootNamespace );
}

$text .= '
<p>Committed on ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
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
    0 => 22,
    1 => 86,
    2 => 877,
  ),
  1 => 
  array (
    0 => 22,
    1 => 143,
    2 => 934,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/subversion_log_message.tpl',
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

$text .= '">WebSVN diff</a>]</p>
';
// undef $websvn_diff_url
$tpl->unsetLocalVariable( 'websvn_diff_url', $rootNamespace );

$text .= '
<div class="attribute-long">';
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
          1 => 'log',
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
    0 => 27,
    1 => 0,
    2 => 1044,
  ),
  1 => 
  array (
    0 => 27,
    1 => 54,
    2 => 1098,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/override/templates/full/subversion_log_message.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</div>

</div>
</div>
</div>




<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-subversion_log_message">

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
$oldRestoreIncludeArray_b797f52565fd93c19aef80a48b423ea6 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
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
$restoreIncludeArray = $oldRestoreIncludeArray_b797f52565fd93c19aef80a48b423ea6;

$text .= '

';

$setArray = $oldSetArray_ef2ff6be6964099be840ec3caba59703;
$tpl->Level--;
?>
