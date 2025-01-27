{* Full view for article *}
{default $current_user=fetch('user', 'current_user')}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash}<span class="status"></span></h1>
</div>

{* Full description *}
{section show=$node.object.data_map.description.content}
    <h2>Description</h2>
    <div class="attribute-long">
        {$node.object.data_map.description.content|simpletags|ezprebreak|autolink}
    </div>
{/section}

<ul>
{foreach fetch('content','list',hash('parent_node_id',$node.node_id,'limitation',array(),'class_filter_type', 'include', 'class_filter_array', array( 'user_group', 'user' ) )) as $child}
<li><a href={$child.url_alias|ezurl}>{$child.name|wash}</a></li>
{/foreach}
</ul>

</div>
</div>
</div>
{* End main part *}

{* Right info *}

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

{if $current_user.groups|contains($node.contentobject_id)|not}

<div class="attribute-heading">
    <h2 class="bullet">Join this group</h2>
</div>

<p>Join the project {$node.name|downcase|wash} group and contribute to the project!</p>

{def $currentUser=fetch('user','current_user')
     $canBecomeMember=fetch( 'user', 'has_access_to', hash( 'module', 'membership', 'function', 'register') )}

{if $canBecomeMember}
<p>The group owner, {$node.object.owner.name|wash}, has to approve your membership request.</p>
<form action={concat('/membership/register/', $node.contentobject_id)|ezurl} method="post">
    <input type="submit" class="button" value="Register membership" />
</form>
{else}
<p>You need to be logged in to become a member of a group. You can do so <a href={"/user/login/"|ezurl}>here</a>.</p>
{/if}
{undef $canBecomeMember $currentUser}

{else}
<div class="attribute-heading">
    <h2 class="bullet">Membership</h2>
</div>

<p>You are a member of this group.</p>

{/if}
</div>
</div>
</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node}

{* Right info end *}

{/default}
