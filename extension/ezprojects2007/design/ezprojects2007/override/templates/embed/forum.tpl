<div class="content-view-embed">
<div class="class-forum">

<ul class="linklist">
	{let page_limit=5
         forum_messages=fetch_alias( children, hash( parent_node_id, $object.main_node_id,
   										             limit, $page_limit,
  							 			             sort_by, array( array( 'modified_subnode', false() ) ),
											         offset, $view_parameters.offset ) )}
	{section loop=$forum_messages}
        <li>
            {let last_reply_array=fetch( 'content', 'list', hash( parent_node_id, $:item.node_id,
         									 			          sort_by, array( array( 'published', false() ) ),
			          									          limit, 1 ) )
                 last_reply=$last_reply_array.0}
		    {section show=$:last_reply}
                {node_view_gui view=listitem content_node=$:last_reply}
			{section-else}
                {node_view_gui view=listitem content_node=$:item}
            {/section}
            {/let}
        </li>
    {/section}
	{/let}
</ul>

</div>
</div>