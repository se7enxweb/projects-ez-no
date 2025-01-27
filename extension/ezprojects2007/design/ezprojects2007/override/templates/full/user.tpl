{* Full view for user *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Can edit? *}
{if $node.object.can_edit}
<div class="object-right">
    <form method="post" action={"/content/action"|ezurl}>
        <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
        <input type="image" src={"edit.gif"|ezimage} name="EditButton" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
    </form>
</div>
{/if}

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.image}
</div>

</div>
</div>
</div>

{* Right info *}

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

{def $roleAssignments=fetch( 'user', 'member_of', hash( 'id', $node.contentobject_id ) )
     $memberRoleAssignments=array()
     $leaderRoleAssignments=array()}

<div class="attribute-heading">
    <h2 class="bullet">Membership info</h2>
</div>

{foreach $roleAssignments as $roleAssignment}
{switch match=$roleAssignment.id}
    {case match=9}
        {set $memberRoleAssignments=$memberRoleAssignments|append($roleAssignment)}
    {/case}
    {case match=7}
        {set $leaderRoleAssignments=$leaderRoleAssignments|append($roleAssignment)}
    {/case}
    {case}
    {/case}
{/switch}
{/foreach}

<div class="attribute-heading">
    <h3 class="bullet">Leader of</h3>
</div>
{if $leaderRoleAssignments}
<ul>
{foreach $leaderRoleAssignments as $leaderRoleAssignment}
<li>
{def $project=fetch('content','node',hash('node_id',$leaderRoleAssignment.limit_value|explode('/')|reverse.1))}
<a href={$project.url_alias|ezurl}>{$project.name|wash}</a>
{undef $project}
</li>
{/foreach}
</ul>
{else}
None.
{/if}

<div class="attribute-heading">
    <h3 class="bullet">Member of</h3>
</div>
{if $memberRoleAssignments}
<ul>
{foreach $memberRoleAssignments as $memberRoleAssignment}
<li>
{def $project=fetch('content','node',hash('node_id',$memberRoleAssignment.limit_value|explode('/')|reverse.1))}
<a href={$project.url_alias|ezurl}>{$project.name|wash}</a>
{undef $project}
</li>
{/foreach}
</ul>
{else}
None.
{/if}

{undef $roleAssignments}

</div>
</div>
</div>