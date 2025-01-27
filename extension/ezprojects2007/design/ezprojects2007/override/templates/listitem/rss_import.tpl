{* Line view for RSS imports *}

<div class="content-view-list">
<div class="class-comment">

<h3><a title="{$node.name|wash}" href="{$node.data_map.link.content}">{$node.name|wash}</a></h3>

<div class="attribute-byline float-break">
    <p class="date">{$node.object.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
</div>

</div>
</div>
