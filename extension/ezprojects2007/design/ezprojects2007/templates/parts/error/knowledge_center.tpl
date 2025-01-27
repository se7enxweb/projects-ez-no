{* User login template *}

<div class="template-design area-main-normal">
<div class="template-module user-login">
<div class="template-object">

<form method="post" action={"/user/login/"|ezurl}>

<div class="attribute-heading">
    <h1>Knowledge centre login</h1>
</div>

<div class="block">
    <label for="id1">{"Username"|i18n("design/standard/user",'User name')}:</label>
    <input class="halfbox" type="text" size="10" name="Login" id="id1" value="{$User:login|wash}" tabindex="1" />
</div>

<div class="block">
    <label for="id2">{"Password"|i18n("design/standard/user")}:</label>
    <input class="halfbox" type="password" size="10" name="Password" id="id2" value="" tabindex="1" />
</div>

<div class="buttonblock">
    <input class="defaultbutton" type="submit" name="LoginButton" value="{'Login'|i18n('design/standard/user','Button')}" tabindex="1" />
    <input class="button" type="submit" name="RegisterButton" value="{'Sign Up'|i18n('design/standard/user','Button')}" tabindex="1" />
</div>

{section show=ezini( 'SiteSettings', 'LoginPage' )|eq( 'custom' )}
    <p><a href={'/user/forgotpassword'|ezurl}>{'Forgot your password?'|i18n( 'design/standard/user' )}</a></p>
{/section}

<input type="hidden" name="RedirectURI" value="{$User:redirect_uri|wash}" />

</form>

</div>
</div>
</div>



{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-bug">

<div class="attribute-heading">
     <h2 class="bullet">Login required</h2>
</div>

<p>The Knowledge centre is restriced to partners only. </p>

<p> If you are not a partner
<a href={"/partner/ez_publish_partner_program/apply"|ezurl}>click here to learn how you can become one</a>.</p>

<p>If you got questions about the Knowledge centre or the partner program in general, send a mail

to partner<span class="spamfilter">NOSPAM</span>@ez.no.
<div class="attribute-heading">
    <h2 class="bullet">Forgot your username?</h2>
</div>
<p>Try your email address as username.</p>

<div class="attribute-heading">
    <h2 class="bullet">Forgot your password?</h2>
</div>

<p><a href={"/user/forgotpassword/"|ezurl}>Click here to generate a new password.</a></p>

</div>
</div>
</div>
