{* Line view for class article *}

<div class="content-view-line">
<div class="class-article">

{* Header *}
<div class="attribute-heading">
    <h2><a title="{$node.name|wash}" href={$node.url_alias|ezurl}>{if $show_project}[{$node.parent.parent.data_map.name.content|wash}] - {/if}{$node.name|wash}</a></h2>
</div>

{* Publish date and project *}
<div class="attribute-byline float-break">
    <p class="author"><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name|wash}</a></p>
    <p class="date">{$node.object.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
    <div class="break"></div>
</div>

{* Thumbnail *}
<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.thumbnail image_class="small"}
</div>

{* Intro *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.intro}
</div>

{* Read more link *}
<div class="attribute-link">
    <p><a href={$node.url_alias|ezurl}>{"Read more"|i18n( "ezno" )}...</a></p>
</div>

</div>
</div>
