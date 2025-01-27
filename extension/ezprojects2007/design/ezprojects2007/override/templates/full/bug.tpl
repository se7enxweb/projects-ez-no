{* Full class template for bug *}

{let last=false()
     last_modified=false()
     page_limit=20
     current_user=fetch('user','current_user')}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-bug">

<div class="attribute-heading">
{switch match=$node.object.data_map.status.content}
{case match=4}
    <h1>{$node.object.data_map.bug_number.content}: {$node.object.data_map.type.content|choose('','Bug','Suggestion','Enhancement')} {$node.name|wash} started by {$node.object.current.creator.name|wash}</h1>
{/case}
{case}
    <h1>{$node.object.data_map.bug_number.content}: {$node.object.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')} {$node.object.data_map.type.content|choose('','bug','suggestion','enhancement')}: {$node.name|wash(xhtml)}</h1>
{/case}
{/switch}
</div>

<div class="attribute-long">
    {$node.object.data_map.description.content|simpletags|ezprebreak|autolink}
</div>

<div class="attribute-image">
    {let attribute=$node.object.data_map.image}
    {section show=or($attribute.has_content, $node.object.data_map.bug_file.has_content)}
        <hr>
    {/section}
    {section show=$attribute.has_content}
        <h3>Attached image</h3>
        <a href={$attribute.content.original.url|ezroot}> {attribute_view_gui attribute=$node.object.data_map.image image_class='small'} </a> <br />
    {/section}
    {/let}
</div>

<div class="attribute-file">
    {section show=$node.object.data_map.bug_file.has_content}
        <h3>Attached file</h3>
        {attribute_view_gui attribute=$node.object.data_map.bug_file}
    {/section}
</div>

{* Children *}
{section show=or( $node.children_count|gt( 0 ), $node.object.versions|gt( 0 ) )}
    <div class="content-view-children">
    <div class="class-comment">
    <h1 id="comments">Comments and status changes</h1>
        {include uri="design:parts/bugs/show_bug_comments.tpl" changes=$node.object.versions children=$:children show_edit_buttons=true()}
    </div>
    </div>
{/section}
{* End Children *}

{* 
{section show=$node.object.can_create}
    <div class="buttonblock">
        <form method="post" action={"/content/action"|ezurl}>
        <input class="button" type="submit" name="NewButton" value="New comment" />
        <input type="hidden" name="RedirectURIAfterPublish" value="{$node.url_alias}" />
        <input type="hidden" name="NodeID" value="{$node.main_node_id}" />
        <input type="hidden" name="ClassID" value="22" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
    </form>
    </div>
    {section-else}
    <p>You need to be logged in to comment on bugs. You can do so <a href={"/user/login/"|ezurl}>here</a></p>
{/section}
*}
<p>Comments are disabled due to the bug system being updated.</p>




</div>
</div>
</div>
{* End main part *}




{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-bug">

<div class="attribute-heading">
    <h2 class="bullet">Bug info</h2>
</div>

    {section show=$node.object.can_edit}
    <p>We are currently updating the bug system.</p>
    {*
        <div class="element">
            <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
            <input type="image" src={"edit.png"|ezimage} name="EditButton" title="{'Edit bug'|i18n('design/standard/node/view')}" />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
            <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
        </div>
    *}
    {/section}

<label>Reported:</label>
<p class="date">{$node.object.published|l10n(shortdatetime)} by {$node.object.owner.name|wash}</p>

<label>Last updated:</label>
<p class="date">{$node.object.current.modified|l10n(shortdatetime)} by {$node.object.current.creator.name|wash}</p>

<label>Category:</label>
<p>{$node.object.data_map.category.content|choose('','Undefined','Online Editor','eZ Publish - misc','eZ Publish - packages','eZ Publish - administration interface','eZ Publish - install','eZ Publish - language','ez.no', 'Licensing', 'Community', 'eZ Components', 'Newsletter' )}</p>

<label>Resolution:</label>
<p>{$node.object.data_map.resolution.content|choose('','None','Fixed','Invalid','Will not fix','Future addition','Duplicate','Works here')}</p>

<label>Assigned to:</label>
<p>{$node.object.data_map.assigned_to.content.name}</p>

{section show=$current_user.groups|contains(12)}
    <label>Priority:</label>
    <p>{$node.object.data_map.priority.content}</p>
{/section}

<label>Participants:</label>
<p>
{section name=Author loop=$node.object.author_array}
    {$:item.contentobject.name|wash}{delimiter}, {/delimiter}
{/section}</p>

<hr />

<label>eZ Publish version:</label>
<p>{$node.object.data_map.version.content|wash(xhtml)}</p>

<label>PHP version:</label>
<p>{$node.object.data_map.php_version.content}</p>

<label>Database:</label>
<p>{$node.object.data_map.database.content}</p>

<label>Web server:</label>
<p>{$node.object.data_map.webserver.content}</p>


    {section show=$current_user.is_logged_in}
        <form method="post" action={"/content/action"|ezurl}>
        <div class="element">
            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
            <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
            <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
        </div>
        </form>
    {/section}

</div>
</div>
</div>

{/let}
