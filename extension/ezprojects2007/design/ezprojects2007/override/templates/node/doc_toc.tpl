{* Node override for the bug list *}

<div class="template-design area-main-full">
<div class="template-module node-view-buglist">
<div class="template-object">

<div class="attribute-heading">
    <h1>Chapter overview {$chapter_start.name}</h1>
</div>

<p>
<a href={"/ez_publish/documentation"|ezurl}>Main documentation page</a>
{section show=is_set( $view_parameters.from )}
{let from=fetch( 'content', 'node', hash( 'node_id',            $view_parameters.from,
                                          'class_filter_type',  'include',
                                          'class_filter_array', array( '9', '32', '33' ) ) )}

{section show=$from.object.section_id|eq(4)}
{let backtrack=sub( $from.depth, 4 )}
{let location=sub( $from.depth, $backtrack )}
{let chapter=$from.path_array.$location}
 | <a href={$from.url_alias|ezurl}>Go to "{$from.name}"</a>
</p>

<hr  />

{let chapter_start=fetch( 'content', 'node', hash( 'node_id', $chapter) ) }


{include uri="design:parts/doc/toc_generator.tpl" top_node=$chapter_start}

{/let}
{/let}
{/let}
{/let}
{section-else}
{* End up here if the user tampers with form parameter in the URL. *}
{/section}
{/let}

{section-else}

<hr class="docsplit" />

<h1>Table of contents (all chapters)</h1>

{section loop=fetch( 'content', 'list', hash( 'parent_node_id',     488,
                                              'class_filter_type',  'include',
                                              'class_filter_array', array( '9' ),
                                              'sort_by',            array( 'priority', true() ) ) )}

    {include uri="design:parts/doc/toc_generator.tpl" top_node=$:item}

{/section}

{/section}
<hr  />

</div>
</div>
</div>