{default bug_type=array( 0 )
         bug_category=array( 0 )
         bug_status=array( 0 )
         bug_assigned_to=array( 0 )
         sort_by='published'
         sort_by2='undefined'
         sort_by3='undefined'}

<div class="bug-searchparameters">

<div class="block float-break">
    <div class="element">
        <label>Bug type:</label>
        <select name="bug_type[]" multiple="multiple" size="8">
            <option value="0" {section show=$bug_type|contains(0)}selected="selected" {/section}>All</option>
            <option value="1" {section show=$bug_type|contains(1)}selected="selected" {/section}>Bugs</option>
            <option value="3" {section show=$bug_type|contains(3)}selected="selected" {/section}>Enhancements</option>
            <option value="2" {section show=$bug_type|contains(2)}selected="selected" {/section}>Suggestions</option>
        </select>
    </div>
    <div class="element">
        <label>Status:</label>
        <select name="bug_status[]" multiple="multiple" size="8">
                       <option value="0"  {section show=$bug_status|contains(0)}selected="selected" {/section}>All</option>
                       <option value="1"  {section show=$bug_status|contains(1)}selected="selected" {/section}>New</option>
                       <option value="2"  {section show=$bug_status|contains(2)}selected="selected" {/section}>Open</option>
                       <option value="4"  {section show=$bug_status|contains(4)}selected="selected" {/section}>Started</option>
                       <option value="5"  {section show=$bug_status|contains(5)}selected="selected" {/section}>Reopened</option>
                       <option value="6"  {section show=$bug_status|contains(6)}selected="selected" {/section}>Resolved</option>
                       <option value="7"  {section show=$bug_status|contains(7)}selected="selected" {/section}>Verified</option>
                       <option value="8"  {section show=$bug_status|contains(8)}selected="selected" {/section}>Confirmed</option>
                       <option value="3"  {section show=$bug_status|contains(3)}selected="selected" {/section}>Closed</option>
        </select>
    </div>
    <div class="element">
        <label>Category:</label>
        <select name="bug_category[]" multiple="multiple" size="8">
            <option value="0"  {section show=$bug_category|contains(0)}selected="selected" {/section}>All</option>
            <option value="1"  {section show=$bug_category|contains(1)}selected="selected" {/section}>Undefined</option>
            <option value="2"  {section show=$bug_category|contains(2)}selected="selected" {/section}>Online Editor</option>
            <option value="3"  {section show=$bug_category|contains(3)}selected="selected" {/section}>eZ Publish - misc</option>
            <option value="4"  {section show=$bug_category|contains(4)}selected="selected" {/section}>eZ Publish - packages</option>
            <option value="5"  {section show=$bug_category|contains(5)}selected="selected" {/section}>eZ Publish - admin interface</option>
            <option value="6"  {section show=$bug_category|contains(6)}selected="selected" {/section}>eZ Publish - install</option>
            <option value="7"  {section show=$bug_category|contains(7)}selected="selected" {/section}>eZ Publish - language</option>
            <option value="8"  {section show=$bug_category|contains(8)}selected="selected" {/section}>ez.no</option>
            <option value="9"  {section show=$bug_category|contains(9)}selected="selected" {/section}>Licensing</option>
            <option value="10" {section show=$bug_category|contains(10)}selected="selected" {/section}>Community</option>
            <option value="11" {section show=$bug_category|contains(11)}selected="selected" {/section}>eZ Components</option>
            <option value="12" {section show=$bug_category|contains(11)}selected="selected" {/section}>Newsletter</option>
        </select>
    </div>
    {let user_list=fetch_alias( developers )}
    {section show=$user_list}
        <div class="element">
            <label>Assigned to:</label>
            <select name="bug_assigned_to[]" multiple="multiple" size="8">
                <option value="0"  {section show=$bug_assigned_to|contains(0)}selected="selected" {/section}>Any</option>
                {section var=users loop=$user_list}
                    <option value="{$users.item.contentobject_id}" {section show=$bug_assigned_to|contains($users.item.contentobject_id)}selected="selected" {/section}>{$users.item.name}</option>
                {/section}
            </select>
        </div>
    {/section}
    {/let}
</div>

<div class="block float-break">
    <div class="element">
        <label>Sort criteria 1:</label>
        <select name="sort_by">
            <option value="published" {section show=$sort_by|compare('published')}selected="selected" {/section}>Published</option>
            <option value="priority"  {section show=$sort_by|compare('priority')}selected="selected" {/section}>Priority</option>
            <option value="modified"  {section show=$sort_by|compare('modified')}selected="selected" {/section}>Modified</option>
            <option value="category"  {section show=$sort_by|compare('category')}selected="selected" {/section}>Category</option>
            <option value="status"    {section show=$sort_by|compare('status')}selected="selected" {/section}>Status</option>
            <option value="type"      {section show=$sort_by|compare('type')}selected="selected" {/section}>Type</option>
        </select>
    </div>
    <div class="element">
        <label>Sort criteria 2:</label>
        <select name="sort_by2">
            <option value="undefined" {section show=$sort_by2|compare('undefined')}selected="selected" {/section}>Undefined</option>
            <option value="published" {section show=$sort_by2|compare('published')}selected="selected" {/section}>Published</option>
            <option value="priority"  {section show=$sort_by2|compare('priority')}selected="selected" {/section}>Priority</option>
            <option value="modified"  {section show=$sort_by2|compare('modified')}selected="selected" {/section}>Modified</option>
            <option value="category"  {section show=$sort_by2|compare('category')}selected="selected" {/section}>Category</option>
            <option value="status"    {section show=$sort_by2|compare('status')}selected="selected" {/section}>Status</option>
            <option value="type"      {section show=$sort_by2|compare('type')}selected="selected" {/section}>Type</option>
        </select>
    </div>
    <div class="element">
        <label>Sort critera 3:</label>
        <select name="sort_by3">
            <option value="undefined" {section show=$sort_by3|compare('undefined')}selected="selected" {/section}>Undefined</option>
            <option value="published" {section show=$sort_by3|compare('published')}selected="selected" {/section}>Published</option>
            <option value="priority"  {section show=$sort_by3|compare('priority')}selected="selected" {/section}>Priority</option>
            <option value="modified"  {section show=$sort_by3|compare('modified')}selected="selected" {/section}>Modified</option>
            <option value="category"  {section show=$sort_by3|compare('category')}selected="selected" {/section}>Category</option>
            <option value="status"    {section show=$sort_by3|compare('status')}selected="selected" {/section}>Status</option>
            <option value="type"      {section show=$sort_by3|compare('type')}selected="selected" {/section}>Type</option>
        </select>
    </div>
</div>

<div class="buttonblock">
<input type="submit" class="button" name="ShowBugsButton" value="Show" />
</div>

</div>



{/default}
