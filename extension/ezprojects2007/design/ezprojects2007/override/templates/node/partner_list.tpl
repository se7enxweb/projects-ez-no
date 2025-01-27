{* Node override for partner list *}
{*{let partner_filter=array( array( 'partner/has_paid', '=', true() ) )*}
  {let partner_filter=array()
     sort_array=array( array( 'attribute', false(), 'partner/points' ),
                       array( 'attribute', false(), 'partner/partner_program' ),
                       array( 'attribute', false(), 'partner/level' ),
                       array( 'name', true() ) )
     url=$node.url_alias
     partner=""
     level=""
     profile=""
     vertical=""
     country=""}

{section show=is_set( $view_parameters.partner )}
    {set partner=$view_parameters.partner|wash}
{/section}

{section show=is_set( $view_parameters.level )}
    {set level=$view_parameters.level|wash}
{/section}

{section show=is_set( $view_parameters.profile )}
    {set profile=$view_parameters.profile|wash}
{/section}

{* If the country contains multiple words it will arrive
   as a string seperated with '+' instead of ' ' (whitespace) because of urlencoding *}
{section show=is_set( $view_parameters.country )}
    {let country_name_array=$view_parameters.country|explode( "+" )}
    {section loop=$country_name_array}
        {set country=concat( $country, $:item )}
        {delimiter}{set country=concat( $country, ' ')}{/delimiter}
    {/section}
    {/let}
    {set country=$country|wash}
{/section}

{section show=is_set( $view_parameters.vertical )}
    {set vertical=$view_parameters.vertical|wash}
{/section}

<div class="template-design area-main-full">
<div class="template-module node-view-partnerlist">
<div class="template-object">

{* Partner *}
{section show=eq( $partner, "reference" )}
    {set partner_filter=$partner_filter|append( array( "partner/partner_program", "=", "1" ) )}
{section-else}
    {set partner_filter=$partner_filter|append( array( "partner/partner_program", "=", "0" ) )}
    {set partner_filter=$partner_filter|append( array( "partner/payment_date", ">", "0" ) )}
{/section}

{* Level *}
{section show=eq( $level, "platinum" )}
    {set partner_filter=$partner_filter|append( array( "partner/level", "=", "3" ) )}
{/section}

{section show=eq( $level, "gold" )}
    {set partner_filter=$partner_filter|append( array( "partner/level", "=", "2" ) )}
{/section}

{section show=eq( $level, "silver" )}
    {set partner_filter=$partner_filter|append( array( "partner/level", "=", "1" ) )}
{/section}

{section show=eq( $level, "bronze" )}
    {set partner_filter=$partner_filter|append( array( "partner/level", "=", "0" ) )}
{/section}

{* Profile *}
{section show=eq( $profile, "it" )}
    {set partner_filter=$partner_filter|append( array( "partner/profile", "=", "0" ) )}
{/section}

{section show=eq( $profile, "distributors" )}
    {set partner_filter=$partner_filter|append( array( "partner/profile", "=", '1' ) )}
{/section}

{section show=eq( $profile, "hosting" )}
    {set partner_filter=$partner_filter|append( array("partner/profile", "=", "2" ) )}
{/section}

{section show=eq( $profile, "creative" )}
    {set partner_filter=$partner_filter|append( array("partner/profile", "=", "3" ) )}
{/section}

{section show=eq( $profile, "technology" )}
    {set partner_filter=$partner_filter|append( array("partner/profile", "=", "4" ) )}
{/section}


{* Country *}
{section show=ne( $country, "" )}
    {set partner_filter=$partner_filter|append( array("partner/country", "=", $country ) )}
{/section}

{* Vertical *}
{section show=eq( $vertical, "sciedu" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*0*" ) )}
{/section}

{section show=eq( $vertical, "public" )}
    {set partner_filter=$partner_filter|append( array( "partner/vertical", "like", '*1*' ) )}
{/section}

{section show=eq( $vertical, "nonprofit" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*2*" ) )}
{/section}

{section show=eq( $vertical, "ittelecom" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*3*" ) )}
{/section}

{section show=eq( $vertical, "financial" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*4*" ) )}
{/section}

{section show=eq( $vertical, "health" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*5*" ) )}
{/section}

{section show=eq( $vertical, "manufacturing" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*6*" ) )}
{/section}

{section show=eq( $vertical, "mpe" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*7*" ) )}
{/section}

{section show=eq( $vertical, "traveltransportation" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*8*" ) )}
{/section}

{section show=eq( $vertical, "services" )}
    {set partner_filter=$partner_filter|append( array("partner/vertical", "like", "*9*" ) )}
{/section}


{section show=$node.object.data_map.hide_title.content|not}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash(xhtml)}</h1>
</div>
{/section}

<div class="attribute-intro">
    {attribute_view_gui attribute=$node.data_map.body}
</div>

{section show=$partner|ne("reference")}
<form action={"/ezposttoview/action"|ezurl} method="post">

<div class="block">
    <div class="element">
        <label>{"Level:"|i18n('ezno')}</label>
        <select name="level">
            <option value="" {section show=eq($level,"all")}selected="selected" {/section}>{"All"|i18n('ezno')}</option>
            <option value="platinum" {section show=eq($level,"platinum")}selected="selected" {/section}>{"Platinum"|i18n('ezno')}</option>
            <option value="gold" {section show=eq($level,"gold")}selected="selected" {/section}>{"Gold"|i18n('ezno')}</option>
            <option value="silver" {section show=eq($level,"silver")}selected="selected" {/section}>{"Silver"|i18n('ezno')}</option>
            <option value="bronze" {section show=eq($level,"bronze")}selected="selected" {/section}>{"Bronze"|i18n('ezno')}</option>
        </select>
    </div>
    <div class="element">
        <label>{"Profile:"|i18n('ezno')}</label>
        <select name="profile">
                <option value="" {section show=eq($profile,"all")}selected="selected" {/section}>{"All"|i18n('ezno')}</option>
                <option value="it" {section show=eq($profile,"it")}selected="selected" {/section}>{"IT"|i18n('ezno')}</option>
                <option value="creative" {section show=eq($profile,"creative")}selected="selected" {/section}>{"Creative"|i18n('ezno')}</option>
                <option value="distributors" {section show=eq($profile,"distributors")}selected="selected" {/section}>{"Distributors"|i18n('ezno')}</option>
                <option value="hosting" {section show=eq($profile,"hosting")}selected="selected" {/section}>{"Hosting and Infrastructure"|i18n('ezno')}</option>
                {* not yet <option value="technology" {section show=eq($profile,"technology")}selected="selected" {/section}>{"Technology"|i18n('ezno')}</option> *}
        </select>
    </div>
    <div class="element">
        <label>{"Country:"|i18n('ezno')}</label>
        {include uri="design:parts/country_dropdown.tpl" select_name="country"
                                                         selected_name=$country
                                                         show_all=true()}
    </div>
    <div class="element">
        <label>{"Vertical:"|i18n('ezno')}</label>
        <select name="vertical">
            <option value="" {section show=eq($vertical, "all" )}selected="selected" {/section}>{"All"|i18n('ezno')}</option>
            <option value="sciedu" {section show=eq($vertical, "sciedu" )}selected="selected" {/section}>{"Science and Education"|i18n('ezno')}</option>
            <option value="public" {section show=eq($vertical, "public" )}selected="selected" {/section}>{"Public Sector"|i18n('ezno')}</option>
            <option value="nonprofit" {section show=eq($vertical, "nonprofit" )}selected="selected" {/section}>{"Non Profit"|i18n('ezno')}</option>
            <option value="ittelecom" {section show=eq($vertical, "ittelecom" )}selected="selected" {/section}>{"IT/Telecom"|i18n('ezno')}</option>
            <option value="financial" {section show=eq($vertical, "financial" )}selected="selected" {/section}>{"Financial Services"|i18n('ezno')}</option>
            <option value="health" {section show=eq($vertical, "health" )}selected="selected" {/section}>{"Health care"|i18n('ezno')}</option>
            <option value="manufacturing" {section show=eq($vertical, "manufacturing" )}selected="selected" {/section}>{"Manufacturing"|i18n('ezno')}</option>
            <option value="mpe" {section show=eq($vertical, "mpe" )}selected="selected" {/section}>{"Media, publishing and entertainment"|i18n('ezno')}</option>
            <option value="traveltransportation" {section show=eq($vertical, "traveltransportation" )}selected="selected" {/section}>{"Travel and transportation"|i18n('ezno')}</option>
            <option value="services" {section show=eq($vertical, "services" )}selected="selected" {/section}>{"Services"|i18n('ezno')}</option>
        </select>
    </div>
<div class="element">
    <input type="submit" class="button button-line" name="ShowBugsButton" value="{"Show"|i18n('ezno')}" />
</div>

</div>

<div class="float-break"></div>
<input type="hidden" name="DestinationURL" value="/partner/worldwide_ez_publish_partners" />

</form>

{/section}

{let page_limit=20
     child_count=fetch( 'content', 'tree_count', hash( parent_node_id, 62064,
                                                       ignore_visibility, true(),
                                                       attribute_filter, $partner_filter ) )
     children=fetch( 'content', 'list', hash( parent_node_id, 62064,
                                              ignore_visibility, true(),
                                              limit, $page_limit,
                                              offset, $view_parameters.offset,
                                              attribute_filter, $partner_filter,
                                              sort_by, $sort_array ) )}
{section show=$child_count|gt(0)}
<h2>{"Listing %partner_count partners"|i18n( 'ezno', 'Partner count', hash( '%partner_count', $child_count ) )}</h2>
{/section}

{* List children start *}
{section show=$children}
    <div class="content-view-children">
    <div class="class-comment">

    <table class="list nohighlight" cellspacing="0">
    <tr valign="top">
        {section show=$partner|ne("reference")}
            <th width="1%">{"Company"|i18n('ezno')}</th>
            <th>{"Country"|i18n('ezno')}</th>
            <th>{"Description"|i18n('ezno')}</th>
        {section-else}
            <th width="20%">{"Country"|i18n('ezno')}</th>
            <th>{"Partner"|i18n('ezno')}</th>
        {/section}
    </tr>

    {section loop=$children sequence=array( bglight, bgdark )}
         {node_view_gui view='line' content_node=$item sequence=$:sequence}
    {/section}

    </table>

    {include name=navigator
             uri='design:navigator/google.tpl'
             page_uri=$url
             item_count=$child_count
             view_parameters=$view_parameters
             item_limit=$page_limit}
    </div>
    </div>
{section-else}
    <h2>{"No partners found matching your criteria"|i18n('ezno')}</h2>
{/section}
{* List children end *}


{/let}


<br />

<div class="attribute-link">
    {section show=eq( $partner, "reference" )}
        <a href={$node.url_alias|ezurl}>Click here to view business partners</a>
    {section-else}
        <a href={concat( $node.url_alias, '/(partner)/reference')|ezurl}>Click here to view reference partners</a>
    {/section}
</div>

</div>
</div>
</div>
{* End main part *}

{/let}
