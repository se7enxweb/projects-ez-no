<form method="post" action={"/collaboration/action/"|ezurl}>

{let $message_limit=2
     $message_offset=0
     $approval_content=$collab_item.content
     $current_participant=fetch("collaboration","participant",hash("item_id",$collab_item.id))
     $participant_list=fetch("collaboration","participant_map",hash("item_id",$collab_item.id))
     $message_list=fetch("collaboration","message_list",hash("item_id",$collab_item.id,"limit",$message_limit,"offset",$message_offset))
     $group=fetch('content','object', hash('object_id', $approval_content.group_id))
     $author=fetch('content','object', hash('object_id', $approval_content.user_id))}

<div class="template-design area-main-normal">
<div class="template-module collaboration-view">
<div class="template-object">

<div class="attribute-heading">
    <h1>{"Membership approval"|i18n('extension/membership/collaboration')}</h1>
</div>

{switch match=$collab_item.content.approval_status}
{case match=0}

{if $collab_item.is_creator}
{'Your membership request is awaiting approval. If you wish you can add comments for the approver.'|i18n('extension/membership/collaboration')}
{else}
{'The membership request of %authorname for the "%groupname" group needs your approval.'|i18n('extensionnsion/membership/collaboration', '', hash( '%authorname', $author.name|wash, '%groupname', $group.name|wash ))}
{/if}

{/case}
{case match=1}
{if $collab_item.is_creator}
{'Your membership request has been approved.'|i18n('extension/membership/collaboration')}
{else}
{'You have approved the membership request of %authorname for the "%groupname" group.'|i18n('extensionnsion/membership/collaboration', '', hash( '%authorname', $author.name|wash, '%groupname', $group.name|wash ))}
{/if}
{/case}
{case}
{if $collab_item.is_creator}
{'Your membership request has been denied.'|i18n('extension/membership/collaboration')}
{else}
{'You have denied the membership request of %authorname for the "%groupname" group.'|i18n('extensionnsion/membership/collaboration', '', hash( '%authorname', $author.name|wash, '%groupname', $group.name|wash ))}
{/if}
{/case}
{/switch}

{if $approval_content.approval_status|eq(0)}
    <label>{"Comment"|i18n('extension/membership/collaboration')}:</label>
    <textarea class="box" name="Collaboration_ApproveComment" cols="40" rows="5"></textarea>
{/if}

<input type="hidden" name="CollaborationActionCustom" value="custom" />
<input type="hidden" name="CollaborationTypeIdentifier" value="ezapprovemembership" />

<input type="hidden" name="CollaborationItemID" value="{$collab_item.id}" />

<div class="block">
{if $approval_content.approval_status|eq(0)}

    <input class="button" type="submit" name="CollaborationAction_Comment" value="{'Add Comment'|i18n('extension/membership/collaboration')}" />

    {if $collab_item.is_creator|not}
    <input class="button" type="submit" name="CollaborationAction_Approve" value="{'Approve'|i18n('extension/membership/collaboration')}" />
    <input class="button" type="submit" name="CollaborationAction_Deny" value="{'Deny'|i18n('extension/membership/collaboration')}" />
    {else}
    <input class="button-disabled" type="submit" name="CollaborationAction_Approve" value="{'Approve'|i18n('extension/membership/collaboration')}" disabled="disabled" />
    <input class="button-disabled" type="submit" name="CollaborationAction_Deny" value="{'Deny'|i18n('extension/membership/collaboration')}" disabled="disabled" />
    {/if}
{else}
    <input class="button-disabled" type="submit" name="CollaborationAction_Comment" value="{'Add Comment'|i18n('extension/membership/collaboration')}" disabled="disabled" />

    <input class="button-disabled" type="submit" name="CollaborationAction_Approve" value="{'Approve'|i18n('extension/membership/collaboration')}" disabled="disabled" />
    <input class="button-disabled" type="submit" name="CollaborationAction_Deny" value="{'Deny'|i18n('extension/membership/collaboration')}" disabled="disabled" />
{/if}
</div>

{if $message_list}

  <h1 id="messages">{"Messages"|i18n('design/standard/collaboration/approval')}</h1>
  <table width="100%" cellspacing="0" cellpadding="4" border="0">
  {foreach $message_list as $message_link sequence array('bglight','bgdark') as $sequence}

      {collaboration_simple_message_view view=element sequence=$sequence is_read=$current_participant.last_read|gt($message_link.modified) item_link=$message_link collaboration_message=$message_link.simple_message}

  {/foreach}
  </table>

{/if}

</div>
</div>
</div>

</form>

{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
     <h2 class="bullet">{"User info"|i18n( "extension/membership/collaboration" )}</h2>
</div>

<div class="mainobject-window" title="{$author.name|wash}">
    {content_view_gui view=text_linked content_object=$author}
</div>

<p class="date">{'Registered at'|i18n( 'design/admin/node/view/full' )}: {$author.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>

</div>
</div>
</div>

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
     <h2 class="bullet">{"Group info"|i18n( "extension/membership/collaboration" )}</h2>
</div>

{foreach $group.main_node.path|append($group.main_node) as $step offset 1}
{delimiter} / {/delimiter}
<a href={$step.url_alias|ezurl}>{$step.name}</a>
{/foreach}

<p class="date">{'Created at'|i18n( 'design/admin/node/view/full' )}: {$group.published|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>

</div>
</div>
</div>

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
     <h2 class="bullet">{"Participants"|i18n( "design/standard/collaboration/approval" )}</h2>
</div>

<div class="object">
   {foreach $participant_list as $participantType sequence array(bglight,bgdark) as $typeSequence}
   <label>{$participantType.name|wash}</label>
   <table cellspacing="0" cellpadding="0" border="0">
   {foreach $participantType.items as $participant_link sequence array(bglight,bgdark) as $sequence}
   <tr>
     <td>
     {content_view_gui view=text_linked content_object=$participant_link.participant.contentobject}
     </td>
   </tr>
   {/foreach}
   </table>
   {delimiter}<br/>{/delimiter}
   {/foreach}
</div>

</div>
</div>
</div>

{/let}

</form>
