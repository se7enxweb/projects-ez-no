{def $matrix_attribute=false()}

{* If current page has the menu enabled check first if a menu is defined for current page
    and use that if found. If not then check and use parents menu if found, repeat for grand parent. *}

{if $node.data_map.menu_enabled.content}
    {if $node.data_map.menu.content.rowCount|gt( 0 )}
        {set $matrix_attribute=$node.data_map.menu}
    {else}
        {if $node.parent.data_map.menu.content.rowCount|gt( 0 )}
            {set $matrix_attribute=$node.parent.data_map.menu}
        {else}
            {if $node.parent.parent.data_map.menu.content.rowCount|gt( 0 )}
                {set $matrix_attribute=$node.parent.parent.data_map.menu}
            {/if}
        {/if}
    {/if}
{/if}


{if $matrix_attribute}
<div class="template-design">
<div class="template-module">
<div class="template-object class-infopage">

<div class="attribute-heading">
    <h2 class="bullet">Navigation</h2>
</div>


<ul id="thirdlevel-menu" class="linklist">
    {def $type = "" $name="" $url="" $link_css_class=""}
    {foreach $matrix_attribute.content.matrix.rows.sequential as $row}
        {set $name=""}
        {set $url=""}
        {set $link_css_class=""}
        {foreach $row.columns as $columns sequence array( 0, 1, 2 ) as $i}
            {* the first column which contains the name *}
            {switch match=$i}
                {case match=0}
                    {set $type=$columns}
                {/case}
                {case match=1}
                    {set $name=$columns}
                {/case}
                {case match=2}
                    {set $url=$columns}
                {/case}
            {/switch}
        {/foreach}

        {if concat( "/", $node.url_alias)|eq( $url )}
            {set $link_css_class='id="selected"'}
        {/if}

        {switch match=$type}
            {* Normal *}
            {case match=0}
                <li><a {$link_css_class} href="{$url}">{$name}</a></li>
            {/case}
            {* Section header *}
            {case match=1}
                <li><strong>{$name}</strong></li>
            {/case}
            {* Seperator *}
            {case match=2}
                <li class="seperator"><hr /></li>
            {/case}
            {* Normal level 1 *}
            {case match=3}
                <li {$link_css_class} class="thirdlevel"><a href="{$url}">{$name}</a></li>
            {/case}
        {/switch}      
    {/foreach}
</ul>

</div>
</div>
</div>
{/if}