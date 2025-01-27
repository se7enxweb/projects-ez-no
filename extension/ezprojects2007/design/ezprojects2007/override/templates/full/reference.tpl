{* Full view for class page_link (a.k.a reference) *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-reference">
{let url=""}

{section show=or( $node.object.data_map.url.content|begins_with( "http://" ), $node.object.data_map.url.content|begins_with( "https://" ) )}
    {set url=$node.object.data_map.url.content}
{section-else}
    {set url=concat( 'http://', $node.object.data_map.url.content )}
{/section}

<div class="block">
    <div class="attribute-heading">
	    <h1><a href="{$url}" target="_blank">{$node.name|wash}</a></h1>
    </div>
    <div class="object-right">
        <div class="attribute-image">
            {attribute_view_gui attribute=$node.data_map.screenshot href=$url target="_blank" image_class="medium"}
        </div>
    </div>
    <div class="attribute-short">
        {$node.data_map.country.content}
    </div>
    <div class="attribute-long">
        {$node.data_map.description.content|simpletags|ezprebreak|autolink}
    </div>
</div>


<div class="block">
    <ul>
        {section show=$node.data_map.type.has_content}
            <li>Site type: {attribute_view_gui attribute=$node.data_map.type}</li>
        {/section}
        {section show=$node.data_map.version.has_content}
            <li>Site is using: {attribute_view_gui attribute=$node.data_map.version}</li>
        {/section}
    <li>Site link: <a href="{$url}" target="_blank">{$url|shorten(50)}</a></li>
    </ul>
</div>

{/let}

</div>
</div>
</div>

