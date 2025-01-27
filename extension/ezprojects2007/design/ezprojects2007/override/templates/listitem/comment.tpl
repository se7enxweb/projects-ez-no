{* Listitem view template for comment and article comment *}

{* Parameters:
   - show_extra_info Boolean true(), false()
     Show extra info for comment, such ass author and date.
     Default is false().
*}

<div class="content-view-list">
<div class="class-comment">

<h3><a href={concat( $node.parent.url_alias, "#msg", $node.node_id)|ezurl}>{$node.name|wash}</a></h3>

{section show=$show_extra_info}
<div class="attribute-byline float-break">
    <p class="author">{$node.object.owner.name}</p>
    <p class="date">{$node.object.published|datetime( 'custom', '%d %M %Y %H:%i' )}</p>
</div>
{/section}

</div>
</div>

