{* Full view for galleries *}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash}</h1>
</div>

<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

<ul>
{foreach fetch('content','list',hash('parent_node_id',$node.node_id,'sort_by',$node.sort_array)) as $key => $child}
    <li><a href={$child.url_alias|ezurl}>{$child.name|wash}</a></li>
{/foreach}
</ul>


</div>
</div>
</div>
{* End main part *}


{* Right info *}

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">Summary</h2>
</div>

<p>Galleries: {$node.children_count}</p>

{let $totalCount=fetch('content','tree_count',hash('parent_node_id',$node.node_id,'class_filter_type','include','class_filter_array',array('image')))}
<p>Total count of images: {$totalCount}</p>
{/let}

{def $canCreateGallery=fetch( 'content', 'access', hash( 'access', 'create',
                                                 'contentobject', $node,
                                                 'contentclass_id', 'image_gallery' ))}
{if $canCreateGallery}
<div class="block float-break">

    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="image_gallery" />
        <input class="button" type="submit" name="NewButton" value="Add a new gallery" />
    </form>
    </div>
</div>
{/if}

{undef $canCreateGallery}

</div>
</div>
</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node showTrackChanges=true()}

{* Right info end *}