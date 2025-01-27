{section show=eq( $node.data_map.partner_program.content.0, '1')}
{* Reference partner *}
    <tr valign="top">
    <td>{$node.object.data_map.country.content|wash}</td>
    <td>
        <div class="byline">
        {section show=$node.object.data_map.website_address.content}
            <a href="{$node.object.data_map.website_address.content}" target="_blank">{$node.name|wash}</a>
        {section-else}
                {$node.name|wash}
        {/section}
        </div>
    </td>
    </tr>
{section-else}
{* Business partner *}
    <tr class="{$sequence}" valign="top">
    <td>{section show=$node.object.data_map.partner_page.content}
        <a href={$node.object.data_map.partner_page.content.main_node.url_alias|ezurl}>{attribute_view_gui attribute=$node.object.data_map.company_logo image_class="small"}</a>
    {section-else}
        {section show=$node.object.data_map.website_address.content}
            <a href="{$node.object.data_map.website_address.content}" target="_blank">{attribute_view_gui attribute=$node.object.data_map.company_logo image_class="small"}</a>
        {section-else}
            {attribute_view_gui attribute=$node.object.data_map.company_logo image_class="small"}
        {/section}
    {/section}
    </td>
    <td>{$node.object.data_map.country.content|wash}</td>
    <td>
        <div class="byline">
        {section show=$node.object.data_map.partner_page.content}
            <a href={$node.object.data_map.partner_page.content.main_node.url_alias|ezurl}>{$node.name|wash}</a> -
        {section-else}
            {section show=$node.object.data_map.website_address.content}
            <a href="{$node.object.data_map.website_address.content}" target="_blank">{$node.name|wash}</a> -
            {section-else}
                {$node.name|wash} -
            {/section}
        {/section}
       {$node.data_map.partner_program.class_content.options[$node.data_map.partner_program.content.0].name}
       {section show=$node.data_map.level.class_content.options[$node.data_map.level.content.0].name}
           ({$node.data_map.level.class_content.options[$node.data_map.level.content.0].name})
       {/section}
        </div>
       <p>{$node.object.data_map.company_presentation_a_short_presentation_of_your.content|shorten( 300 )|wash}</p>
    </td>
    </tr>
{/section}
