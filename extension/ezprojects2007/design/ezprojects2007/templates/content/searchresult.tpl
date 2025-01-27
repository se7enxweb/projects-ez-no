{let use_url_translation=ezini('URLTranslator','Translation')|eq('enabled')}

{section show=$search_result}
    <table class="list" cellspacing="0">
    <tr>
        <th width="40%">{"Name"|i18n("ezno/search")}</th>
        <th width="20%">{"Published"|i18n("design/standard/content/search")}</th>
        <th width="20%">{"Author"|i18n("ezno/search")}</th>
        <th width="20%">{"Type"|i18n("ezno/search")}</th>
    </tr>
    {section name=SearchResult loop=$search_result show=$search_result sequence=array( bglight, bgdark )}
        {node_view_gui view=search sequence=$:sequence use_url_translation=$use_url_translation content_node=$:item}
    {/section}

    </table>
{/section}

{/let}
