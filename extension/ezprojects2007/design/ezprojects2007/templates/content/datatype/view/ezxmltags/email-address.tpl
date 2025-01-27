{section show=$content|contains( "@" )}
    {let mail_array=$content|explode( "@" )}
    {$mail_array.0}<span class="spamfilter">NOSPAM</span>@{$mail_array.1}
    {/let}
{section-else}
    {$content}
{/section}