<div id="searchbox">
<form action={"/content/advancedsearch/"|ezurl} method="get">

<div class="block">
<div class="element">
<input id="searchbutton" class="button" type="submit" value="{'Search'|i18n('design/standard/content/search')}" />
</div>

<div class="element searchstring">
    <label for="searchtext" class="hide">Search text:</label>
    <input id="searchtext" name="SearchText" type="text" size="12" />{*<br />*}
    {* <input type="hidden" name="isOnEzno" value="true" /> *}
{*
            <div class="section">
            <label for="searcharea" class="hide">Search area:</label>
            <select id="searcharea" name="SubTreeArray[]">
                <option value="2" selected="selected">{"All ez.no"|i18n( "ezno" )}</option>
                <option value="306">{"Bug reports"|i18n( "ezno/community" )}</option>
                <option value="21358">{"Contributions"|i18n( "ezno/community" )}</option>
                <option value="documentation">{"Documentation"|i18n( "ezno/documentation" )}</option>
                <option value="308">{"Forum"|i18n( "ezno/community" )}</option>
            </select>
            </div>
            *}
    </div>

</div>
</form>
</div>
