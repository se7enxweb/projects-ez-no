{set-block scope=root variable=subject}{"Confirm user registration at %siteurl"|i18n("design/standard/user/register",,hash('%siteurl',ezini("SiteSettings","SiteURL")))}{/set-block}
{'Your user account at %siteurl has been created'|i18n('design/standard/user/register',,hash('%siteurl',ezini("SiteSettings","SiteURL")))}

{'Account information'|i18n('design/standard/user/register')}:
{'Username'|i18n('design/standard/user/register')}: {$user.login}
{'E-mail'|i18n('design/standard/user/register')}: {$user.email}

{'Click the following URL to confirm your account'|i18n('design/standard/user/register')}
http://{$hostname}{concat("user/activate/",$hash)|ezurl(no)}