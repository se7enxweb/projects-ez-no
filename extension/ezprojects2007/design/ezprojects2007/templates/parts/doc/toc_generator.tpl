{let toc_array=doc_sub_tree( $top_node )}

{section show=$toc_array.tree}
<div class="toclist">
<ul class="linklist">
<li><div><a href={$toc_array.top.url_alias|ezurl}>{$toc_array.top.name}</a></div></li>
<li><div><ul>
{section name=Child loop=$toc_array.tree}
<li><div><a href={$Child:item.node.url_alias|ezurl}>{$Child:item.node.name}</a></div></li>
    {section show=$Child:item.sub_node_array}
    <li><div><ul>
    {section name=SubChild loop=$Child:item.sub_node_array}
    <li><div><a href={$:item.node.url_alias|ezurl}>{$:item.node.name}</a></div></li>
        {section show=$Child:SubChild:item.sub_node_array}
        <li><div><ul>
        {section name=SubSubChild loop=$Child:SubChild:item.sub_node_array}
        <li><div><a href={$:item.node.url_alias|ezurl}>{$:item.node.name}</a></div></li>
           {section show=$Child:SubChild:SubSubChild:item.sub_node_array}
           <li><div><ul>
           {section name=SubSubSubChild loop=$Child:SubChild:SubSubChild:item.sub_node_array}
           <li><div><a href={$:item.node.url_alias|ezurl}>{$:item.node.name}</a></div></li>
           {/section}
           </ul></div></li>
        {/section}
        {/section}
        </ul></div></li>
    {/section}
    {/section}
    </ul></div></li>
{/section}
{/section}
</ul></div></li>
{/section}
</ul>
</div>
{/let}
