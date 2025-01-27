{let is_important=and($node.object.data_map.type.content|eq(1),
                      array(1,2,4,5,8)|contains($node.object.data_map.status.content))
     is_special=and(array(2,3)|contains($node.object.data_map.type.content),
                    array(1,2,4,5)|contains($node.object.data_map.status.content))
     start_tag='' end_tag=''}

{section show=$is_important}
    {set start_tag='<b>'}
    {set end_tag='</b>'}
{section-else}
    {section show=$is_special}
        {set start_tag='<i>'}
        {set end_tag='</i>'}
    {/section}
{/section}

<td>
    {$start_tag}
    <a href={concat('bugs/view/',$node.object.data_map.bug_number.content)|ezurl}>{$node.object.data_map.bug_number.content}</a>
    {$end_tag}
    </td>

<td>
    {$node.object.data_map.assigned_to.content.name}
</td>
<td>
    {$node.object.data_map.category.content|choose('','Undefined','Online Editor','eZ Publish - misc', 'eZ Publish - packages','eZ Publish - administration interface' ,'eZ Publish - install','eZ Publish - language','ez.no', 'Licensing', 'Community', 'eZ Components', 'Newsletter' )}
</td>
<td>
    {$start_tag}
    {section show=array(3,6,7)|contains($node.object.data_map.status.content)}
        {$node.object.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')}
        {$node.object.data_map.type.content|choose('','bug','suggestion','enhancement')}
        {section show=$node.object.data_map.resolution.content|ne(1)}
            ({$node.object.data_map.resolution.content|choose('','none','fixed','invalid','Will not fix','Future addition','Duplicate','Works here')})
        {/section}
    {section-else}
        {$node.object.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')}
        {$node.object.data_map.type.content|choose('','bug','suggestion','enhancement')}
    {/section}
    {$end_tag}
        &nbsp;-&nbsp;
    {$start_tag}
    <a href={concat('bugs/view/',$node.object.data_map.bug_number.content)|ezurl}>{$node.name|shorten(65)|wash(xhtml)}</a>
    {$end_tag}
</td>

{/let}