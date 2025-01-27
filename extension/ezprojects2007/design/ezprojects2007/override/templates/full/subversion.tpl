{* Full view for article *}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-subversion">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.name|wash}</h1>
</div>

<div class="attribute-long">
{if $node.object.data_map.repository.has_content}
<p>You can anonymously check out the source code released by this project from its Subversion repository:</p>
<code>svn checkout <a href="{$node.object.data_map.repository.content}">{$node.object.data_map.repository.content}</a></code>
<p>To be able to commit changes to the project's repository, you need to be a member of the project.</p>
{else}
The repository is being initialized. Please visit this page again in a few minutes.
{/if}
</div>

{if $node.object.data_map.repository.has_content}
<div class="attribute-heading">
    <h2>Latest log messages</h2>

    {let $logs=fetch('content', 'list', hash(
            'parent_node_id', $node.node_id,
            'class_filter_type', 'include',
            'class_filter_array', array( 'subversion_log_message' ),
            'sort_by', array( 'attribute', false(), 'subversion_log_message/revision' ),
            'limit', 10,
            'offset', 0
    ))}
    <ul>
    {foreach $logs as $log}
    {def $websvn_diff_url=concat( "http://websvn.projects.ez.no/wsvn/",
                                  $node.parent.data_map.unix_name.content,
                                  "?",
                                  "op=comp",
                                  "&",
                                  "compare[]=%2F@", $log.data_map.revision.content|dec,
                                  "&",
                                  "compare[]=%2F@", $log.data_map.revision.content)}
    <li><a href={$log.url_alias|ezurl}>{$log.data_map.revision.content}</a> on {$log.data_map.date.content.timestamp|l10n( shortdatetime )} by {attribute_view_gui attribute=$log.data_map.author} [<a href="{$websvn_diff_url}">WebSVN diff</a>]</li>
    {undef $websvn_diff_url}
    {/foreach}
    </ul>
    {/let}
</div>
{/if}

</div>
</div>
</div>
{* End main part *}


{* Right info *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-subversion">

<div class="attribute-heading">
    <h2 class="bullet">Useful Subversion links</h2>
</div>

<ul class="linklist">
    <li><a href="http://subversion.tigris.org/">Subversion homepage</a></li>
    <li><a href="http://svnbook.red-bean.com/">Version Control with Subversion: a free book</a></li>
    <li><a href="http://subversion.tigris.org/links.html#clients">List of links to Subversion GUI clients and plugins</a></li>
</ul>

</div>
</div>
</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node}

{* Right info end *}
