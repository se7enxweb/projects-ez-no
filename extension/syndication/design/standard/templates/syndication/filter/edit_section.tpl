{* DO NOT EDIT THIS FILE! Use an override template instead. *}
<div class="maincontentheader">
<h2>{"Edit section filter"|i18n("design/standard/syndication/edit")}</h2>
</div>

{"Select allowed section"|i18n("design/standard/syndication/edit")}<br />
<select name="SectionID">
    {section loop=$section_array}
        <option value="{$:item.id}">{$:item.name|wash}</option>
{/section}
</select>


