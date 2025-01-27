{let $subTypes=fetch('content','list',hash('parent_node_id', $parent_node.node_id,'class_filter_array',array($parent_node.class_identifier),'sort_by', array( array( 'name', true() ) )))}
{if $subTypes|count|gt(0)}
    <ul>
        {foreach $subTypes as $subType}
        {let $subTypeExtendedAttributeFilter=hash( 'id', 'SubTreeRelationFilter',
                                    'params', array( 'project/component_types', $subType.path_identification_string ) )
             $subTypeProjectCount=fetch('content','tree_count',hash('parent_node_id', 2,
                                           'class_filter_type', 'include',
                                           'class_filter_array', array('project'),
                                           'extended_attribute_filter', $subTypeExtendedAttributeFilter
                                          ))}
        <li><a href={$subType.url_alias|ezurl}>{$subType.name|wash}</a> ({$subTypeProjectCount})
        {include uri="design:component_type_map_recursive.tpl" parent_node=$subType name=$subType.node_id}
        </li>
        {/let}
        {/foreach}
    </ul>
{/if}
{/let}