<div class="content-view-children">
<div class="class-comment">

{let page_limit=20
     child_count=fetch_alias( comment_count, hash( parent_node_id, $node.main_node_id ) )
     children=fetch_alias( comments, hash( parent_node_id, $node.main_node_id,
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
            <input type="hidden" name="NodeID" value="{$node.main_node_id}" />
            {section show=$class|eq( "comment" )}
                <input type="hidden" name="ClassIdentifier" value="comment" />
            {section-else}
               <input type="hidden" name="ClassIdentifier" value="article_comment" />
            {/section}
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        </form>
    {section-else}
        <p><a href="/user/login">Log in</a> or <a href="/user/register">create a user account</a> to comment.</p>
    {/section}
</div>
