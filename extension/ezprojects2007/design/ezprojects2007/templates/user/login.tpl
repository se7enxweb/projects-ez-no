{* User login template *}

<div class="template-design area-main-normal">
<div class="template-module user-login">
<div class="template-object">

<form method="post" action={"/user/login/"|ezurl}>
{def $login_header=""}
{*
{if ezhttp( 'LastAccessesURI', 'session' )|begins_with( "http://issues.ez.no/" )}
    {set $login_header="Log in to issues.ez.no"}
{elseif ezhttp( 'LastAccessesURI', 'session' )|begins_with( "http://project.issues.ez.no/" )}
    {set $login_header="Log in to project.issues.ez.no"}
{else}
    {set $login_header="Log in"|i18n("design/standard/user")}
{/if}
*}
{set $login_header="Log in"|i18n("design/standard/user")}

<div class="attribute-heading">
    <h1>{$login_header}</h1>
</div>

{if $User:warning.bad_login}
    <div class="warning">
        <h2>{"Could not login"|i18n("design/standard/user")}</h2>
        <ul>
            <li>{"A valid username and password is required to login."|i18n("design/standard/user")}</li>
        </ul>
    </div>
{else}
    {if $site_access.allowed|not}
        <div class="warning">
            <h2>{"Access not allowed"|i18n("design/standard/user")}</h2>
            <ul>
                <li>{"You are not allowed to access %1."|i18n("design/standard/user",,array($site_access.name))}</li>
            </ul>
        </div>
    {/if}
{/if}

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
</div>

<input type="hidden" name="RedirectURI" value="{$User:redirect_uri|wash}" />

</form>

</div>
</div>
</div>



{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
     <h2 class="bullet">{"New user"|i18n( "ezno/user" )}?</h2>
</div>

<p>Projects.ez.no uses the same user accounts as ez.no. If you don't have an account yet, please <a href="http://ez.no/user/register">sign up on ez.no</a>.</p>
<p>After signing up on ez.no, it takes maximum 10 minutes before your account is available on projects.ez.no.</p>

<div class="attribute-heading">
    <h2 class="bullet">{"Forgot your username"|i18n( "ezno/user" )}?</h2>
</div>
<p>{"Try your email address as username"|i18n( "ezno/user" )}.</p>

<div class="attribute-heading">
    <h2 class="bullet">{"Forgot your password"|i18n( "ezno/user" )}?</h2>
</div>
<p><a href="http://ez.no/user/forgotpassword">{"Generate a new password on ez.no"|i18n( "ezno/user" )}.</a></p>

<div class="attribute-heading">
    <h2 class="bullet">{"Still unable to login"|i18n( "ezno/user" )}?</h2>
</div>
<p>Update your user profile on ez.no and try again to log in on projects.ez.no 10 minutes later.</p>

</div>
</div>
</div>
