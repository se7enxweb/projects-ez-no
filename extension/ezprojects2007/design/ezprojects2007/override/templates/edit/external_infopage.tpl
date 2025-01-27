<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-external-infopage">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),'/'))|ezurl}>
    {* Header *}
    <div class="attribute-heading">
        <h1>Edit {$object.name}</h1>
    </div>

    {* Validation *}
    {include uri="design:content/edit_validation.tpl"}

    {* Attributes *}
    {include uri="design:content/edit_attribute.tpl"}

    <div class="buttonblock">
        <input type="hidden" name="MainNodeID" value="{$main_node_id}" />
        <input type="hidden" name="RedirectURI" value={concat( "/content/view/full/", $object.main_node.node_id)} />
        <input class="button" type="submit" name="PublishButton" value="Publish" />
        <input class="button" type="submit" name="DiscardButton" value="Discard" />
    </div>

</form>

</div>
</div>
</div>