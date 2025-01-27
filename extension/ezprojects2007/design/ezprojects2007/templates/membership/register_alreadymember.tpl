<div class="template-design area-main-normal">
<div class="template-module user-register">
<div class="template-object">

<div class="attribute-heading">
<h1>{"Membership info"|i18n("extension/membership")}</h1>
</div>

<div>

{foreach $group.main_node.path|append($group.main_node) as $step}
{delimiter} / {/delimiter}
<a href={$step.url_alias|ezurl}>{$step.name}</a>
{/foreach}

<p>{"You are already a member of this group."|i18n("extension/membership")}</p>

</div>

</div>
</div>
</div>