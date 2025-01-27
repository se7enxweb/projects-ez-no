{* Full view for presentation *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-presentation">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{* Speaker/date *}
<div class="attribute-byline float-break">
    <p class="author">{$node.object.data_map.speaker.content|wash()}</p>
    <p class="date">{attribute_view_gui attribute=$node.object.data_map.date}</p>
</div>

{* Event *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.event}
</div>

{* Place *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.place}
</div>

{* URL *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.url}
</div>

{* Download *}
{if $node.object.data_map.file.content}
<div class="attribute-link">
    <p>Download: {attribute_view_gui attribute=$node.object.data_map.file}</p>
</div>
{/if}

</div>
</div>
</div>