<?php
// URI:       design:user/login.tpl
// Filename:  extension/ezprojects2007/design/ezprojects2007/templates/user/login.tpl
// Timestamp: 1286250000 (Mon Oct 4 20:40:00 PDT 2010)
$oldSetArray_614af6b56aa3c92fc7ec41dccded4ef3 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

$text .= '

<div class="template-design area-main-normal">
<div class="template-module user-login">
<div class="template-object">

<form method="post" action="/user/login">';
// def $login_header
if ( $tpl->hasVariable( 'login_header', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'login_header' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 0,
    2 => 198,
  ),
  1 => 
  array (
    0 => 8,
    1 => 20,
    2 => 218,
  ),
  2 => 'extension/ezprojects2007/design/ezprojects2007/templates/user/login.tpl',
) );
    $tpl->setVariable( 'login_header', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'login_header', '', $rootNamespace );
}

if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'login_header', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['login_header'] = 'Log in';
}
$text .= '
<div class="attribute-heading">
    <h1>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'login_header', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['login_header'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</h1>
</div>
';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'warning', $vars[$namespace] ) ) ? $vars[$namespace]['warning'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'bad_login' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="warning">
        <h2>Could not login</h2>
        <ul>
            <li>A valid username and password is required to login.</li>
        </ul>
    </div>';
}
else
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_access'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'allowed' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="warning">
            <h2>Access not allowed</h2>
            <ul>
                <li>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_access'] : null;
$var4 = compiledFetchAttribute( $var3, 'name' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'You are not allowed to access %1.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</li>
            </ul>
        </div>
    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
<div class="block">
    <label for="id1">Username:</label>
    <input class="halfbox" type="text" size="10" name="Login" id="id1" value="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'login', $vars[$namespace] ) ) ? $vars[$namespace]['login'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" tabindex="1" />
</div>
<div class="block">
    <label for="id2">Password:</label>
    <input class="halfbox" type="password" size="10" name="Password" id="id2" value="" tabindex="1" />
</div>

<div class="buttonblock">
    <input class="defaultbutton" type="submit" name="LoginButton" value="Login" tabindex="1" />
</div>

<input type="hidden" name="RedirectURI" value="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'redirect_uri', $vars[$namespace] ) ) ? $vars[$namespace]['redirect_uri'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />

</form>

</div>
</div>
</div>




<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
     <h2 class="bullet">New user?</h2>
</div>

<p>Projects.ez.no uses the same user accounts as ez.no. If you don\'t have an account yet, please <a href="http://ez.no/user/register">sign up on ez.no</a>.</p>
<p>After signing up on ez.no, it takes maximum 10 minutes before your account is available on projects.ez.no.</p>

<div class="attribute-heading">
    <h2 class="bullet">Forgot your username?</h2>
</div>
<p>Try your email address as username.</p>

<div class="attribute-heading">
    <h2 class="bullet">Forgot your password?</h2>
</div>
<p><a href="http://ez.no/user/forgotpassword">Generate a new password on ez.no.</a></p>

<div class="attribute-heading">
    <h2 class="bullet">Still unable to login?</h2>
</div>
<p>Update your user profile on ez.no and try again to log in on projects.ez.no 10 minutes later.</p>

</div>
</div>
</div>
';

$setArray = $oldSetArray_614af6b56aa3c92fc7ec41dccded4ef3;
$tpl->Level--;
?>
