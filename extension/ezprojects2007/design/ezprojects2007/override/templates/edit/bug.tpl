{let current_user=fetch('user','current_user')}

<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-forummessage">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),'/'))|ezurl}>
    <!-- Left part start -->
    <div class="attribute-heading">
        {section show=$object.main_node_id|gt(0)}
            <h1>Update {$object.data_map.type.content|choose('','bug','suggestion','enhancement')} {$object.data_map.bug_number.content}</h1>
        {section-else}
            <h1>Report bug</h1>
        {/section}
    </div>

    {section show=$validation.processed}
        {section name=UnvalidatedAttributes show=$validation.attributes}

        <div class="warning">
        <h2>Input did not validate</h2>
        <ul>
        {section loop=$validation.attributes}
                <li>{$UnvalidatedAttributes:item.identifier}: {$UnvalidatedAttributes:item.description}</li>
        {/section}
        </ul>
        </div>

        {section-else}

        <div class="feedback">
        <h2>Input was stored successfully</h2>
        </div>

        {/section}
    {/section}

<input type="hidden" name="MainNodeID" value="{$main_node_id}" />

<label>Summary:</label>
{attribute_edit_gui attribute=$object.data_map.summary class='full'}

<label>eZ Publish Version:</label>
{attribute_edit_gui attribute=$object.data_map.version class='full'}

<label>PHP version:</label>
{attribute_edit_gui attribute=$object.data_map.php_version class='full'}

<label>Database:</label>
{attribute_edit_gui attribute=$object.data_map.database class='full'}

<label>Web server:</label>
{attribute_edit_gui attribute=$object.data_map.webserver class='full'}

<label>Description:</label>
{attribute_edit_gui attribute=$object.data_map.description class='full'}


<label>Image:</label>
{attribute_edit_gui attribute=$object.data_map.image class='full'}

<label>File:</label>
{attribute_edit_gui attribute=$object.data_map.bug_file class='full'}

    {section show=or($object.main_node_id|le(0),
                     $current_user.groups|contains( 12 ),
                     $current_user.groups|contains( 75541 ) )}

      <label>Type:</label>
          <input type="hidden" name="ContentObjectAttribute_data_integer_{$object.data_map.type.id}" value="{$object.data_map.type.data_int}" />
          <select name="ContentObjectAttribute_data_integer_{$object.data_map.type.id}">
              <option value="1" {$object.data_map.type.data_int|choose("","selected='selected'","","","","")}>Bug</option>
              <option value="3" {$object.data_map.type.data_int|choose("","","","selected='selected'","","")}>Enhancement</option>
              <option value="2" {$object.data_map.type.data_int|choose("","","selected='selected'","","","")}>Suggestion</option>
          </select>
    {/section}


