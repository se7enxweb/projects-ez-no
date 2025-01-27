<h2>FAQ categories</h2>
{let child_list=fetch('content','list',hash(parent_node_id,$category_node_id,limit,20,sort_by,array(array(priority,true()))))
     child_count=fetch('content','list_count',hash(parent_node_id,$node.node_id))}

<ol>
{section name=Child loop=$child_list sequence=array(bglightforum,bgdarkforum)}
{section show=eq($Child:item.node_id,$node.node_id)}
<li><b>{$Child:item.object.name|wash}</b></li>
{section show=eq($Child:item.node_id,$node.parent.node_id)}
<li><b><a href={$Child:item.url_alias|ezurl}>{$Child:item.object.name|wash}</a></b></li>
{/section}
{section-else }
<li><a href={$Child:item.url_alias|ezurl}>{$Child:item.object.name|wash}</a></li>
{/section}
{/section}

</ol>

{/let}
