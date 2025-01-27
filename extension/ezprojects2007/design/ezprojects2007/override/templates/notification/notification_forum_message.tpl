{let use_url_translation=ezini('URLTranslator','Translation')|eq('enabled')}
{* Class 15 is forum *}
{section show=$object.main_node.parent.object.contentclass_id|eq(15)}
{* Show for forum starting message *}
{set-block scope=root variable=subject}{$object.name} [{ezini("SiteSettings","SiteURL")} - {$object.main_node.parent.name}]{/set-block}
*{$object.name} - {$object.published|l10n(shortdatetime)}, {$object.owner.name}*

{$object.data_map.message.content|wrap(75,"
",false())}


----------------------------------------------------------------
The full forum thread can be read at
http://{ezini("SiteSettings","SiteURL")}{$object.main_node.url_alias|ezurl(no)}

{section-else}
{* Show for replies to message *}
{set-block scope=root variable=subject}{$object.name} [{ezini("SiteSettings","SiteURL")} - {$object.main_node.parent.parent.name}]{/set-block}
{set-block scope=root variable=reply_to}{concat('<',$object.main_node.parent.contentobject_id,'.ezforum','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=references}{concat('<',$object.main_node.parent.contentobject_id,'.ezforum','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
*{$object.name} - {$object.published|l10n(shortdatetime)}, {$object.owner.name}*

{$object.data_map.message.content|wrap(75,"
",false())}

*{$object.main_node.parent.name} - {$object.main_node.object.published|l10n(shortdatetime)}, {$object.main_node.parent.object.owner.name}*

{$object.main_node.parent.data_map.message.content|wrap(75,"
",false())|indent(1,custom,'> ')}


----------------------------------------------------------------
The full forum thread can be read at
http://{ezini("SiteSettings","SiteURL")}{concat($object.main_node.parent.url_alias,'/#msg',$object.id)|ezurl(no)}
{/section}
{set-block scope=root variable=from}{concat($object.owner.name,' <notification@ez.no>')}{/set-block}
{set-block scope=root variable=message_id}{concat('<',$object.id,'.ezforum','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}


{"If you do not wish to continue receiving these notifications,
change your settings at:"|i18n('design/standard/notification')}
http://{ezini("SiteSettings","SiteURL")}{concat("notification/settings/")|ezurl(no)}

-- 
{"%sitename notification system"
 |i18n('design/standard/notification',,
       hash('%sitename',ezini("SiteSettings","SiteURL")))}
{/let}
