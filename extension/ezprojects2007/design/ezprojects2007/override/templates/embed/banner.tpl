{let size="original"
     alt=$object.data_map.name.content
     title=""}
{section show=is_set($object_parameters.size)}
    {set size=$object_parameters.size}
{/section}

{section show=is_set( $object.data_map.alt.content )}
    {set alt=$object.data_map.alt.content}
{/section}

{section show=is_set( $object.data_map.title.content )}
    {set title=concat( 'title="', $object.data_map.title.content, '"' )}
{/section}


<div class="class-banner">
    {section show=eq( $object.data_map.image_map.content, true() ) }
        <img usemap="#banner_map" src={$object.data_map.banner.content[$size].full_path|ezroot} alt="{$object.data_map.name.content}" {$title} border="0" />
        {$object.data_map.image_map.content}
    {section-else}
        {section show=$object.data_map.link.content}
            <a href={$object.data_map.link.content|ezurl(double)}>
            <img src={$object.data_map.banner.content[$size].full_path|ezroot} alt="{$object.data_map.name.content}" {$title} border="0" /></a>
        {section-else}
            <img src={$object.data_map.banner.content[$size].full_path|ezroot} alt="{$object.data_map.name.content}" {$title} border="0" />
        {/section}
    {/section}
</div>


{/let}