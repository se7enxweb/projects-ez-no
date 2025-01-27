{def $items=fetch( 'content', 'tree', hash( parent_node_id, $object.main_node_id,
                                           limit, 5,
                                           class_filter_type, exclude,
                                           class_filter_array, array( comment, article_comment ),
                                           sort_by, array( array( 'published', false() ) ) ) )}

{if $items}

<div class="content-view-embed">
<div class="class-infopage">

{switch match=$object_parameters.type}
    {case match="newslist"}
        {if is_set( $object_parameters.heading )}
            <h1><a href={$object.main_node.url_alias|ezurl}>{$object_parameters.heading|wash()}</a></h1>
        {else}
            <h1><a href={$object.main_node.url_alias|ezurl}>Latest News</a></h1>            
        {/if}

        {node_view_gui view=line content_node=$items.0}

        <div class="article-list">
            {foreach $items as $item offset 1 sequence array( 'bglight', 'bgdark' ) as $style}
                <div class="article-listitem {$style}">
                    {node_view_gui view=listitem content_node=$item show_extra_info=true()}
                </div>
            {/foreach}
        </div>
    {/case}
    {case}
        <div class="attribute-linklist">
            <ul>
                {foreach $items as $item}
                    <li>{node_view_gui view='listitem' content_node=$item}</li>
                {/foreach}
           </ul>
        </div>
    {/case}
{/switch}

</div>
</div>

{/if}