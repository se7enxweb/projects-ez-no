{* Edit template for submitting references (class: page_link) *}

<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-reference">

<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),''))|ezurl}>

<div class="attribute-heading">
    <h1>Submit your eZ Publish reference</h1>
</div>

{include uri="design:content/edit_validation.tpl"}

{def $user=fetch( user, current_user )}

<div class="block float-break">
    <label>{$object.data_map.name.contentclass_attribute.name} *</label>
    {attribute_edit_gui attribute=$object.data_map.name}
</div>

<div class="block float-break">
    <label>Website address (URL) *</label>
    {attribute_edit_gui attribute=$object.data_map.url}
</div>

<div class="block float-break">
    <label>{$object.data_map.description.contentclass_attribute.name} *</label>
    {attribute_edit_gui attribute=$object.data_map.description}
</div>

<div class="block float-break">
    <label>{$object.data_map.country.contentclass_attribute.name} *</label>
    {include uri="design:parts/country_dropdown.tpl" select_name=concat( "ContentObjectAttribute_ezstring_data_text_", $object.data_map.country.id )}
</div>

<div class="block float-break">
    <label>Your e-mail (enter if you want to join site of the month competition)</label>
    {section show=$user.is_logged_in}
        <input class="box" type="text" size="70" name="ContentObjectAttribute_ezstring_data_text_{$object.data_map.your_email_address.id}" value="{$user.email}"  /></p>
    {section-else}
        {attribute_edit_gui attribute=$object.data_map.email}
    {/section}
</div>

<div class="block float-break">
    <label>{$object.data_map.screenshot.contentclass_attribute.name} </label>
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
    <input class="box" name="ContentObjectAttribute_data_imagename_{$object.data_map.screenshot.id}" type="file" />
</div>

<div class="block float-break">
    <label>Site type *</label>
    {attribute_edit_gui attribute=$object.data_map.type}
</div>

<div class="block float-break">
    <label>Site version *</label>
    {attribute_edit_gui attribute=$object.data_map.version}
</div>

<div class="block float-break">
    <label>Site vertical *</label>
    {attribute_edit_gui attribute=$object.data_map.vertical}
</div>

<div class="buttonblock">
    <input type="hidden" name="MainNodeID" value="231" />
    <input type="hidden" name="RedirectURI" value="/content/view/full/84971" />
    <input type="hidden" name="DiscardConfirm" value="0" />
    <input class="button" type="submit" name="PublishButton" value="Submit" />
    <input class="button" type="submit" name="DiscardButton" value="Cancel" />
</div>

</form>
</div></div></div>

<div class="template-design area-sidebar-normal">
<div class="template-module">
<div class="template-object">

{if $user.contentobject.data_map.partner_page.content}
    {def $partner_page_url=$user.contentobject.data_map.partner_page.content.main_node.url_alias
         $partner_name=$user.contentobject.data_map.partner_page.content.main_node.name}
    <div class="attribute-heading">
         <h2 class="bullet">{$partner_name|wash}</h2>
    </div>
    <p>Once this reference is submitted and approved it will be listed on your <a href={$partner_page_url|ezurl}>partner page.</a></p>    
{else}
    <div class="attribute-heading">
         <h2 class="bullet">Are you a partner?</h2>
    </div>
    <p>Make sure you are logged in before submitting your references to get partner points and have them listed on your partner page!</p>
{/if}


</div>
</div>
</div>

