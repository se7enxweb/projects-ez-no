{let $children=$parentNode.children}

{*$parentNode|attribute(show)*}

<ul>
{foreach $children as $child}
{let $grandChildCount=$child.children_count}
<li>
{if $grandChildCount|eq(0)}
<input type="checkbox" name="{$attribute_base}_data_object_relation_list_{$attribute.id}[{$child.node_id}]" value="{$child.contentobject_id}"
{if $relatedObjectIDList|contains($child.contentobject_id)}
       checked="checked"
{/if}
>
{/if}

{$child.name|wash}

{if $grandChildCount|gt(0)}
{* Make sure you don't remove the name parameter which defines a new sub-namespace for the included template
   If not defined, requests will time out because the current vars can not be redefined
   for some reason, this only occurs when template cache is on
*}
{include uri="design:edit/attribute_project_component_types_recursive.tpl" name=$child.node_id
         parentNode=$child
         relatedObjectIDList=$relatedObjectIDList
         attribute_base=$attribute_base
         attribute=$attribute}
{/if}

</li>
{/let}
{/foreach}
</ul>

{/let}
