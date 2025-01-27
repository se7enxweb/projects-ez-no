{* Full view template for class external infopage *}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-infopage">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash(xhtml)}</h1>
</div>

{* Body *}
<div class="attribute-long">
    {attribute_view_gui attribute=$node.data_map.body}
</div>

{* Children *}
<div class="content-view-children">

    {let page_limit=20
         child_count=fetch( content, list_count, hash( parent_node_id, $node.node_id,
                                              attribute_filter, array( array( 'page_link/approved', '=', true() ) ) ) )
         children=fetch( content, list, hash( parent_node_id, $node.node_id,
                                              offset, $view_parameters.offset,
                                              sort_by, array( published, false() ),
                                              attribute_filter, array( array( 'page_link/approved', '=', true() ) ),
                                              limit, $page_limit ) )}
    {section show=$children}
        <h1>References</h1>

        {section loop=$children}
        <ul class="linklist">
            <li>{node_view_gui view=listitem content_node=$:item}</li>
        </ul>
        {/section}

        {include name=navigator
                 uri='design:navigator/google.tpl'
                 page_uri=$node.url_alias
                 item_count=$child_count
                 view_parameters=$view_parameters
                 item_limit=$page_limit}
    {/section}

    {/let}

</div>

</div>
</div>
</div>


{* --- --- --- --- --- --- --- --- *}


{* Right info *}
{section show=$node.data_map.hide_rightinfo.content|not()}

    <div class="template-design area-sidebar-normal">
    <div class="template-module content-view-sidebar">
    <div class="template-object class-infopage">

    {* Can edit article? *}
    {section show=$node.object.can_edit}
        <div class="object-right">
            <form method="post" action={"/content/action"|ezurl}>
                <input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
                <input type="image" src={"edit.gif"|ezimage} name="EditButton" />
                <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
                <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
            </form>
        </div>
    {/section}

    {* Partner image/logo *}
{*
    <div class="attribute-image">
        {attribute_view_gui attribute=$node.data_map.partner_image image_class=medium'}
    </div>
*}
    {* List partner articles *}
    {let page_limit=10
         articles=fetch_alias( articles, hash( parent_node_id, $node.node_id,
                                               limit, $page_limit ) )}
    {section show=$articles}
        <div class="attribute-heading">
            <h2 class="bullet">Latest news</h2>
        </div>
        <ul class="linklist">
            {section loop=$articles}
                <li>{node_view_gui view=listitem content_node=$:item}</li>
            {/section}
        </ul>
    {/section}

    {/let}

    {* Show create new article button *}
    {section show=$node.object.can_edit}
    <div class="object-right">
    <div class="editbutton">
    <form method="post" action={"/content/action"|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassID" value="2" />
        <input class="button" type="submit" name="NewButton" value="New article" />
        <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        <input type="hidden" name="RedirectURIAfterPublish" value="{$node.url_alias}" />
    </form>
    </div>
    </div>
    {/section}


    </div>
    </div>
    </div>

{/section}
