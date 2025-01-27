{* Full view template for forum message *}

<div class="template-design area-main-full">
<div class="template-module content-view-full">
<div class="template-object class-forummessage">

{let top_node=$node}
{section show=$node.parent.class_identifier|eq( 'forum_message' )}
    {set top_node=$node.parent}
{/section}

{let redirect_url=$top_node.url_alias
     offset=0
     page_limit=20
     forum_messages=fetch_alias( forum_messages, hash( parent_node_id, $top_node.node_id,
                                                       limit, $page_limit,
                                                       offset, $view_parameters.offset ) )
     forum_message_count=fetch_alias( forum_message_count, hash( parent_node_id, $top_node.node_id ) )}


{* Header *}
<div id="top" class="attribute-heading">
    <h1>{$top_node.name|wash}</h1>
</div>

{* Figure out redirect url *}
{section show=$forum_message_count|gt(19)}
    {include uri="design:parts/forum/calc_offset.tpl" count=sum( $forum_message_count, 1)}
    {section show=$forum_messages|count()|lt( $page_limit )}
        {set redirect_url=concat( $redirect_url, "/(offset)/", $offset, "#msg", $forum_messages[sub( $forum_messages|count(), 1 )].node_id )}
    {section-else}
        {let last_reply_array=fetch_alias( last_forum_reply, hash( parent_node_id, $top_node.node_id ))
             last_reply=$last_reply_array.0}
        {set redirect_url=concat( $redirect_url, "/(offset)/", $offset, "#msg", $last_reply.node_id )}
        {/let}
    {/section}
{/section}

{* Show New reply and Track changes button *}
{section show=$top_node.object.can_create}
<div class="block float-break">
<form method="post" action={"/content/action"|ezurl}>
        <div class="element">
            <input class="button" type="submit" name="NewButton" value="New reply" />
            <input type="hidden" name="RedirectURIAfterPublish" value="{$redirect_url}" />
            <input type="hidden" name="ContentNodeID" value="{$top_node.node_id}" />
            <input type="hidden" name="ContentObjectID" value="{$top_node.contentobject_id}" />
            <input type="hidden" name="NodeID" value="{$top_node.node_id}" />
            <input type="hidden" name="ClassIdentifier" value="forum_message" />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        </div>
</form>
<form method="post" action={"/content/action"|ezurl}>
        <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
        <input type="hidden" name="ContentNodeID" value="{$top_node.node_id}" />
        <input type="hidden" name="ContentObjectID" value="{$top_node.contentobject_id}" />
        <input type="hidden" name="NodeID" value="{$top_node.node_id}" />
</form>
</div>
{section-else}
    {include uri="design:parts/forum/no_access.tpl"}
{/section}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$top_node.url_alias
         item_count=$forum_message_count
         view_parameters=$view_parameters
         item_limit=$page_limit}


{* List forum messages *}
<div class="content-view-children">

<table class="forum list" cellspacing="0">

{* Show current node *}
{section show=$view_parameters.offset|lt($page_limit)}
    {node_view_gui view='line' content_node=$top_node type='full' show_buttons=true() sequence='bglight' offset=$view_parameters.offset is_first_post=true()}
{/section}

{* Show children *}
{section loop=$forum_messages sequence=array( bgdark, bglight )}
    {node_view_gui view='line' content_node=$:item type='full' show_buttons=true() sequence=$:sequence offset=$view_parameters.offset}
{/section}

</table>

</div>
{* List forum messages end *}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$top_node.url_alias
         item_count=$forum_message_count
         view_parameters=$view_parameters
         item_limit=$page_limit}

{* Show New reply and Track changes button *}
{if $node.url_alias|begins_with( "community/forum/ez_components" )|not}
    {if $top_node.object.can_create}
    <form method="post" action={"/content/action"|ezurl}>
        <div class="block">
            <div class="element">
                <input class="button" type="submit" name="NewButton" value="New reply" />
                <input type="hidden" name="RedirectURIAfterPublish" value="{$redirect_url}" />
                <input type="hidden" name="ContentNodeID" value="{$top_node.node_id}" />
                <input type="hidden" name="ContentObjectID" value="{$top_node.contentobject_id}" />
                <input type="hidden" name="NodeID" value="{$top_node.node_id}" />
                <input type="hidden" name="ClassIdentifier" value="forum_message" />
                <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
            </div>
    </form>
    <form method="post" action={"/content/action"|ezurl}>
                <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
            <input type="hidden" name="ContentNodeID" value="{$top_node.node_id}" />
            <input type="hidden" name="ContentObjectID" value="{$top_node.contentobject_id}" />
            <input type="hidden" name="NodeID" value="{$top_node.node_id}" />
        </div>
    </form>
    {else}
        {include uri="design:parts/forum/no_access.tpl"}
    {/if}
{/if}

{/let}
{/let}

</div>
</div>
</div>
{* Main part end *}
