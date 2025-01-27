{let content=$node.object.data_map.summary.content}
<a href={$node.url_alias|ezurl}>{$node.name|wash}</a></td><td>{$content|shorten(64)}
{/let}