{* Full view for image gallery *}

{let size="small"
     modulo=4}

<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

{def $page_limit=12
     $children=fetch_alias( children, hash( parent_node_id, $node.node_id,
                                           offset, $view_parameters.offset,
                                           limit, $page_limit,
                                           sort_by, $node.sort_array ) )
     $children_count=fetch_alias( children_count, hash( parent_node_id, $node.node_id ) )}

{if $children|count}
    <div class="attribute-link">
        <p>
        <a href={$children[0].url_alias|ezurl}>{'View as slideshow'|i18n( 'design/ezwebin/full/gallery' )}</a>
        </p>
    </div>

   <div class="content-view-children">
       {def $filters = ezini( 'gallerythumbnail', 'Filters', 'image.ini' )}

        {foreach $filters as $filter}
           {if or($filter|contains( "geometry/scale" ), $filter|contains( "geometry/scaledownonly" ), $filter|contains( "geometry/crop" ) )}
              {def $image_style = $filter|explode("=").1}
              {set $image_style = concat("width:", $image_style|explode(";").0, "px ;", "height:", $image_style|explode(";").1, "px")}
              {break}
           {/if}
        {/foreach}

       {foreach $children as $child}
       <div class="content-view-galleryline">
            <div class="class-image">

            <div class="attribute-image"{if is_set($#image_style)} style="{$#image_style}"{/if}>
                <p>{attribute_view_gui attribute=$child.data_map.image image_class=gallerythumbnail href=$child.url_alias|ezurl}</p>
            </div>

            <div class="attribute-name"{if is_set($#image_style)} style="{$#image_style|explode(';').0}"{/if}>
                <p>{$child.name|shorten(14)|wash}</p>
            </div>

            </div>
        </div>
       {/foreach}

   </div>
{/if}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$children_count
         view_parameters=$view_parameters
         item_limit=$page_limit}

{undef $page_limit $children $children_count}

</div>
</div>
</div>
{* End main part *}


{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">Description</h2>
</div>

<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.image image_class="medium"}
</div>

{def $canCreateImage=fetch( 'content', 'access', hash( 'access', 'create',
                                                 'contentobject', $node,
                                                 'contentclass_id', 'image' ))}
<div class="block float-break">
{if $canCreateImage}
    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="image" />
        <input class="button button-type-admin" type="submit" name="NewButton" value="Add a new image" />
    </form>
    </div>
{/if}
</div>
{undef $canCreateImage}

</div>
</div>
</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node showTrackChanges=true()}

{* End Right Area *}

{/let}