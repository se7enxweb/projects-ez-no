{* Node override for the bug list *}

<div class="template-design area-main-full">
<div class="template-module node-view-buglist">
<div class="template-object">

<div class="object-right">
    <a href="/rss/feed/bugs"><img src={"rss.gif"|ezimage} /></a>
</div>

<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

<div class="block float-break">
        {section show=$node.object.can_create}
        {* 
            <form method="post" action={"/content/action"|ezurl}>
            <input class="button" type="submit" name="NewButton" value="Report bug" />
            <input type="hidden" name="RedirectURIAfterPublish" value="{$node.url_alias}" />
            <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
            <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id.}" />
            <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
            <input type="hidden" name="NodeID" value="{$node.node_id}" />
            <input type="hidden" name="ClassIdentifier" value="bug" />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
            </form>
        *}
        <p>The bug system is currently being updated.<br />
        No bug posting is allow at the moment. We will be back soon, stay tuned.</p>
        {section-else}
            <p>You need to be logged in to report bugs. You can do so <a href={"/user/login/"|ezurl}>here</a></p>
        {/section}

</div>

{*
<div class="attribute-long">
    {attribute_view_gui attribute=$node.data_map.body}
</div>
*}

<div class="block float-break">
    <p><a href={"/bugs/fixedbugsreport"|ezurl}>Show bugfixing report</a> |
    <a href={"/bugs/bugsstatistics"|ezurl}>Show bug statistics</a> |
{* Removed, this has a query error. <a href={"/bugs/monthlybugreports"|ezurl}>Show monthly bugfixing report</a> | *}
    <a href={"/bugs/status"|ezurl}>Current bugsystem status</a></p>
</div>

<form action={"/bugs/searchbugs"|ezurl} method="post">
    {include uri='design:parts/bugs/select_search_params.tpl'}
</form>

{section show=$node.object.data_map.show_children.content}
<div class="content-view-children">
        {let sort_filter=array( 'published', false() )
             bugs_per_page=ezini( 'BugReportSettings', 'BugsPerPage', 'bugs.ini' )
             bugs_count=fetch( 'content', 'list_count', hash( parent_node_id, $node.node_id ) )
             bug_list=fetch( 'content', 'list', hash( parent_node_id, $node.node_id,
                                                      limit, $bugs_per_page,
                                                      offset, $view_parameters.offset,
                                                      sort_by, $sort_filter ) )}

            {include uri='design:parts/bugs/show_bugs_list.tpl' bug_list=$bug_list}

            {include name=navigator
                     uri='design:navigator/google.tpl'
                     page_uri=$node.url_alias
                     item_count=$bugs_count
                     view_parameters=$view_parameters
                     item_limit=$bugs_per_page}
        {/let}
</div>
{/section}

</div>
</div>
</div>
{* End top right info *}

