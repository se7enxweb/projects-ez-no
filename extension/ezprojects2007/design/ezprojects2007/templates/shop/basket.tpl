{* Shopping basket template *}

<div class="template-design area-main-full">
<div class="template-module shop-basket">
<div class="template-object">

<form method="post" action={"/shop/basket/"|ezurl}>

<div class="attribute-heading">
    <h1>{"Shopping basket"|i18n("ezno")}</h1>
</div>

{section show=$removed_items}
    <div class="warning">
        <h2>{"The following items were removed from your basket, because the products were changed"|i18n("design/standard/shop",,)}</h2>
        <ul>
            {section name=RemovedItem loop=$removed_items}
                <li> <a href={concat("/content/view/full/",$RemovedItem:item.contentobject.main_node_id,"/")|ezurl}>{$RemovedItem:item.contentobject.name}</a></li>
            {/section}
        </ul>
    </div>
{/section}

{section show=$error}
    <div class="error">
        {section show=$error|eq(1)}
            <h2>{"Attempted to add object without price to basket."|i18n("design/standard/shop",,)}</h2>
        {/section}
    </div>
{/section}

{section show=$basket.items}

{include uri="design:parts/shop/items-table.tpl"
         items=$basket.items
         subtotal_ex_vat=$basket.total_ex_vat
         subtotal_inc_vat=$basket.total_inc_vat
         allow_changes=true()
         hide_inc_vat=true()}

<div class="buttonblock">
    <input class="button extrabutton" type="submit" name="RemoveProductItemButton" value="{'Remove selected'|i18n( 'ezno/shop' )}" />
    <input class="button extrabutton" type="submit" name="StoreChangesButton" value="{'Recalculate quantity'|i18n( 'ezno/shop' )}" />
</div>

{include uri="design:parts/shop/progress_indicator.tpl" current="basket"}

<div class="buttonblock">
    <input class="button" type="submit" name="ContinueShoppingButton" value="{'Continue shopping'|i18n('design/standard/shop')}" />
    <input class="button" type="submit" name="CheckoutButton" value="{'Checkout'|i18n('design/standard/shop')} &gt;&gt;" />
</div>

{section-else}

<div class="feedback">
<h2>{"You have no products in your basket"|i18n("design/standard/shop")}</h2>
</div>

{/section}

</form>

</div>
</div>
</div>