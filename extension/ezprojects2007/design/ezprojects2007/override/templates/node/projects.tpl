{* Left area *}
<div class="template-design area-main-normal">
<div class="template-module node-view-projects">
<div class="template-object">


{* Show field1 *}
{if $node.data_map.field1.has_content}
    {attribute_view_gui attribute=$node.data_map.field1}
{/if}

{* Latest news *}
{cache-block subtree_expiry=$node.path_identification_string}
<div class="attribute-heading">
    <h1>Latest project news</h1>
</div>

{let news_list=fetch('content', 'tree', hash( 'parent_node_id', $node.node_id,
                                              'class_filter_type', 'include',
                                              'class_filter_array', array( 'article' ),
                                            sort_by, array( 'published', false() ),
                                            limit, 7) )}
{if $news_list}
{foreach $news_list as $news max 2}
{node_view_gui view=line content_node=$news show_project=true()}
{/foreach}



<div class="article-list">
{foreach $news_list as $news offset 2 sequence array('bglight', 'bgdark') as $sequence}
        <div class="article-listitem {$sequence}">
            {node_view_gui view=listitem content_node=$news show_extra_info=true() show_project=true()}
        </div>
{/foreach}
</div>
{else}
<p>No news yet.</p>
{/if}
{/let}

{/cache-block}
{* End latest news *}

{* Latest open funding suggestions *}
{cache-block subtree_expiry=$node.path_identification_string}
<div class="attribute-heading" style="margin-top:3.5em;">
    <h1><a href="http://ez.no/community/open_funding">Latest Open Funding suggestions</a></h1>
</div>

{let $suggestions=fetch('content', 'tree', hash( 'parent_node_id', 1009,
                                              'class_filter_type', 'include',
                                              'class_filter_array', array( 'rss_import' ),
                                            sort_by, array( 'published', false() ),
                                            limit, 7) )}
{if $suggestions}
{foreach $suggestions as $suggestion max 2}
{node_view_gui view=line content_node=$suggestion}
{/foreach}

<div class="article-list">
{foreach $suggestions as $suggestion offset 2 sequence array('bglight', 'bgdark') as $sequence}
        <div class="article-listitem {$sequence}">
            {node_view_gui view=listitem content_node=$suggestion}
        </div>
{/foreach}
</div>
{else}
<p>No suggestions yet.</p>
{/if}
{/let}

{/cache-block}
{* End latest news *}

</div>
</div>
</div>
{* End left area *}


{* Right area *}
<div class="area-sidebar-normal">


<div class="template-design">
<div class="template-module node-view-projects">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Add your project!</h2>
</div>
{attribute_view_gui attribute=$node.data_map.field2}

{def $canCreateProject=fetch( 'content', 'access', hash( 'access', 'create',
                                                 'contentobject', $node,
                                                 'contentclass_id', 'project' ))}
<div class="block float-break">
{if $canCreateProject}
    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="project" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        <input class="button" type="submit" name="NewButton" value="Create a new project" />
    </form>
    </div>
{else}
<p>You need to be logged in to add a new project. You can do so <a href={"/user/login/"|ezurl}>here</a>.</p>
{/if}
</div>
{undef $canCreateProject}

</div>
</div>
</div>

{let recent_projects=fetch_alias( last_projects )}
{if $recent_projects}
<div class="template-design">
<div class="template-module node-view-projects">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">New projects</h2>
</div>
    <ul class="linklist">
        {foreach $recent_projects as $project}
            <li>{node_view_gui view=listitem content_node=$project show_extra_info=true()}</li>
        {/foreach}
    </ul>
</div>
</div>
</div>
{/if}
{/let}

<div class="template-design">
<div class="template-module node-view-projects">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Browse</h2>
</div>

{let $project_count=fetch('content','tree_count',hash('parent_node_id',2,'class_filter_type','include','class_filter_array',array('project')))}

<p>There are currently {$project_count} registered projects.</p>

{/let}

<p><a href={"/types"|ezurl}>Browse...</a></p>

</div>
</div>
</div>

</div>
{* End right area *}
