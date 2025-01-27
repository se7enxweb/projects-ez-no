<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-{$object.class_identifier}">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),''))|ezurl}>
<div class="attribute-heading">
    <h1>{if $object.status|eq(1)}Edit {$object.class_name|downcase|wash}: {$object.data_map.name.content|wash}{else}Add a new {$object.class_name|downcase|wash}{/if}</h1>
</div>

{include uri="design:content/edit_validation.tpl"}

{section name=ContentObjectAttribute loop=$content_attributes sequence=array(bglight,bgdark)}
    <div class="block">
    <label>{$ContentObjectAttribute:item.contentclass_attribute.name}{if $ContentObjectAttribute:item.is_required} <span class="required">({'required'|i18n( 'design/admin/content/edit_attribute' )})</span>{/if}</label>
        <input type="hidden" name="ContentObjectAttribute_id[]" value="{$ContentObjectAttribute:item.id}" />
        {attribute_edit_gui attribute=$ContentObjectAttribute:item}
    </div>
{/section}

<div class="buttonblock">
    <input class="button" type="submit" name="PublishButton" value="Post" />
    <input class="button" type="submit" name="DiscardButton" value="Discard" />
    <input type="hidden" name="MainNodeID" value="{$main_node_id}" />
</div>

</form>

</div>
</div>
</div>