{* Line view template for class user groups *}
{* Not to be confused with User Group (container class for users). *}

<div class="content-view-line">
<div class="class-usergroups">

{* Header + Link *}
<div class="attribute-heading">
    <h2><a href={$node.url_alias|ezurl}>{$node.name|wash}</a></h2>
</div>

{* Intro *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.intro}
</div>

{* Read more link *}
<div class="attribute-link">
    <p><a href={$node.url_alias|ezurl}>{"Read more"|i18n( "ezno" )}...</a></p>
</div>


</div>
</div>
