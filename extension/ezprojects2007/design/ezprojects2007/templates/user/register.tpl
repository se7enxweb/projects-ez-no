<div class="template-design area-main-normal">
<div class="template-module user-register">
<div class="template-object">


<form enctype="multipart/form-data"  action={"/user/register/"|ezurl} method="post" name="Register">

<div class="attribute-heading">
    <h1>Register user account at projects.ez.no</h1>
</div>

{section show=$validation.processed}
    {section name=UnvalidatedAttributes loop=$validation.attributes show=$validation.attributes}
        <div class="warning">
            <h2>{"Input did not validate"|i18n("design/standard/user")}</h2>
            <ul>
                <li>{$UnvalidatedAttributes:item.name}: {$UnvalidatedAttributes:item.description}</li>
            </ul>
        </div>
        {section-else}
        <div class="feedback">
            <h2>{"Input was stored successfully"|i18n("design/standard/user")}</h2>
        </div>
    {/section}
{/section}


{def $attribute=""}
<div class="block float-break">
{foreach $content_attributes as $attr}
{if $attr.contentclass_attribute_identifier|eq("first_name")}
    <label>First name:</label>
    {attribute_edit_gui attribute=$attr}
{/if}
{if $attr.contentclass_attribute_identifier|eq("last_name")}
    <label>Last name:</label>
    {attribute_edit_gui attribute=$attr}
{/if}
{if $attr.contentclass_attribute_identifier|eq("user_account")}
    {set $attribute=$attr}
{/if}
{/foreach}
</div>

<div class="block float-break">
    <div class="element">
        <label>{"E-Mail"|i18n("design/standard/content/datatype")}:</label>
        <input type="text" name="ContentObjectAttribute_data_user_email_{$attribute.id}" size="30" value="{$attribute.content.email|wash(xhtml)}">
    </div>
    <div class="element">
        <label>{"Username"|i18n("design/standard/content/datatype")}:</label>
        <input type="text" name="ContentObjectAttribute_data_user_login_{$attribute.id}" size="11" value="{$attribute.content.login|wash}" />

        <input type="hidden" name="ContentObjectAttribute_data_user_password_{$attribute.id}" size="11" value="{section show=$attribute.content.original_password}{$attribute.content.original_password|wash}{section-else}{section show=$attribute.content.has_stored_login}password{/section}{/section}" />
        <input type="hidden" name="ContentObjectAttribute_data_user_password_confirm_{$attribute.id}" size="11" value="{section show=$attribute.content.original_password_confirm}{$attribute.content.original_password_confirm|wash}{section-else}{section show=$attribute.content.has_stored_login}password{/section}{/section}" />
    </div>
</div>

<div class="buttonblock">
    <input class="button" type="submit" name="PublishButton" value="{'Register'|i18n('design/standard/user')}" />
    <input class="button" type="submit" name="CancelButton" value="{'Cancel'|i18n('design/standard/user')}" />
</div>

</form>

</div>
</div>
</div>


{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Read before registering</h2>
</div>

<ol>
<li>Cookies are required to register a new account.</li>
<li>Your password will be automaticly generated and sent to you by email.</li>
<li>Together with your password you will also receive an activation link. You will not
be able to log in to projects.ez.no before you have activated your account using this link.</li>
</ol>

</div>
</div>
</div>

