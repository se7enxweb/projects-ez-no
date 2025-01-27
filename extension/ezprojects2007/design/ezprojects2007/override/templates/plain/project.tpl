{default content_object=$node.object
         content_version=$node.contentobject_version_object
         node_name=$node.name|wash}

<div class="object">

    {section name=ContentObjectAttribute loop=$content_version.contentobject_attributes}
    <div class="block">
        <label>{$ContentObjectAttribute:item.contentclass_attribute.name|wash}</label>
        <p class="box">{attribute_view_gui attribute=$ContentObjectAttribute:item}</p>
    </div>
    {/section}

</div>

{/default}
