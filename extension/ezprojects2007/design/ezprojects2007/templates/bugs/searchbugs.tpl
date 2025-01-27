<form action={"bugs/searchbugs"|ezurl} method="post">

    {include uri='design:parts/bugs/select_search_params.tpl'}

</form>

{include uri='design:parts/bugs/show_bugs_list.tpl'}

{include name=navigator
             uri='design:navigator/google.tpl'
             page_uri=concat('bugs/searchbugs', '/bugType/', $bug_type|implode('-'), '/bugStatus/', $bug_status|implode('-'), '/bugCategory/', $bug_category|implode('-'), '/bugAssignedTo/', $bug_assigned_to|implode('-'), '/sortBy/', $sort_by, '/sortBy2/', $sort_by2, '/sortBy3/', $sort_by3)
             item_count=$bugs_count
             view_parameters=$view_parameters
             item_limit=ezini( 'BugReportSettings', 'BugsPerPage', 'bugs.ini' )}

