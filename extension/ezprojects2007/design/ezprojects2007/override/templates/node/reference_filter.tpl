{let ref_filter=array( array( "page_link/approved", "=", true() ) )
     sort_array=array( array( 'published', false() ) )
     page_limit=20}

<div class="template-design area-main-full">
<div class="template-module node-view-referencefilter">
<div class="template-object">

{* Header *}
<div class="attribute-heading">
    <h1>Browse eZ Publish references</h1>
</div>

{* Show refernce filter dropdowns *}
{include uri="design:parts/references/reference_filter_header.tpl" hide_total=true()}

{* Body *}
<div class="attribute-long">
     {attribute_view_gui attribute=$node.object.data_map.body}
</div>

{let child_count=fetch_alias( reference_count, hash( attribute_filter, $ref_filter ) )
     children=fetch_alias( references, hash( limit, $page_limit,
                                             offset, $view_parameters.offset,
                                             attribute_filter, $ref_filter,
                                             sort_by, $sort_array ) )}
{* Show children *}
{section show=$children}

    <div class="content-view-children">
    <div class="class-comment">
    <h2>Listing {$child_count} references</h2>
    <table class="list nohighlight" cellspacing="0">
    <tr valign="top">
        <th width="1%">
        Screenshot
        </th>
        <th>
        Country
        </th>
        <th>
        Description
        </th>
    </tr>
    {section loop=$children sequence=array( bglight, bgdark )}
        {node_view_gui view=line type="full" content_node=$:item sequence=$:sequence}
    {/section}
    </table>

   </div></div>
{section-else}
    <h2>No reference found matching your criteria</h2>
{/section}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$child_count
         view_parameters=$view_parameters
         item_limit=$page_limit}

{* End show children *}

{/let}

</div></div></div>
{* End main part *}