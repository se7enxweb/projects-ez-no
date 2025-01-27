{* Full view for file *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

<div class="attribute-link">
    <p>Download: {attribute_view_gui attribute=$node.object.data_map.file}</p>
</div>

<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

</div>
</div>
</div>

{* Right info *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">File info</h2>
</div>

<div class="attribute-heading">
    <h3>Published</h2>
</div>

<p class="date">{$node.object.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>

{if $node.object.published|ne($node.object.modified)}
<div class="attribute-heading">
    <h3>Modified</h2>
</div>

<p class="date">{$node.object.modified|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
{/if}

<div class="attribute-heading">
    <h3>Size</h2>
</div>

<p>{$node.object.data_map.file.content.filesize|si( byte )}</p>

<div class="attribute-heading">
    <h3>Download count</h2>
</div>
<p>{if $node.object.data_map.file.content.download_count}{$node.object.data_map.file.content.download_count}{else}0{/if}</p>

</div>
</div>
</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node}