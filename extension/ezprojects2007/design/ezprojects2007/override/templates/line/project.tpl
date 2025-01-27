{* Line view for contribution *}

<div class="content-view-line">
<div class="class-contribution">

    {let status='Stable'}
    {include uri="design:parts/projects/status.tpl" status_number=$node.object.data_map.status.content.0}

    <div class="attribute-heading">
    <h2><a href="{$node.url_alias|ezurl(no)}">{$node.object.data_map.name.content|shorten(60)|wash}</a> <span class="status">({$status})</span></h2>
    </div>

    <div class="attribute-byline float-break">
    <p class="date">Updated {$node.object.modified|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
    </div>

    {/let}

{* Detailed information table *}
<table class="list nohighlight" cellspacing="0">
<tr>
    <th>UNIX name</th>
    <th>Owner</th>
    <th>Status</th>
    <th>Version</th>
    <th>Compatible with</th>
</tr>
<tr class="bglight">
    <td>{$node.object.data_map.unix_name.content}</td>
    <td>{$node.object.owner.name|wash}</td>
    {let status='Stable'}
    <td>{include uri="design:parts/projects/status.tpl" status_number=$node.object.data_map.status.content.0}
    {$status|downcase}
    </td>
    {/let}
    <td>
    {section show=$node.object.data_map.version.content}
        {$node.object.data_map.version.content|wash}
    {section-else}
        N/A
    {/section}
    </td>
    <td>
    {section show=$node.object.data_map.compatible_with.content}
        {$node.object.data_map.compatible_with.content|wash}
    {section-else}
        N/A
    {/section}
    </td>
</tr>
</table>

<div class="attribute-short">
    <p>{$node.object.data_map.brief.content|simpletags|ezprebreak|shorten(270)}</p>
</div>

</div>
</div>
