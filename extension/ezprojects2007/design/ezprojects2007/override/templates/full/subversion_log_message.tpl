{* Full view for subversion log message *}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-subversion_log_message">

{* Header *}
<div class="attribute-heading">
    <h1>Revision {$node.name|wash}</h1>
</div>

{def $websvn_diff_url=concat( "http://websvn.projects.ez.no/wsvn/",
                              $node.parent.parent.data_map.unix_name.content,
                              "?",
                              "op=comp",
                              "&",
                              "compare[]=%2F@", $node.object.data_map.revision.content|dec,
                              "&",
                              "compare[]=%2F@", $node.object.data_map.revision.content)}

<p>Committed on {$node.object.data_map.date.content.timestamp|l10n( shortdatetime )} by {attribute_view_gui attribute=$node.object.data_map.author} [<a href="{$websvn_diff_url}">WebSVN diff</a>]</p>

{undef $websvn_diff_url}

<div class="attribute-long">
{attribute_view_gui attribute=$node.object.data_map.log}
</div>

</div>
</div>
</div>
{* End main part *}


{* Right info *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-subversion_log_message">

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
