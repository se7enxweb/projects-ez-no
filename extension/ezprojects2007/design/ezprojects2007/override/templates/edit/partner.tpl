<div class="template-design area-main-normal">
<div class="template-module content-edit">
<div class="template-object class-partner">


<form enctype="multipart/form-data" method="post" action={concat("/content/edit/",$object.id,"/",$edit_version,"/",$edit_language|not|choose(concat($edit_language,"/"),''))|ezurl}>

    <div class="attribute-heading">
        <h1>Apply for partnership</h1>
    </div>

   {include uri="design:content/edit_validation.tpl"}
   <p>Fields marked * are required and must be filled out.</p>

    <div class="block float-break">
        <label>{$object.data_map.partner_program.contentclass_attribute.name} *</label>
        {default attribute_base=ContentObjectAttribute}
        {let attribute=$object.data_map.partner_program
             selected_id_array=$$object.data_map.partner_program.content}

        <select name="{$attribute_base}_ezselect_selected_array_{$attribute.id}[]">
        {section name=Option loop=$attribute.class_content.options}
            <option value="{$Option:item.id}">{$Option:item.name|wash(xhtml)}</option>
       {/section}</select>

       {/let}
       {/default}
    </div>

    <div class="block float-break">
        <div class="element">
        <label>{$object.data_map.vertical.contentclass_attribute.name} *</label>
            {attribute_edit_gui attribute=$object.data_map.vertical}
        </div>

        <div class="element">
            <label>{$object.data_map.profile.contentclass_attribute.name} *</label>
            {attribute_edit_gui attribute=$object.data_map.profile}
        </div>
    </div>

    <div class="block float-break">
        <label>{$object.data_map.vertical_description.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.vertical_description}
        {* <p class="box"><textarea rows="5" cols="60" name="ContentObjectAttribute_ezstring_data_text_{$object.data_map.vertical_description.id}"></textarea></p> *}
    </div>

    <div class="block float-break">
           <label>{$object.data_map.profile_description.contentclass_attribute.name} *</label>
           {attribute_edit_gui attribute=$object.data_map.profile_description}
           {* <p class="box"><textarea rows="4" cols="60" name="ContentObjectAttribute_ezstring_data_text_{$object.data_map.profile_description.id}"></textarea></p> *}
    </div>


    {let user=fetch( user, current_user )}

    <div class="block float-break">
        <label>{$object.data_map.company_name.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.company_name html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.contact_persons.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.contact_persons html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.company_address.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.company_address html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.country.contentclass_attribute.name} *</label>
        {include uri="design:parts/country_dropdown.tpl" select_name=concat( "ContentObjectAttribute_ezstring_data_text_", $object.data_map.country.id ) selected_name=$object.data_map.country.content}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.vat_number_org_number.contentclass_attribute.name} *</label>
        <p>(for North American applicants please insert NA)</p>
        {attribute_edit_gui attribute=$object.data_map.vat_number_org_number html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.your_email_address.contentclass_attribute.name} *</label>
        {section show=$user.is_logged_in}
            <input class="box" type="text" size="70" name="ContentObjectAttribute_ezstring_data_text_{$object.data_map.your_email_address.id}" value="{$user.email}" />
        {section-else}
            {attribute_edit_gui attribute=$object.data_map.your_email_address html_class="full"}
        {/section}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.website_address.contentclass_attribute.name} *</label>
        <p>Remember to add 'http://' to the address. Example: http://ez.no</p>
        {attribute_edit_gui attribute=$object.data_map.website_address html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.company_logo.contentclass_attribute.name} *</label>
{*        <p class="box">{attribute_edit_gui attribute=$object.data_map.company_logo}</p> *}
        <div class="block float-break">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            <p>Select company logo</p>
            <input class="box" name="ContentObjectAttribute_data_imagename_{$object.data_map.company_logo.id}" type="file" />
        </div>
        </p>

    </div>


    {*<div class="block float-break">
        <label>{$object.data_map.current_login_at_ezno_for_user_rights.contentclass_attribute.name} *</label>
        <p>Seperate multiple logins with , (comma). Example: mylogin, mylogin2, mylogin3</p>
        {section show=$user.is_logged_in}
            <input class="box" type="text" size="70" name="ContentObjectAttribute_ezstring_data_text_{$object.data_map.current_login_at_ezno_for_user_rights.id}" value="{$user.login}"  />
        {section-else}
            {attribute_edit_gui attribute=$object.data_map.current_login_at_ezno_for_user_rights html_class="full"}
        {/section}

    </div>*}

    <div class="block float-break">
        <label>{$object.data_map.current_login_at_ezno_for_user_rights.contentclass_attribute.name} *</label>
        <p>Seperate multiple logins with , (comma). Example: mylogin, mylogin2, mylogin3</p>
        {section show=$user.is_logged_in}
            <input class="box" type="text" size="70" name="ContentObjectAttribute_user_login_data_text_{$object.data_map.partner_user_login.id}" value="{$object.data_map.partner_user_login.content|explode(',')|append($user.login)|unique()|implode(',')}" />
        {section-else}
            {attribute_edit_gui attribute=$object.data_map.partner_user_login html_class="full"}
        {/section}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.email_address_if_more_than_one_contact_person_or_e.contentclass_attribute.name}</label>
        {attribute_edit_gui attribute=$object.data_map.email_address_if_more_than_one_contact_person_or_e html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.phone_number.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.phone_number html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.fax.contentclass_attribute.name}</label>
        {attribute_edit_gui attribute=$object.data_map.fax html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.company_presentation_a_short_presentation_of_your.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.company_presentation_a_short_presentation_of_your html_class="full"}
    </div>

    <div class="block float-break">
        <label>{$object.data_map.ez_publish_experience_what_is_your_ez_publish_expe.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.ez_publish_experience_what_is_your_ez_publish_expe html_class="full"}
    </div>

    {*<div class="block float-break">
        <label>{$object.data_map.partner_user_login.contentclass_attribute.name} *</label>
        {attribute_edit_gui attribute=$object.data_map.partner_user_login html_class="full"}
    </div>*}
    {*<div class="block float-break">
        <label>Logins *</label>
        <input class="box" type="text" size="70" name="ContentObjectAttribute_user_login_data_text_{$object.data_map.partner_user_login.id}" value="{$user.login}" />
    </div>*}

    {/let}


    <div class="buttonblock">
        {*<input type="hidden" name="RedirectURI" value="/content/view/full/21487" />*}
        <input type="hidden" name="RedirectURIAfterPublish" value="{concat('/partner/autoapprove/',$object.id)}" />
        <input type="hidden" name="MainNodeID" value="62064" />
        <input type="hidden" name="DiscardConfirm" value="0" />

        <input class="button" type="submit" name="PublishButton" value="Apply" />
        <input class="button" type="submit" name="DiscardButton" value="Cancel" />
    </div>

</form>

</div>
</div>
</div>



{* Main part end *}

<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-partner">

<div class="attribute-heading">
    <h2 class="bullet">Need help?</h2>
</div>

<p>If you need help filling out this form or got other questions about
the partner program, contact us at <a href="mailto:partner@ez.no">partner<span class="spamfilter">nospam@ez.no</span>@ez.no</a>.</p>

</div>
</div>
</div>
