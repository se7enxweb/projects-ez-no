{let use_url_translation=ezini('URLTranslator','Translation')|eq('enabled')
     is_update=false()}
{section loop=$object.versions}{section show=and($:item.status|eq(3),$:item.version|ne($object.current_version))}{set is_update=true()}{/section}{/section}
{section show=$is_update}
{set-block scope=root variable=subject}Comment: {$object.main_node.parent.name} [{ezini("SiteSettings","SiteURL")} - {$object.main_node.parent.data_map.type.content|choose('','Bug','Suggestion','Enhancement')}]{/set-block}
{set-block scope=root variable=from}{concat($object.current.creator.name,' <', $sender, '>')}{/set-block}
{set-block scope=root variable=message_id}{concat('<node.',$object.main_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=reply_to}{concat('<node.',$object.main_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=references}{section name=Parent loop=$object.main_node.path_array}{concat('<node.',$:item,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{delimiter}{" "}{/delimiter}{/section}{/set-block}
*{$object.main_node.parent.name} - {$object.published|l10n(shortdatetime)}, {$object.owner.name}*

{$object.data_map.comment.content|wrap(75,"
",false())}


----------------------------------------------------------------
The bug can be viewed at
http://{ezini("SiteSettings","SiteURL")}{concat($object.main_node.parent.url_alias)|ezurl(no)}
{section-else}
{set-block scope=root variable=subject}Comment: {$object.main_node.parent.name} [{ezini("SiteSettings","SiteURL")} - {$object.main_node.parent.data_map.type.content|choose('','Bug','Suggestion','Enhancement')}]{/set-block}
{set-block scope=root variable=from}{concat($object.owner.name,' <', $sender, '>')}{/set-block}
{set-block scope=root variable=message_id}{concat('<node.',$object.main_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=reply_to}{concat('<node.',$object.main_node.parent_node_id,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{/set-block}
{set-block scope=root variable=references}{section name=Parent loop=$object.main_node.parent.path_array}{concat('<node.',$:item,'.eznotification','@',ezini("SiteSettings","SiteURL"),'>')}{delimiter}{" "}{/delimiter}{/section}{/set-block}
*{$object.main_node.parent.name} - {$object.published|l10n(shortdatetime)}, {$object.owner.name}*

{$object.data_map.comment.content|wrap(75,"
",false())}


----------------------------------------------------------------
The bug can be viewed at
http://{ezini("SiteSettings","SiteURL")}{concat($object.main_node.parent.url_alias)|ezurl(no)}
{/section}


{"If you do not wish to continue receiving these notifications,
change your settings at:"|i18n('design/standard/notification')}
http://{ezini("SiteSettings","SiteURL")}{concat("notification/settings/")|ezurl(no)}

-- 
{"%sitename notification system"
 |i18n('design/standard/notification',,
       hash('%sitename',ezini("SiteSettings","SiteURL")))}
{/let}
