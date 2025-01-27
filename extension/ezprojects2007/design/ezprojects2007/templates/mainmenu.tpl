{if and($module_result.path|count|gt(1),is_set($module_result.path.1.node_id))}
{let $projectNode=fetch('content','node',hash('node_id', $module_result.path.1.node_id))
     $pathIDArray=array()
     $currentSubmenuItems=array()}

{if $projectNode.class_identifier|eq('project')}

{* when the project was published less than 20 minutes ago, then we expire the cache each 5 minutes *}
{def $expiry=cond(currentdate()|lt($projectNode.object.published|sum(12000)),300,true(),0)}
{cache-block keys=$uri_string expiry=$expiry ignore_content_expiry}

{foreach $module_result.path as $part}
    {set $pathIDArray=$pathIDArray|append($part.node_id)}
{/foreach}

<script type="text/javascript">
<!--
var menu = new Array();

menu[0] = [];

{foreach $projectNode.children as $key => $child}
menu[{$key|inc}] = [{if array('forums','team','gallery')|contains($child.class_identifier)}{foreach $child.children as $grandChild}'{$grandChild.name|wash|addslashes}', '{$grandChild.url_alias|ezurl('no')}'{delimiter}, {/delimiter}{/foreach}{/if}];

{/foreach}

-->
</script>
<div id="menuborder">

<!-- Main menu area: START -->
<div id="menu" onmouseover="menuHover();" onmouseout="tryHideSubMenues();">

<div id="mainmenu" class="float-break">
<div id="page-width2">
    <ul id="mainmenulist" class="float-break">

    <li class="project" ><a href={$projectNode.url_alias|ezurl} onmouseover="switchSubMenu( this );">{$projectNode.data_map.name.content|wash} &nbsp;&nbsp;&gt;&gt;</a></li>
    {foreach $projectNode.children as $key => $child}
    {let $classes=array()}
    {if and($module_result.path|count|gt(2),$child.path_array|contains( $module_result.path.2.node_id ))}{set $classes=$classes|append("current")}{if array('forums','team','gallery')|contains($child.class_identifier)}{set $currentSubmenuItems=$child.children}{/if}{/if}
    {if $key|eq($projectNode.children|count|dec)}{set $classes=$classes|append("last")}{/if}
        <li {if $classes}class="{$classes|implode(" ")}"{/if}><a href={$child.url_alias|ezurl} onmouseover="switchSubMenu( this );">{$child.name|wash}</a></li>
    {/let}
    {/foreach}

    </ul>

</div>
</div>


<div id="submenu">
<div id="page-width3">
    <ul class="float-break">

    {foreach $currentSubmenuItems as $key => $submenuItem}
    {let $classes=array()}
    {if $currentSubmenuItems|count|dec|eq($key)}
    {set $classes=$classes|append("last")}
    {/if}

    {if and($module_result.path|count|gt(3),$submenuItem.path_array|contains( $module_result.path.3.node_id ))}
    {set $classes=$classes|append("current")}
    {/if}

    <li {if $classes}class="{$classes|implode(" ")}"{/if}><a href={$submenuItem.url_alias|ezurl}>{$submenuItem.name|wash}</a></li>

    {/let}
    {/foreach}


</ul>
</div>
</div>

<script type="text/javascript"><!--
document.getElementById('submenu').style.display = 'none';
--></script>

</div>
<!-- Main menu area: END -->

</div>

{/cache-block}

{/if}

{/let}
{/if}
