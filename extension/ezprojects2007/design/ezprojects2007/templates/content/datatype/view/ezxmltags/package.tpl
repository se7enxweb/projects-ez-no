<p><b><a name="{$package_name}" href="{$url}">{$summary} ({$version})</a></b></p>
{if and( is_set( $description ), $description ) }
    <p><b>Description:</b> {$description}</p>
{/if}
{if and( is_set( $content ), $content ) }
    <p><b>Dependencies:</b> {$content}</p>
{/if}
