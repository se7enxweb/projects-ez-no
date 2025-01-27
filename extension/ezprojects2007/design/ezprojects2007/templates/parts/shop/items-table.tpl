{* Create product table *}

{* Parameters:
   - items = Array - Required
   - subtotal_ex_vat = Float - Required
     Cost of all products excluded VAT. (not including shipping or similar)
   - subtotal_inc_vat = Float - Required
     Cost of all products included VAT. (not including shipping or similar)
   - total_ex_vat = Float
     Total cost of order excluded VAT. (included all extra expenses).
   - total_inc_vat = Float
     Total cost of order included VAT. (included all extra expenses).
   - allow_changes = Boolean
     If we should allow users to change quantity and remove orders.
   - extra = Array
     Extra costs associated with the order. Usally something like shipping.
   - hide_inc_vat = Boolean
     Hide price including VAT
*}

<table class="shop-basket" cellspacing="0">
<tr>
	<th>&nbsp;</th>
	<th>{"Item"|i18n("design/standard/shop")}</th>
	<th>{"Price per item ex. VAT"|i18n("ezno/shop")}</th>
	<th width="1%">{"Quantity"|i18n("ezno/shop")}</th>
	<th>{"Total cost ex. VAT"|i18n("ezno/shop")}</th>
	{section show=$hide_inc_vat|not()}<th>{"Total cost inc. VAT"|i18n("ezno/shop")}</th>{/section}
</tr>
{section loop=$items sequence=array( 'bglight', 'bgdark' )}
<tr class="{$:sequence}">
	<td>{section show=$allow_changes}
            <input type="checkbox" name="RemoveProductItemDeleteList[]" value="{$:item.id}" />
        	<input type="hidden" name="ProductItemIDList[]" value="{$:item.id}" />
        {section-else}
            &nbsp;
        {/section}
    </td>
	<td>
	<a href={concat( "/content/view/full/", $:item.node_id)|ezurl}>{$:item.object_name}</a>
    {section show=$:item.item_object.option_list}
         {section name=Options loop=$:item.item_object.option_list}
            <div class="shop-option"><em>{"Option"|i18n("ezno/shop")}:</em> {$Options:item.value}</div>
        {/section}
    {/section}
	</td>
 	<td class="number">{$:item.price_ex_vat|l10n(currency)} {section show=$:item.discount_percent|gt(0)}(-{$:item.discount_percent}% discount){/section}</td>
	<td class="quantity">
    {section show=$allow_changes}
        <input type="text" name="ProductItemCountList[]" value="{$:item.item_count}" size="2" />
    {section-else}
        {$:item.item_count}
    {/section}
    </td>
	<td class="number">{$:item.total_price_ex_vat|l10n(currency)}</td>
    {section show=$hide_inc_vat|not()}<td class="number">{$:item.total_price_inc_vat|l10n(currency)}</td>{/section}
</tr>
{/section}

{* Sub total *}
<tr>
     <th colspan="4">&nbsp;</th>
     <th>{"ex. VAT"|i18n("design/standard/shop")}</th>
   	 {section show=$hide_inc_vat|not()}<th>{"inc. VAT"|i18n("design/standard/shop")}</th>{/section}
</tr>
<tr class="bglight sum">
    <th colspan="4">{"Subtotal"|i18n("ezno/shop")}</th>
    <td class="number">{$subtotal_ex_vat|l10n(currency)}</td>
  	{section show=$hide_inc_vat|not()}<td class="number">{$subtotal_inc_vat|l10n(currency)}</td>{/section}
</tr>

{* Shipping & Handling *}
{section show=is_set( $extra )}
    {section loop=$extra}
        <tr class="bgdark sum">
            <th colspan="4">Shipping &amp; handling</th>
            <td class="number">{$:item.price_ex_vat|l10n(currency)}</td>
            <td class="number">{$:item.price_inc_vat|l10n(currency)}</td>
        </tr>
    {/section}
{/section}

{* Total *}
{section show=and( is_set( $total_ex_vat ), is_set( $total_inc_vat ) )}
<tr class="bglight sum">
    <th colspan="4">{"Total"|i18n("ezno/shop")}</th>
    <td class="number">{$total_ex_vat|l10n(currency)}</td>
  	{section show=$hide_inc_vat|not()}<td class="number">{$total_inc_vat|l10n(currency)}</td>{/section}
</tr>
{/section}
</table>