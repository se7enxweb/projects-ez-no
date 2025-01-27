{* Full class for log *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-log">


{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash(xhtml)}</h1>
</div>

{* Created by info *}
<div class="attribute-byline float-break">
    <p class="author">{$node.object.owner.name}</p>
    <p class="date">{$node.object.published|datetime('custom', '%l %j %F %Y %g:%i%a')}</p>
</div>

{* Log *}
<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.log}
</div>

{* Comments *}
{section show=$node.object.data_map.enable_comments.content}
    {include uri="design:parts/view_comments.tpl"}
{/section}

</div>
</div>
</div>
{* End main part *}



{* Right info *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-article">

<div class="object-right">
    {* Can edit? *}
    {section show=$node.object.can_edit}
        <div class="element">
            <form method="post" action={"/content/action"|ezurl}>
                <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
                <input type="image" src={"edit.gif"|ezimage} name="EditButton" />
                <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
                <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
            </form>
        </div>
    {/section}
</div>

<div class="attribute-heading">
    <h2 class="bullet">Blog info</h2>
</div>

{* Number of comments *}
{section show=$node.object.data_map.enable_comments.content}
    <p><a href="#comments">{fetch('content','list_count',hash(parent_node_id,$node.node_id))} comments</a></p>
{section-else}
    <p><em>{"Comments disabled"|i18n("design/blog/layout")}</em></p>
{/section}

</div>
</div>
</div>
{* End right info *}
