<div class="content-view-line">
<div class="class-product">

<div class="attribute-heading">
    <h2><a href={$node.url_alias|ezurl}>{$node.name|wash}</a></h2>
</div>

{* Image *}
{let image=$node.object.data_map.image.content}
{section show=$image}
    <div class="attribute-image">
        {attribute_view_gui attribute=$image.data_map.image image_class=medium href=$node.url_alias|ezurl(no)}
    </div>
{/section}
{/let}

{* Intro *}
{section show=$node.object.data_map.intro.has_content}
    <div class="attribute-short">
        {attribute_view_gui attribute=$node.object.data_map.intro}
    </div>
{/section}

<div class="attribute-link">
    <p><a href={$node.url_alias|ezurl}>{"More details"|i18n( "ezno" )}...</a></p>
</div>

</div>
</div>
