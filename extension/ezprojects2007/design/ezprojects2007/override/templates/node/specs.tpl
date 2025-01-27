{* Full view template for class infopage *}

{section show=$node.object.data_map.hide_rightinfo.content}
    <div class="template-design area-main-full">
{section-else}
    <div class="template-design area-main-normal">
{/section}

<div class="template-module content-view-full">
<div class="template-object class-infopage">

{* Header *}
{section show=$node.data_map.hide_title.content|not()}
<div class="attribute-heading">
    <h1>{$node.data_map.name.content|wash(xhtml)}</h1>
</div>
{/section}

{* Body *}
{section show=$node.data_map.body.has_content}
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.data_map.body}
    </div>
{/section}

{* Children *}
<div class="content-view-children">
{section show=$node.data_map.show_children.content}
    {let page_limit=20
         child_count=fetch_alias( child_count, hash( parent_node_id, $node.node_id ) )
         children=fetch_alias( children, hash( parent_node_id, $node.node_id,
                                               sort_by, $node.sort_array[0],
                                               offset, $view_parameters.offset,
                                               limit, $page_limit ) )}

    {include uri="design:parts/list_children.tpl"}

    {/let}
{/section}
</div>

</div>
</div>
</div>


{* Right info *}
{section show=$node.data_map.hide_rightinfo.content|not()}
    <div class="template-design area-sidebar-normal">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-infopage">
        {attribute_view_gui attribute=$node.data_map.rightinfo}

        {let current_user=fetch('user','current_user')}
        {section show=$current_user.is_logged_in}
        <form method="post" action={"/content/action"|ezurl}>
            <div class="block float-break">
                <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
                <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
                <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
            </div>
        </form>
        {/section}
        {/let}

    </div>
    </div>
    </div>
{/section}