<label>Category:</label>
          <select name="ContentObjectAttribute_data_integer_{$object.data_map.category.id}">
             <option value="1" {$object.data_map.category.data_int|choose("","selected='selected'","","","","","","","", "", "", "", "")}>Undefined</option>
             <option value="2" {$object.data_map.category.data_int|choose("","","selected='selected'","","","","","","", "", "", "", "")}>Online Editor</option>
             <option value="3" {$object.data_map.category.data_int|choose("","","","selected='selected'","","","","","", "", "", "", "")}>eZ Publish - misc</option>
             <option value="4" {$object.data_map.category.data_int|choose("","","","","selected='selected'","","","","", "", "", "", "")}>eZ Publish - packages</option>
             <option value="5" {$object.data_map.category.data_int|choose("","","","","","selected='selected'","","","", "", "", "", "")}>eZ Publish - administration interface</option>
             <option value="6" {$object.data_map.category.data_int|choose("","","","","","","selected='selected'","","", "", "", "", "")}>eZ Publish - install</option>
             <option value="7" {$object.data_map.category.data_int|choose("","","","","","","","selected='selected'","", "", "", "", "")}>eZ Publish - language</option>
             <option value="8" {$object.data_map.category.data_int|choose("","","","","","","","","selected='selected'", "", "", "", "")}>ez.no</option>
             <option value="9" {$object.data_map.category.data_int|choose("","","","","","","","","", "selected='selected'", "", "", "")}>Licensing</option>
             <option value="10" {$object.data_map.category.data_int|choose("","","","","","","","","", "", "selected='selected'", "", "")}>Community</option>
             <option value="11" {$object.data_map.category.data_int|choose("","","","","","","","","", "", "", "selected='selected'", "")}>eZ Components</option>
             <option value="12" {$object.data_map.category.data_int|choose("","","","","","","","","", "", "", "", "selected='selected'")}>Newsletter</option>
          </select>

    {section show=or( $current_user.groups|contains( 12 ),
                      $current_user.groups|contains( 75541 ))}

       <label>Assigned to:</label>
        {attribute_edit_gui attribute=$object.data_map.assigned_to class='full'}

       <label>Priority:</label>
          <select name="ContentObjectAttribute_data_integer_{$object.data_map.priority.id}">
             <option value="1" {$object.data_map.priority.data_int|choose("","selected='selected'","","","","")}>1</option>
             <option value="2" {$object.data_map.priority.data_int|choose("","","selected='selected'","","","")}>2</option>
             <option value="3" {$object.data_map.priority.data_int|choose("","","","selected='selected'","","")}>3</option>
             <option value="4" {$object.data_map.priority.data_int|choose("","","","","selected='selected'","")}>4</option>
             <option value="5" {$object.data_map.priority.data_int|choose("","","","","","selected='selected'")}>5</option>
          </select>

       <label>Status:</label>
          <select name="ContentObjectAttribute_data_integer_{$object.data_map.status.id}">
          <option value="1" {$object.data_map.status.data_int|choose("","selected='selected'","","","","","","","")}>New</option>
          <option value="2" {$object.data_map.status.data_int|choose("","","selected='selected'","","","","","","")}>Open</option>
          <option value="4" {$object.data_map.status.data_int|choose("","","","","selected='selected'","","","","")}>Started</option>
          <option value="5" {$object.data_map.status.data_int|choose("","","","","","selected='selected'","","","")}>Reopened</option>
          <option value="6" {$object.data_map.status.data_int|choose("","","","","","","selected='selected'","","")}>Resolved</option>
          <option value="7" {$object.data_map.status.data_int|choose("","","","","","","","selected='selected'","")}>Verified</option>
          <option value="8" {$object.data_map.status.data_int|choose("","","","","","","","","selected='selected'")}>Confirmed</option>
          <option value="3" {$object.data_map.status.data_int|choose("","","","selected='selected'","","","","","")}>Closed</option>
          </select>

       <label>Resolution:</label>
          <select name="ContentObjectAttribute_data_integer_{$object.data_map.resolution.id}">
          <option value="1" {$object.data_map.resolution.data_int|choose("","selected='selected'","","","","","","")}>None</option>
          <option value="2" {$object.data_map.resolution.data_int|choose("","","selected='selected'","","","","","")}>Fixed</option>
          <option value="3" {$object.data_map.resolution.data_int|choose("","","","selected='selected'","","","","")}>Invalid</option>
          <option value="4" {$object.data_map.resolution.data_int|choose("","","","","selected='selected'","","","")}>Will not fix</option>
          <option value="5" {$object.data_map.resolution.data_int|choose("","","","","","selected='selected'","","")}>Future addition</option>
          <option value="6" {$object.data_map.resolution.data_int|choose("","","","","","","selected='selected'","")}>Duplicate</option>
          <option value="7" {$object.data_map.resolution.data_int|choose("","","","","","","","selected='selected'")}>Works here</option>
          </select>

    {section show=$object.main_node_id|gt( 0 )}
        <label>Comments:</label>
        {attribute_edit_gui attribute=$object.data_map.comments class='full'}
    {/section}

    {* Will set the redirect URI to the next or previous item of the same type and status,
       if no such item exists it sets the main node as redirect. *}
    {section show=$object.main_node_id|gt(0)}
          <input type="hidden" name="RedirectURI" value="{$object.main_node.url_alias}" />
    {/section}

    {section-else}
        <input type="hidden" name="ContentObjectAttribute_data_text_{$object.data_map.comments.id}" value="" />
        {section show=array(5,6,7,3)|contains($object.data_map.status.data_int)}
            <label>Status:</label>
              <select name="ContentObjectAttribute_data_integer_{$object.data_map.status.id}">
              <option value="{$object.data_map.status.data_int}" {$object.data_map.status.data_int|choose("","selected='selected'","selected='selected'","selected='selected'","selected='selected'","","selected='selected'","","")}>No change ({$object.data_map.status.data_int|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')})</option>
              {section show=array(3,6,7)|contains($object.data_map.status.data_int)}
                  <option value="5" {$object.data_map.status.data_int|choose("","","","","","selected='selected'","","","")}>Reopen {$object.data_map.type.content|choose('','bug','suggestion','enhancement')}</option>
              {/section}
              {section show=array(5,6)|contains($object.data_map.status.data_int)}
                  <option value="7" {$object.data_map.status.data_int|choose("","","","","","","","selected='selected'","")}>{$object.data_map.type.content|choose('','Bug','Suggestion','Enhancement')} is verified</option>
              {/section}
              </select>


        <input type="hidden" name="ContentObjectAttribute_data_integer_{$object.data_map.resolution.id}" value="{$object.data_map.resolution.data_int}" />
        {section-else}

            {section show=$object.data_map.status.data_int|gt(0)}
                <input name="ContentObjectAttribute_data_integer_{$object.data_map.status.id}" value="{$object.data_map.status.data_int}" type="hidden" />
            {section-else}
                <input name="ContentObjectAttribute_data_integer_{$object.data_map.status.id}" value="1" type="hidden" />
            {/section}
            {section show=$object.data_map.resolution.data_int|gt(0)}
                <input name="ContentObjectAttribute_data_integer_{$object.data_map.resolution.id}" value="{$object.data_map.resolution.data_int}" type="hidden" />
            {section-else}
                <input name="ContentObjectAttribute_data_integer_{$object.data_map.resolution.id}" value="1" type="hidden" />
            {/section}
        {/section}

        {section show=$object.main_node_id|gt(0)}
            <input type="hidden" name="RedirectURI" value="{$object.main_node.url_alias}" />
        {/section}

    {/section}

    <div class="buttonblock">
        {section show=$object.main_node_id|gt(0)}
            <input class="button" type="submit" name="PublishButton" value="Update" />
        {section-else}
            <input class="button" type="submit" name="PublishButton" value="Post" />
        {/section}
        <input class="button" type="submit" name="DiscardButton" value="Discard" />
    </div>
    <!-- Left part end -->


</form>

</div>
</div>
</div>

{* Right side *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-forum-message">

<div class="attribute-heading">
    <h2 class="bullet">Bug howto</h2>
</div>

<p>Please follow these guidelines when writing a bugreport.</p>

<h3>Summary</h3>
<p>The summary is a *short* description that describes the nature of the bug.
For example: Problem with deleting child object permissions.</p>

<h3>Description</h3>
<p>Please be as verbose as possible, but leave out irrelevant information.
To provide us with a useful bugreport, please make sure to describe the following:
<br />

<ol>
<li> Describe what you were trying to do.</li>
<li> Describe what went wrong.</li>
<li> how you reproduced the problem.</li>
<li> Suggestions on how to fix it, but please add a *reason* why you think it
  should be fixed like in your suggestion.</li>
</ol>

<h3>Patches</h3>
<p>Patches are welcome too of course. If you make a patch, please use "diff -u3" to
do so.

Please note that a submitted patch/fix/code-snippet will automatically be copyrighted by
eZ Systems.</p>

</div>
</div>
</div>


{/let}
