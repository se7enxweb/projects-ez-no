<p>
{section show=$toc_array.previous}
<a href={$toc_array.previous.url_alias|ezurl}>Previous</a>
{section-else}
Previous
{/section} | <a href={$toc_array.top.url_alias|ezurl}>Top</a> | 
<a href={concat('ez_publish/documentation/toc/(from)/',$node.node_id)|ezurl}>Overview</a> |
{section show=$toc_array.next}
 <a href={$toc_array.next.url_alias|ezurl}>Next</a>
{section-else}
 Next
{/section}
</p>
