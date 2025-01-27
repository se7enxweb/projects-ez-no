{* Line view for class RSS import *}

<div class="content-view-line">
<div class="class-article">

{* Header *}
<div class="attribute-heading">
    <h2><a title="{$node.name|wash}" href="{$node.data_map.link.content}">{$node.name|wash}</a></h2>
</div>

{* Publish date *}
<div class="attribute-byline float-break">
    <p class="date">{$node.object.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
    <div class="break"></div>
</div>

{* Description *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

{* Read more link *}
<div class="attribute-link">
    <p><a href="{$node.data_map.link.content}">{"Read more"|i18n( "ezno" )}...</a></p>
</div>

</div>
</div>
