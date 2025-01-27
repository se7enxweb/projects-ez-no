{* Line view for articles *}

{* Parameters:
   - show_extra_info = Boolean true(), false()
     Shows extra info such as date and author.
     Typicaly used by the community frontpage.
     Default is false()
*}

<div class="content-view-list">
<div class="class-comment">

<h3><a title="{$node.name|wash}" href={$node.url_alias|ezurl}>{if $show_project}[{$node.parent.parent.data_map.name.content|wash}] - {/if}{$node.name|wash}</a></h3>

{if $show_extra_info}
    <div class="attribute-byline float-break">
        <p class="date">{$node.object.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
        <p class="author"><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name|wash}</a></p>
    </div>
{/if}

</div>
</div>
