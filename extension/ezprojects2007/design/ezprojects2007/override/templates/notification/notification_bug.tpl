{let use_url_translation=ezini('URLTranslator','Translation')|eq('enabled')
     is_update=false()}
{section loop=$object.versions}{section show=and($:item.status|eq(3),$:item.version|ne($object.current_version))}{set is_update=true()}{/section}{/section}
{* Class 20 is bug *}
{section show=$is_update|not}
{* Show for bug starting message *}
{set-block scope=root variable=subject}{$object.name} ({$object.data_map.version.content}) [{ezini("SiteSettings","SiteURL")} - {$object.data_map.type.content|choose('','Bug','Suggestion','Enhancement')}]{/set-block}
{set-block scope=root variable=message_id}{concat('<node.',$object.main_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=reply_to}{concat('<node.',$object.main_node.parent_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=references}{section name=Parent loop=$object.main_node.parent.path_array}{concat('<node.',$:item,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{delimiter}{" "}{/delimiter}{/section}{/set-block}
*{$object.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')} {$object.data_map.type.content|choose('','bug','suggestion','enhancement')}: {$object.name} - {$object.published|l10n(shortdatetime)}, {$object.owner.name}*

{$object.data_map.description.content|wrap(75,"
",false())}

----------------------------------------------------------------
The bug can be viewed at
http://{ezini("SiteSettings","SiteURL")}{$object.main_node.url_alias|ezurl(no)}

{section-else}
{* Show for updates to bug *}
{set-block scope=root variable=subject}{$object.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')}{section show=and( array(3,6,7)|contains($object.data_map.status.content), $object.data_map.resolution.content|ne(1) )}({$object.data_map.resolution.content|choose('','none','fixed','invalid','Will not fix','Future addition','Duplicate','Works here')}){/section}: {$object.name} ({$object.data_map.version.content}) [{ezini("SiteSettings","SiteURL")} - {$object.data_map.type.content|choose('','Bug','Suggestion','Enhancement')}]{/set-block}
{set-block scope=root variable=message_id}{concat('<node.',$object.main_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=reply_to}{concat('<node.',$object.main_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=references}{section name=Parent loop=$object.main_node.path_array}{concat('<node.',$:item,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{delimiter}{" "}{/delimiter}{/section}{/set-block}
*{$object.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')} {$object.data_map.type.content|choose('','bug','suggestion','enhancement')}{section show=and( array(3,6,7)|contains($object.data_map.status.content), $object.data_map.resolution.content|ne(1) )}({$object.data_map.resolution.content|choose('','none','fixed','invalid','Will not fix','Future addition','Duplicate','Works here')}){/section}: {$object.name} - {$object.published|l10n(shortdatetime)}, {$object.owner.name}*

{$object.data_map.description.content|wrap(75,"
",false())}

*Updated by {$object.current.modified|l10n(shortdatetime)}, {$object.current.creator.name}*
{$object.current.data_map.comments.content}

The following persons have been involved with the bug:


{section name=Author loop=$object.author_array}
{$:item.contentobject.name}{delimiter}{', '}{/delimiter}
{/section}


----------------------------------------------------------------
The bug can be viewed at
http://{ezini("SiteSettings","SiteURL")}{concat($object.main_node.url_alias)|ezurl(no)}
{/section}
{set-block scope=root variable=from}{concat($object.current.creator.name,' <notification@ez.no>')}{/set-block}


{"If you do not wish to continue receiving these notifications,
change your settings at:"|i18n('design/standard/notification')}
http://{ezini("SiteSettings","SiteURL")}{concat("notification/settings/")|ezurl(no)}

-- 
{"%sitename notification system"
 |i18n('design/standard/notification',,
       hash('%sitename',ezini("SiteSettings","SiteURL")))}
{/let}
