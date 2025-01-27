{* Node override for references *}

<div class="template-design area-main-full">
<div class="template-module node-view-references">
<div class="template-object">

<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

    {attribute_view_gui attribute=$node.data_map.field1}

</div>
</div>
</div>


<div class="float-break">

{* Bottom left field *}
<div class="template-design area-main-normal">
<div class="template-module node-view-references">
<div class="template-object">
    {attribute_view_gui attribute=$node.data_map.field2}
</div>
</div>
</div>

{* Bottom right upper field *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">
    {attribute_view_gui attribute=$node.data_map.field3}
</div>
</div>
</div>

{* Bottom right lower field *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">
    {attribute_view_gui attribute=$node.data_map.field4}
</div>
</div>
</div>

</div>