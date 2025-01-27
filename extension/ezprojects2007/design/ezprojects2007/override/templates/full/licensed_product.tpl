{* Full view for licenced product *}

<form method="post" action={"/content/action"|ezurl}>

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-product">


{* Header *}
<div class="attribute-heading">
    <h1>{$node.data_map.name.content|wash}</h1>
</div>

{* Image *}
{let image=$node.object.data_map.image.content}
{section show=$image}
    <div class="attribute-image">
        {attribute_view_gui attribute=$image.data_map.image image_class=medium}
    </div>
{/section}
{/let}

{* Intro *}
{section show=$node.object.data_map.intro.has_content}
    <div class="attribute-short">
        {attribute_view_gui attribute=$node.object.data_map.intro}
    </div>
{/section}

{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$node.object.data_map.body}
</div>

</div>
</div>
</div>

{* Right info *}
<div class="area-sidebar-normal">

{include uri="design:parts/infopage-navigation-textbox.tpl"}

{section show=$node.data_map.alternative_top_field.has_content}
    {attribute_view_gui attribute=$node.data_map.alternative_top_field}
{/section}

{section show=or( $node.data_map.price.content.ex_vat_price|gt(0),
                  $node.data_map.duration.content.option_list|count|gt( 0 ),
                  $node.data_map.boxed_edition.content.option_list|count|gt( 0 ) )}
<div class="template-design">
<div class="template-module content-view-sidebar">
<div class="template-object class-product">

<div class="attribute-heading">
    {section show=$node.data_map.alternative_shop_header.content}
        <h2 class="bullet">{$node.data_map.alternative_shop_header.content|wash}</h2>
    {section-else}
        <h2 class="bullet">{"Buy product"|i18n( "ezno/shop" )}</h2>
    {/section}
</div>

{* Price *}
{section show=$node.data_map.price.content.ex_vat_price}
<div class="attribute-price">
    {$node.data_map.price.content.ex_vat_price|l10n(currency)}
</div>
{/section}

{* Product option: duration *}
{section show=$node.data_map.duration.content.option_list|count|gt( 0 )}
    <div class="block float-break">
        {section show=$node.data_map.duration.content.name}
            <label>{$node.data_map.duration.content.name|wash(xhtml)}:</label>
        {/section}
        <select name="eZOption[{$node.data_map.duration.id}]">
        {section name=Option loop=$node.data_map.duration.content.option_list}
            <option value="{$Option:item.id}">{$Option:item.value}{section show=$Option:item.additional_price} - {$Option:item.additional_price|l10n(currency)}{/section}</option>
        {/section}
       </select>
    </div>
{/section}

{* Product option: Boxed or not? *}
{section show=$node.data_map.boxed_edition.content.name}
    <div class="block float-break">
        {section show=$node.data_map.boxed_edition.content.name}
            <label>{$node.data_map.boxed_edition.content.name|wash(xhtml)}:</label>
        {/section}
        <select name="eZOption[{$node.data_map.boxed_edition.id}]">
            {section name=Option loop=$node.data_map.boxed_edition.content.option_list}
                <option value="{$Option:item.id}">{$Option:item.value}{section show=$Option:item.additional_price} - {$Option:item.additional_price|l10n(currency)}{/section}</option>
            {/section}
        </select>
    </div>
{/section}

{section show=$node.data_map.price.content.discount_percent|gt(0)}
    <p>{'You are eligible for %percent% discount'|i18n( 'ezno/shop',, hash( '%percent', $node.data_map.price.content.discount_percent ) )}.</p>
{/section}

{* <input type="image" src={"add-to-basket.gif"|ezimage} name="ActionAddToBasket" value="Add to basket" /> *}
<input class="button button-addtobasket" type="submit" name="ActionAddToBasket" value="{'Add to basket'|i18n( 'ezno/shop' )}" />
<input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
<input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
<input type="hidden" name="ViewMode" value="full" />

</div>
</div>
</div>
{/section}

{* Right info *}
{section show=$node.object.data_map.rightinfo.has_content}
    {attribute_view_gui attribute=$node.data_map.rightinfo}
{/section}

</div>

</form>
