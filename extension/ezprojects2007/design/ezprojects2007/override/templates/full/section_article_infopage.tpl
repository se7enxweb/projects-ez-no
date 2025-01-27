{* Full view template for node Articles *}

<div class="template-design area-main-normal">
<div class="template-module node-view-community">
<div class="template-object class-infopage">

{* Header *}
{section show=$node.data_map.hide_title.content|not()}
<div class="attribute-heading">
    <h1>{$node.name|wash(xhtml)}</h1>
</div>
{/section}

{* Body *}
{section show=$node.data_map.body.has_content}
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.data_map.body}
    </div>
{/section}

{let article_list=fetch_alias( articles_tree, hash( parent_node_id, $node.node_id,
                                                    sort_by, array( 'attribute', false(), 'article_container/publication_date' ) ) )
     main_node_ids_array=array()
     unique_article_list_array=array()}

{section loop=$article_list}
	{section show=$main_node_ids_array|contains($:item.object.main_node_id)|not}
		{set main_node_ids_array=$main_node_ids_array|append($:item.object.main_node_id)}
		{set unique_article_list_array=$unique_article_list_array|append($:item)}
	{/section}
{/section}

{section loop=$unique_article_list_array max=3 sequence=array( 'bglight', 'bgdark' )}
	{node_view_gui view=line content_node=$:item.object.main_node}
{/section}

<div class="article-list">
    {section loop=$unique_article_list_array offset=3 sequence=array( 'bglight', 'bgdark' )}
        <div class="article-listitem {$:sequence}">
            {node_view_gui view=listitem content_node=$:item.object.main_node show_extra_info=true()}
        </div>
    {/section}
</div>
{/let}
{* End articles *}

</div>
</div>
</div>

<div class="area-sidebar-normal">

{* Show categories *}
<div class="template-design">
<div class="template-module content-view-sidebar">
<div class="template-object">

{include uri='design:parts/article/category-listing.tpl'}

</div>
</div>
</div>
{* End categories *}

{* Right info *}
{section show=$node.data_map.hide_rightinfo.content|not()}
	{attribute_view_gui attribute=$node.data_map.rightinfo}
{/section}

</div>