{* Full view template for node Articles *}

<div class="template-design area-main-normal">
<div class="template-module node-view-community">
<div class="template-object class-infopage">

{* Header *}
{if $node.data_map.hide_title.content|not()}
<div class="attribute-heading">
    <h1>{$node.name|wash(xhtml)}</h1>
</div>
{/if}

{* Body *}
{if $node.data_map.body.has_content}
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.data_map.body}
    </div>
{/if}

{def $page_limit=25
     $child_count=fetch_alias( child_count, hash( parent_node_id, $node.node_id,
                                            class_filter_type, include,
                                            class_filter_array, array( 'article_container' ) ) )
     $article_list=fetch_alias( articles_list, hash( parent_node_id, $node.node_id,
                                                     sort_by, array( 'attribute', false(), 'article_container/publication_date' ),
  			         					             limit, $page_limit,
  			         					             offset, $view_parameters.offset ) )}
{if $view_parameters.offset|gt(0)|not()}
    {foreach $article_list as $article max 3}
	    {node_view_gui view=line content_node=$article}
    {/foreach}

    <div class="article-list">
        {foreach $article_list as $article offset 3 sequence array( 'bglight', 'bgdark' ) as $sequence}
            <div class="article-listitem {$sequence}">
                {node_view_gui view=listitem content_node=$article show_extra_info=true()}
           </div>
        {/foreach}
    </div>
{else}
    <div class="article-list">
        {foreach $article_list as $article sequence array( 'bglight', 'bgdark' ) as $sequence}
            <div class="article-listitem {$sequence}">
                {node_view_gui view=listitem content_node=$article show_extra_info=true()}
            </div>
        {/foreach}
    </div>
{/if}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$child_count
         view_parameters=$view_parameters
         item_limit=$page_limit}


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
{if $node.data_map.hide_rightinfo.content|not()}
	{attribute_view_gui attribute=$node.data_map.rightinfo}
{/if}

</div>