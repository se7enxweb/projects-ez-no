{let type=$view_parameters.type
     vertical=$view_parameters.vertical
     version=$view_parameters.version
     country=""
     vertical=$view_parameters.vertical}

{* If the country contains multiple words it will arrive
   as a string seperated with '+' instead of ' ' (whitespace) because of urlencoding *}
{let country_name_array=$view_parameters.country|explode( "+" )}
{section loop=$country_name_array}
    {set country=concat( $country, $:item )}
    {delimiter}{set country=concat( $country, ' ')}{/delimiter}
{/section}
{set country=$country|wash}
{/let}


{* Type *}
{section show=eq( $type, "ecommerce" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*0*" ) )}
{/section}

{section show=eq( $type, "educational" )}
    {set ref_filter=$ref_filter|append( array( "page_link/type", "like", '*1*' ) )}
{/section}

{section show=eq( $type, "paper" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*2*" ) )}
{/section}

{section show=eq( $type, "misc" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*3*" ) )}
{/section}

{section show=eq( $type, "company" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*4*" ) )}
{/section}

{section show=eq( $type, "organization" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*5*" ) )}
{/section}

{section show=eq( $type, "governmental" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*6*" ) )}
{/section}

{section show=eq( $type, "portal" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*6*" ) )}
{/section}

{section show=eq( $type, "intranet" )}
    {set ref_filter=$ref_filter|append( array("page_link/type", "like", "*7*" ) )}
{/section}

{* Version *}
{section show=eq( $version, "22" )}
    {set ref_filter=$ref_filter|append( array("page_link/version", "=", "0" ) )}
{/section}

{section show=eq( $version, "3x" )}
    {set ref_filter=$ref_filter|append( array("page_link/version", "=", "1" ) )}
{/section}


{* Country *}
{section show=ne( $view_parameters.country, "" )}
    {set ref_filter=$ref_filter|append( array("page_link/country", "=", $country ) )}
{/section}



{* Vertical *}
{section show=eq( $view_parameters.vertical, "sciedu" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*0*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "public" )}
    {set ref_filter=$ref_filter|append( array( "page_link/vertical", "like", '*1*' ) )}
{/section}

{section show=eq( $view_parameters.vertical, "nonprofit" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*2*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "ittelecom" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*3*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "financial" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*4*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "health" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*5*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "manufacturing" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*6*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "mpe" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*7*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "traveltransportation" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*8*" ) )}
{/section}

{section show=eq( $view_parameters.vertical, "services" )}
    {set ref_filter=$ref_filter|append( array("page_link/vertical", "like", "*9*" ) )}
{/section}


<form action={"/ezposttoview/action"|ezurl} method="post">

<div class="block float-break">

<div class="element">
    <label>Type:</label>
    <select name="type">
        <option value="" {section show=eq($type,"all")}selected="selected" {/section}>All</option>
        <option value="ecommerce"{section show=eq($type,"ecommerce")}selected="selected" {/section}>E-Commerce</option>
        <option value="educational" {section show=eq($type,"educational")}selected="selected" {/section}>Educational</option>
        <option value="paper" {section show=eq($type,"paper")}selected="selected" {/section}>Paper & Magazine</option>
        <option value="misc" {section show=eq($type,"misc")}selected="selected" {/section}>Miscellaneous</option>
        <option value="company" {section show=eq($type,"company")}selected="selected" {/section}>Company</option>
        <option value="organization" {section show=eq($type,"organization")}selected="selected" {/section}>Organization</option>
        <option value="governmental" {section show=eq($type,"governmental")}selected="selected" {/section}>Governmental</option>
        <option value="portal" {section show=eq($type,"portal")}selected="selected" {/section}>Portal</option>
        <option value="intranet" {section show=eq($type,"intranet")}selected="selected" {/section}>Intranet</option>
    </select>
</div>

<div class="element">
<label>Country:</label>
{include uri="design:parts/country_dropdown.tpl" select_name="country"
                                                 selected_name=$country
                                                 show_all=true()}
</div>

<div class="element">
    <label>Vertical:</label>
    <select name="vertical">
        <option value="" {section show=eq($vertical, "all" )}selected="selected" {/section}>All</option>
        <option value="sciedu" {section show=eq($vertical, "sciedu" )}selected="selected" {/section}>Science and Education</option>
        <option value="public" {section show=eq($vertical, "public" )}selected="selected" {/section}>Public Sector</option>
        <option value="nonprofit" {section show=eq($vertical, "nonprofit" )}selected="selected" {/section}>Non Profit</option>
        <option value="ittelecom" {section show=eq($vertical, "ittelecom" )}selected="selected" {/section}>IT/Telecom</option>
        <option value="financial" {section show=eq($vertical, "financial" )}selected="selected" {/section}>Financial Services</option>
        <option value="health" {section show=eq($vertical, "health" )}selected="selected" {/section}>Health care</option>
        <option value="manufacturing" {section show=eq($vertical, "manufacturing" )}selected="selected" {/section}>Manufacturing</option>
        <option value="mpe" {section show=eq($vertical, "mpe" )}selected="selected" {/section}>Media and publishing</option>
        <option value="traveltransportation" {section show=eq($vertical, "traveltransportation" )}selected="selected" {/section}>Travel and transportation</option>
        <option value="services" {section show=eq($vertical, "services" )}selected="selected" {/section}>Services</option>
    </select>
</div>

<div class="element">
    <input type="submit" class="button button-line" name="ShowBugsButton" value="Show" />
</div>

</div>

<input type="hidden" name="DestinationURL" value="/customers/references/filter" />

</form>

{section show=$hide_total|not}
    {let child_count=fetch_alias( reference_count, hash( attribute_filter, array( array( "page_link/approved", "=", true() ) ) ) )}
        <a href={"/customers/references/filter"|ezurl}>Current database contains {$child_count} references.</a>
    {/let}
{/section}

{/let}