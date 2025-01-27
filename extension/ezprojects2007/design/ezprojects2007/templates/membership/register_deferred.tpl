<div class="template-design area-main-normal">
<div class="template-module user-register">
<div class="template-object">

<div class="attribute-heading">
<h1>{"Membership registration submitted"|i18n("extension/membership")}</h1>
</div>

<div>

{foreach $group.main_node.path|append($group.main_node) as $step}
{delimiter} / {/delimiter}
<a href={$step.url_alias|ezurl}>{$step.name}</a>
{/foreach}

<p>Your membership registration has been succesfully submitted and is now waiting for approval. You can follow its approval status in the <a href={"/collaboration/view/summary"|ezurl}>collaboration system</a>.</p>

</div>

</div>
</div>
</div>