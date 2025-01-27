{*<div id="doc_toc">*}
{let backtrack=sub($node.depth,4)}
{let location=sub($node.depth,$backtrack)}
{let chapter=$node.path_array.$location}
{let top=fetch('content', 'node', hash('node_id', $chapter))}
<h3><a href={$top.url_alias|ezurl}>{$top.name|shorten(40)}</a></h3>
<p>
        {let docs=treemenu( $node_path, $node.node_id, array( 9, 32, 33 ), 3, 7 )}

        {section var=menu loop=$:docs}

            {section loop=$menu.level}&nbsp;&nbsp;&nbsp;{/section}

          {section show=eq($menu.id, $node.node_id)}
          <a href={$menu.url_alias|ezurl}><b>{$menu.text|shorten(40)}</b></a><br />
          {section-else}
          <a href={$menu.url_alias|ezurl}>{$menu.text|shorten(40)}</a><br />
          {/section}

	{/section}

        {/let}
</p>
{*</div>*}

{/let}
{/let}
{/let}
{/let}

<hr class="docsplit" />
<h3>Created</h3>
<p>
{$node.object.published|l10n(shortdate)}<br />
{$node.object.published|l10n(time)}<br />
by {$node.object.versions[0].creator.name|wash}
</p>
<h3>Last updated</h3>
<p>
{$node.object.modified|l10n(shortdate)}<br />
{$node.object.modified|l10n(time)}<br />
by {$node.object.current.creator.name|wash}
</p>
<h3>Authors</h3>
<p class="rendered">
{section name=Author loop=$node.object.author_array}
{$:item.contentobject.name}<br />
{/section}
</p>
{*{section show=$node.object.data_map.keywords.content.keyword_string}
<h3>Keywords</h3>
<p>
{$node.object.data_map.keywords.content.keyword_string}
</p>
{/section}

{let related=$node.object.data_map.keywords.content.related_objects}
{section show=$related}
<h3>Related pages</h3>
<p>
{section name=Related loop=$related}
<a href={$:item.url_alias|ezurl}>{$:item.name|shorten(24)}</a><br />
{/section}
</p>
{/section}
{/let}
*}
<br />
<hr class="docsplit" />
{*
    {switch match=$node.object.can_edit}
{case match=1}
<br />
<form method="post" action={"content/action"|ezurl}>
<input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
<input class="button" type="submit" name="EditButton" value="Edit this document" />
</form>
{section show=$node.depth|lt(7)}
<br />
<form method="post" action={"content/action"|ezurl}>
<input type="hidden" name="NodeID" value="{$node.node_id}" />
<input type="hidden" name="ClassID" value="9" />
<input class="button" type="submit" name="NewButton" value="New document" />
<input type="hidden" name="RedirectURIAfterPublish" value={$node.url_alias|ezurl} />
</form>
{/section}
<br />
<p>Please read the <a href=''>about</a> and the <a href=''>guidelines</a> sections before making changes to the documentation.</p>
<br />
{/case}
{case match=0}
<p>
You need to be logged in to edit this document and/or to set up notifications.
</p>
{/case}
{/switch}
<form method="post" action={"content/action"|ezurl}>
{switch match=$node.object.can_edit}
{case match=1}
<input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
<input type="hidden" name="ContentObjectID" value="{$node.contentobject_id.}" />
<input class="button" type="submit" name="ActionAddToNotification" value="Keep me updated" />
{/case}
{case match=0}
{/case}
{/switch}
</form>
<br />
<hr class="docsplit" />
*}
<p>This page is part of the eZ Publish documentation. The documentation is available under the <a href="http://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License.</a> All contributions will be released under the terms of this license.</p>
