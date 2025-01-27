{* Notification settings template *}
<div class="template-design area-main-normal">
<div class="template-module notification-addtonotification">
<div class="template-object">

{let node=fetch( content, node, hash( node_id, $node_id) )}
<div class="attribute-heading">
    <h1>{'Add to my notifications'|i18n( 'design/standard/notification/addingresult')}</h1>
</div>

<p>
{section show=$already_exists}
    {"Notification for node <%node_name> already exists."
    |i18n( 'design/standard/notification/addingresult',,
           hash( '%node_name', $node.name ) )|wash}
{section-else}
    {"Notification for node <%node_name> was added successfully."
    |i18n( 'design/standard/notification/addingresult',,
           hash( '%node_name', $node.name ) )|wash}
{/section}
</p>
{/let}

<div class="buttonblock">
    <form method="post" action={$redirect_url|ezurl}>
        <input class="button" type="submit" name="OK" value="{'OK'|i18n('design/standard/notification/addingresult')}" />
    </form>
</div>

</div>
</div>
</div>