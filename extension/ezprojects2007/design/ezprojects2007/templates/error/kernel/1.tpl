{switch match=$parameters.AccessList.FunctionRequired.MainNodeID}

{* Knowledge Centre? *}
{case match=61819}
    {set embed_content=false()}
    {include uri="design:parts/error/knowledge_center.tpl"}
{/case}

{case}
<div class="template-design area-main-full">
<div class="template-module error-1">
<div class="template-object">

<div class="warning">
<h2>{"Access denied"|i18n("design/standard/error/kernel")}</h2>
<p>{"You don't have permission to access this area."|i18n("design/standard/error/kernel")}</p>
<p>{"Possible reasons for this are:"|i18n("design/standard/error/kernel")}</p>
<ul>
    {section show=ne($current_user.contentobject_id,$anonymous_user_id)}
    <li>{"Your current user does not have the proper privileges to access this page."|i18n("design/standard/error/kernel")}</li>
    {section-else}
    <li>{"You are currently not logged in to the site, to get proper access create a new user or login with an existing user."|i18n("design/standard/error/kernel")}</li>
    {/section}
    <li>{"You misspelled some parts of your URL, try changing it."|i18n("design/standard/error/kernel")}</li>
</ul>
{section show=is_set($module_required)}
<p>{"Permission required"|i18n("design/standard/error/kernel")}</p>
<ul>
<li>{"Module : "|i18n("design/standard/error/kernel")}{$module_required} </li>
<li>{"Function : "|i18n("design/standard/error/kernel")}{$function_required}</li>
</ul>
{/section}
</div>


</div>
</div>
</div>


{/case}
{/switch}


{section show=eq($current_user.contentobject_id,$anonymous_user_id)}
    {section show=$embed_content}
        {$embed_content}
    {/section}
{/section}


