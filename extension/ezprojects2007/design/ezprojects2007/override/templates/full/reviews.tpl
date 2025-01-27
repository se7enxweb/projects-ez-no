{* Full view for reviews *}
{default $current_user=fetch('user','current_user')}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>



{let $page_limit=10
     $review_count=fetch('content','list_count',hash('parent_node_id',$node.node_id))
     $reviews=fetch('content','list',hash('parent_node_id',$node.node_id,'limit',$page_limit,'offset',$view_parameters.offset,'sort_by',$node.sort_array))}
{if $reviews|count|gt(0)}

    {foreach $reviews as $review}
    {node_view_gui view=line content_node=$review}
    {/foreach}

{else}

    <p>No reviews yet.</p>

{/if}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$review_count
         view_parameters=$view_parameters
         node_id=$node.node_id
         item_limit=$page_limit}

{/let}

{def $canCreateReview=fetch( 'content', 'access', hash( 'access', 'create',
                                                 'contentobject', $node,
                                                 'contentclass_id', 'review' ))}
{if $canCreateReview}
<div class="block">
    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="review" />
        <input class="button" type="submit" name="NewButton" value="Add a review" />
    </form>
    </div>
</div>
{/if}

{undef $canCreateReview}

</div>
</div>
</div>
{* End main part *}

{* Right info *}

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node showTrackChanges=true()}

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">Rating summary</h2>
</div>

{def $avgRating=ezrating_summary(239,$node.node_id)}

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

{if $avgRating.reviewer_count|gt(1)}
<p>Lowest rating {$avgRating.min_rating}, highest rating {$avgRating.max_rating}.</p>
{/if}

<p>Note: only the last published review of each user is taken into account.</p>

{undef $avgRating}
</div>
</div>
</div>

{* Right info end *}

{/default}