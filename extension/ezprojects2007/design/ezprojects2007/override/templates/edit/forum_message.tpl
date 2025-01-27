{* Edit template for forum_message *}

{let parent_node=fetch( 'content', 'node', hash( node_id, $object.current.main_parent_node_id ) )}

<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-forummessage">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose( concat( $edit_language, '/' ), '/' ))|ezurl}>

{* Header *}
<div id="top" class="attribute-heading">
    {section show=and( $parent_node.object.class_identifier|eq('forum'), $object.versions|count()|eq( 1 ) )}
        {* This is a new topic... *}
        <h1>Post new topic</h1>
    {section-else}
        {section show=$object.versions|count()|eq( 1 )}
            {* Reply to an existing message *}
            <h1>Reply to: "{$parent_node.name|wash}"</h1>
        {section-else}
            {* Edit an existing message *}
            <h1>Edit "{$object.main_node.name|wash}"</h1>
        {/section}
    {/section}
</div>

{* Validation *}
{include uri="design:content/edit_validation.tpl"}

{* Title *}
<div class="block">
    <label>Title:</label>
    {section show=$parent_node.object.class_identifier|eq('forum_message')}
        <p>{$parent_node.name|wash}</p>
        <input type="hidden" name="ContentObjectAttribute_id[]" value="{$object.data_map.title.id}" />
        <input type="hidden" name="ContentObjectAttribute_ezstring_data_text_{$object.data_map.title.id}" value="{concat("Re: ", $parent_node.name)|wash(xhtml)|shorten(50)}" />
    {section-else}
        <input type="hidden" name="ContentObjectAttribute_id[]" value="{$object.data_map.title.id}" />
        <input class="box" type="text" size="70" name="ContentObjectAttribute_ezstring_data_text_{$object.data_map.title.id}" value="{$object.data_map.title.data_text|wash(xhtml)}" />
    {/section}
</div>

{* Message *}
<div class="block">
    <label>Message:</label>
    {attribute_edit_gui attribute=$object.data_map.message}
</div>

{* Sticky *}
{section show=$parent_node.object.class_identifier|ne('forum_message')}
    {let current_user=fetch( 'user', 'current_user' )
         sticky_groups=ezini( 'ForumSettings', 'StickyUserGroupArray', 'forum.ini' )
         show_sticky_button=false()}

    {section var=sticky loop=$sticky_groups}
        {section show=$current_user.groups|contains($sticky)}
            {set show_sticky_button=true()}
        {/section}
    {/section}
    {section show=$show_sticky_button}
        <div class="block">
            <label>Sticky:</label>
                {attribute_edit_gui attribute=$object.data_map.sticky}
        </div>
    {/section}
    {/let}
{/section}

<div class="buttonblock">
    <input class="button" type="submit" name="PublishButton" value="Post" />
    <input class="button" type="submit" name="DiscardButton" value="Cancel" />
</div>

<input type="hidden" name="DiscardConfirm" value="0" />
<input type="hidden" name="MainNodeID" value="{$main_node_id}" />


</form>

</div>
</div>
</div>

{* Right side *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-forum-message">

<div class="attribute-heading">
    <h2 class="bullet">Forum guidelines</h2>
</div>
<p>Make sure you have read the <a href={"/community/forum/guidelines"|ezurl} target="_blank">forum guidelines</a> before posting in this forum.</p>

<h2>Forum tags available</h2>
<pre class="code">
 &lt;code&gt;
     $var = phpcode();
 &lt;/code&gt;
</pre>

<p><strong>&lt;b&gt;Bold text&lt;/b&gt;</strong></p>

</p><em>&lt;i&gt;Italic text&lt;/i&gt;</em></p>

<p><a href="http://ez.no">http://ez.no</a>
links will automatically be made clickable</p>

</div>
</div>
</div>
{* End right side *}


{* List other posts *}
{section show=and( $parent_node.object.class_identifier|eq('forum_message'), $object.versions||count()|eq(1) )}

<div class="template-design area-main-full">
<div class="template-module content-edit">
<div class="template-object class-forum_message">

    <div class="content-view-children">
    <div class="class-forum-message">

    <div class="attribute-heading">
        <h1>Original post</h1>
    </div>

    <table class="forum list" cellspacing="0">
        {node_view_gui view='line' content_node=$parent_node sequence='bglight'}
    </table>

    {* Fetch the five latest forum posts *}
    {let page_limit=5
         message_count=fetch_alias( children_count, hash( parent_node_id, $parent_node.node_id ) )
         offset=sub( $message_count, $page_limit )
         forum_messages=fetch_alias( forum_messages, hash( parent_node_id, $parent_node.node_id,
                                                           limit, $page_limit,
                                                           offset, $offset ) )}
    {section show=$forum_messages}
        <div class="attribute-heading">
           <h2>Last 5 posts</h2>
        </div>

        <table class="forum list" cellspacing="0">
        {section loop=$forum_messages sequence=array( bgdark, bglight )}
            {node_view_gui view='line' content_node=$:item sequence=$:sequence}
        {/section}
        </table>
    {/section}

    </div>
    </div>

{/let}
{/section}
{* End list other posts *}

</div>
</div>
</div>
{* End main part *}


{/let}