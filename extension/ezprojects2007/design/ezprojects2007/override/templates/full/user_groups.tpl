{* Full view template for class user groups *}
{* Not to be confused with User Group (container class for users). *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-usergroups">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{* Intro *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.intro}
</div>

{* Description *}
<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

{* List out other kind of children *}
{let children=fetch( content, list, hash( parent_node_id, $node.node_id,
                                          sort_by, $node.sort_array,
                                          class_filter_type, exclude,
                                          class_filter_array, array( forum, forum_message ) ) )}
{section loop=$children}
    {section show=$:item.children_count|gt( 0 )}
        <h1><a href={$:item.url_alias|ezurl}>{$:item.name}</a></h1>
    {/section}
    <ul class="linklist">
    {let subchildren=fetch_alias( children, hash( parent_node_id, $:item.node_id,
                                                  limit, 5 ) )}
    {section loop=$subchildren}
        <li>{node_view_gui view=listitem content_node=$:item}</li>
    {/section}
    {/let}
    </ul>
{/section}
{/let}

{* List out forum replies *}
{let forum_messages=fetch_alias( last_forum_replies, hash( parent_node_id, $node.node_id ) )}
{section show=$forum_messages}
    <h1>Forum</h1>
    <ul class="linklist">
    {section loop=$forum_messages}
        {let last_reply_array=fetch_alias( last_forum_reply, hash( parent_node_id, $:item.node_id ) )
             last_reply=$last_reply_array.0}
        <li>
            {section show=$:last_reply}
                {node_view_gui view=listitem content_node=$:last_reply}
            {section-else}
                {node_view_gui view=listitem content_node=$:item}
            {/section}
        </li>
        {/let}
    {/section}
    </ul>
{/section}
{/let}

</div>
</div>
</div>
{* End main part *}


{* Right info *}
<div class="area-sidebar-normal">
<div class="template-design">
<div class="template-module content-view-sidebar">
<div class="template-object class-usergroups">

    {* Can edit? *}
    <div class="object-right">
        {section show=$node.object.can_edit}
            <form method="post" action={"/content/action"|ezurl}>
                <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
                <input type="image" src={"edit.gif"|ezimage} name="EditButton" />
                <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
                <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
            </form>
        {/section}
    </div>

    {* Track changes button *}
    {let current_user=fetch( 'user', 'current_user' )}
    {section show=$current_user.is_logged_in}
        <form method="post" action={"/content/action"|ezurl}>
            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
            <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
            <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
        </form>
    {/section}

    {* Right info content *}
    {section show=$node.object.data_map.hide_rightinfo.content|not()}
        {attribute_view_gui attribute=$node.object.data_map.rightinfo}
    {/section}

    {* Create <stuff>... In <subfolders>... *}
    {section show=$current_user.is_logged_in}
        <form method="post" action={"/content/action"|ezurl}>
        <div class="block float-break">
            <div class="element">
                <label>Create</label>
                <select name="ClassID">
                    <option value="2">Article</option>
                    <option value="2">News</option>
                    <option value="10">File</option>
                </select>
            </div>
            <div class="element">
                <label>in</label>
                <select name="NodeID">
                    {section var=folder loop=fetch( content, list, hash( parent_node_id, $node.node_id,
	                                                                     class_filter_type,  'include',
           										                         class_filter_array, array( '1' ) ) )}
                        <option value="{$folder.node_id}">{$folder.name}</option>
                    {/section}
      		    </select>
            </div>
            <div class="element">
                <input class="button button-line" type="submit" name="NewButton" value="Create" />
                <input type="hidden" name="RedirectURIAfterPublish" value="{$node.url_alias}" />
                <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
            </div>
        </div>
        </form>
    {/section}
    {/let}
</div>
</div>
</div>
</div>
{* End right info *}

