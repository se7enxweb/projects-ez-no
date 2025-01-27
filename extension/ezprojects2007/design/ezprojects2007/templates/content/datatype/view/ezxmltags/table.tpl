{let class=""}

{section show=ne($classification|trim,'')}
    {set class=concat( "renderedtable ", $classification|wash)}
{section-else}
    {set class="renderedtable"}
{/section}

<table class="{$class}"
       cellspacing="0"
       {section show=ne($border|trim,'')} border="{$border}"{/section}
       {section show=ne($width|trim,'')} width="{$width}"{/section}>
{$rows}
</table>

{/let}