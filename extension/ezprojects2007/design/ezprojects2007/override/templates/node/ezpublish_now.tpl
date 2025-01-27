{* Node override for eZ Publish NOW product page. *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-product">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{* Image *}
{def $image=$node.object.data_map.image.content}
{if $image}
    <div class="attribute-image">
        {attribute_view_gui attribute=$image.data_map.image image_class=medium}
    </div>
{/if}

{* Intro *}
{if $node.object.data_map.intro.has_content}
    <div class="attribute-short">
        {attribute_view_gui attribute=$node.object.data_map.intro}
    </div>
{/if}

{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$node.object.data_map.body}
</div>

</div>
</div>
</div>


{* Right info *}
<div class="area-sidebar-normal">

{if $node.data_map.alternative_top_field.has_content}
    {attribute_view_gui attribute=$node.data_map.alternative_top_field}
{/if}

<div class="template-design">
<div class="template-module content-view-sidebar">
<div class="template-object class-product">

{* Shop Header *}
<div class="attribute-heading">
    {if $node.data_map.alternative_shop_header.content}
        <h2 class="bullet">{$node.data_map.alternative_shop_header.content|wash}</h2>
    {else}
        <h2 class="bullet">{"Buy product"|i18n( "ezno/shop" )}</h2>
    {/if}
</div>

{* Add to Basket buttons. *}
{if $node.data_map.addition_options.content.option_list|count|eq(2)}
    {* First button *}
    <h3>{$node.data_map.addition_options.content.option_list.0.value}</h3>
    <div class="attribute-price">
        {$node.data_map.addition_options.content.option_list.0.additional_price|l10n(currency)}
    </div>
    <form method="post" action={"/content/action"|ezurl}>
        <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
        <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
        <input type="hidden" name="ViewMode" value="full" />
        <input type="hidden" name="eZOption[{$node.data_map.addition_options.id}]" value="0" />
      
        <input class="button button-addtobasket" type="submit" name="ActionAddToBasket" value="{'Add to basket'|i18n( 'ezno/shop' )}" />
    </form>
    
    {if $node.data_map.price.content.discount_percent|gt(0)}
        <p>{'You are eligible for %percent% discount'|i18n( 'ezno/shop',, hash( '%percent', $node.data_map.price.content.discount_percent ) )}.</p>
    {/if}
    
    <hr /> {* ----------------------------------------------------------- *}
    
    <h3>{$node.data_map.addition_options.content.option_list.1.value}</h3>
    {* Second button *}
    <div class="attribute-price">
        {$node.data_map.addition_options.content.option_list.1.additional_price|l10n(currency)}
    </div>

    <form method="post" action={"/content/action"|ezurl}>
        <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
        <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
        <input type="hidden" name="ViewMode" value="full" />
     
        <input type="hidden" name="eZOption[{$node.data_map.addition_options.id}]" value="1" />
        <input class="button button-addtobasket" type="submit" name="ActionAddToBasket" value="{'Add to basket'|i18n( 'ezno/shop' )}" />

    </form>
    
    {if $node.data_map.price.content.discount_percent|gt(0)}
        <p>{'You are eligible for %percent% discount'|i18n( 'ezno/shop',, hash( '%percent', $node.data_map.price.content.discount_percent ) )}.</p>
    {/if}    
{/if}


</div>
</div>
</div>

{* Right info *}
{if $node.object.data_map.rightinfo.has_content}
    {attribute_view_gui attribute=$node.data_map.rightinfo}
{/if}

</div>

</form>