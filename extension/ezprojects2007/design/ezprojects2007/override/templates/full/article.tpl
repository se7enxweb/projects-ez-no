{* Full view for article *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{* Created by info *}
<div class="attribute-byline float-break">
    <p class="author"><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name|wash}</a></p>
    <p class="date">{$node.object.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
</div>

{* Intro *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.intro}
</div>

{* Thumbnail *}
<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.thumbnail image_class=small}
</div>

{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$node.object.data_map.body}
</div>

{* Comments *}
{section show=$node.object.data_map.enable_comments.content}
    {include uri="design:parts/view_comments.tpl"}
{/section}

</div>
</div>
</div>
{* End main part *}

{* --- --- --- --- --- --- --- --- *}

{* Default right info *}
<div class="area-sidebar-normal">
<div class="template-design">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

{* Right info header *}
<div class="attribute-heading">
    <h2 class="bullet">{"Article info"|i18n( "ezno" )}</h2>
</div>

{* Created by info *}
{*
<div class="attribute-byline">
    <p class="author">{$node.object.owner.name}</p>
    <p class="date">{$node.object.published|l10n(datetime)}</p>
</div>
*}

{* Comment count *}
{section show=$node.object.data_map.enable_comments.content}
    {let comment_count=fetch_alias( comment_count, hash( parent_node_id, $node.main_node_id ) )}
    <p><a href="#comments">{$comment_count}&nbsp;{"Comments"|i18n( "ezno" )|downcase}</a></p>
    {/let}
{section-else}
<p><em>{"Comments disabled"|i18n( "ezno" )}</em></p>
{/section}

{* Other articles *}
{*
<h2>Other articles</h2>
{let other_articles=fetch_alias( children, hash( parent_node_id, $node.parent.node_id,
                                                 sort_by, array( published, false() ),
                                                 limit, 5 ) ) }

<ul>
{section loop=$other_articles}
    <li>{node_view_gui view='listitem' content_node=$:item}</li>
{/section}
</ul>
{/let}
*}

</div>
</div>
</div>
{* End default right info *}


{* --- --- --- --- --- --- --- --- *}


{* Right info *}
{section show=$node.data_map.rightinfo.has_content}
    {* All the divs needed to make a right info box should be provided by a custom
       XML tag inside the rightinfo XML field. *}
    {attribute_view_gui attribute=$node.data_map.rightinfo}
{/section}

</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node}