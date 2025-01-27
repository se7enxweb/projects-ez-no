{* Full view for faq
   This template is kind of obsolete. FAQ will be part of the new documentation.
*}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-faq">

<div class="attribute-heading">
    <h1>Q: {$node.name|wash}</h1>
</div>


<h2>A:</h2>
<p>{$node.object.data_map.answer.content|simpletags|ezprebreak|autolink}</p>

<p><a href={$node.parent.url_alias|ezurl}>Back to {$node.parent.name|wash}</a></p>


</div>
</div>
</div>

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-faq">


{section show=$node.object.can_edit}
<div class="object-right">
<div class="editbutton">
    <a href={concat('/content/edit/', $node.object.id)|ezurl}><img class="button" type="submit" src={"edit.png"|ezimage} alt="Edit"></a>
</div>
</div>
{/section}


{include uri="design:parts/faq/faq_sidebar.tpl" category_node_id=$node.parent.parent.node_id}





</div>
</div>
</div>
