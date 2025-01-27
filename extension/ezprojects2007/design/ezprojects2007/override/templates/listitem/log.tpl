{* Parameters:
   - show_extra_info Boolean true(), false()
   Toogle viewing of published date and author.
   Default is false().
*}

<a href={$node.url_alias|ezurl}>{$node.name|wash}</a>
{section show=$show_extra_info}
    <div class="attribute-byline float-break">
        <p class="date">{$node.object.published|datetime( 'custom', '%d %M %Y %H:%i' )}</p>
        <p class="author">{$node.object.owner.name}</p>
    </div>
{/section}