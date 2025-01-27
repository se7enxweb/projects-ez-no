{* Full view for article *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-article">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{* Created by info *}
<div class="attribute-byline float-break">
    <p class="author"><a href={concat( "/authorcontact/form/", $node.object.data_map.author.content.id, "/", $node.node_id )|ezurl}>{$node.object.data_map.author.content.name}</a></p>
    <p class="date">{$node.object.data_map.publication_date.content.timestamp|l10n(datetime)}</p>
</div>

{* Intro *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.intro}
</div>

{* Thumbnail *}
<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.thumbnail image_class=small}
</div>

{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$node.object.data_map.body}
</div>

{let sort_order=$node.sort_array[0][1]
     sort_column=$node.sort_array[0][0]
     sort_column_value=cond( $sort_column|eq( 'published' ), $node.object.published,
                             $sort_column|eq( 'modified' ), $node.object.modified,
                             $sort_column|eq( 'name' ), $node.object.name,
                             $sort_column|eq( 'priority' ), $node.priority,
                             $sort_column|eq( 'modified_subnode' ), $node.modified_subnode,
                             false() )
     previous_log=fetch_alias( subtree, hash( parent_node_id, $node.node_id,
                                              class_filter_type, include,
                                              class_filter_array, array( 'article_subpage' ),
                                              limit, 1,
                                              attribute_filter, array( and, array( $sort_column, $sort_order|choose( '>', '<' ), $sort_column_value ) ),
                                              sort_by, array( $sort_column, $sort_order|not ) ) )
     next_log=fetch_alias( subtree, hash( parent_node_id, $node.node_id,
                                          class_filter_type, include,
                                          class_filter_array, array( 'article_subpage' ),
                                          limit, 1,
                                          attribute_filter, array( and, array( $sort_column, $sort_order|choose( '<', '>' ), $sort_column_value ) ),
                                          sort_by, array( $sort_column, $sort_order ) ) )}

<div class="pagenavigator">
 <p>
            {section show=$previous_log}
                <span class="previous"><a href={$previous_log[0].url_alias|ezurl} title="{$previous_log[0].name|wash}"><span class="text">&laquo;&nbsp;{$previous_log[0].name|wash}</span></a></span>
            {/section}

            {section show=$next_log}
                    <span class="next"><a href={$next_log[0].url_alias|ezurl} title="{$next_log[0].name|wash}"><span class="text">{section show=$next_log[0].data_map.index_title.has_content}{attribute_view_gui attribute=$next_log[0].data_map.index_title}{section-else}{$next_log[0].name|wash}{/section}&nbsp;&raquo;</span></a></span>
            {/section}
</p>

</div>
{/let}

{* Comments *}
{section show=$node.object.data_map.enable_comments.content}
    {include uri="design:parts/view_comments.tpl"}
{/section}

</div>
</div>
</div>
{* End main part *}


{* Default right info *}
<div class="area-sidebar-normal">

{include uri='design:parts/article/right-info.tpl' used_node=$node}

{* End default right info *}

</div>
