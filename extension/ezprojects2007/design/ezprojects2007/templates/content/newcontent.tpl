{* New content template *}

<div class="template-design area-main-full">
<div class="template-module content-new">
<div class="template-object">

<div class="attribute-heading">
    <h1>{"New content since last visit"|i18n("design/standard/content/newcontent")}</h1>
</div>

{let current_user=fetch( user, current_user )}
{section show=$current_user.contentobject_id|eq(10)}
    <h2>In order to view new postings you need to be logged in.</h2>
    <p>You can <a href={"/user/login"|ezurl}>log in here</a> or <a href="/user/register">register a new user</a>.</p>
{section-else}
    <p>{"Your last visit to this site was:"|i18n("design/standard/content/newcontent")} {$last_visit_timestamp|l10n(datetime)}</p>

    {let page_limit=20
         list_items=array()
         list_count=0
         time_filter=array( array( 'modified_subnode', '>=', $last_visit_timestamp ) )}

    {set list_items=fetch( content, tree, hash( parent_node_id, 308,
	    										depth, 2,
                                                offset, $view_parameters.offset,
                                                attribute_filter, $time_filter,
				    		    				class_filter_type, 'include',
					    	    				class_filter_array, array( 'forum_message' ),
                                                sort_by, array( array( 'modified_subnode', false() ) ),
                                                limit, $page_limit ) )
         list_count=fetch( content, tree_count, hash( parent_node_id, 308,
 	     										      depth, 2,
                                                      offset, $view_parameters.offset,
			    									  class_filter_type, 'include',
     			    			    				  class_filter_array, array( 'forum_message' ),
					    		  					  sort_by, array( array( 'modified_subnode', false() ) ),
                                                      attribute_filter, $time_filter ) )}
    {section show=$list_count}
        <div class="content-view-children">
        <div class="class-forum-message">

        <table class="list" cellspacing="0">
        <tr>
            <th>Topic</th>
            <th>Replies</th>
	        <th>Author</th>
            <th>Time</th>
        </tr>
        {section loop=$list_items sequence=array( bglight, bgdark )}
            {let last_reply_array=fetch_alias( last_forum_reply, hash( parent_node_id, $:item.node_id ) )
                 last_reply=$last_reply_array.0}

            {section show=$last_reply|not()}
                {set last_reply=$:item}
            {/section}

    		<tr class="{$:sequence}">
                <td>{node_view_gui view=listitem content_node=$last_reply}</td>
	  	        <td>{$:item.children_count}</td>
                <td>{$last_reply.object.owner.name|wash}</td>
    		    <td>{$last_reply.object.published|l10n(datetime)}</td>
	    	</tr>

            {/let}
        {/section}
        </table>

        {include name=navigator
                 uri='design:navigator/google.tpl'
                 page_uri='/content/new'
                 item_count=$list_count
                 view_parameters=$view_parameters
                 item_limit=$page_limit}
        </div>
        </div>
    {section-else}
         <p>No new forum messages</p>
    {/section}
    {/let}
{/section}
{/let}

</div>
</div>
</div>