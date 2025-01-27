{* Full view for news *}
{default $current_user=fetch('user','current_user')}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-news">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash}</h1>
</div>

<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

{* Children *}
<div class="content-view-children">
    {let page_limit=20
         child_count=fetch_alias( child_count, hash( parent_node_id, $node.node_id ) )
         children=fetch_alias( children, hash( parent_node_id, $node.node_id,
                                               sort_by, $node.sort_array[0],
                                               offset, $view_parameters.offset,
                                               limit, $page_limit ) )}

    {include uri="design:parts/list_children.tpl"}

    {/let}
</div>

</div>
</div>
</div>
{* End main part *}

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node showTrackChanges=true()}

{def $canCreateArticle=fetch( 'content', 'access', hash( 'access', 'create',
                                                 'contentobject', $node,
                                                 'contentclass_id', 'article' ))}
{if $canCreateArticle}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-news">

<div class="block float-break">

    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="article" />
        <input class="button button-type-admin" type="submit" name="NewButton" value="Add a new article" />
    </form>
    </div>
</div>

</div>
</div>
</div>
{/if}
{undef $canCreateArticle}

{* Right info end *}

{/default}