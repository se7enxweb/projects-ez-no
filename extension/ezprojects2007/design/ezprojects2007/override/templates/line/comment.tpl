{* Live view template for comment and article comment *}

<div class="content-view-line">
<div class="class-comment {$sequence}">

    {section show=$node.object.can_edit}
        <div class="button-edit">
        <form method="post" action={"/content/action"|ezurl}>
            <input type="image" src={"edit.png"|ezimage} name="EditButton" title="Edit this comment" />
            <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
            <input type="hidden" name="RedirectURIAfterPublish" value={concat( $node.parent.url_alias, "#msg", $node.node_id )} />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
            <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
        </form>
        </div>
    {/section}

    <div id="msg{$node.node_id}" class="attribute-heading">
        <h2>{$node.name|wash}</h2>
    </div>

<div class="attribute-byline float-break">
    <p class="author">{$node.object.owner.name}</p>
    <p class="date">{$node.object.published|l10n(datetime)}</p>
</div>


<div class="attribute-short">
    {section show=$node.object.content_class.identifier|eq( "comment" )}
        {$node.data_map.message.content|simpletags|ezprebreak|autolink}
    {section-else}
        {$node.data_map.comment.content|simpletags|ezprebreak|autolink}
    {/section}
</div>


</div>
</div>
