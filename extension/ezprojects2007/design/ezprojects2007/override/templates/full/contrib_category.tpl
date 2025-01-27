{* Full view for contribution category *}
{let sort='modified'
     page_limit=20}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-contribcategory">

<div class="attribute-heading">
    <h1>{$node.name|wash()} <span class="itemcount">({$node.children_count})</span></h1>
</div>

<div class="block float-break">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

{* List children part *}
<div class="content-view-children">

{switch match=$view_parameters.sort}
{case match='modified'}
    {set sort=array( array( 'modified', false() ) )}
{/case}
{case match='status'}
    {set sort=array( array( 'attribute', true(), 'project/status' ),
                     array( 'name', true() ) )}
{/case}
{case match='name'}
    {set sort=array( array( 'name', true() ) )}
{/case}
{case}
    {set sort=array( array( 'modified', false() ) )}
{/case}
{/switch}


{let children=fetch_alias(contribs, hash( parent_node_id, $node.node_id,
                                          limit, $page_limit,
                            			  offset, $view_parameters.offset,
							              sort_by, $sort ) )}
{section sequence=array( 'light', 'dark' ) loop=$children}
    {node_view_gui view=line content_node=$:item sequence=$:sequence type="advanced"}
{/section}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$node.children_count
         view_parameters=$view_parameters
         item_limit=$page_limit}

{/let}

</div>
{* End children part *}

</div>
</div>
</div>

{* End main part *}

<div class="area-sidebar-normal">

<div class="template-design">
<div class="template-module content-view-full">
<div class="template-object class-contribcategory">

<div class="attribute-heading">
    <h2 class="bullet">Sorting</h2>
</div>

<p>{section show=or( eq( $view_parameters.sort, 'modified'), eq( $view_parameters.sort, '') )}
    last updated |
{section-else}
    <a href={concat( $node.url_alias, '/(sort)/modified')|ezurl}>last updated</a> |
{/section}

{section show=eq( $view_parameters.sort, 'status') }
    status |
{section-else}
    <a href={concat( $node.url_alias, '/(sort)/status')|ezurl}>status</a> |
{/section}

{section show=eq( $view_parameters.sort, 'name') }
    name
{section-else}
    <a href={concat( $node.url_alias, '/(sort)/name')|ezurl}>name</a>
{/section}
</p>



</div>
</div>
</div>

<div class="template-design">
<div class="template-module content-view-full">
<div class="template-object class-contribcategory">

<div class="attribute-heading">
    <h2 class="bullet">Upload</h2>
</div>

<form method="post" action={"/content/action"|ezurl}>

{switch match=$node.object.can_create}
{case match=1}
    <input class="button" type="submit" name="NewButton" value="Upload contribution" />
    <input type="hidden" name="RedirectURIAfterPublish" value="{$node.url_alias}" />
    <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
{/case}
{case match=0}
    <p>You need to be logged in to upload contributions. You can do so <a href={"/user/login/"|ezurl}>here</a></p>
{/case}
{/switch}
<input type="hidden" name="NodeID" value="{$node.node_id}" />
<input type="hidden" name="ClassID" value="18" />

</form>

</div>
</div>
</div>


</div>

{/let}