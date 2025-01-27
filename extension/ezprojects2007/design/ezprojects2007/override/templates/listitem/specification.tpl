{* Listitem view for specification *}

{* Parameters:
   - show_extra_info Boolean true(), false()
   Toogle viewing of specification status and publish time.
   Default is false().
*}

<a href={$node.url_alias|ezurl}>{$node.name|wash}</a>

{section show=$show_extra_info}
    {let status=""}
    {* Figure out the status of the spec. *}
    {include uri="design:parts/specification/status.tpl" status_number=$node.object.data_map.status.content.0}
    Status: {$status} | {$node.object.published|datetime( 'custom', '%d.%M.%Y %H:%i' )}
    {/let}
{/section}
