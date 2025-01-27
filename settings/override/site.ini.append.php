<?php /* #?ini charset="utf-8"?

[DatabaseSettings]
DatabaseImplementation=ezmysql
Server=localhost
User=ze_projects
Password=db-projects-2027
Database=ze_projects
Charset=utf8
DebugTransactions=enabled
Socket=disabled

[ExtensionSettings]
ActiveExtensions[]=ezjscore
ActiveExtensions[]=addcollabrule
ActiveExtensions[]=autorss
ActiveExtensions[]=ezdhtml
ActiveExtensions[]=ezprojects2007
ActiveExtensions[]=ezprojects
ActiveExtensions[]=ezrating
ActiveExtensions[]=ezsh
ActiveExtensions[]=ezssp
ActiveExtensions[]=ezurlfilter
ActiveExtensions[]=membership
ActiveExtensions[]=ezsubtreerelationfilter
ActiveExtensions[]=owner
ActiveExtensions[]=redirect
ActiveExtensions[]=syndication
ActiveExtensions[]=unixname
ActiveExtensions[]=ezfind
ActiveExtensions[]=ezprojects_export
ActiveExtensions[]=ezcommunityanalysis

[Session]
SessionNameHandler=custom

[SiteSettings]
DefaultAccess=ezprojects
SiteList[]=ezprojects

[SiteAccessSettings]
CheckValidity=false
AvailableSiteAccessList[]=ezprojects
AvailableSiteAccessList[]=ezprojectsadmin
MatchOrder=host
HostMatchMapItems[]
HostMatchMapItems[]=projects.ezpublish.one;ezprojects
HostMatchMapItems[]=edit.projects.ezpublish.one;ezpublishadmin
RemoveSiteAccessIfDefaultAccess=enabled

[MailSettings]
Transport=sendmail
#AdminEmail=kristof.coomans@telenet.be
AdminEmail=pb@ez.no
EmailSender=notifications@ez.no

[UserSettings]
HashType=crypt
RequireUniqueEmail=true
UserClassID=35

[SiteAccessRules]
Rules[]=access;enable
Rules[]=moduleall
Rules[]=access;disable
Rules[]=module;content/tipafriend
Rules[]=module;user/register

[DebugSettings]
QuickSettingsList[]=TemplateSettings;TemplateCompile;site.ini;Templace compile
QuickSettingsList[]=TemplateSettings;TemplateCache;site.ini;Templace cache
QuickSettingsList[]=ContentSettings;ViewCaching;site.ini;View cache
# DebugByUser=enabled
# DebugUserIDList[]=14
# DebugUserIDList[]=5757

DebugOutput=enabled

[SearchSettings]
DelayedIndexing=enabled

[URLTranslator]
TransformationGroup=urlalias_compat

*/ ?>
