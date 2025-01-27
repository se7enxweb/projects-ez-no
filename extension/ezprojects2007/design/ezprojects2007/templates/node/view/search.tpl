<tr class="{$sequence}">

<td><a href={$node.url_alias|ezurl}>{$node.name|shorten(60)|wash}</a></td>
<td>{$node.object.published|l10n( 'shortdatetime' )}</td>
<td>{$node.object.owner.name|wash}</td>
<td>{$node.object.class_name|wash}</td>

</tr>