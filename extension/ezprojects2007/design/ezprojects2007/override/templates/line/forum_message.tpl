{* Line view for form message *}

{* Creates a table row for a forum message

Parameters:
   show_buttons = Boolean true() / false()
   Toogle view of Edit/Remove buttons.
   Default = false().

   is_first_post = Boolean true() / false()
   Set this to true if this is the first post in a forum thread.
   Used to make the redirect url after publish correct.
   Default = false().
*}

{* Main row *}
<tr class="{$sequence}" id="msg{$node.node_id}">
    {* Poster info *}
    <td class="info">
        <p class="author"><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name}</a></p>
{*
        {if $node.object.owner.parent_nodes|contains(13)}
            <p class="ezcrew"><img src={"ez-employee-forum-badge.gif"|ezimage} alt="Official eZ Systems member" style="vertical-align: middle;" /> eZ Systems crew</p>
        {/if}

        {if $node.object.owner.parent_nodes|contains(29204)}
            <p class="moderator"><img src={"moderator-forum-badge.gif"|ezimage} alt="Community moderator" style="vertical-align: middle;" /> Moderator</p>
        {/if}
*}

        {if $node.object.owner.data_map.image.content.original_filename}
            <div class="attribute-image">{attribute_view_gui attribute=$node.object.owner.data_map.image image_class="small"}</div>
        {/if}

        <p class="membersince">Member since:<br />{$node.object.owner.published|datetime( 'custom', '%d %F %Y' )}</p>
        <p class="posts">Posts: {fetch_alias( user_forum_message_count, hash( user_id, $node.object.owner.id ) )}</p>
    </td>

    {* The content of the forum message *}
    <td class="message">
        {if and( $node.url_alias|begins_with( "community/forum/ez_components" )|not, $show_buttons )}
            <form method="post" action={"/content/action"|ezurl}>
                <div class="object-right">
                {if $node.object.can_edit}
                    <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
                    {if $is_first_post}
                        <input type="hidden" name="RedirectURIAfterPublish" value={concat( $node.url_alias, "#msg", $node.node_id )} />
                    {else}
                        <input type="hidden" name="RedirectURIAfterPublish" value={concat( $node.parent.url_alias, "/(offset)/", $offset, "#msg", $node.node_id )} />
                    {/if}
                    <input title="Edit forum message" type="image" src={"edit.gif"|ezimage} name="EditButton" />
                    <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
                    <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
                {/if}
                {if $node.object.can_remove}
                    <input type="hidden" name="ContentNodeID" value="{$node.parent.node_id}" />
                    <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
                    <input type="hidden" name="DeleteIDArray[]" value="{$node.node_id}" />
                    <input title="Remove forum message" type="image" name="RemoveButton" value="Remove" src={"trash.png"|ezimage} />
                {/if}
                </div>
           </form>
       {/if}

        <p class="date">{$node.object.published|l10n( datetime )}</p>

        <div class="attribute-long">{$node.data_map.message.content|simpletags|autolink|ezprebreak}</div>
        {if $node.object.owner.data_map.signature.content}
            <div class="attribute-signature">
            <p>{$node.object.owner.data_map.signature.content|simpletags|autolink}</p>
            </div>
        {/if}

        {section loop=$node.object.author_array}
            {if eq( $node.object.owner_id, $:item.contentobject_id )|not()}
                <p class="moderated">Moderated by: {$:item.contentobject.name}</p>
            {/if}
        {/section}
    </td>
    <td class="buttons">
    <div class="button">
        <a href="#main"><img src={"button-move_up.gif"|ezimage} height="16" width="16" alt="Up" title="Jump to first message" /></a>
    </div>
    </td>
</tr>