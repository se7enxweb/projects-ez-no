{* Node override template for contact form *}

<div class="template-design area-main-normal">
<div class="template-module node-view-contact">
<div class="template-object class-contactform">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

<form name="fullview" method="post" action={"/content/action"|ezurl}>

{include uri="design:content/collectedinfo_validation.tpl"}

{* Contact eZ *}
<div class="block">
    <label>{$node.object.data_map.contact_ez.content.name|wash|i18n( 'ezno/contactform' )}:</label>
    <select name="ContentObjectAttribute_data_option_value_{$node.object.data_map.contact_ez.id}">
    {section name=OptionList loop=$node.object.data_map.contact_ez.content.option_list}
        <option value="{$OptionList:item.id}">{$OptionList:item.value}</option>
        {if and( is_set( $view_parameters.page_not_found), $OptionList:item.value|eq( "Report a broken link" ) )}
            <option selected="selected" value="{$OptionList:item.id}">{$OptionList:item.value}</option>
        {/if}
    {/section}
    </select>
</div>

{* Name *}
<div class="block">
    {def $name=$node.object.data_map.name.content|wash(xhtml)}
    {if is_set( $view_parameters.page_not_found )}
        {set $name="I want to be anonymous"}
    {/if}

    <label>{$node.object.data_map.name.contentclass_attribute.name|wash|i18n( 'ezno/contactform' )}: <span class="required">*</span></label>
    <input class="box" type="text" size="25" name="ContentObjectAttribute_ezstring_data_text_{$node.object.data_map.name.id}" value="{$name}" />
</div>

{* Email address *}
<div class="block">
    {def $email=$node.object.data_map.email.content|wash(xhtml)}
    {if is_set( $view_parameters.page_not_found )}
        {set $email="anonymous@ez.no"}
    {/if}
    
    <label>{$node.object.data_map.email.contentclass_attribute.name|wash|i18n( 'ezno/contactform' )}: <span class="required">*</span></label>
    <input class="box" type="text" size="25" name="ContentObjectAttribute_ezstring_data_text_{$node.object.data_map.email.id}" value="{$email}" />
</div>

{* Subject *}
<div class="block">
    {def $subject=""}
    {if is_set( $view_parameters.page_not_found )}
        {set $subject="Page not found"}
    {/if}
    <label>{$node.object.data_map.subject.contentclass_attribute.name|wash|i18n( 'ezno/contactform' )}: <span class="required">*</span></label>
    <input class="box" type="text" size="25" name="ContentObjectAttribute_ezstring_data_text_{$node.object.data_map.subject.id}" value="{$subject}" />
</div>

{* Message *}
<div class="block">
    {def $message=$node.object.data_map.message.content|wash}
    {if is_set( $view_parameters.page_not_found )}
        {set $message=concat("I stumbled upon a page that did not exists: http://ez.no/", $view_parameters.page_not_found|wash)}
    {/if}
    <label>{$node.object.data_map.message.contentclass_attribute.name|wash|i18n( 'ezno/contactform' )}: <span class="required">*</span></label>
    <textarea class="box" name="ContentObjectAttribute_data_text_{$node.object.data_map.message.id}" cols="60" rows="{$node.object.data_map.message.contentclass_attribute.data_int1}">{$message}</textarea>
</div>

{let content_action_list=$node.object.content_action_list}
{section name=ContentAction loop=$content_action_list show=$content_action_list}
    <div class="block">
        <input class="button" type="submit" name="{$ContentAction:item.action}" value="{$ContentAction:item.name|wash}" />
     </div>
{/section}
{/let}

<input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
<input type="hidden" name="ContentObjectID" value="{$node.object.id}" />

</form>

</div>
</div>
</div>

{* Right info *}
<div class="area-sidebar-normal">
    {attribute_view_gui attribute=$node.data_map.rightinfo}
</div>