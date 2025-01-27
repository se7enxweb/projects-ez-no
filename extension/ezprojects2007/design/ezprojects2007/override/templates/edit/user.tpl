<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-user">


<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),''))|ezurl}>
<div class="attribute-heading">
    <h1>{"Edit %1 - %2"|i18n("design/standard/content/edit",,array($class.name|wash,$object.name|wash))}</h1>
</div>

{* Validation *}
{include uri="design:content/edit_validation.tpl"}

<div class="block float-break">
    <div class="element">
        <label>First name:</label>
		{attribute_edit_gui attribute=$content_attributes_data_map.first_name}
    </div>
</div>

<div class="block float-break">
    <div class="element">
        <label>Last name:</label>
        {attribute_edit_gui attribute=$content_attributes_data_map.last_name}
    </div>
</div>

<div class="block float-break">
    <div class="element">
        <label>Signature:</label>
        {attribute_edit_gui attribute=$content_attributes_data_map.signature}
    </div>
</div>

<div class="block float-break">
    <label>Picture:</label>
    <div class="attribute-image">
        {attribute_view_gui attribute=$content_attributes_data_map.image}
        {section show=$content_attributes_data_map.image.has_content}
            <input class="button" type="submit" name="CustomActionButton[{$content_attributes_data_map.image.id}_delete_image]" value="Remove image" />
        {/section}
    </div>

    <div class="block">
        {section show=$content_attributes_data_map.image.has_content}
            <label>New picture:</label>
        {/section}
        <input class="box" name="ContentObjectAttribute_data_imagename_{$content_attributes_data_map.image.id}" type="file" />
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    </div>
</div>

{*
<div class="block float-break">
    {attribute_edit_gui attribute=$content_attributes_data_map.user_account}
</div>
*}


{let user_attribute_id=$content_attributes_data_map.user_account.id}
<div class="block float-break">
    <div class="element">
        <label>Username:</label>
        <input type="text" name="ContentObjectAttribute_data_user_login_{$user_attribute_id}_stored_login" size="16" value="{$content_attributes_data_map.user_account.content.login}" disabled="disabled" />
        <input type="hidden" name="ContentObjectAttribute_data_user_login_{$user_attribute_id}" value="{$content_attributes_data_map.user_account.content.login}" />
    </div>

    <div class="element">
        <label>E-mail:</label>
        <input type="text" name="ContentObjectAttribute_data_user_email_{$user_attribute_id}" size="25" value="{$content_attributes_data_map.user_account.content.email}" />
    </div>
</div>
<div class="block float-break">
    <div class="element">
        <label>Password:</label>
        <input type="password" name="ContentObjectAttribute_data_user_password_{$user_attribute_id}" size="16" value="_ezpassword" />
    </div>

    <div class="element">
        <label>Confirm password:</label>
        <input type="password" name="ContentObjectAttribute_data_user_password_confirm_{$user_attribute_id}" size="25" value="_ezpassword" />
    </div>
</div>

<div class="block float-break">
    <div class="element">
        <label>ez.no login:</label>
        {attribute_edit_gui attribute=$content_attributes_data_map.ezno_login}
    </div>
</div>

{/let}

<div class="buttonblock float-break">
     <input type="hidden" name="RedirectURIAfterPublish" value="{concat("/user/edit/",$object.id)}" />
     <input type="hidden" name="RedirectIfDiscarded" value="{concat("/user/edit/",$object.id)}" />

     <input class="defaultbutton" type="submit" name="PublishButton" value="OK" />
     <input class="button" type="submit" name="DiscardButton" value="Cancel" />
     <input type="hidden" name="DiscardConfirm" value="0" />
     <input type="hidden" name="MainNodeID" value="{$object.main_parent_node_id}" />
 </div>

</form>

</div>
</div>
</div>
