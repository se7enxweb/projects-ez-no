<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

{*
{switch match=$access_type.name}
{case match="de"}
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
{/case}
{case match="br"}
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">
{/case}
{case match="fr"}
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
{/case}
{case}
*}
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
{*
{/case}
{/switch}
*}

<head>
{let path_array=array()}
{* Reverse path array *}
{section loop=$module_result.path}
    {section show=eq($:item.text,'ez.no')|not()}
        {set path_array=$path_array|array_prepend($:item.text)}
    {/section}
{/section}

<title>
    {section max=3 loop=$path_array}
        {$:item|wash}{delimiter} / {/delimiter}
    {/section}
    {*
    {section show=is_set( $module_result.node_id )}
        {section show=or( eq($module_result.node_id, 2 ), eq( $module_result.node_id, 19 ) )}
            eZ Publish Open Source Enterprise Content Management System
        {/section}
    {/section}
    *}
</title>
{/let}

{cache-block keys=$uri_string ignore_content_expiry expiry=0}

{section show=and(is_set($#Header:extra_data),is_array($#Header:extra_data))}
    {section name=ExtraData loop=$#Header:extra_data}
        {$:item}
    {/section}
{/section}


<meta http-equiv="Content-Language" content="{$site.http_equiv.Content-language}" />

{section name=meta loop=$site.meta}
    <meta name="{$meta:key}" content="{$meta:item}" />

{/section}

<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta name="generator" content="eZ Publish" />

<style type="text/css">
    @import url({'stylesheets/core.css'|ezdesign(no)});
    @import url({'stylesheets/pagelayout.css'|ezdesign(no)});
    @import url({'stylesheets/classes.css'|ezdesign(no)});
    @import url({'stylesheets/print.css'|ezdesign(no)}) print;
</style>

<link type="text/css" rel="stylesheet" href="{'stylesheets/print.css'|ezdesign(no)}" media="print" />

<!-- IE conditional comments; for bug fixes for different IE versions -->
<!--[if IE 5]>     <style type="text/css"> @import url({'stylesheets/ie5.css'|ezdesign(no)});    </style> <![endif]-->
<!--[if lte IE 6]> <style type="text/css"> @import url({'stylesheets/ie6lte.css'|ezdesign(no)}); </style> <![endif]-->
<!--[if IE 6]>     <style type="text/css"> @import url({'stylesheets/ie6.css'|ezdesign(no)});    </style> <![endif]-->

<!-- Load special stylesheet (if necessary) for newer Netscape decendants, Mozilla and Firefox, using the Gecko renderer -->
<script type="text/javascript"><!-- if ((navigator.userAgent.indexOf("Gecko") != -1)&&(navigator.userAgent.indexOf("KHTML") == -1)) document.write("<style type=\"text/css\">@import url({'stylesheets/gecko.css'|ezdesign(no)});</style>");--></script>

<script type="text/javascript" src="{'javascripts/switch-width.js'|ezdesign(no)}"></script>
{*
<script type="text/javascript" src="{'javascripts/languagemenu-hover.js'|ezdesign(no)}"></script>
*}
<script type="text/javascript" src="{'javascripts/dropdownmenu.js'|ezdesign(no)}"></script>
<script type="text/javascript" src="{'javascripts/insertmedia.js'|ezdesign(no)}"></script>
<script type="text/javascript" src="{'javascripts/link-target.js'|ezdesign(no)}"></script>

{/cache-block}

{if is_set($module_result.node_id)}
{cache-block keys=array($module_result.node_id) ignore_content_expiry expiry=0}
{let $max_depth=2}
{if $module_result.node_id|eq(2)}
{set $max_depth=0}
{/if}
{def $rssList=fetch('rss','subtree_list',hash('node_id',$module_result.node_id, 'max_depth', $max_depth))}
{foreach $rssList as $rss}
<link rel="alternate" type="application/rss+xml" title="{$rss.title|wash}" href={concat("/rss/feed/",$rss.access_url)|ezurl} />
{/foreach}
{undef $rssList}
{/let}
{/cache-block}
{/if}

{cache-block keys=$uri_string ignore_content_expiry expiry=0}

</head>
<body onload="menuInit();">

<!-- Complete page area: START -->
<div id="page">

<!-- Header area: START -->
<div id="header">
<div id="header-insert">

<!-- User menu area: START -->
<div id="usermenu">

<div id="page-width1">

<div id="logo">
<h1><a href={"/"|ezurl}><span class="hide">eZ Systems</span></a></h1>
</div>

<h2 id="slogan">Share your information</h2>

<p class="hide"><a href="#main">Skip to main content</a></p>

<hr class="hide" />

{include uri="design:parts/searchbox.tpl"}

<hr class="hide" />
{/cache-block}

<h2 class="hide">User menu</h2>

<!-- User menu content: START -->
<ul>
    {section show=$current_user.is_logged_in|not}
        <li><a href="http://ez.no/user/register">{"Register new user"|i18n( "ezno" )}</a></li>
    {section-else}
        <li><a href={"/notification/settings"|ezurl}>{'Notification settings'|i18n( 'ezno' )}</a></li>
        <li><a href={"/collaboration/view/summary"|ezurl}>{'Collaboration'|i18n( 'ezno' )}</a></li>
{*        <li><a href={"/content/new"|ezurl}>{"New postings"|i18n( "ezno" )}</a></li> *}
    {/section}

    <li>
    {literal}
    <script type="text/javascript">
    <!--
    if ( fixedSize )
    {
        document.write('<a id="setwidth" href="#" onclick="setWidth(); return false;">Dynamic width</a>');
    }
    else
    {
        document.write('<a id="setwidth" href="#" onclick="setWidth(); return false;">Fixed width</a>');
    }
    -->
    </script>
    {/literal}
    </li>
    {*
    {let basket=fetch( shop, basket )
         basket_items=$basket.items}
    {section show=$basket_items}
        <li><a href="/shop/basket">{"Shopping basket"|i18n( "ezno" )}</a></li>
    {/section}
    {/let}

    <li id="language-menu"><a {if eq( $access_type.name, "ezno" )}class="highlighted"{/if} title="English" href="{concat( "/", $site.uri.original_uri|wash)}"><img src={'eng-GB.gif'|ezimage} alt="eng-GB" />en</a>
    {if or( $site.uri.original_uri|begins_with( "company" ),
        and( $site.uri.original_uri|begins_with( "products" ), $site.uri.original_uri|begins_with( "products/ez_publish_cms/documentation" )|not ),
             $site.uri.original_uri|begins_with( "download" ),
             $site.uri.original_uri|begins_with( "services" ),
             $site.uri.original_uri|begins_with( "community" ),
             $site.uri.original_uri|begins_with( "partner" ),
             $site.uri.original_uri|begins_with( "shop" ),
             $site.uri.original_uri|begins_with( "user/login" ),
             $site.uri.original_uri|begins_with( "bugs" ),
             $site.uri.original_uri|begins_with( "articlelist" ),
             $site.uri.original_uri|begins_with( "authorcontact" ),
             $site.uri.original_uri|begins_with( "customers" ),
             $site.uri.original_uri|begins_with( "content/new" ),
             $site.uri.original_uri|begins_with( "content/collectedinfo" ),
             $site.uri.original_uri|begins_with( "content/search" ),
             $site.uri.original_uri|begins_with( "content/advancedsearch" ),
             $site.uri.original_uri|begins_with( "survey/view" ),
             $site.uri.original_uri|begins_with( "ezpublish" ),
             $site.uri.original_uri|begins_with( "ezcomponents" ),
             $site.uri.original_uri|begins_with( "store" ),
             $site.uri.original_uri|eq( "" ) )}
        <a {if eq( $access_type.name, "de" )}class="highlighted"{/if} title="Deutsch"    href="{concat( "/de/", $site.uri.original_uri|wash)}"><img src={'ger-DE.gif'|ezimage} width="18" height="12" alt="ger-DE" />de</a>
        <a {if eq( $access_type.name, "br" )}class="highlighted"{/if} title="Portuguese" href="{concat( "/br/", $site.uri.original_uri|wash)}"><img src={'por-BR.gif'|ezimage} width="18" height="12" alt="por-BR" />br</a>
    {else}
        <span class="disabled" title="German translation is not available for this page."><img src={'images/ger-DE-disabled.gif'|ezdesign} width="18" height="12" alt="ger-DE" />de</span>
        <span class="disabled" title="Portuguese translation is not available for this page."><img src={'images/por-BR-disabled.gif'|ezdesign} width="18" height="12" alt="por-BR" />br</span>
    {/if}
    </li>
    *}
    {section show=$current_user.is_logged_in}
        <li><a href={"/redirect/profile"|ezurl}>{"My profile"|i18n( "ezno" )}</a></li>
        <li><a href={"/user/logout"|ezurl}>{"Log out"|i18n( "ezno" )}</a></li>
    {section-else}
        <li><a href={"/user/login"|ezurl}>{"Log in"|i18n( "ezno" )}</a></li>
    {/section}
</ul>
<!-- User menu content: END -->

</div>

</div>
<!-- User menu area: END -->

</div>
</div>
<!-- Header area: END -->

{include uri="design:mainmenu.tpl"}

<hr class="hide" />
<!-- Path area: START -->
<div id="path">

<div id="page-width4">
<h2 class="hide">Path</h2>

<!-- Path content: START -->
<p>
    {section name=Path loop=$module_result.path}
        {section show=and(is_set($Path:item.url_alias),$Path:item.url_alias)}
            <a href={$Path:item.url_alias|ezurl}>{$Path:item.text|shorten(30)|wash(xhtml)|downcase}</a>
        {section-else}
            {if and(is_set($Path:item.url),$Path:item.url)}
            <a href={$Path:item.url|ezurl}>{$Path:item.text|shorten(30)|wash(xhtml)|downcase}</a>
            {else}
            {$Path:item.text|shorten(30)|wash(xhtml)|downcase}
            {/if}
        {/section}

        {delimiter}
            /
        {/delimiter}
    {/section}
</p>
<!-- Path content: END -->

</div>

</div>
<!-- Path area: END -->

<hr class="hide" />

<!-- Main area: START -->

<div id="page-width5">
<div id="main" class="float-break">

<!-- Main area content: START -->


{$module_result.content}

<!-- Main area content: END -->

</div>
</div>
<!-- Main area: END -->
<hr class="hide" />

<!-- Footer area: START -->
<div id="page-width6">
<div id="footer">

<address>Powered by eZ Publish&reg; Content Management System.</address>
<address>Copyright &copy; 2007-2008 eZ Systems AS (except where otherwise noted). All rights reserved.</address>
</div>
</div>
<!-- Footer area: END -->

</div>
<!-- Complete page area: END -->

{* Google Analytics *}
{*
{if using_ssl()}
<script src="https://ssl.google-analytics.com/urchin.js" type="text/javascript"></script>
{else}
*}
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
{*{/if}*}
<script type="text/javascript">
    _uacct = "UA-581888-4";
    urchinTracker();
</script>

</body>
</html>
