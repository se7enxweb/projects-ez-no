{* Bugs / fixedbugsreport template *}

<div class="template-design area-main-full">
<div class="template-module bugs-fixedbugsreport">
<div class="template-object">

<div class="attribute-heading">
    <h1>Report</h1>
</div>

<form action={"bugs/fixedbugsreport"|ezurl} method="post">
    {include uri='design:parts/bugs/select_date.tpl'}
    <input type="submit" class="button" name="ShowReportButton" value="Show report" />
</form>

{section show=is_set($fixed_bug_list)}
    <h2> Report for
    {section show=eq($search_type, 'all')}
        whole period
    {section-else}
        {$from_day}/{$from_month}/{$from_year} - {$to_day}/{$to_month}/{$to_year}
    {/section}
    </h2>

    <ul>
        <li>{$new_bugs_count} new bugs(bug reports with type 'bug') were posted.</li>
        <li>{$fixed_bugs_count} bugs/suggestions/enhancements were fixed(resolved or closed).</li>
    </ul>

    <div class="content-view-children">
        {include uri='design:parts/bugs/show_bugs_list.tpl' bug_list=$fixed_bug_list bugs_count=$fixed_bugs_count}

        {include name=navigator
                 uri='design:navigator/google.tpl'
                 page_uri=concat('bugs/fixedbugsreport/searchType/', $search_type, '/fromDay/', $from_day, '/fromMonth/', $from_month, '/fromYear/', $from_year, '/toDay/', $to_day, '/toMonth/', $to_month, '/toYear/', $to_year )
                 item_count=$fixed_bugs_count
                 item_limit=ezini( 'BugReportSettings', 'BugsPerPage', 'bugs.ini' )
                 view_parameters=$view_parameters}
    </div>

{/section}

</div>
</div>
</div>