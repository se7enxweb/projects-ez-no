<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-specification">

{let status_text=$node.object.data_map.status.class_content.options[$node.object.data_map.status.content.0].name}

<div class="attribute-heading">
    <h1>{$node.name} - {attribute_view_gui attribute=$node.object.data_map.id} ({$status_text})</h1>
</div>

{/let}
<div class="attribute-short">
    <p>{attribute_view_gui attribute=$node.object.data_map.short_description}</p>
</div>

<div class="attribute-short">
    <label>Posted</label>
    <p>{$node.object.published|l10n(datetime)}</p>
    {section show=sub($node.object.published,$node.object.modified)}
        <label>Updated</label> <p class="rendered">{$node.object.modified|l10n(datetime)}</p>
    {/section}
</div>

<div class="attribute-short">
    {section show=$node.object.data_map.versions.has_content}
        <p>Implemented in
        {section var=version loop=$node.object.data_map.versions.content|explode( ",")}
            {$version}
            {delimiter}{', '}{/delimiter}
        {/section}
    {/section}
</div>


{section show=$node.object.data_map.motivation.has_content}
    <h2>Motivation</h2>
    {attribute_view_gui attribute=$node.object.data_map.motivation}
{/section}

{section show=$node.object.data_map.description.has_content}
    <h2>Description</h2>
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.object.data_map.description}
    </div>
{/section}

{section show=$node.object.data_map.considerations.has_content}
    <h2>Considerations</h2>
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.object.data_map.considerations}
    </div>
{/section}

{section show=$node.object.data_map.dependencies.has_content}
    <h2>Dependencies</h2>
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.object.data_map.dependencies}
    </div>
{section-else}
    <h2>Dependencies</h2>
    <div class="attribute-long">
        <p>This specification has no dependencies</p>
    </div>
{/section}

{section show=$node.object.data_map.conflicts.has_content}
    <h2>Conflicts</h2>
    <div class="attribute-short">
        {attribute_view_gui attribute=$node.object.data_map.conflicts}
    </div>
{section-else}
    <h2>Conflicts</h2>
    <div class="attribute-short">
        <p>This specification has no conflicts</p>
    </div>
{/section}

{section show=$node.object.data_map.examples.has_content}
    <h2>Examples</h2>
    <div class="attribute-long">
        {attribute_view_gui attribute=$node.object.data_map.examples}
    </div>
{/section}

{include uri="design:parts/view_comments.tpl"}


</div>
</div>
</div>
{* End main part *}


{* Right info *}
{section show=$node.parent.data_map.hide_rightinfo.content|not()}

    <div class="template-design area-sidebar-normal">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-infopage">
        {attribute_view_gui attribute=$node.parent.data_map.rightinfo}

        {let current_user=fetch('user','current_user')}
        {section show=$current_user.is_logged_in}
        <form method="post" action={"/content/action"|ezurl}>
            <div class="block float-break">
                <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
                <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id}" />
                <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
            </div>
        </form>
        {/section}
        {/let}

    </div>
    </div>
    </div>

{/section}