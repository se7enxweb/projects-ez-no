{* Bugs / bugsstatistics template *}

<div class="template-design area-main-full">
<div class="template-module bugs-bugsstatistics">
<div class="template-object">

<div class="attribute-heading">
    <h1>Bugs statistics</h1>
</div>

<p><a href={"/bugs/monthlybugreports"|ezurl}>Show monthly bugfixing report</a></p>

<form action={"bugs/bugsstatistics"|ezurl} method="post">
    {include uri='design:parts/bugs/select_date.tpl'}
    <input type="submit" class="button" name="ShowStatisticsButton" value="Show statistics" />
</form>



{section show=is_set($statistics)}
    <h2>Statistics for
    {section show=eq($search_type, 'all')}
        whole period
    {section-else}
        {$from_day}/{$from_month}/{$from_year} - {$to_day}/{$to_month}/{$to_year}
    {/section}
    </h2>

    <table class="list" width="50%" cellspacing="0">
        <tr><label>Posted bugs(bug reports with type 'bug') per category:</label></tr>
        <tr>
          <th>Undefined</th>
          <th>OE</th>
          <th>Misc</th>
          <th>Packages</th>
          <th>Admin</th>
          <th>Install</th>
          <th>Language</th>
          <th>ez.no</th>
          <th>Licensing</th>
          <th>Community</th>
          <th>TOTAL</td>
        </tr>

        <tr>
            {section loop=$statistics['posted'] sequence=array(bgdark, bglight)}
                <td>{$:item}</td>
            {/section}
            <td>{$statistics['posted']|array_sum}</td>
        </tr>
    </table>

    <table class="list" width="50%" cellspacing="0">
        <tr><label>Fixed (resolved/closed) bugs/suggestions/enhancements:</label></tr>
        <tr>
          <th>Resolved</th>
          <th>Closed</th>
          <th>TOTAL FIXED</th>
        </tr>

        <tr>
            <td>{$statistics['resolved']}</td>
            <td>{$statistics['closed']}</td>
            <td>{sum($statistics['resolved'], $statistics['closed'])}</td>
        </tr>
    </table>
{/section}

</div>
</div>
</div>
