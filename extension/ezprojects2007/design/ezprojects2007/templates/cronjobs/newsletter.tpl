{* Newsletter template made by Ole Morten Halvorsen <oh@ez.no> *}
{* This template does not generate an HTML output as most other templates,
   it generates a XML output for copy-paste into an eZ XML field. *}

<SET_ME_AS_HEADER_IN_ARTICLE>
Community newsletter {currentdate()|l10n( 'shortdate' )}
</SET_ME_AS_HEADER_IN_ARTICLE>

{let new_bugs=0
     open_bugs=0
     closed_bugs=0
     start_style_tag=""
     stop_style_tag=""}


<custom name="horizontal-line"></custom>

 {* News *}
{section show=$articles_count}
<header level='1'>News this week</header>
<ul class="linklist">

{section name=Articles loop=$articles}
<li><link href="/{$:item.url_alias}">{$:item.name}</link></li>
{/section}
</ul>

{/section}


{* Contributions *}
{section show=$contribs}
<header level='1'>Contributions</header>
<ul class="linklist">
{section name=Contributions loop=$contribs}
    <li><link href="/{$:item.url_alias}">{$:item.name}</link></li>
{/section}
</ul>

{/section}

{* Blogs *}
{section show=$blogs_count}
<header level='1'>New blog entries</header>
<ul class="linklist">

{section name=Blogs loop=$blogs}
<li><link href="/{$:item.url_alias}">{$:item.name}</link></li>

{/section}
</ul>

{/section}

{* New specifications *}
{section show=$specs_count}
<header level='1'>New specifications</header>
<ul class="linklist">

{section name=Specs loop=$specs}
<li><link href="/{$:item.url_alias}">{$:item.name}</link></li>

{/section}
</ul>
{/section}


<header level="1">Reported <link href="http://issues.ez.no">issues</link></header>
{* Bugs *}
{def $status=""}
{if $bugs}
{section loop=$bugs}
    <header level="2">{$:item.name} - Bugs</header>
    <ul class="linklist">
    {foreach $:item as $bug}
        {set $status=""}
        {if $bug.Type|eq( "Bug" )}
            {switch match=$bug.Status}
                {case match="New"}
                    {set $status=concat( "<b>", $bug.Status, "</b>" )}
                {/case}
                {case match="Closed"}
                    {set $status=concat( "<i>", $bug.Status, "</i>" )}
                {/case}
                {case}
                    {set $status=$bug.Status}
                {/case}
            {/switch}
            <li><link href="http://issues.ez.no/{$bug.Id}">{$status} - {$bug.Summary|wash}</link></li>
        {/if}
    {/foreach}
    </ul>
{/foreach}
{/if}

{* Bugs - Enhancement *}
{def $status=""}
{if $bugs}
{section loop=$bugs}
    <header level="2">{$:item.name} - Enhancements</header>
    <ul class="linklist">
    {foreach $:item as $bug}
        {set $status=""}
        {if $bug.Type|eq( "Enhancement" )}
            {switch match=$bug.Status}
                {case match="New"}
                    {set $status=concat( "<b>", $bug.Status, "</b>" )}
                {/case}
                {case match="Closed"}
                    {set $status=concat( "<i>", $bug.Status, "</i>" )}
                {/case}
            {/switch}
            <li><link href="http://issues.ez.no/{$bug.Id}">{$status} - {$bug.Summary|wash}</link></li>
        {/if}
    {/foreach}
    </ul>
{/foreach}
{/if}

{* Bugs - Task 
    {def $status=""}
{if $bugs}
{section loop=$bugs}
    <header level="2">{$:item.name} - Tasks</header>
    <ul class="linklist">
    {foreach $:item as $bug}
        {set $status=""}
        {if $bug.Type|eq( "Task" )}
            {switch match=$bug.Status}
                {case match="New"}
                    {set $status=concat( "<b>", $bug.Status, "</b>" )}
                {/case}
                {case match="Closed"}
                    {set $status=concat( "<i>", $bug.Status, "</i>" )}
                {/case}
            {/switch}
            <li><link href="http://issues.ez.no/{$bug.Id}">{$status} - {$bug.Summary|wash}</link></li>
        {/if}
    {/foreach}
    </ul>
{/foreach}
{/if}
*}

{* Bugs - Security bug 
{def $status=""}
{if $bugs}
{section loop=$bugs}
    <header level="2">{$:item.name} - Security Bugs</header>
    <ul class="linklist">
    {foreach $:item as $bug}
        {set $status=""}
        {if $bug.Type|eq( "Security Bug" )}
            {switch match=$bug.Status}
                {case match="New"}
                    {set $status=concat( "<b>", $bug.Status, "</b>" )}
                {/case}
                {case match="Closed"}
                    {set $status=concat( "<i>", $bug.Status, "</i>" )}
                {/case}
            {/switch}
            <li><link href="http://issues.ez.no/{$bug.Id}">{$status} - {$bug.Summary|wash}</link></li>
        {/if}
    {/foreach}
    </ul>
{/foreach}
{/if}
*}

{* Stats *}
{* 
{section show=or( $bugs_count, $doc_pages_count, $forum_messages_count, $users_count )}
<custom name='infobox' header="Community stats">
<header level='2'>This week</header>
<ul>

{section show=$new_bugs}
    <li>New bugs: {$new_bugs}</li>
{section-else}
    <li>No new bugs</li>
{/section}

{section show=$open_bugs}
    <li>Open bugs: {$open_bugs}</li>
{section-else}
    <li>No open bugs</li>
{/section}

{section show=$closed_bugs}
    <li>Closed bugs: {$closed_bugs}</li>
{section-else}
    <li>No closed bugs</li>
{/section}

{section show=$doc_pages_count}
    <li>New documentation pages: {$doc_pages_count}</li>
{/section}

{section show=$forum_messages_count}
    <li>New forum messages: {$forum_messages_count}</li>
{section-else}
    <li>No forum messages</li>
{/section}

</ul>


<header level='2'>Total</header>
<ul>
{section show=$total_new_bugs}
    <li>New bugs: {$total_new_bugs}</li>
{section-else}
    <li>No new bugs</li>
{/section}


{section show=$total_open_bugs}
    <li>Open bugs: {$total_open_bugs}</li>
{section-else}
    <li>No open bugs</li>
{/section}


{section show=$total_closed_bugs}
    <li>Closed bugs: {$total_closed_bugs}</li>
{section-else}
    <li>No closed bugs</li>
{/section}
</ul>
</custom>
{/section}
*}
{/let}
