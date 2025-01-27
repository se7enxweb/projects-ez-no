{* Full view template for forum *}

<div class="template-design area-main-full">
<div class="template-module content-view-full">
<div class="template-object class-forum">

{let page_limit=20
 sticked_forum_messages=fetch_alias( children, hash( parent_node_id, $node.node_id,
                                                   attribute_filter, array( array( 'forum_message/sticky', '=', 1 ) ),
                                                   sort_by, array( modified_subnode, 0 ) ) )
 forum_messages=fetch_alias( children, hash( parent_node_id, $node.node_id,
                                                   attribute_filter, array( array( 'forum_message/sticky', '=', 0 ) ),
                                                   limit, $page_limit,
                                                   sort_by, array( modified_subnode, 0 ),
                                                   offset, $view_parameters.offset ) )
 forum_message_count=fetch_alias( forum_message_count, hash( parent_node_id, $node.node_id ) )}

{* Header *}
<div id="top" class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{* Description *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>


    {* Show New reply and Track changes button *}
    {if $node.object.can_create}
    <form method="post" action={"/content/action"|ezurl}>
        <div class="block">
            <div class="element">
                <input class="button" type="submit" name="NewButton" value="New topic" />
            </div>
            {if $node.object.can_edit}
            <div class="element">
                <input class="button button-type-admin" type="submit" name="EditButton" value="Edit" />
            </div>
            {/if}
            <div class="object-right">
                <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
            </div>

            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
            <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
            <input type="hidden" name="NodeID" value="{$node.node_id}" />
            <input type="hidden" name="ClassIdentifier" value="forum_message" />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        </div>
        <div class="float-break"></div>
    </form>
    {else}
        {include uri="design:parts/forum/no_access.tpl"}
    {/if}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$forum_message_count
         view_parameters=$view_parameters
         item_limit=$page_limit}

<div class="content-view-children">
<div class="class-forum-message">

{* List forum messages *}
<table class="list" cellspacing="0">
{* List of sticked topics *}
{section show=$sticked_forum_messages}
    <tr>
        <th width="44%">Important topics</th>
        <th width="4%">Replies</th>
        <th width="20%">Author</th>
        <th width="32%">Last reply</th>
    </tr>
    {section loop=$sticked_forum_messages sequence=array( bglight, bgdark )}
        {let last_reply_array=fetch( 'content', 'list', hash( parent_node_id, $:item.node_id,
                                                              sort_by, array( array( 'published', false() ) ),
                                                              limit, 1 ) )
             last_reply=$last_reply_array.0
             offset=0}
        <tr class="{$:sequence}">
        {* Topic name *}
        <td>
            <a href={$:item.url_alias|ezurl}>{$:item.name|wash}</a>
        </td>
        {* Replies *}
        <td>
            {fetch('content', 'list_count', hash( parent_node_id, $:item.node_id ) )}
        </td>
        {* Topic author *}
        <td>
            {$:item.object.owner.name|wash}
        </td>
        {* Last reply *}
        <td>
        {section show=$:last_reply}
            {$last_reply.object.published|l10n(shortdatetime)}<br />
            {include uri="design:parts/forum/calc_offset.tpl" count=$:item.children_count}
            {section show=$offset|le( 0 )}
                <a href={concat($:item.url_alias, '#msg', $:item.node_id)|ezurl}>Last post by:</a>
            {section-else}
                <a href={concat($:item.url_alias, '/(offset)/', $offset, '#msg',$:item.node_id)|ezurl}>Last post by:</a>
            {/section}
                {$:last_reply.object.owner.name|wash}
        {section-else}
            &nbsp;
        {/section}
        </td>
        </tr>
        {/let}
    {/section}
{/section}
{* End List of sticked topics *}
<tr>
    <th width="44%">Topic title</th>
    <th width="4%">Replies</th>
    <th width="20%">Author</th>
    <th width="32%">Last reply</th>
</tr>
{section loop=$forum_messages sequence=array( bglight, bgdark )}
    {let last_reply_array=fetch( 'content', 'list', hash( parent_node_id, $:item.node_id,
                                                          sort_by, array( array( 'published', false() ) ),
                                                          limit, 1 ) )
         last_reply=$last_reply_array.0
         offset=0}
    <tr class="{$:sequence}">
    {* Topic name *}
    <td>
        <a href={$:item.url_alias|ezurl}>{$:item.name|wash}</a>
    </td>
    {* Replies *}
    <td>
        {fetch('content', 'list_count', hash( parent_node_id, $:item.node_id ) )}
    </td>
    {* Topic author *}
    <td>
        {$:item.object.owner.name|wash}
    </td>
    {* Last reply *}
    <td>
        {section show=$:last_reply}
            {$last_reply.object.published|l10n(shortdatetime)}<br />
            {include uri="design:parts/forum/calc_offset.tpl" count=$:item.children_count}
            {section show=$offset|le( 0 )}
                <a href={concat($:item.url_alias, '#msg', $:item.node_id)|ezurl}>Last post by:</a>
            {section-else}
                <a href={concat($:item.url_alias, '/(offset)/', $offset, '#msg',$:item.node_id)|ezurl}>Last post by:</a>
            {/section}
                {$:last_reply.object.owner.name|wash}
        {section-else}
            &nbsp;
        {/section}
    </td>
    </tr>
    {/let}
{/section}
</table>

</div>
</div>
{* End list forum messages *}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$forum_message_count
         view_parameters=$view_parameters
         item_limit=$page_limit}

{/let}

</div>
</div>
</div>
