<div class="template-design area-main-normal">
<div class="template-module user-edit">
<div class="template-object">

    <div class="attribute-heading">
        <h1>{"My user profile"|i18n("design/standard/user")}</h1>
    </div>

    <div class="block float-break">
        <p>Sign up date: {$userAccount.contentobject.published|l10n(date)}</p>
        <p>Last changed on: {$userAccount.contentobject.modified|l10n(date)}</p>
    </div>

    <div class="block">
        <label>{"Name"|i18n("design/standard/user")}:</label>
        <p>{$userAccount.contentobject.name|wash}</p>
    </div>
    <div class="block">
        <label>{"Picture"|i18n("design/standard/user")}:</label>
        <div class="attribute-image">
            {attribute_view_gui attribute=$userAccount.contentobject.data_map.image}
        </div>
    </div>
    <div class="block">
        <label>{"Login"|i18n("design/standard/user")}:</label>
        <p>{$userAccount.login|wash}</p>
    </div>
    <div class="block">
        <label>{"E-Mail"|i18n("design/standard/user")}:</label>
        <p>{$userAccount.email|wash(email)}</p>
    </div>
    <div class="block">
        <label>{"Signature"|i18n("design/standard/user")}:</label>
        <p>{$userAccount.contentobject.data_map.signature.content|simpletags|autolink}</p>
    </div>

    <div class="block">
        <label>{"ez.no login"|i18n("design/standard/user")}:</label>
        <p>{$userAccount.contentobject.data_map.ezno_login.content|wash}</p>
    </div>

    <div class="block">
        <form action={"/content/action"|ezurl} method="post" name="Edit">
        <input class="button" type="submit" name="EditButton" value="{'Edit profile'|i18n('design/standard/user')}" />
        <input type="hidden" name="ContentObjectID" value="{$userID}" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
        </form>
    </div>

</div>
</div>
</div>
{* End main part *}


{* Right info *}
<div class="area-sidebar-normal">

<div class="template-design">
<div class="template-module edit-user">
<div class="template-object">
{*
<div class="attribute-heading">
    <h2 class="bullet">Community activity stats</h2>
</div>

{let stats=userstats( array( 14, 18, 20, 22, 43 ), true(), $userAccount.contentobject_id )
     forum_messages=$stats[14]
     contributions=$stats[18]
     bugs=$stats[20]
     comments=$stats[22]
     faqs=$stats[43]

     stats_total=userstats( array( 14, 18, 20, 22, 43 ), false(), $userAccount.contentobject_id )
     forum_messages_total=$stats_total[14]
     contributions_total=$stats_total[18]
     bugs_total=$stats_total[20]
     comments_total=$stats_total[22]
     faqs_total=$stats_total[43]}

    <label>This month:</label>
    <ul>
    {section show=$forum_messages}
        <li>Forum messages: {$forum_messages}</li>
    {/section}
    {section show=$bugs}
        <li>Bug reports: {$bugs}</li>
    {/section}
    {section show=$contributions}
        <li>Contributions: {$contributions}</li>
    {/section}
    {section show=$faqs}
        <li>FAQs: {$faqs}</li>
    {/section}
    {section show=$comments}
        <li>Comments: {$comments}</li>
    {/section}
    </ul>

    <label>Total:</label>
    <ul>
    {section show=$forum_messages_total}
        <li>Forum messages: {$forum_messages_total}</li>
    {/section}
    {section show=$bugs_total}
        <li>Bug reports: {$bugs_total}</li>
    {/section}
    {section show=$contributions_total}
        <li>Contributions: {$contributions_total}</li>
    {/section}
    {section show=$faqs_total}
        <li>FAQs: {$faqs_total}</li>
    {/section}
    {section show=$comments_total}
        <li>Comments: {$comments_total}</li>
    {/section}
    </ul>
    {/let}
    *}

    <ul class="linklist">
        <li><a href={"/notification/settings"|ezurl}>Your notifications settings</a></li>
        <li><a href={"/content/new"|ezurl}>New postings since your last visit</a></li>
        {*<li><a href={"/partner/view/summary/"|ezurl}>Partner activity</a> (<a href={"/partner/view/full"}>full view</a>) </li>*}
    </ul>


</div>
</div>
</div>

{*
{let supportAssignmentList=fetch( crm, support_assignment_list )
     networkAssignmentList=fetch( crm, network_assignment_list )}
{section show=or( $supportAssignmentList,
                  $networkAssignmentList )}
<div class="template-design">
<div class="template-module edit-user">
<div class="template-object">

<div class="attribute-heading">
    <h2 class="bullet">{'My services'|i18n( 'ezno/user' )}</h2>
</div>

<ul class="linklist">
    {section loop=$supportAssignmentList name=Customer}
        <li><a href={concat( 'crm/customerview/', $:item.id)|ezurl}>{'My support: %companyName'|i18n( 'ezno/user',,hash( '%companyName', $:item.company ) )}</a></li>
    {/section}
    {section loop=$networkAssignmentList name=Network}
        <li><a href={concat( 'crm/network/', $:item.customer_id, '/', $:item.id)|ezurl}>{'My network: %installationName'|i18n( 'ezno/user',,hash( '%installationName', $:item.name ) )}</a></li>
    {/section}
</ul>

</div>
</div>
</div>
{/section}
{/let}
*}

</div>
