{let parent_node=fetch('content','node',hash(node_id,$object.current.main_parent_node_id))}

<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-bug-comment">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),'/'))|ezurl}>

<div class="attribute-heading">
    <h1>Comment on {$parent_node.data_map.status.content|choose('','new','open','closed','started','reopened','resolved','verified')} {$parent_node.data_map.type.content|choose('','bug','suggestion','enhancement')} - {$parent_node.name|wash(xhtml)}</h1>
</div>

{include uri="design:content/edit_validation.tpl"}

<div class="block float-break">
    <label>Description</label>
    <p>{$parent_node.data_map.description.content|simpletags|ezprebreak|autolink}</p>
</div>

{include uri="content/edit_validation.tpl"}

<input type="hidden" name="MainNodeID" value="{$main_node_id}" />

<div class="block float-break">
    <label>{$content_attributes.0.contentclass_attribute.name}:</label>
    <input type="hidden" name="ContentObjectAttribute_id[]" value="{$content_attributes.0.id}" />
    {attribute_edit_gui attribute=$content_attributes.0}
</div>

<div class="block float-break">
    <label>{$content_attributes.1.contentclass_attribute.name}:</label>
    <input type="hidden" name="ContentObjectAttribute_id[]" value="{$content_attributes.1.id}" />
    {attribute_edit_gui attribute=$content_attributes.1}
</div>

<div class="buttonblock">
    <input class="button" type="submit" name="PublishButton" value="Post" />
    <input class="button" type="submit" name="DiscardButton" value="Discard" />
    <input type="hidden" name="DiscardConfirm" value="0" />
</div>

{* Children *}
{section show=or( $parent_node.children_count|gt( 0 ), $parent_node.object.versions|gt( 0 ) )}
    <div class="content-view-children">
    <div class="class-comment">
        <h2 id="comments">Existing comments</h2>
        {include uri="design:parts/bugs/show_bug_comments.tpl" changes=$parent_node.object.versions node=$parent_node}
    </div>
    </div>
{/section}
{* End Children *}

</div></div></div>
{* End main part *}


</form>

{* Right side *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-forum-message">

<label>Reported</label>
<p class="date">{$parent_node.object.published|l10n(shortdatetime)} by {$parent_node.object.owner.name|wash}</p>

<label>Last updated</label>
<p class="date">{$parent_node.object.current.modified|l10n(shortdatetime)} by {$parent_node.object.current.creator.name|wash}</p>

<label>Version</label>
<p>{$parent_node.data_map.version.content|wash(xhtml)}</p>

<label>Resolution</label>
<p>{$parent_node.data_map.resolution.content|choose('','None','Fixed','Invalid','Will not fix','Future addition','Duplicate','Works here')}</p>

<label>Participants</label>
<p>
{section name=Author loop=$parent_node.object.author_array}
{$:item.contentobject.name|wash}{delimiter}, {/delimiter}
{/section}
</p>

</div>
</div>
</div>

{include uri="design:parts/available_tags_info.tpl"}
{/let}
