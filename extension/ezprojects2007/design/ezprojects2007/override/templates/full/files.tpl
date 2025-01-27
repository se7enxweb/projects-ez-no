{set-block scope=root variable=cache_ttl}0{/set-block}
{* Full view for files *}

{* Start main part *}
<div class="template-design area-main-normal">
<div class="template-module content-view-full">
<div class="template-object class-{$node.class_identifier}">

{* Header *}
<div class="attribute-heading">
    <h1>{$node.object.data_map.name.content|wash}</h1>
</div>

<div class="attribute-long">
    {attribute_view_gui attribute=$node.object.data_map.description}
</div>

<ul>
{foreach fetch('content','list',hash('parent_node_id',$node.node_id,'sort_by',$node.sort_array)) as $key => $child}
    <li>{$child.class_identifier|class_icon( small, '')} <a href={$child.url_alias|ezurl}>{$child.name|wash}</a>
    {if and($key|eq(0),$child.class_identifier|eq('folder'))}
        {attribute_view_gui attribute=$child.data_map.short_description}
        {let $grandChildren=fetch('content','list',hash('parent_node_id',$child.node_id))}
        {if $grandChildren|count|gt(0)}
            <ul>
                {foreach $grandChildren as $grandChild}
                <li>{$grandChild.class_identifier|class_icon( small, '')} <a href={$grandChild.url_alias|ezurl}>{$grandChild.name|wash}</a></li>
                {/foreach}
            </ul>
        {/if}
        {/let}
    {/if}
    </li>
{/foreach}
</ul>


</div>
</div>
</div>
{* End main part *}


{* Right info *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<div class="attribute-heading">
    <h2 class="bullet">Summary</h2>
</div>

{cache-block keys=array($node.node_id) subtree_expiry=$node.path_identification_string}
{def $totalCount=fetch('content','tree_count',hash('parent_node_id',$node.node_id,'class_filter_type','include','class_filter_array',array('file')))
     $files=fetch('content','tree',hash('parent_node_id',$node.node_id,'class_filter_type','include','class_filter_array',array('file')))
     $totalSize=0
     $totalDownloads=0}
<p>Total count of files: {$totalCount}</p>
{foreach $files as $file}
{set $totalSize=$totalSize|sum($file.object.data_map.file.content.filesize)}
{set $totalDownloads=$totalDownloads|sum($file.object.data_map.file.content.download_count)}
{/foreach}

<p>Total size: {$totalSize|si('byte')}</p>

<p>Total download count: {$totalDownloads}</p>

{undef $totalCount $files $totalSize $totalDownloads}
{/cache-block}

{def $canCreateFile=fetch( 'content', 'access', hash( 'access', 'create',
                                                 'contentobject', $node,
                                                 'contentclass_id', 'file' ))
     $canCreateFolder=fetch( 'content', 'access', hash( 'access', 'create',
     'contentobject', $node,
     'contentclass_id', 'folder' ))}
{if or($canCreateFile,$canCreateFolder)}
<div class="block float-break">

{if $canCreateFile}
    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="file" />
        <input class="button button-type-admin" type="submit" name="NewButton" value="Add a new file" />
    </form>
    </div>
{/if}

{if $canCreateFolder}
    <div class="element">
    <form method="post" action={'/content/action'|ezurl}>
        <input type="hidden" name="NodeID" value="{$node.node_id}" />
        <input type="hidden" name="ClassIdentifier" value="folder" />
        <input class="button button-type-admin" type="submit" name="NewButton" value="Add a new folder" />
    </form>
    </div>
{/if}

</div>
{/if}

{undef $canCreateFolder $canCreateFile}

</div>
</div>
</div>

{include uri="design:parts/sidebar_actions.tpl" name="actions" node=$node showTrackChanges=true()}

{* Right info end *}