{* Line view for class file *}

<div class="content-view-line">
<div class="class-file">

{* Header *}

<div class="attribute-heading">
<h2><a href={concat( 'content/download/', $node.data_map.file.contentobject_id, '/', $node.data_map.file.id, '/file/', $node.data_map.file.content.original_filename|urlencode )|ezurl}>{$node.name|wash( xhtml )}</a></h2>
</div>

<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

<div class="attribute-link">
    <p>{attribute_view_gui attribute=$node.object.data_map.file}</p>
</div>

{section show=$node.object.can_edit}
<div class="editbutton">
<form method="post" action={"/content/action"|ezurl}>
    <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
    <input type="image" src={"edit.gif"|ezimage} name="EditButton" />
    <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
    <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
</form>
</div>
{/section}

</div>
</div>



