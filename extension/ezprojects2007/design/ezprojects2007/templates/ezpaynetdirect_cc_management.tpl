<div class="template-design area-main-normal">
<div class="template-module ezpaynetdirect">
<div class="template-object">

<script type="text/javascript">
<!--
{literal}
  	function disableSubmitButton(form)
    {
         form.action_buy.style.visibility = "hidden";
    }
{/literal}
// -->
</script>


<form action={'/shop/checkout'|ezurl} method="post" enctype="multipart/form-data" onsubmit="disableSubmitButton(this)">

<div class="attribute-heading">
{section show=and($store_cc_info, $credit_cards_info)}
    <h1>{'Please select or enter your credit card information'|i18n('ezpaynetdirect')}</h1>
{section-else}
    <h1>{'Please enter your credit card information'|i18n('ezpaynetdirect')}</h1>
{/section}
</div>

{section show=$warning_msg}
    <div class=warning>
        <h2>{$warning_msg}</h2>
    </div>
    </br>
{/section}

{section show=and($store_cc_info, $credit_cards_info)}
{'Please select an existing creditcard or enter a new creditcard'|i18n('ezpaynetdirect')}:
<table border=0>
{section name=CC loop=$credit_cards_info}
<tr><td><input type="radio" name="cc_id" value="{$CC:item.id}"> {$CC:item.cc_number_part}</td>{*<td><a href={concat("paynetdirect/removecc/", $CC:item.id)|ezurl}>remove</a></td>*}</tr>
{/section}
<tr><td><input type="submit" name="action_rm_cc"   value="Remove" /> <input type="submit" name="action_buy" value="Next" /></td></tr>
</table>
{/section}
<hr/>
{'Please fill in your credentials if your credit card is not listed above'|i18n('ezpaynetdirect')}:
<br/>
<div class="block">
<table border=0>
<tr><td>{'Credit card number'|i18n('ezpaynetdirect')}: <br/> {'(visa or mastercard)'|i18n('ezpaynetdirect')}</td><td><input type="text" name="ccnr"></td></tr>
<tr><td>{'Credit card expiry date'|i18n('ezpaynetdirect')}:</td>
<td>
<select name="ccex_month">
<option></option>
{let monthNumbers=array('01','02','03','04','05','06','07','08','09','10','11','12')}
{section name=Months loop=$monthNumbers}
<option value={$Months:item}>{$Months:item}</option>
{/section}
</select>
{/let}
/
<select name="ccex_year">
<option></option>
{let current_year=sub( currentdate()|datetime( 'custom', '%Y' ), 1 )}
{section loop=15}
<option value={sum($current_year, $:item)}>{sum($current_year, $:item)}</option>
{/section}
{/let}
</select>

</td></tr>
</table>
</div>
<br/>

{*
<input type="checkbox" name="action_add_cc" value="Add">{'Save creditcard information.'|i18n('ezpaynetdirect')}
*}
<br/>

<hr/>
<input type="submit" name="action_buy"     value="Ok" />
<input type="submit" name="action_usercancel"  value="Cancel"/>

</form>

</div>
</div>
</div>

{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
     <h2 class="bullet">Please note</h2>
</div>

<p>The next step might take some time. Please wait while your credit card is being processed.</p>

</div>
</div>
</div>
