{* Full class for weblog (log container) *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-weblog">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash(xhtml)}</h1>
</div>

<div class="content-view-children">
    {let page_limit=20
         child_count=fetch_alias( child_count, hash(parent_node_id,$node.node_id) )
         children=fetch_alias(children, hash( parent_node_id, $node.node_id,
                                              limit, $page_limit,
                                              offset, $view_parameters.offset,
                                              sort_by, array( array( 'published', false() ) ) ) )}
    {include uri="design:parts/list_children.tpl"}

    {/let}

</div>

</div>
</div>
</div>

{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-weblog">


<div class="block">
    {section show=$node.object.owner.parent_nodes|contains(13)}
        {section show=$node.object.can_create}
        <div class="element">
            <form method="post" action={"/content/action"|ezurl}>
                <input class="button" type="submit" name="NewButton" value="New log entry" />
                <input type="hidden" name="RedirectURIAfterPublish" value="{$node.url_alias}" />
                <input type="hidden" name="NodeID" value="{$node.main_node_id}" />
                <input type="hidden" name="ClassIdentifier" value="log" />
                <input type="hidden" name="ContentLanguageCode" value="eng-GB" />

            </form>
        </div>
        {/section}
    {/section}

    {let current_user=fetch('user','current_user')}
    {section show=$current_user.is_logged_in}
        <div class="element">
            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
            <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
            <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
        </div>
    {/section}
    {/let}

</div>


{* Description *}
<div class="block">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>


</div>
</div>
</div>