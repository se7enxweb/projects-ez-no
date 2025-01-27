{* Node override template for forum frontpage *}

{let forum_data=fetch_alias( forums, hash( parent_node_id, $node.node_id ) )}

<div class="template-design area-main-normal">
<div class="template-module node-view-forum">
<div class="template-object">

{* Header *}
{section show=$node.object.data_map.hide_title.content|not}
    <div class="attribute-heading">
        <h1>{$node.object.data_map.name.content|wash(xhtml)}</h1>
    </div>
{/section}

{* Body *}
<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.body}
</div>

</div>
</div>
</div>

<div class="template-design area-sidebar-normal">
<div class="template-module node-view-forum">
<div class="template-object">

{* Right info *}
<div class="attribute-long">
    {attribute_view_gui attribute=$node.data_map.rightinfo}
</div>

</div>
</div>
</div>

<div class="template-design area-main-full">
<div class="template-module node-view-forum">
<div class="template-object class-forum">

{* Children *}
{section show=$forum_data}
    <div class="content-view-children">
    <div class="class-forum-messages">

    <table class="forum list" cellspacing="0">
    <tr>
        <th>Forum</td>
        <th>Topics</th>
        <th>Posts</th>
        <th>Last topics</th>
    </tr>

    {section loop=$forum_data sequence=array( bglight, bgdark )}
        {node_view_gui view=line content_node=$:item sequence=$:sequence}
    {/section}

    </table>
    </div>
    </div>
{/section}

</div>
</div>
</div>

{/let}
