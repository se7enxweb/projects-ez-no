{* Full view for documentation page *}

{let toc_array=doc_sub_tree( $node )}
{* {include uri="design:parts/doc/doc_navigator.tpl" top_array=$toc_array} *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-documentation">


<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

<div class="attribute-long">
{attribute_view_gui attribute=$node.object.data_map.body}
</div>

{section show=$node.object.data_map.show_children.content}
    {let children=fetch( 'content', 'list', hash( 'parent_node_id',     $node.node_id,
                                                  'sort_by',            $node.sort_array,
						  'class_filter_type',  'exclude',
						  'class_filter_array', array( 19, 22) ) )}
    <table class="list" cellspacing="0">
<tr>
    <th>Operator</th>
    <th>Description</th>
</tr>
    {section loop=$children sequence=array( bglight, bgdark )}
            <tr class="{$:sequence}"><td>{node_view_gui view=line content_node=$:item}</td></tr>
    {/section}
    </table>
    {/let}
{/section}


{include uri="design:parts/view_comments.tpl"}

</div>
</div>
</div>

{/let}

{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-documentation">

<div class="attribute-heading">
    <h2 class="bullet">Contents</h2>
</div>

{include uri="design:parts/doc/doc_sidebar.tpl"}

</div>
</div>
</div>



