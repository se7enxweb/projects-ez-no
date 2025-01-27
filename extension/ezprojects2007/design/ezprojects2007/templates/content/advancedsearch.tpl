{* Advanced search template *}

{let search=false()}
{section show=$use_template_search}
    {set page_limit=10}
    {switch match=$search_page_limit}
    {case match=1}
        {set page_limit=5}
    {/case}
    {case match=2}
        {set page_limit=10}
    {/case}
    {case match=3}
        {set page_limit=20}
    {/case}
    {case match=4}
        {set page_limit=30}
    {/case}
    {case match=5}
        {set page_limit=50}
    {/case}
    {case/}
    {/switch}
    {set search=fetch(content,search,
                      hash(text,$search_text,
                           section_id,$search_section_id,
                           subtree_array,$search_sub_tree,
                           class_id,$search_contentclass_id,
                           class_attribute_id,$search_contentclass_attribute_id,
                           offset,$view_parameters.offset,
                           publish_date,$search_date,
                           sort_by, array( array( 'class_name', true() ),
                                           array( 'published', false() ) ),
                           limit,$page_limit))}
    {set search_result=$search['SearchResult']}
    {set search_count=$search['SearchCount']}
    {set stop_word_array=$search['StopWordArray']}
    {set search_data=$search}
{/section}

<form action={"/content/advancedsearch"|ezurl} method="get">

<div class="float-break">
<div class="template-design area-main-normal">
<div class="template-module content-advancedsearch">
<div class="template-object">

<div class="attribute-heading">
    <h1>{"Search"|i18n("design/standard/content/search")}</h1>
</div>

<div class="block">
    <label>{"Search for all the words"|i18n("ezno/search")}:</label>
    <input class="box" type="text" size="40" name="SearchText" value="{$full_search_text|wash}" />
</div>


<div class="block">
<div class="element">

<label>{"Project"|i18n( "ezno/search" )}:</label>
<select name="SubTreeArray[]">
    <option value="">{"any project"|i18n( "ezno" )}</option>
    {foreach fetch('content','tree',hash('parent_node_id',2,'class_filter_type','include','class_filter_array',array('project'), 'sort_by', array( 'name', true() ))) as $project}
    <option {section show=$search_sub_tree.0|eq($project.node_id)} selected="selected" {/section} value="{$project.node_id}">{$project.name}</option>
    {/foreach}
</select>

</div>
<div class="element">
    <label>{"Published"|i18n("design/standard/content/search")}:</label>
    <select name="SearchDate">
        <option value="-1" {section show=eq($search_date,-1)}selected="selected"{/section}>{"Any time"|i18n("design/standard/content/search")}</option>
        <option value="1" {section show=eq($search_date,1)}selected="selected"{/section}>{"Last day"|i18n("design/standard/content/search")}</option>
        <option value="2" {section show=eq($search_date,2)}selected="selected"{/section}>{"Last week"|i18n("design/standard/content/search")}</option>
        <option value="3" {section show=eq($search_date,3)}selected="selected"{/section}>{"Last month"|i18n("design/standard/content/search")}</option>
        <option value="4" {section show=eq($search_date,4)}selected="selected"{/section}>{"Last three months"|i18n("design/standard/content/search")}</option>
        <option value="5" {section show=eq($search_date,5)}selected="selected"{/section}>{"Last year"|i18n("design/standard/content/search")}</option>
    </select>
</div>

{section show=$use_template_search}
    <div class="element">
        <label>{"Display per page"|i18n("design/standard/content/search")}:</label>
        <select name="SearchPageLimit">
            <option value="1" {section show=eq($search_page_limit,1)}selected="selected"{/section}>{"5 items"|i18n("design/standard/content/search")}</option>
            <option value="2" {section show=or(array(1,2,3,4,5)|contains($search_page_limit)|not,eq($search_page_limit,2))}selected="selected"{/section}>{"10 items"|i18n("design/standard/content/search")}</option>
            <option value="3" {section show=eq($search_page_limit,3)}selected="selected"{/section}>{"20 items"|i18n("design/standard/content/search")}</option>
            <option value="4" {section show=eq($search_page_limit,4)}selected="selected"{/section}>{"30 items"|i18n("design/standard/content/search")}</option>
            <option value="5" {section show=eq($search_page_limit,5)}selected="selected"{/section}>{"50 items"|i18n("design/standard/content/search")}</option>
        </select>
    </div>
{/section}

</div>

<div class="block float-break">
     <input class="button" type="submit" name="SearchButton" value="{'Search'|i18n('design/standard/content/search')}" />
</div>

</div>
</div>
</div>

<div class="template-design area-sidebar-normal">
<div class="template-module content-advancedsearch">
<div class="template-object">

<div class="attribute-heading">
<h2 class="bullet">{"Search tips"|i18n( "ezno/search" )}</h2>
</div>


</div>
</div>
</div>

</div>

<div class="template-design area-main-full-padding">

{section show=$search_text}
    {section show=$search_count}
            <h2>{'Search for "%1" returned %2 matches'|i18n("design/standard/content/search",,array($search_text|wash,$search_count))}</h2>

        {include name=Result
                 uri='design:content/searchresult.tpl'
                 search_result=$search_result}
    {section-else}
            <h2>{'No results were found when searching for "%1"'|i18n("design/standard/content/search",,array($search_text|wash))}</h2>
    {/section}
{/section}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri='/content/advancedsearch'

page_uri_suffix=concat('?SearchText=',$search_text|urlencode,'&PhraseSearchText=',$phrase_search_text|urlencode,'&SearchContentClassID=',$search_contentclass_id,'&SearchContentClassAttributeID=',$search_contentclass_attribute_id,'&SearchSectionID=',$search_section_id,$search_timestamp|gt(0)|choose('',concat('&SearchTimestamp=',$search_timestamp)),$search_sub_tree|gt(0)|choose( '', concat( '&', 'SubTreeArray[]'|urlencode, '=', $search_sub_tree|implode( concat( '&', 'SubTreeArray[]'|urlencode, '=' ) ) ) ),'&SearchDate=',$search_date,'&SearchPageLimit=',$search_page_limit)
         item_count=$search_count
         view_parameters=$view_parameters
         item_limit=$page_limit}

</div>

</form>

{/let}
