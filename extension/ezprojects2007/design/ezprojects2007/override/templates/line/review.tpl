<div class="content-view-line">
<div class="class-{$node.class_identifier}">

    <div class="attribute-heading">
        <h2>{$node.name|wash}</h2>
    </div>

    {* Created by info *}
    <div class="attribute-byline float-break">
        <p class="author"><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name|wash}</a></p>
        <p class="date">{$node.object.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
    </div>

    {for 1 to 5 as $i}
    {if $i|gt($node.data_map.rating.content)}
    <img src={"rating/star-empty.gif"|ezimage} />
    {else}
    <img src={"rating/star.gif"|ezimage} />
    {/if}
    {/for}

    <div class="attribute-full">
    {$node.data_map.review.content|simpletags|autolink|ezprebreak}
    </div>

</div>
</div>