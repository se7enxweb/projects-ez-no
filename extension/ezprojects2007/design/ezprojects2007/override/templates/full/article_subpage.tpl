{* Full view for article subpage *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-article">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{* Created by info *}
<div class="attribute-byline float-break">
    <p class="author"><a href={concat( "/authorcontact/form/", $node.parent.object.data_map.author.content.id, "/", $node.node_id )|ezurl}>{$node.parent.object.data_map.author.content.name}</a></p>
    <p class="date">{$node.parent.object.data_map.publication_date.content.timestamp|l10n(datetime)}</p>
</div>

{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$node.object.data_map.body}
</div>

{let sort_order=$node.parent.sort_array[0][1]
     sort_column=$node.parent.sort_array[0][0]
     sort_column_value=cond( $sort_column|eq( 'published' ), $node.object.published,
                             $sort_column|eq( 'modified' ), $node.object.modified,
                             $sort_column|eq( 'name' ), $node.object.name,
                             $sort_column|eq( 'priority' ), $node.priority,
                             $sort_column|eq( 'modified_subnode' ), $node.modified_subnode,
                             false() )
     previous_log=fetch_alias( subtree, hash( parent_node_id, $node.parent_node_id,
                                              class_filter_type, include,
                                              class_filter_array, array( 'article_subpage' ),
                                              limit, 1,
                                              attribute_filter, array( and, array( $sort_column, $sort_order|choose( '>', '<' ), $sort_column_value ) ),
                                              sort_by, array( $sort_column, $sort_order|not ) ) )
     next_log=fetch_alias( subtree, hash( parent_node_id, $node.parent_node_id,
                                          class_filter_type, include,
                                          class_filter_array, array( 'article_subpage' ),
                                          limit, 1,
                                          attribute_filter, array( and, array( $sort_column, $sort_order|choose( '<', '>' ), $sort_column_value ) ),
                                          sort_by, array( $sort_column, $sort_order ) ) )}

 <div class="pagenavigator">
 <p>
            {section show=$previous_log}
                <span class="previous"><a href={$previous_log[0].url_alias|ezurl} title="{$previous_log[0].name|wash}"><span class="text">&laquo;&nbsp;{section show=$previous_log[0].data_map.index_title.has_content}{attribute_view_gui attribute=$previous_log[0].data_map.index_title}{section-else}{$previous_log[0].name|wash}{/section}</span></a></span>
            {section-else}
				<span class="previous"><a href={$node.parent.url_alias|ezurl} title="{$node.parent.name|wash}"><span class="text">&laquo;&nbsp;{section show=$node.parent.object.data_map.index_title.has_content}{attribute_view_gui attribute=$node.parent.object.data_map.index_title}{section-else}{$node.parent.name|wash}{/section}</span></a></span>
            {/section}

            {section show=$next_log}
                    <span class="next"><a href={$next_log[0].url_alias|ezurl} title="{$next_log[0].name|wash}"><span class="text">{section show=$next_log[0].data_map.index_title.has_content}{attribute_view_gui attribute=$next_log[0].data_map.index_title}{section-else}{$next_log[0].name|wash}{/section}&nbsp;&raquo;</span></a></span>
            {/section}
</p>
</div>
{/let}

{* Comments *}
{section show=$node.parent.object.data_map.enable_comments.content}
<div class="content-view-children">
<div class="class-comment">

{let page_limit=20
     child_count=fetch_alias( comment_count, hash( parent_node_id, $node.parent.main_node_id ) )
     children=fetch_alias( comments, hash( parent_node_id, $node.parent.main_node_id,
                                     limit, $page_limit,
					                 offset, $view_parameters.offset ) )}
    {section show=$title}
        <h1 id="comments">{$title}</h1>
    {section-else}
        <h1 id="comments">{"Comments"|i18n( "ezno" )}</h1>
    {/section}

{include uri="design:parts/list_children.tpl" show_extra_info=true() sequence=array( 'bglight', 'bgdark' )}

{/let}

</div>
</div>

<div class="block float-break">
    {section show=$node.object.can_create}
        <form method="post" action={"/content/action"|ezurl}>
            <input class="button" type="submit" name="NewButton" value="New comment" />
            <input type="hidden" name="RedirectURIAfterPublish" value={concat( $node.url_alias, "#comments")} />
            <input type="hidden" name="NodeID" value="{$node.parent.main_node_id}" />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
            <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
            {section show=$class|eq( "comment" )}
                <input type="hidden" name="ClassIdentifier" value="comment" />
            {section-else}
               <input type="hidden" name="ClassIdentifier" value="article_comment" />
            {/section}
        </form>
    {section-else}
        <p><a href="/user/login">Log in</a> or <a href="/user/register">create a user account</a> to comment.</p>
    {/section}
</div>
{/section}

</div>
</div>
</div>
{* End main part *}

<div class="area-sidebar-normal">
    {include uri='design:parts/article/right-info.tpl' used_node=$node.parent}
</div>