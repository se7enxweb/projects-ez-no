<div class="content-view-embeddedmedia">
    <div class="class-image">

    <div class="attribute-image">
    {let href="" target="_self"}
        {section show=is_set( $object_parameters.href )}
            {set href=$object_parameters.href}
        {/section}
        {section show=and( is_set( $link_parameters.href ), $href|eq("") )}
           {set href=$link_parameters.href}
        {/section}
        {section show=$href|eq("")}
           {set href=$object.data_map.image.content[original].full_path|ezroot(no)}
           {set target="_blank"}
        {/section}
        {section show=is_set( $object_parameters.target )}
            {set target=$object_parameters.target}
        {/section}
        {section show=is_set( $object_parameters.nolink )}
            {set href=""}
            {set target=""}
        {/section}
        {attribute_view_gui attribute=$object.data_map.image image_class=$object_parameters.size href=$href target=$target}
    {/let}
    </div>
    {section show=$object.data_map.caption.has_content}
        <div class="attribute-caption" style="width: {$object.data_map.image.content[$object_parameters.size].width}px">
            {attribute_view_gui attribute=$object.data_map.caption}
        </div>
    {/section}
    </div>
</div>

