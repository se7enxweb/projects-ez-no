{* approve collaboration template *}
{let message_limit=2
     message_offset=0
     content_version=fetch("content","version",hash("object_id",$collab_item.content.content_object_id,"version_id",$collab_item.content.content_object_version))
     current_participant=fetch("collaboration","participant",hash("item_id",$collab_item.id))
     participant_list=fetch("collaboration","participant_map",hash("item_id",$collab_item.id))
     message_list=fetch("collaboration","message_list",hash("item_id",$collab_item.id,"limit",$message_limit,"offset",$message_offset))}

<form method="post" action={"collaboration/action/"|ezurl}>

<div class="template-design area-main-normal">
<div class="template-module collaboration-view">
<div class="template-object">

<div class="attribute-heading">
    <h1>{"Approval"|i18n('design/standard/collaboration/approval')}</h1>
</div>

{if $content_version|null()|not()}
  {set-block variable=contentobject_link}
    {content_version_view_gui view=text_linked content_version=$content_version}
  {/set-block}
{/if}

{switch match=$collab_item.data_int3}
{case match=0}

{if $current_participant.participant_role|eq(4)}
<p>{"The %classname %linkedobjectname needs your approval before it can be published."|i18n('design/standard/collaboration/approval',,hash('%linkedobjectname',$contentobject_link,'%classname',$content_version.contentobject.class_name|downcase))}</p>
<p>{"Do you approve of the %classname being published?"|i18n('design/standard/collaboration/approval','',hash('%classname',$content_version.contentobject.class_name|downcase))}</p>
{else}
<p>{"The %classname %linkedobjectname awaits approval before it can be published."|i18n('design/standard/collaboration/approval',,hash('%linkedobjectname',$contentobject_link,'%classname',$content_version.contentobject.class_name|downcase))}</p>
<p>{"If you wish you may send a message to the person approving it?"|i18n('design/standard/collaboration/approval')}</p>
{/if}

{/case}
{case match=1}
  <p>{"The %classname %linkedobjectname was approved and will be published in a few minutes."|i18n('design/standard/collaboration/approval',,hash('%linkedobjectname',$contentobject_link,'%classname',$content_version.contentobject.class_name|downcase))}</p>
{/case}
{case in=array(2,3)}
  {if $current_participant.participant_role|eq(4)}
      <p>{"The %classname %linkedobjectname was not accepted but will be available as a draft for the author."|i18n('design/standard/collaboration/approval',,hash('%linkedobjectname',$contentobject_link,'%classname',$content_version.contentobject.class_name|downcase))}</p>
      <p>{"The author can re-edit the draft and publish it again, in which a new approval item is made."|i18n('design/standard/collaboration/approval')}</p>
  {else}
    <p>{"The %classname %linkedobjectname was not accepted but is available as a draft again."|i18n('design/standard/collaboration/approval',,hash('%linkedobjectname',$contentobject_link,'%classname',$content_version.contentobject.class_name|downcase))}</p>
    {if $content_version|null()|not()}
      <p>{"You may re-edit the draft and publish it, in which case an approval is required again."|i18n('design/standard/collaboration/approval')}</p>
      <p><a href={concat("content/edit/",$content_version.contentobject_id)|ezurl}>{"Edit the object"|i18n('design/standard/collaboration/approval')}</a></p>
    {/if}
  {/if}
{/case}
{case/}
{/switch}

<input type="hidden" name="CollaborationActionCustom" value="custom" />
<input type="hidden" name="CollaborationTypeIdentifier" value="ezapprove" />
<input type="hidden" name="CollaborationItemID" value="{$collab_item.id}" />

{if eq($collab_item.data_int3,0)}
<label>{"Comment"|i18n('design/standard/collaboration/approval')}</label><div class="break"></div>
<textarea name="Collaboration_ApproveComment" cols="80" rows="5"></textarea>

<div class="buttonblock">
<input type="submit" name="CollaborationAction_Comment" value="{'Add Comment'|i18n('design/standard/collaboration/approval')}" />

&nbsp;

{if $current_participant.participant_role|eq(4)}
<input type="submit" name="CollaborationAction_Accept" value="{'Approve'|i18n('design/standard/collaboration/approval')}" />
<input type="submit" name="CollaborationAction_Deny" value="{'Deny'|i18n('design/standard/collaboration/approval')}" />
{/if}

</div>
{/if}

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

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

<div class="attribute-heading">
     <h2 class="bullet">{"%classname info"|i18n( "design/standard/collaboration/approval",'',hash('%classname', $content_version.contentobject.class_name))}</h2>
</div>

{if $content_version|null()|not()}
  {content_version_view_gui view=plain content_version=$content_version}
{/if}

</div>
</div>
</div>

{/let}
