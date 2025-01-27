<div class="float-break">

{* Top main area *}
<div class="template-design area-main-normal">
<div class="template-module node-view-frontpage">
<div class="template-object">

    {attribute_view_gui attribute=$node.data_map.field1}

</div>
</div>
</div>
{* End top main area *}


{* Right info *}
<div class="area-sidebar-normal">
    {attribute_view_gui attribute=$node.data_map.field2}
</div>
{* End right info *}

</div>


<div class="float-break">

{* Lower main part *}
<div class="template-design area-main-normal">
<div class="template-module node-view-frontpage">
<div class="template-object class-article">

<div class="attribute-heading">
    <h2 class="bullet">News &amp; updates</h2>
</div>

<div class="split float-break">
<div class="split-two-left">

<div class="node-view-frontpage">
<div class="class-article">
    {attribute_view_gui attribute=$node.data_map.field3}
</div>
</div>

</div>
<div class="split-two-right">
    {attribute_view_gui attribute=$node.data_map.field4}
</div>
</div>

</div>
</div>
</div>
{* End lower main part *}

{* Lower right area *}
<div class="area-sidebar-normal">
    {attribute_view_gui attribute=$node.data_map.field5}
</div>
{* End lower right area *}

</div>
