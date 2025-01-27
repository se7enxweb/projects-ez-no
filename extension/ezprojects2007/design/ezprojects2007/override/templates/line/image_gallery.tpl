{* Line view for image gallery *}

<div class="content-view-line">
<div class="class-imagegallery">

<div class="object-right">
<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.image image_class="small" href=$node.url_alias|ezurl(no)}
</div>
</div>

<div class="attribute-heading">
    <h2><a href={$node.url_alias|ezurl}>{$node.name}</a></h2>
</div>

<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

<div class="attribute-link">
    <p><a href={$node.url_alias|ezurl}>More images...</a></p>
</div>




</div>
</div>