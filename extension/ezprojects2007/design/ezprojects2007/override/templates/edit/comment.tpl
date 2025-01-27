<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-bug">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),'/'))|ezurl}>

<div class="attribute-heading">
    <h1>Post new comment</h1>
</div>

{include uri="design:content/edit_validation.tpl"}

<div class="block label-break">
    <label>Subject *</label>
    {attribute_edit_gui attribute=$object.data_map.subject}
</div>
<div class="block label-break">
    <label>Comment *</label>
    {section show=$object.content_class.identifier|eq( "comment" )}
        {attribute_edit_gui attribute=$object.data_map.message}
    {section-else}
        {attribute_edit_gui attribute=$object.data_map.comment}
    {/section}
</div>

<div class="buttonblock">
    <input class="button" type="submit" name="PublishButton" value="Post" />
    <input class="button" type="submit" name="DiscardButton" value="Discard" />
</div>

<input type="hidden" name="MainNodeID" value="{$main_node_id}" />
<input type="hidden" name="DiscardConfirm" value="0" />

</form>

</div>
</div>
</div>

{* Right side *}
{include uri="design:parts/available_tags_info.tpl"}
{* End right side *}
