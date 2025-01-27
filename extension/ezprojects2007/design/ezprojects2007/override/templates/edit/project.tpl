<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-project">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),''))|ezurl}>
<div class="attribute-heading">
    <h1>{if $object.status|eq(1)}Edit project: {$object.data_map.name.content|wash}{else}Add a new project{/if}</h1>
</div>

{include uri="design:content/edit_validation.tpl"}

{section name=ContentObjectAttribute loop=$content_attributes sequence=array(bglight,bgdark)}
    <div class="block">
    <label>{$ContentObjectAttribute:item.contentclass_attribute.name} {if $ContentObjectAttribute:item.is_required} <span class="required">({'required'|i18n( 'design/admin/content/edit_attribute' )})</span>{/if}</label>
        <input type="hidden" name="ContentObjectAttribute_id[]" value="{$ContentObjectAttribute:item.id}" />
        {attribute_edit_gui attribute=$ContentObjectAttribute:item}
        {if $ContentObjectAttribute:item.contentclass_attribute.identifier|eq('unix_name')}
        <p>The UNIX name is used as a unique identifier for the project; it is used to build project-related URLs, and it is also used as the name of your projects Subversion repository. Once your project has been created, you can not change the UNIX name anymore.</p>
        <p>The allowed characters in the UNIX name are a-z, 0-9, <a href="http://en.wikipedia.org/wiki/Hyphen" class="new-window">hyphen</a> and <a href="http://en.wikipedia.org/wiki/Underscore" class="new-window">underscore</a>.
        {/if}
    </div>
{/section}

<div class="buttonblock">
    <input class="button" type="submit" name="PublishButton" value="Submit" />
    {if $object.status|eq(0)}
        <input class="button" type="submit" name="DiscardButton" value="Cancel" />
        <input type="hidden" name="DiscardConfirm" value="0" />
    {else}
        <input class="button" type="submit" name="StoreButton" value="Store and continue editing" />
        <input class="button" type="submit" name="DiscardButton" value="Discard" />
    {/if}
    <input type="hidden" name="MainNodeID" value="{$main_node_id}" />
</div>

{if $object.status|eq(0)}
<p>Your project needs to be approved before it is created. You can follow your project's approval status in the <a href={"/collaboration/view/summary"|ezurl} class="new-window">collaboration system</a>.</p>
{/if}

</form>

</div>
</div>
</div>