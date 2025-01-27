{let $attribute_base=ContentObjectAttribute
         $class_content=$attribute.contentclass_attribute.content
         $parentNode=fetch('content','node', hash( 'node_id', $class_content.default_placement.node_id ) )
         $relatedObjectIDList=array()}

{if ne( count( $attribute.content.relation_list ), 0)}
{foreach $attribute.content.relation_list as $item}
   {set $relatedObjectIDList=$relatedObjectIDList|append($item.contentobject_id)}
{/foreach}
{/if}


{*cache-block keys=array( $attribute.contentclass_attribute.id, $relatedObjectIDList|implode('-')) subtree_expiry=$parentNode.path_identification_string*}
{include uri="design:attribute_project_component_types_recursive.tpl"}
{*/cache-block*}

{/let}
