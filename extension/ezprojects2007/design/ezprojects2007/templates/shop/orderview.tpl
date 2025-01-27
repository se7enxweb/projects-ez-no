<div class="template-design area-main-full">
<div class="template-module shop-orderview">
<div class="template-object">

<div class="attribute-heading">
  <h1>Your order has been received ( #{$order.order_nr} )</h1>
</div>

<p>Thank you for your order!</p>

<p>We will handle your order and you should receive a order confirmation shortly.</p>

 <p>License products will be sent to you by e-mail to the registered e-mail account.<br />
    If you have ordered physical products we will send you these by regular mail.</p>

{shop_account_view_gui view=html order=$order}

{include uri="design:parts/shop/items-table.tpl"
         items=$order.product_items
         subtotal_ex_vat=$order.product_total_ex_vat
         subtotal_inc_vat=$order.product_total_inc_vat
         total_ex_vat=$order.total_ex_vat
         total_inc_vat=$order.total_inc_vat
         allow_changes=false()
         extra=$order.order_items}

</div>
</div>
</div>