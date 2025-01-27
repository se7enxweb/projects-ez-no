{def $group=fetch('content','object',hash('object_id',$:item.content.group_id))
     $author=fetch('content','object', hash('object_id', $:item.content.user_id))}
<p>
<a class="{$:item_class}" href={concat("collaboration/item/full/",$:item.id)|ezurl}>{$item.title} of {$author.name|wash } for group {foreach $group.main_node.path|append($group.main_node) as $step offset 1}
{delimiter} / {/delimiter}
{$step.name|wash}
{/foreach}</a></p>
{undef $group}