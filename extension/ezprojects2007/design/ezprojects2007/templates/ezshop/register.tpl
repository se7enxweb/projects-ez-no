<div class="template-design area-main-normal">
<div class="template-module ezshop-register">
<div class="template-object">

<div class="attribute-heading">
    <h1>{"Your account information"|i18n( 'ezno/shop' )}</h1>
</div>

{section show=$input_error}
    <div class="warning">
    {if $input_error_message}
        <p>{$input_error_message}</p>
    {else}
        <p>Input did not validate, all fields marked with <span class="required">*</span> must be filled in</p>
    {/if}
    </div>
{/section}

<form method="post" action={"/ezshop/register/"|ezurl}>

<div class="block float-break">
    <label>{"Company"|i18n( 'ezno/shop' )}:</label>
    <input class="box" type="text" name="Street1" size="20" value="{$street1}" />
</div>

<div class="block float-break">
    <label>{"First name"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    <input class="box" type="text" name="FirstName" size="10" value="{$first_name}" />
</div>

<div class="block float-break">
    <label>{"Last name"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    <input class="box" type="text" name="LastName" size="20" value="{$last_name}" />
</div>

<div class="block float-break">
    <label>{"Street"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    <input class="box" type="text" name="Street2" size="20" value="{$street2}" />
</div>

<div class="block float-break">
    <label>{"Postal code"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    <input class="box" type="text" name="Zip" size="20" value="{$zip}" />
</div>

<div class="block float-break">
    <label>{"City"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    <input class="box" type="text" name="Place" size="20" value="{$place}" />
</div>

<div class="block float-break">
    <label>{"State"|i18n( 'ezno/shop' )}:</label>
    <input class="box" type="text" name="State" size="20" value="{$state}" />
</div>

<div class="block float-break">
    <label>{"Country"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    {include uri="design:parts/country_dropdown.tpl" select_name="Country" selected_name=$country show_all="1"}
</div>

<div class="block float-break">
    <label>{"Phone"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    <input class="box" type="text" name="Phone" size="20" value="{$phone}" />
</div>

<div class="block float-break">
    <label>{"E-mail"|i18n( 'ezno/shop' )}:<span class="required">*</span></label>
    <input class="box" type="text" name="EMail" size="20" value="{$email}" />
</div>

<div class="block float-break">
    <label>{"Comment"|i18n( 'ezno/shop' )}:</label>
    <textarea class="box" name="Comment" cols="80" rows="5">{$comment}</textarea>
</div>

<div class="block float-break">
    <label>{"Would you like to receive the latest product information, news and updates from eZ?"|i18n( 'ezno/shop' )}:</label>
    <input type="checkbox" name="ReceiveUpdates"{if $receive_updates} checked="checked"{/if} value="1" />
</div>

{include uri="design:parts/shop/progress_indicator.tpl" current="account"}

<div class="buttonblock">
    <input class="button" type="submit" name="StoreButton" value="{concat( 'Continue'|i18n( 'ezno/shop' ), ' &gt;&gt;')}" />
</div>

</form>

</div>
</div>
</div>


{* Right Area *}
{*
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">{"Info"|i18n( 'ezno/shop' )}</h2>
</div>

<p>Insert something here!</p>

</div>
</div>
</div>
*}
