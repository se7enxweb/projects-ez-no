<div class="template-design area-main-normal">
<div class="template-module user-register">
<div class="template-object">

{def $postURL=concat("/membership/register/", $group.id)}

<form action={$postURL|ezurl} method="post">
<div class="attribute-heading">
    <h1>{"Membership registration"|i18n("extension/membership")}</h1>
</div>

<div>

{foreach $group.main_node.path|append($group.main_node) as $step}
{delimiter} / {/delimiter}
<a href={$step.url_alias|ezurl}>{$step.name}</a>
{/foreach}

<p>{"Are you sure you want to join this user group?"|i18n("extension/membership")}</p>

<input type="submit" name="RegisterButton" value="{'Confirm'|i18n('extension/membership')}" />
</div>
</form>

{undef $postURL}

</div>
</div>
</div>

{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">Approval information</h2>
</div>

<p>The group owner, {$group.owner.name|wash}, needs to approve your membership. He/she will be automatically notified after you've confirmed your membership request.</p>

</div>
</div>
</div>