{* Node override template for forum frontpage *}

{let forum_data=fetch_alias( forums, hash( parent_node_id, $node.node_id ) )}

<div class="template-design area-main-normal">
<div class="template-module node-view-forum">
<div class="template-object">

<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash(xhtml)}</h1>
</div>

{* Description *}
<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

</div>
</div>
</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node showTrackChanges=true()}

{* Right info *}
{def $canCreateForum=fetch( 'content', 'access', hash( 'access', 'create',
                                                 'contentobject', $node,
                                                 'contentclass_id', 'forum' ))}
{if $canCreateForum}
<div class="template-design area-sidebar-normal">
<div class="template-module node-view-forum">
<div class="template-object">

<div class="block float-break">
    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="forum" />
        <input class="button button-type-admin" type="submit" name="NewButton" value="Create a new forum" />
    </form>
    </div>
</div>

</div>
</div>
</div>
{/if}

{undef $canCreateForum}

{def $rssList=fetch('rss','subtree_list',hash('node_id',$node.node_id, 'max_depth', 1))}

{if $rssList|count|gt(0)}
<div class="template-design area-sidebar-normal">
<div class="template-module node-view-forum">
<div class="template-object">

{* Right info *}
<div class="attribute-heading">
    <h2 class="bullet">RSS Feeds</h2>
</div>

<ul class="linklist">
{foreach $rssList as $rss}
<li><a type="application/rss+xml" href={concat("/rss/feed/",$rss.access_url)|ezurl}>{$rss.title|wash}</a></li>
{/foreach}
</ul>

</div>
</div>
</div>
{/if}

{undef $rssList}


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
