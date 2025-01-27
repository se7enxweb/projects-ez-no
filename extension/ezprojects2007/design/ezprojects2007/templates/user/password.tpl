<div class="template-design area-main-normal">
<div class="template-module user-password">
<div class="template-object">

<form action={concat($module.functions.password.uri,"/",$userID)|ezurl} method="post" name="Password">

<div class="attribute-heading">
    <h1>{"Change password for user"|i18n("design/standard/user")} {$userAccount.login}</h1>
</div>

{section show=$message}
    {section show=or( $oldPasswordNotValid, $newPasswordNotMatch )}
        {section show=$oldPasswordNotValid}
            <div class="warning">
                <h2>{'Please retype your old password.'|i18n('design/standard/user')}</h2>
            </div>
        {/section}
        {section show=$newPasswordNotMatch}
            <div class="warning">
                <h2>{"Password didn't match, please retype your new password."|i18n('design/standard/user')}</h2>
            </div>
        {/section}
    {section-else}
        <div class="feedback">
            <h2>{'Password successfully updated.'|i18n('design/standard/user')}</h2>
        </div>
    {/section}
{/section}

<div class="block">
    <label>{"Old password"|i18n("design/standard/user")} {section show=$oldPasswordNotValid}*{/section}:</label>
    <input type="password" name="oldPassword" size="20" value="{$oldPassword}" />
</div>

<div class="block float-break">
    <div class="element">
        <label>{"New password"|i18n("design/standard/user")} {section show=$newPasswordNotMatch}*{/section}:</label>
        <input type="password" name="newPassword" size="20" value="{$newPassword}" />
    </div>
    <div class="element">
        <label>{"Retype password"|i18n("design/standard/user")} {section show=$newPasswordNotMatch}*{/section}:</label>
        <input type="password" name="confirmPassword" size="20" value="{$confirmPassword}" />
    </div>
</div>

<div class="buttonblock">
    <input class="button" type="submit" name="OKButton" value="{'OK'|i18n('design/standard/user')}" />
    <input class="button" type="submit" name="CancelButton" value="{'Cancel'|i18n('design/standard/user')}" />
    <input type="hidden" name="RedirectOnCancel" value={concat("/user/edit/",$userID)|ezurl} />
</div>

</form>

</div>
</div>
</div>


{* Right info *}
<div class="template-design area-sidebar-normal">
<div class="template-module edit-user">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Password hints</h2>
</div>
<p>When creating a password make sure you create a strong password. A strong password is:</p>
<ul>
    <li>At least 8 characters long</li>
    <li>Not a common dictonary word</li>
    <li>Contains a mixture of letters, numbers or other characters</li>
</ul>

<a href={concat("/user/edit/",$userID)|ezurl}>Return to profile</a>

</div>
</div>
</div>