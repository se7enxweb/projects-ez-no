{* Full view for article *}
{default $current_user=fetch('user', 'current_user')}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash}<span class="status"></span></h1>
</div>


<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

<ul>
{foreach fetch('content','list',hash('parent_node_id',$node.node_id,'limitation',array())) as $child}
<li><a href={$child.url_alias|ezurl}>{$child.name|wash}</a></li>
{/foreach}
</ul>

</div>
</div>
</div>
{* End main part *}

{/default}

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node}