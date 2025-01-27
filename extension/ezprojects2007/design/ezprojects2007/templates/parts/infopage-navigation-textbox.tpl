{def $menu_attribute=false()
     $header_link=false()}

{* If current page has the menu enabled check first if a menu is defined for current page
    and use that if found. If not then check and use parents menu if found, repeat for grand parent. *}

{if $node.data_map.menu_enabled.content}
    {if $node.data_map.menu.has_content}
        {set $menu_attribute=$node.data_map.menu}
    {else}
        {if $node.parent.data_map.menu.has_content}
            {set $menu_attribute=$node.parent.data_map.menu}
            {set $header_link=$node.parent.url_alias}
        {else}
            {if $node.parent.parent.data_map.menu.has_content}
                {set $menu_attribute=$node.parent.parent.data_map.menu}
                {set $header_link=$node.parent.parent.url_alias}
            {/if}
        {/if}
    {/if}
{/if}


{if $menu_attribute}
<div class="template-design">
<div class="template-module">
<div class="template-object class-infopage">

<div class="attribute-heading">
    <h2 class="bullet">Navigation</h2>
</div>

<ul id="thirdlevel-menu" class="linklist">
    {def $type="" $link_css_class="" $exploded_row=array() $col0="" $col1="" $col2="" $inside_menu=false() $current_url=false()}
    {foreach $menu_attribute.content|explode( "\n" ) as $row}
        {set $exploded_row=$row|explode( " - ")}
        {set $col0="" $col1="" $col2="" $link_css_class=""}

        {if and( is_set( $exploded_row.0 ), is_set( $exploded_row.1 ) )}
            {set $col0=$exploded_row.0|trim( "\n")}
            {set $col1=$exploded_row.1|trim}
            {if is_set( $exploded_row.2 )}
                {set $col2=$exploded_row.2|trim}
            {/if}
        {/if}

        {* Seems like trim() is also removing the dash (-), so check $exploded_row.0 instead *}
        {if $exploded_row.0|begins_with( "--" )}
            {set $type="--"}
        {elseif $exploded_row.0|begins_with( "Menu" )}
            {set $type="menu"}                
        {elseif $exploded_row.0|begins_with( "Sublevel" )}
            {set $type="sub"}                
        {elseif $exploded_row.0|begins_with( "End Menu" )}
            {set $type="endmenu"}                
        {elseif $exploded_row.0|begins_with( "-" )}
            {set $type="-"}                
        {else}
            {set $type=$col0}
        {/if}

        {switch match=$type}
            {case in=array( "Header", "header")}
                {if $header_link}
                    <li class="section-header"><h3><a href={$header_link|ezurl}>{$col1}</a></h3></li>
                {else}
                    <li class="section-header"><h3>{$col1}</h3></li>
                {/if}
                {set $prev_item=array( $col0, $col1 )}
            {/case}
            {case match="-"}
                <li class="separator"><hr /></li>
                {set $prev_item=array( $col0, $col1 )}
            {/case}
            {case match="sub"}
                {if $inside_menu}
                    {*if $col2|begins_with( $current_url )*}
                        {if concat( "/", $node.url_alias )|eq( $col2 )}
                            {set $link_css_class='id="selected"'}
                        {/if}
                        <li class="level1"><a {$link_css_class} href="{$col2}">{$col1}</a></li>                    
                    {*/if*}                    
                {/if}
            {/case}
            {case match="endmenu"}
                {set $inside_menu=false() 
                     $current_url=false}
            {/case}
            {case match="menu"}
                {if concat( "/", $node.url_alias )|begins_with( $col2 )}
                {set $inside_menu=true()
                     $current_url=$col2}
                {/if}
                {if concat( "/", $node.url_alias )|eq( $col2 )}
                    {set $link_css_class='id="selected"'}
                {/if}
                <li><a {$link_css_class} href="{$col2}">{$col1}</a></li>
            {/case}
            {case}
                {if concat( "/", $node.url_alias )|eq( $col1 )}
                    {set $link_css_class='id="selected"'}
                {/if}
                <li><a {$link_css_class} href="{$col1}">{$col0}</a></li>
            {/case}
        {/switch}
        
    {/foreach}
</ul>   

</div>
</div>
</div>
{/if}
