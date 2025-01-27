<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-file">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),'/'))|ezurl}>

{* Header *}
<div class="attribute-heading">
    <h1>Edit {$object.name}</h1>
</div>

{* Validation *}
{include uri="design:content/edit_validation.tpl"}


<div class="block float-break">
    <label>Name *</label>
    {attribute_edit_gui attribute=$object.data_map.name}
</div>

<div class="block float-break">
    <label>Description</label>
    {attribute_edit_gui attribute=$object.data_map.description}
</div>

<div class="block float-break">
    {attribute_edit_gui attribute=$object.data_map.file}
</div>

<input type="hidden" name="MainNodeID" value="{$main_node_id}" />

<div class="buttonblock">
    <input class="button" type="submit" name="PublishButton" value="Submit" />
    <input class="button" type="submit" name="DiscardButton" value="Discard" />
</div>


</form>

</div>
</div>
</div>
