{* Line view for form message *}

{* Parameters:
   - type = string 'full', ''
   Defines how much information to show.
   'Full' will make a complete table row. Typicaly used in the reference list.
   Default is ''.
*}

{switch match=$type}
{case match="full"}
    {include uri="design:parts/references/reference_row.tpl"}
{/case}
{case}
    <div class="content-view-line">
    <div class="class-reference">

    <div class="attribute-heading">
        <h2><a href={$node.url_alias|ezurl}>{$node.name|wash}</a></h2>
    </div>

	<div class="attribute-image">
        {attribute_view_gui attribute=$node.data_map.screenshot href=$node.url_alias|ezurl(no) image_class="small"}
    </div>

    <div class="attribute-short">
        {$node.data_map.description.content|shorten(350)}
    </div>

    <div class="attribute-link">
        <p><a href={$node.url_alias|ezurl}>{"Read more"|i18n( "ezno" )}...</a></p>
    </div>

    </div>
    </div>
{/case}
{/switch}
