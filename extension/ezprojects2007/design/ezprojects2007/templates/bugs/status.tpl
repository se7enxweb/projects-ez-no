{* Bugs / status template *}

<div class="template-design area-main-full">
<div class="template-module bugs-fixedbugsreport">
<div class="template-object">

<div class="attribute-heading">
    <h1>Bug system status</h1>
</div>

{section show=is_set($status) loop=$status}
    <label>{$:key}</label>
    {let total_opened = sum($:item['new'], $:item['open'], $:item['started'], $:item['confirmed'], $:item['reopened'])
         total_fixed = sum($:item['resolved'], $:item['closed'])}

        <table class="list" cellspacing="0">
            <tr>
              <th>New</th>
              <th>Open</th>
              <th>Started</th>
              <th>Confirmed</th>
              <th>Reopened</th>
              <th>Total OPENED</th>
              <th>Resolved</th>
              <th>Closed</th>
              <th>Total FIXED</th>
              <th>FIXED/TOTAL</th>
            </tr>
            <tr>
                <td>{$:item['new']}</td>
                <td>{$:item['open']}</td>
                <td>{$:item['started']}</td>
                <td>{$:item['confirmed']}</td>
                <td>{$:item['reopened']}</td>
                <td>{$total_opened}</td>
                <td>{$:item['resolved']}</td>
                <td>{$:item['closed']}</td>
                <td>{$total_fixed}</td>
                <td>{$total_fixed|div(sum($total_opened, $total_fixed))|mul(100)|round()}</td>
            </tr>
        </table>
    {/let}
{/section}



</div>
</div>
</div>