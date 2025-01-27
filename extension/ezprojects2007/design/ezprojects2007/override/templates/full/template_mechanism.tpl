<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-documentationpage">

{let toc_array=doc_sub_tree( $node )}
{* {include uri="design:parts/doc/doc_navigator.tpl" top_array=$toc_array}
<hr class="docsplit" /> *}

<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>


<h3>Summary</h3>
<div class="attribute-short">
    {attribute_view_gui attribute=$node.object.data_map.summary}
</div>

<h3>Usage</h3>
<pre>{$node.object.data_map.usage.content}</pre>
{let test=$node.object.data_map.usage.content|contains("<no parameters>")}
{section show=$test}
{section-else}

<h3>Parameters</h3>
{attribute_view_gui attribute=$node.object.data_map.parameters}
{/section}

{/let}

<h3>Returns</h3>
<p>{attribute_view_gui attribute=$node.object.data_map.returns}</p>

<h3>Description</h3>
{attribute_view_gui attribute=$node.object.data_map.description}

<h3>Examples</h3>
{attribute_view_gui attribute=$node.object.data_map.examples}

{*
    <hr class="docsplit" />
{include uri="design:parts/doc/doc_navigator.tpl" top_array=$toc_array} *}
{/let}

{include uri="design:parts/view_comments.tpl"}

</div>
</div>
</div>

{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-documentation-page">

<div class="attribute-heading">
    <h2 class="bullet">Contents</h2>
</div>

{include uri="design:parts/doc/doc_sidebar.tpl"}

</div>
</div>
</div>
