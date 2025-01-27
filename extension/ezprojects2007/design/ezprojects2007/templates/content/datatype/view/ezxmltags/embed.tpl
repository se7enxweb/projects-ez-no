{let object_align=''}
{section show=is_set( $object_parameters.align )}
    {switch match=$object_parameters.align}
        {case match='left'}
            {set object_align='left'}
        {/case}
        {case match='right'}
            {set object_align='right'}
        {/case}
        {case match='center'}
            {set object_align='center'}
        {/case}
        {case/}
    {/switch}
{/section}
{section show=and( $object_align|ne(""), $object.contentclass_id|eq( "5" ))}
    <div class="object-{$object_align}{section show=ne($classification|trim,'')} {$classification|wash}{/section}">
        {content_view_gui view=$view object_parameters=$object_parameters attribute_parameters=$object_parameters content_object=$object link_parameters=$link_parameters}
    </div>
{section-else}
    {content_view_gui view=$view object_parameters=$object_parameters attribute_parameters=$object_parameters content_object=$object link_parameters=$link_parameters}
{/section}

{/let}


{*
Set variable to true if the object should be rendered as a block
tag. If it should be rendered as inline use false.
{set-block scope=root variable=is_block}true{/set-block}
*}

