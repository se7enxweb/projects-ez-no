{* Full view for employee *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-employee">

<div class="attribute-heading">
    <h1>{attribute_view_gui attribute=$node.object.data_map.name}</h1>
</div>

<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.image}
</div>

<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.area_of_activity}
</div>

<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.about}
</div>


</div>
</div>
</div>