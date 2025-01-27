{* Notification settings template *}
<div class="template-design area-main-full">
<div class="template-module notification-settings">
<div class="template-object">

<form method="post" action={"/notification/settings/"|ezurl}>

<div class="attribute-heading">
    <h1>{"Notification settings"|i18n('design/standard/notification')}</h1>
</div>

{let handlers=fetch('notification','handler_list')}
    <div class="block float-break">
    {section name=Handlers loop=$handlers}
        {*Handler: {$Handlers:item.name}*}
        {include handler=$Handlers:item uri=concat( "design:notification/handler/",$Handlers:item.id_string,"/settings/edit.tpl")}
        {delimiter}</div><div class="block float-break">{/delimiter}
    {/section}
    </div>
{/let}

<div class="buttonblock">
    <input class="button" type="submit" name="Store" value="{'Store'|i18n('design/standard/notification')}" />
    <input type="hidden" name="RedirectURL" value="{concat( "/user/edit/", $user.contentobject_id)}" />
</div>

</form>

</div>
</div>
</div>
