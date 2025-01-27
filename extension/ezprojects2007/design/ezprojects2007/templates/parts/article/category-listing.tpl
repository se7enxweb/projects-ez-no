<div class="attribute-heading">
    <div class="object-right">
        <a href="/rss/feed/community_articles"><img src={"rss.gif"|ezimage} /></a>
    </div>

    <h2 class="bullet">Categories</h2>
</div>


{let articles_node=fetch( content, node, hash( node_id, 69297 ) )
     category_list=fetch_alias( article_categories, hash( parent_node_id, $articles_node.node_id,
                                                          sort_by, $articles_node.sort_array ) )}
{section show=$category_list}
{section loop=$category_list}
    <ul class="linklist">
        <li><a href={$:item.url_alias|ezurl}>{$:item.name}</a></li>

    {let sub_category_list=fetch_alias( article_categories, hash( parent_node_id, $:item.node_id,
    															  sort_by, $:item.sort_array ) )}
    {section show=$sub_category_list}
        <ul class="linklist">
            {section loop=$sub_category_list}
		    	<li><a href={$:item.url_alias|ezurl}>{$:item.name}</a></li>
            {/section}
        </ul>
    {/section}
    {/let}
    </ul>
{/section}
{/section}
{/let}