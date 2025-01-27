{* Line view for forum template *}
{cache-block subtree_expiry=concat( "/content/view/full/", $node.node_id )}
<tr class="{$sequence}">
<td align="left">
    <div class="attribute-heading">
        <h2><a href={concat("/", $node.url_alias)|ezurl}>{$node.name}</a></h2>
    </div>

    <div class="short">
        {attribute_view_gui attribute=$node.object.data_map.description}
    </div>

    <div class="attribute-link">
        <p><a href={concat("/", $node.url_alias)|ezurl}>{"Read more"|i18n( "ezno" )}...</a></p>
    </div>
</td>
<td width="1%">{$node.children_count}</td>
<td width="1%">{fetch( content, tree_count, hash( parent_node_id, $node.node_id ) )}</td>
<td width="30%">
    {let forum_list=fetch_alias( children, hash( parent_node_id, $node.node_id,
     					     			         limit, 4,
		  						   		         sort_by, array( 'modified_subnode', false() ) ) )}
    <ul class="linklist">
    {section loop=$forum_list}
    <li>
        {node_view_gui view=listitem content_node=$:item}
    </li>
    {/section}
    </ul>
    {/let}
</td>
</tr>
{/cache-block}