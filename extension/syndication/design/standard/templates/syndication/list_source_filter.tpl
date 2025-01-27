{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{let uri=concat("syndication/list_source_filter/", $feed_source.id, "/", $feed_source.version)}
<form action={$uri|ezurl} method="post" name="Syndication">

<div class="context-block">
{* DESIGN: Header START *}<div class="box-header"><div class="box-tc"><div class="box-ml"><div class="box-mr"><div class="box-tl"><div class="box-tr">
<h2 class="context-title">{"Edit Syndication Filters - %name"|i18n("design/standard/syndication/edit", "", hash( "%name", $feed_source.feed.name|wash ) )}</h2>

{* DESIGN: Mainline *}<div class="header-mainline"></div>

{* DESIGN: Header END *}</div></div></div></div></div></div>

{* DESIGN: Content START *}<div class="box-ml"><div class="box-mr"><div class="box-content">

<div class="context-attributes">

{include uri="design:syndication/add_feed_source/add_feed_source_steps.tpl}

    <div class="block">
    <label>{"Feed Source Filter"|i18n("design/standard/syndication/edit")}:</label><div class="labelbreak"></div>
    {"Feed Source filters are used to filter objects available on the feed.
      If no filters are added, all objects from the selected source will be available on the feed.
      If multiple filters are selected, only objects who match all criterias will be available on the feed.
     "|i18n("design/standard/syndication/edit")|nl2br}
    </div>

    <div class="block">
    <label>{"Source Filters"|i18n("design/standard/syndication/edit")}:</label><div class="labelbreak"></div>
    <table class="list" width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <th>{"Type"|i18n("design/standard/syndication/edit")}</th>
            <th>{"Limitation"|i18n("design/standard/syndication/edit")}</th>
            <th class="tight">{"Edit"|i18n("design/standard/syndication/edit")}</th>
            <th class="tight">{"Remove"|i18n("design/standard/syndication/edit")}</th>
        </tr>

        {section name=Filter loop=$feed_source.filter_list sequence=array(bglight,bgdark)}
        <tr class="{$Filter:sequence}">
                <td>{$Filter:item.filter.type|wash}</td>
                <td>{$Filter:item.filter.limitation_text|wash}</td>
                <td><div class="listbutton"><a href={concat("syndication/edit_source_filter/",$Filter:item.filter.id, "/",$Filter:item.version)|ezurl}><img class="button" src={"edit.png"|ezimage} width="16" height="16" alt="Edit" /></a></div></td>
                <td width="1"><input type="checkbox" name="RemoveFilterIDArray[]" value="{$Filter:item.id}"></td>
        </tr>
        {/section}

        <tr>
            <td colspan="3">
            <select name="FilterType">
            {section loop=$filter_array}
                <option value="{$:item.type|wash}">{$:item.name|wash}</option>
            {/section}
            </select>
            {include uri="design:gui/button.tpl" id_name="AddFilter" value="New Filter"|i18n("design/standard/syndication/edit")}
            </td>
            <td align="right">
            <input type="image" name="RemoveFilter" value="{'Remove'|i18n('design/standard/syndication/edit')}" src={"trash.png"|ezimage} />
            </td>
        </tr>
    </table>
    </div>
{* DESIGN: Content END *}</div></div></div>


    {* Buttons. *}
    <div class="controlbar">
{* DESIGN: Control bar START *}<div class="box-bc"><div class="box-ml"><div class="box-mr"><div class="box-tc"><div class="box-bl"><div class="box-br">
    <div class="block">
    {include uri="design:gui/button.tpl" id_name="Finnish" value="Finnish"|i18n("design/standard/syndication/edit")}
    </div>
{* DESIGN: Control bar END *}</div></div></div></div></div></div>
    </div>

</form>
{/let}