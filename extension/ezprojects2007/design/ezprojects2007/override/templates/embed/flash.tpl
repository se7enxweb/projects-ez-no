{* Embed template for class flash *}
<div class="content-view-embed">
<div class="class-flash">

<div class="attribute-heading">
    <h2>{$object.main_node.name|wash}</h2>
</div>

<div class="attribute-flash">
    {attribute_view_gui attribute=$object.data_map.flash}
</div>

</div>
</div>