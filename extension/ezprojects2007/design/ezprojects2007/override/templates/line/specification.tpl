{* Line view template for specification *}
<div class="content-view-line">
<div class="class-specification">

    {let status=""}

    {* Figure out the status of the spec. *}
    {include uri="design:parts/specification/status.tpl" status_number=$node.object.data_map.status.content.0}
    <div id="msg{$node.node_id}" class="attribute-heading">
        <h2><a href={$node.url|ezurl}>{attribute_view_gui attribute=$node.object.data_map.id} &nbsp; {$node.name|wash}  &nbsp;({$status|downcase})</a></h2>
    </div>

    <div class="attribute-short">
        {attribute_view_gui attribute=$node.object.data_map.short_description}
    </div>

    {/let}

</div>
</div>