<div class="template-design area-main-full">
<div class="template-module shop-confirmorder">
<div class="template-object">

<form method="post" action={"/shop/confirmorder/"|ezurl}>

<div class="attribute-heading">
    <h1>{"Confirm order"|i18n("design/standard/shop")}</h1>
</div>

{shop_account_view_gui view=html order=$order}

{include uri="design:parts/shop/items-table.tpl"
         items=$order.product_items
         subtotal_ex_vat=$order.product_total_ex_vat
         subtotal_inc_vat=$order.product_total_inc_vat
         total_ex_vat=$order.total_ex_vat
         total_inc_vat=$order.total_inc_vat
         allow_changes=false()
         extra=$order.order_items}

{include uri="design:parts/shop/progress_indicator.tpl" current="confirmorder"}

<div class="buttonblock">
    <input class="button" type="submit" name="ConfirmOrderButton" value="{'Confirm'|i18n('design/standard/shop')} &gt;&gt;" />
</div>

</form>

</div>
</div>
</div>