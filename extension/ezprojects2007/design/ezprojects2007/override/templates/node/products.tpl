{* Node override for product frontpage *}

<div class="template-design area-main-full">
<div class="template-module node-view-products">
<div class="template-object">

<div class="split float-break">
<div class="split-main">
    {attribute_view_gui attribute=$node.data_map.field1}
</div>
<div class="split-sidebar">
    {attribute_view_gui attribute=$node.data_map.field2}
</div>
</div>

<div class="split float-break">
<div class="split-three-left">
    {attribute_view_gui attribute=$node.data_map.field3}
</div>
<div class="split-three-right">
    {attribute_view_gui attribute=$node.data_map.field5}

</div>
<div class="split-three-center">
    {attribute_view_gui attribute=$node.data_map.field4}
</div>
</div>

</div>

</div>
</div>


<div class="float-break">

{* Lower left field *}
<div class="template-design area-main-normal">
<div class="template-module node-view-products">
<div class="template-object">

<div class="content-view-frontpage">
    {attribute_view_gui attribute=$node.data_map.field6}
</div>


</div>
</div>
</div>

{* Lower right field *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">
    {attribute_view_gui attribute=$node.data_map.field7}
</div>
</div>
</div>

</div>