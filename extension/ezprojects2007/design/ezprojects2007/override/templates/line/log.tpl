{* Line view for class log *}
<div class="content-view-line">
<div class="class-log">

    <div class="attribute-heading">
        <h2><a href={$node.url_alias|ezurl}>{$node.name|wash}</a></h2>
    </div>

    <div class="attribute-byline float-break">
        <p class="date">{$node.object.published|datetime('custom', '%l %j %F %Y')} {$node.object.published|datetime('custom', '%g:%i%a')}</p>
        <p class="author">{$node.object.owner.name}</p>
    </div>

    <div class="attribute-short">
        {attribute_view_gui attribute=$node.object.data_map.log}
    </div>

    {section show=$node.object.data_map.enable_comments.content}
        <p><a href={concat( $node.url_alias, "#comments" )|ezurl}>{fetch('content','list_count',hash(parent_node_id,$node.node_id))} comments</a></p>
    {section-else}
        <p><em>{"Comments disabled"|i18n("design/blog/layout")}</em></p>
    {/section}

</div>
</div>