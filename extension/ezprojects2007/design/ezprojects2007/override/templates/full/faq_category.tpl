{* Full view for faq category
   This template is kind of obsolete. FAQ will be part of the new documentation.
*}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-faqcategory">

    {let child_list=fetch( 'content', 'list', hash( parent_node_id, $node.node_id,
                                                    limit, 20,
                                                    offset, $view_parameters.offset,
                                                    sort_by, array( array( modified_subnode, false() ) ) ) )
         child_count=fetch( 'content', 'list_count', hash( parent_node_id, $node.node_id ) )}

<div class="attribute-heading">
<h1>{$node.name|wash}</h1>
</div>

<div class="content-view-children">
<div class="class-faq">

<ul>
    {section name=child loop=$child_list}
        <li><a href={$child:item.url_alias|ezurl}>{$child:item.object.name|wash}</a></li>
    {/section}
</ul>

</div>
</div>

{*
<form method="post" action="/content/action">

<input type="hidden" name="NodeID" value="{$node.node_id}" />
<input type="hidden" name="ClassID" value="43" />

{section show=$node.object.can_create}
    <input class="button" type="submit" name="NewButton" value="New Question" />
    <input type="hidden" name="RedirectURIAfterPublish" value={$node.url_alias|ezurl} />
    <input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
    <input type="hidden" name="ContentObjectID" value="{$node.contentobject_id.}" />

{section-else}
    <p>You need to be logged in to get access to the FAQs. You can do so <a href={"/user/login/"|ezurl}>here</a></p>
{/section}

</form>
*}

<p><a href={$node.parent.url_alias|ezurl}>All FAQ categories</a></p>

</div>
</div>
</div>



{include uri="design:faq/faq_sidebar.tpl" category_node_id=$node.parent.node_id}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$child_count
         view_parameters=$view_parameters
         item_limit=20}

