{* Image - Full view *}


<div class="template-design area-main-full">
<div class="template-module content-view-full">
<div class="template-object class-imagegallery">

{let sort_order=$node.parent.sort_array[0][1]
     sort_column=$node.parent.sort_array[0][0]
     sort_column_value=cond( $sort_column|eq( 'published' ), $node.object.published,
                             $sort_column|eq( 'modified' ), $node.object.modified,
                             $sort_column|eq( 'name' ), $node.object.name,
                             $sort_column|eq( 'priority' ), $node.priority,
                             $sort_column|eq( 'modified_subnode' ), $node.modified_subnode
                             false() )
     previous_image=fetch( content, list, hash( parent_node_id, $node.parent_node_id,
                                                class_filter_type, include,
                                                class_filter_array, array( 'image' ),
                                                limit, 1,
                                                attribute_filter, array( and, array( $sort_column, $sort_order|choose( '>', '<' ), $sort_column_value ) ),
                                                sort_by, array( $sort_column, $sort_order|not ) ) )
     next_image=fetch( content, list, hash( parent_node_id, $node.parent_node_id,
                                            class_filter_type, include,
                                            class_filter_array, array( 'image' ),
                                            limit, 1,
                                            attribute_filter, array( and, array( $sort_column, $sort_order|choose( '<', '>' ), $sort_column_value ) ),
                                            sort_by, array( $sort_column, $sort_order ) ) ) }
{*
                                            {$sort_column}, {$sort_order}, {$sort_order|choose( '>', '<' )}, {$sort_column_value}<br />
                                            {$previous_image|count}, {$next_image|count}
*}
     <div class="attribute-heading">
        <h1>{$node.name}</h1>
    </div>

        {section show=is_unset( $versionview_mode )}
            <p class="box">
            {section show=$previous_image}
                     <span class="content-navigator-arrow">&laquo;</span>&nbsp;<a href={$previous_image[0].url_alias|ezurl} title="{$previous_image[0].name|wash}">{'Previous image'|i18n( 'design/base' )}</a>
            {section-else}
                    <span class="content-navigator-arrow-disabled">&laquo;</span>&nbsp;{'Previous image'|i18n( 'design/base' )}
            {/section}

            {section show=$previous_image}
                |
            {section-else}
                |
            {/section}

            {let forum=$node.parent}
                <a href={$forum.url_alias|ezurl}>{$forum.name|wash}</a>
            {/let}

            {section show=$next_image}
                |
            {section-else}
                |
            {/section}

            {section show=$next_image}
                    <a href={$next_image[0].url_alias|ezurl} title="{$next_image[0].name|wash}">{'Next image'|i18n( 'design/base' )}</a>&nbsp;<span class="content-navigator-arrow">&raquo;</span>
            {section-else}
                    {'Next image'|i18n( 'design/base' )}&nbsp;<span class="content-navigator-arrow-disabled">&raquo;</span>
            {/section}
            </p>
        {/section}

       {let size="original"}
       {switch match=$node.parent.object.data_map.image_size.content.0}
       {case match=0}
           {set size="original"}
       {/case}
       {case match=1}
           {set size="large"}
       {/case}
       {case match=2}
           {set size="medium"}
       {/case}
       {case match=3}
           {set size="small"}
       {/case}
       {case}
           {set size="original"}
       {/case}
       {/switch}

       <p>{attribute_view_gui attribute=$node.object.data_map.image image_class=$size}</p>

       {/let}

        {attribute_view_gui attribute=$node.object.data_map.caption}
{/let}

{default $current_user=fetch('user','current_user')}

{if and( $current_user.is_logged_in, or( $node.object.can_edit, $node.object.can_remove ) )}

<form method="post" action={"/content/action"|ezurl}>
<input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
<input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
<input type="hidden" name="ContentLanguageCode" value="eng-GB" />
<input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />

<div class="block">
    {* Edit *}
    {if $node.object.can_edit}
    <div class="element">
        <input class="button button-type-admin" type="submit" name="EditButton" value="Edit" />
    </div>
    {/if}

    {* Remove *}
    {if $node.object.can_remove}
    <div class="element">
        <input type="hidden" name="DeleteIDArray[]" value="{$node.node_id}" />
        <input class="button button-type-admin" type="submit" name="RemoveButton" value="Remove" />
    </div>
    {/if}
</div>

</form>

{/if}

{/default}

</div>
</div>
</div>