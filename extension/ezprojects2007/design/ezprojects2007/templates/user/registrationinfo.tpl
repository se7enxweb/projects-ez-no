{def $site_url=ezini('SiteSettings','SiteURL')}
{set-block scope=root variable=subject}{'%1 registration info'|i18n('design/standard/user/register',,array($site_url))}{/set-block}
{'Thank you for registering at %siteurl.'|i18n('design/standard/user/register',,hash('%siteurl',$site_url))}

{'Your account information'|i18n('design/standard/user/register')}
{'Username'|i18n('design/standard/user/register')}: {$user.login}
{'Email'|i18n('design/standard/user/register')}: {$user.email}

{if $password}
{'Password'|i18n('design/standard/user/register')}: {$password}
{/if}
 
 
 
{if and( is_set( $hash ), $hash )}
{'Click the following URL to confirm your account'|i18n('design/standard/user/register')}
http://{$hostname}{concat("user/activate/",$hash)|ezurl(no)}

Your account is disabled and you will not be able to log in before
you have clicked on the above link.
{/if}



{'Link to user information'|i18n('design/standard/user/register')}:
http://{$hostname}{concat('user/edit/',$object.id)|ezurl(no)}
