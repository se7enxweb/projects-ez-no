{* Full view for component type *}
{default $current_user=fetch('user','current_user')
         $sort=array( array( 'modified', false() ) )}

{switch match=$view_parameters.sort}
{case match='modified'}
    {set sort=array( array( 'modified', false() ) )}
{/case}
{case match='status'}
    {set sort=array( array( 'attribute', true(), 'project/status' ),
                     array( 'name', true() ) )}
{/case}
{case match='name'}
    {set sort=array( array( 'name', true() ) )}
{/case}
{case}
    {set sort=array( array( 'modified', false() ) )}
{/case}
{/switch}

{let $page_limit=5
     $extendedAttributeFilter=hash( 'id', 'SubTreeRelationFilter',
                                    'params', array( 'project/component_types', $node.path_identification_string ) )
     $project_count=fetch('content','tree_count',hash('parent_node_id', 2,
                                           'class_filter_type', 'include',
                                           'class_filter_array', array('project'),
                                           'extended_attribute_filter', $extendedAttributeFilter
                                          ))
     $projects=fetch('content','tree',hash('parent_node_id', 2,
                                           'class_filter_type', 'include',
                                           'class_filter_array', array('project'),
                                           'extended_attribute_filter', $extendedAttributeFilter,
                                           'offset', $view_parameters.offset,
                                           'limit', $page_limit,
                                           'sort_by', $sort )
                                          ))}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Can edit? *}
{if $node.object.can_edit}
    <div class="object-right">
        <form method="post" action={"/content/action"|ezurl}>
        <input type="image" src={"edit.png"|ezimage} name="EditButton" value="Edit" />
        <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
        </form>
    </div>
{/if}

{* Header *}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash}</h1>
</div>



<p>Count of related projects: {$project_count}</p>

{if $projects|count|gt(0)}
<ul>

{foreach $projects as $project}
{node_view_gui view=line content_node=$project}
{/foreach}

</ul>
{/if}



{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$project_count
         view_parameters=$view_parameters
         node_id=$node.node_id
         item_limit=$page_limit}



</div>
</div>
</div>
{* End main part *}

{* Right info *}

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">Sorting</h2>
</div>

<p>{section show=or( eq( $view_parameters.sort, 'modified'), eq( $view_parameters.sort, '') )}
    last updated |
{section-else}
    <a href={concat( $node.url_alias, '/(sort)/modified')|ezurl}>last updated</a> |
{/section}

{section show=eq( $view_parameters.sort, 'status') }
    status |
{section-else}
    <a href={concat( $node.url_alias, '/(sort)/status')|ezurl}>status</a> |
{/section}

{section show=eq( $view_parameters.sort, 'name') }
    name
{section-else}
    <a href={concat( $node.url_alias, '/(sort)/name')|ezurl}>name</a>
{/section}
</p>



</div>
</div>
</div>

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">Child types</h2>

    {include uri="design:component_type_map_recursive.tpl" parent_node=$node name=$node.node_id}

</div>

</div>
</div>
</div>

{* Right info end *}


{/let}

{/default}