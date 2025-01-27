{let total_count=mostactive(14,0,0,'total_count')
     current_count=mostactive(14,0,1,'total_count')}

<p>Total postings in forum: {$total_count.count}, this month so far {$current_count.count}.</p>

{/let}

<h2>Most active in forum - this month top 20</h2>
<table width="100%" class="list" cellspacing="0">
<tr>
    <th>
    Community member
    </th>
    <th>Number of posts</th>
</tr>
{section name=Active loop=mostactive(14,20,1) sequence=array( bglight, bgdark )}
<tr class="{$:sequence}">
    <td>
    {let member=fetch('content','object',hash(object_id,$Active:item.creator_id))}
    {$Active:member.name}

    {section show=$Active:member.parent_nodes|contains(13)}
    &nbsp;<img src={"ez-employee-forum-badge.gif"|ezimage} alt="Official eZ Systems member" />
    {/section}

    {/let}
    </td>
    <td>
    {$Active:item.count}
    </td>
</tr>
{/section}
</table>

<h2>Most active in forum - all time top 20</h2>
<table class="list" cellspacing="0">
<tr>
    <th>Community member</th>
    <th>Number of posts</th>
</tr>
{section name=Active loop=mostactive(14) sequence=array( bglight, bgdark )}
<tr class="{$:sequence}">
    <td>
    {let member=fetch('content','object',hash(object_id,$Active:item.creator_id))}
    {$Active:member.name}
    {section show=$Active:member.parent_nodes|contains(13)}
    &nbsp;<img src={"ez-employee-forum-badge.gif"|ezimage} alt="Official eZ Systems member" />
    {/section}
    {/let}
    </td>
    <td>
    {$Active:item.count}
    </td>
</tr>
{/section}
</table>
