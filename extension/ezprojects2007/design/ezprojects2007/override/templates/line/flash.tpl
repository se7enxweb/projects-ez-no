{* Line view for flash *}
<div class="content-view-line">
<div class="class-flash">

{* Header *}
<div class="attribute-heading">
    <h2><a href={$node.url_alias|ezurl}>{$node.name|wash}</a></h2>
</div>

{* Description *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

{* Read more link *}
<div class="attribute-link">
    <p><a href={$node.url_alias|ezurl}>{"Read more"|i18n( "ezno" )}...</a></p>
</div>

</div>
</div>