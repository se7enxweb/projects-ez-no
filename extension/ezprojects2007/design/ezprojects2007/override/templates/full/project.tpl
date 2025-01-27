{* Full view for project *}
{default $current_user=fetch('user','current_user')}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash}</h1>
</div>

{* Updated info *}
<div class="attribute-byline float-break">
    <p class="date">Last updated: {$node.object.modified|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
</div>

{* Detailed information table *}
<table class="list nohighlight" cellspacing="0">
<tr>
    <th>UNIX name</th>
    <th>Owner</th>
    <th>Status</th>
    <th>Version</th>
    <th>Compatible with</th>
</tr>
<tr class="bglight">
    <td>{$node.object.data_map.unix_name.content}</td>
    <td><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name|wash}</a></td>
    {let status='Stable'}
    <td>{include uri="design:parts/projects/status.tpl" status_number=$node.object.data_map.status.content.0}
    {$status|downcase}
    </td>
    {/let}
    <td>
    {section show=$node.object.data_map.version.content}
        {$node.object.data_map.version.content|wash}
    {section-else}
        N/A
    {/section}
    </td>
    <td>
    {section show=$node.object.data_map.compatible_with.content}
        {$node.object.data_map.compatible_with.content|wash}
    {section-else}
        N/A
    {/section}
    </td>
</tr>
</table>

{* Brief description *}
{section show=$node.object.data_map.brief.content}
    <div class="attribute-short">
        {$node.object.data_map.brief.content|simpletags|ezprebreak|autolink}
    </div>
{/section}

{* Full description *}
{section show=$node.object.data_map.full.content}
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.object.data_map.full}
    </div>
{/section}

{* Screenshot *}
{section show=$node.object.data_map.screenshot.has_content}
    <h2>Screenshot</h2>
    <div class="attribute-image">
        {attribute_view_gui attribute=$node.object.data_map.screenshot image_class="smallbanner" href=$node.data_map.screenshot.content[original].full_path|ezroot(no) target="_blank"}
    </div>
    {section show=$node.object.data_map.screenshot.content.alternative_text}
        <div class="attribute-caption" style="width: {$node.data_map.screenshot.content[smallbanner].width}px">
            {$node.object.data_map.screenshot.content.alternative_text|wash}
        </div>
    {/section}
{/section}

</div>
</div>
</div>
{* End main part *}

{* Right info *}

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node showTrackChanges=true()}

{*
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">Project tools</h2>
</div>

<ul class="linklist">
{def $children=fetch('content','list',hash('parent_node_id', $node.node_id, 'sort_by', $node.sort_array))}
{if $children}
{foreach $children as $child}
    <li><a href={$child.url_alias|ezurl}>{$child.name|wash}</a><li>
{/foreach}
{else}
<p>The project tools are being initialized. They will be available in a few minutes.</p>
{/if}
{undef $children}
</ul>

</div>
</div>
</div>
*}

{* Latest news *}
{def $newsContainers=fetch('content','list',hash('parent_node_id',$node.node_id,'class_filter_type','include','class_filter_array',array('news')))
     $newsContainer=$newsContainers[0]}
{cache-block subtree_expiry=$newsContainer.path_identification_string}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet"><a href={$newsContainer.url_alias|ezurl}>Latest news</a></h2>
</div>

{let news_list=fetch_alias( last_news_articles, hash( parent_node_id, $newsContainer.node_id ) )}

{if $news_list}
<ul class="linklist">
{foreach $news_list as $news}
<li>
{node_view_gui view=listitem content_node=$news show_extra_info=true() show_project=false()}
</li>
{/foreach}
</ul>

{else}
<p>No news yet.</p>
{/if}

{/let}

</div>
</div>
</div>
{/cache-block}
{undef $newsContainers $newsContainer}
{* End latest news *}

{* Latest reviews *}
{def $reviewContainers=fetch('content','list',hash('parent_node_id',$node.node_id,'class_filter_type','include','class_filter_array',array('reviews')))
     $reviewContainer=$reviewContainers[0]}

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet"><a href={$reviewContainer.url_alias|ezurl}>Latest reviews</a></h2>
</div>

{let $review_list=fetch_alias( last_reviews, hash( parent_node_id, $reviewContainer.node_id ) )}
{if $review_list|count|gt(0)}

    {def $avgRating=ezrating_summary(239,$reviewContainer.node_id)}

    <p>
    {for 1 to 5 as $i}
        {if $i|le($avgRating.average_rating)}
            <img src={"rating/star.gif"|ezimage} />
        {elseif $i|sub(0.25)|le($avgRating.average_rating)}
            <img src={"rating/star-three-fourth.gif"|ezimage} />
        {elseif $i|sub(0.5)|le($avgRating.average_rating)}
            <img src={"rating/star-half.gif"|ezimage} />
        {elseif $i|sub(0.75)|le($avgRating.average_rating)}
            <img src={"rating/star-one-fourth.gif"|ezimage} />
        {else}
            <img src={"rating/star-empty.gif"|ezimage} />
        {/if}
    {/for}
    </p>

    <p>Average rating {$avgRating.average_rating|l10n( 'number' )} by {$avgRating.reviewer_count} reviewers.</p>

    {undef $avgRating}

    <ul class="linklist">
    {foreach $review_list as $review}
        <li>{node_view_gui view=listitem content_node=$review show_extra_info=true()}</li>
    {/foreach}
    </ul>

{else}

    <p>This project has no reviews yet. <a href={$reviewContainer.url_alias|ezurl}>Be the first one to review it!</a></p>

{/if}
{/let}

</div>
</div>
</div>

{* Show forum messages *}
{def $forumContainers=fetch('content','list',hash('parent_node_id',$node.node_id,'class_filter_type','include','class_filter_array',array('forums')))
     $forumContainer=$forumContainers[0]}
{cache-block subtree_expiry=$forumContainer.path_identification_string}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet"><a href={$forumContainer.url_alias|ezurl}>Latest forum activity</a></h2>
</div>

{let forum_list=fetch_alias( last_forum_replies, hash( parent_node_id, $forumContainer.node_id ) )}
{if $forum_list}
    <ul class="linklist">
        {section loop=$forum_list}
            {let last_reply_array=fetch_alias( last_forum_reply, hash( parent_node_id, $:item.node_id ))
                 last_reply=$last_reply_array.0}
            <li>
                {section show=$:last_reply}
                    {node_view_gui view=listitem content_node=$:last_reply show_extra_info=true()}
                {section-else}
                    {node_view_gui view=listitem content_node=$:item show_extra_info=true()}
                {/section}
            </li>
            {/let}
        {/section}
    </ul>
{else}
<p>No forum messages yet.</p>
{/if}
{/let}

</div>
</div>
</div>
{/cache-block}
{undef $forumContainers $forumContainer}

{* Right info end *}

{/default}