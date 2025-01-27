{* Full view template for comment *}
{* This template is not normally shown unless you explicitly ask for it.
   Comment is always shown as a line view. *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-comment">

<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
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

{let author_count=sub( $node.object.author_array|count(), 1)}
{section show=eq( $node.object.published, $node.object.modified )|not}
<div>
    <p>Modified by {$node.object.author_array[$author_count].contentobject.name}
    on {$node.object.modified|l10n(shortdate )} at {$node.objetc.modified|l10n(time)}</p>
</div>
{/section}
{/let}

</div>
</div>
</div>
