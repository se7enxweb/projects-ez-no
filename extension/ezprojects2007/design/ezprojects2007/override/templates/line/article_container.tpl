{* Line view for class article container (multipage)*}

<div class="content-view-line">
<div class="class-article">

<div class="block float-break">

{* Header *}
<div class="attribute-heading">
    <h2><a href={$node.url_alias|ezurl}>{$node.name|wash}</a></h2>
</div>

{* Publish date *}
<div class="attribute-byline float-break">
	<p class="author">{$node.object.data_map.author.content.name}</p>
    <p class="date">{$node.object.data_map.publication_date.content.timestamp|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p><div class="break"></div>
</div>

{* Author image *}
<div class="attribute-image">
    {attribute_view_gui attribute=$node.object.data_map.author.content.data_map.author_photo image_class="small"}
</div>

{* Intro *}
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.intro}
</div>

</div>

</div>
</div>
