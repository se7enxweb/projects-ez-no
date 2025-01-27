<div class="content-view-embed">
<div class="class-reference">

{let page_limit=7
     references=fetch_alias( references, hash( parent_node_id, $object.main_node_id,
                                               limit, $page_limit,
                                               attribute_filter, array( array( 'page_link/approved', '=', true() ) ),
                                               sort_by, array( 'published', false() ) ) ) }

{node_view_gui view='line' content_node=$references.0}
{node_view_gui view='line' content_node=$references.1}
{node_view_gui view='line' content_node=$references.2}

<ul class="linklist">
    {section var=child loop=$references offset=3}
        <li>{node_view_gui view='listitem' content_node=$child.item}</li>
    {/section}
</ul>
{/let}

</div>
</div>
