<?php
// URI:       extension/ezprojects2007/design/ezprojects2007/templates/parts/searchbox.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/parts/searchbox.tpl
// Timestamp: 1286250000 (Mon Oct 4 20:40:00 PDT 2010)
$oldSetArray_67991422a07a82c14008a19d2e4fcbd9 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="searchbox">
<form action="/content/advancedsearch" method="get">

<div class="block">
<div class="element">
<input id="searchbutton" class="button" type="submit" value="Search" />
</div>

<div class="element searchstring">
    <label for="searchtext" class="hide">Search text:</label>
    <input id="searchtext" name="SearchText" type="text" size="12" />
    

    </div>

</div>
</form>
</div>
';

$setArray = $oldSetArray_67991422a07a82c14008a19d2e4fcbd9;
$tpl->Level--;
?>
