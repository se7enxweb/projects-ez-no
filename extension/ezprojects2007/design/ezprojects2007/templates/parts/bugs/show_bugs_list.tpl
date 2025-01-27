<h2>Total: {$bugs_count}</h2>

<table class="list" cellspacing="0">
    <tr>
      <th>Pri</td>
      <th>ID</td>
      <th>Responsible</td>
      <th>Category</td>
      <th>Status  -  Summary</td>
    </tr>

    {section show=and( is_set( $bug_list), gt( count($bug_list), 0 ) )}
            {section loop=$bug_list  sequence=array( 'bglight', 'bgdark' )}
                <tr class="{$sequence}">
                <td class="bug-priority {$:item.object.data_map.priority.content|choose('','bug-pri1', 'bug-pri2', 'bug-pri3','bug-pri4','bug-pri5')}">{$:item.object.data_map.priority.content|choose('','1', '2', '3', '4','5')}</td>
                    {node_view_gui view=line content_node=$:item}
                </tr>
            {/section}
    {/section}
</table>