<tr class="{$sequence}" valign="top">
<td>
    <div class="attribute-image">
        {attribute_view_gui attribute=$node.data_map.screenshot image_class="small" href=$node.url_alias|ezurl(no)}
    </div>
</td>
<td>
    {$node.data_map.country.content|wash}
</td>
<td>
    <a href={$node.url_alias|ezurl}>{$node.name|wash}</a> -
    {section show=$node.data_map.url.content|begins_with( "http://" )}
        <a href="{$node.data_map.url.content}" target="_blank">{$node.data_map.url.content|wash}</a>
    {section-else}
        <a href="{concat( 'http://', $node.data_map.url.content )}" target="_blank">{$node.data_map.url.content|wash}</a>
    {/section}

    <div class="attribute-short"><p>{$node.data_map.description.content|shorten( 320 )|wash}</p></div>
</td>
</tr>