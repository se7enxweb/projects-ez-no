{* Line view for articles *}

{* Parameters:
   - show_extra_info = Boolean true(), false()
     Shows extra info such as date and author.
     Typicaly used by the community frontpage.
     Default is false()
*}

<div class="content-view-list">
<div class="class-comment">

<h3><a title="{$node.name|wash}" href={$node.url_alias|ezurl}>{$node.name|wash}</a></h3>

{section show=$show_extra_info}
    <div class="attribute-byline float-break">
        <p class="author"><a href={concat( "/authorcontact/form/", $node.object.data_map.author.content.id, "/", $node.node_id )|ezurl}>{$node.object.data_map.author.content.name}</a></p>
        <p class="date">{$node.object.data_map.publication_date.content.timestamp|l10n(datetime)}</p>
    </div>
{/section}

</div>
</div>
