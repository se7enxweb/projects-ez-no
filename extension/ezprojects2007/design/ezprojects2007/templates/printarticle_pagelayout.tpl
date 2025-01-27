{cache-block keys=$module_result.content_info.url_alias}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
{section name=JavaScript loop=ezini( 'JavaScriptSettings', 'JavaScriptList', 'design.ini' ) }
    <script language="JavaScript" type="text/javascript" src={concat( 'javascript/',$:item )|ezdesign}></script>
{/section}
    <link rel="stylesheet" type="text/css" href={"stylesheets/core.css"|ezdesign} />
    <link rel="stylesheet" type="text/css" href={"stylesheets/admin.css"|ezdesign} />

<style type="text/css">
{section var=css_file loop=ezini( 'StylesheetSettings', 'CSSFileList', 'design.ini' )}
    @import url({concat( 'stylesheets/',$css_file )|ezdesign});
{/section}
</style>
{include uri="design:page_head.tpl" enable_print=false()}

<body>
{let current_node=fetch(content, node, hash(node_id, $module_result.node_id ) )
	 children=fetch( content,list, hash( parent_node_id, $current_node.node_id,
										 sort_by, $current_node.sort_array,
										 class_filter_type, include,
										 class_filter_array, array( article_subpage ) ) )}
										 
{* Main area START *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-article">

{* Header *}
<div class="attribute-heading">
    <h1>{$current_node.name|wash}</h1>
</div>

{* Created by info *}
<div class="attribute-byline float-break">
    <p class="author"><a href={concat( "/authorcontact/form/", $current_node.object.data_map.author.content.id, "/", $current_node.node_id )|ezurl}>{$current_node.object.data_map.author.content.name}</a></p>
    <p class="date">{$current_node.object.data_map.publication_date.content.timestamp|l10n(datetime)}</p>
</div>

{* Intro *}
<div class="attribute-short">
    {attribute_view_gui attribute=$current_node.object.data_map.intro}
</div>

{* Thumbnail *}
<div class="attribute-image">
    {attribute_view_gui attribute=$current_node.object.data_map.thumbnail image_class=small}
</div>

{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$current_node.object.data_map.body}
</div>



</div>
</div>
</div>

{section loop=$children}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-article">

{* Header *}
<div class="attribute-heading">
    <h1>{$:item.name|wash}</h1>
</div>


{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$:item.object.data_map.body}
</div>

</div>
</div>
</div>

{/section}

{* End main part *}

{* Main area END *}

{/let}
{include uri="design:page_copyright.tpl"}

<!--DEBUG_REPORT-->

</body>
</html>

{/cache-block}