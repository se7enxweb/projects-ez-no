{* Left area *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-frontpage">

<div class="attribute-heading">
    <h1>Component types</h1>
</div>

{attribute_view_gui attribute=$node.data_map.field1}

{include uri="design:component_type_map_recursive.tpl" parent_node=$node name=$node.node_id}

</div>
</div>
</div>
{* End main area *}

{* Right area *}
<div class="area-sidebar-normal">

{let $withoutExtendedAttributeFilter=hash( 'id', 'SubTreeRelationFilter',
                                           'params', array( 'project/component_types', $node.path_identification_string, true() ) )
     $projectsWithoutType=fetch('content','tree',hash('parent_node_id', 2,
                                           'class_filter_type', 'include',
                                           'class_filter_array', array('project'),
                                           'extended_attribute_filter', $withoutExtendedAttributeFilter,
                                           'sort_by', array( array( 'name', true() ) )
                                          ))}

{if $projectsWithoutType|count|gt(0)}

<div class="template-design">
<div class="template-module node-view-projects">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Projects without any component type</h2>
</div>

<ul>
{foreach $projectsWithoutType as $project}
<li><a href={$project.url_alias|ezurl}>{$project.data_map.name.content|wash}</a></li>
{/foreach}
</ul>

</div>
</div>
</div>

{/if}

</div>
{* End right area *}
