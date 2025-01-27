{set-block scope=root variable=subject}{"Orderconfirmation ez.no:"|i18n("design/standard/shop")} (#{$order.order_nr}){/set-block}

Thank you for your business.

Your order number: #{$order.order_nr}

{shop_account_view_gui view=ascii order=$order}


{"Product items"|i18n("design/standard/shop")}

{section name=ProductItem loop=$order.product_items show=$order.product_items sequence=array(bglight,bgdark)}
{$ProductItem:item.item_count}x {$ProductItem:item.object_name} {$ProductItem:item.price_inc_vat|l10n(currency)}: {$ProductItem:item.total_price_inc_vat|l10n(currency)}

{/section}


{"Subtotal of items"|i18n("design/standard/shop")}:  {$order.product_total_inc_vat|l10n(currency)}

{section name=OrderItem loop=$order.order_items show=$order.order_items sequence=array(bglight,bgdark)}
{$OrderItem:item.description}: 	{$OrderItem:item.price_inc_vat|l10n(currency)}
{/section}

{"Order total:"|i18n("design/standard/shop")}{$order.total_inc_vat|l10n(currency)}
