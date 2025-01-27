{* Line view for form message *}

{* Parameters:
   - show_extra_info = Boolean true(), false()
     Shows extra info such as date, author and number of replies.
     Typicaly used by the community frontpage.
     Default is false()
*}

<div class="content-view-list">
<div class="class-forummessage">

{section show=$node.parent.class_identifier|eq( 'forum_message' )}
    {let offset=0}
    {include uri="design:parts/forum/calc_offset.tpl" count=$node.parent.children_count}

    {section show=$offset|le( 0 )}
        <h3><a title="Posted by: {$node.object.owner.name}: {$node.data_map.message.content|wash|shorten( 400 )}" href={concat( $node.parent.url_alias, '#msg', $node.node_id )|ezurl}>{$node.parent.name|wash}</a></h3>
    {section-else}
        <h3><a title="Posted by: {$node.object.owner.name}: {$node.data_map.message.content|wash|shorten( 400 )}" href={concat( $node.parent.url_alias, '/(offset)/', $offset, '/#msg', $node.node_id )|ezurl}>{$node.parent.name|wash}</a></h3>
    {/section}

    {/let}
{section-else}
    <h3><a title="Posted by: {$node.object.owner.name}: {$node.data_map.message.content|wash|shorten( 400 )}" href={concat( $node.url_alias, '#msg', $node.node_id )|ezurl}>{$node.name|wash}</a></h3>
{/section}

{section show=$show_extra_info}
    <div class="attribute-byline float-break">
        <p class="date">{$node.object.published|datetime( 'custom', '%d %M %Y %H:%i' )}</p>
        <p class="author"><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name}</a></p>
    </div>
{/section}

</div>
</div>