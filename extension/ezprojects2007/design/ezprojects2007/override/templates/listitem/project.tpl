{* Listitem view for class project *}

{* Parameters:
   - show_extra_info = Boolean true(), false()
     Typicaly used by the community frontpage.
     Default is false()
*}

<div class="content-view-list">
<div class="class-project">

<h3><a href={$node.url_alias|ezurl}>{$node.object.data_map.name.content|wash}</a></h3>

{if $show_extra_info}
   {let status=""}
   {* Figure out the status of the spec. *}
   {include uri="design:parts/projects/status.tpl" status_number=$node.object.data_map.status.content.0}

   <div class="attribute-byline">
       <p class="date">{$node.object.modified|datetime( 'custom', '%l %d %F %Y %H:%i' )}</p>
       <p class="author"><a href={$node.object.owner.main_node.url_alias|ezurl}>{$node.object.owner.name|wash}</a></p>
       <p class="status">Status: {$status}</p>
       <p class="version">Version: {$node.object.data_map.version.data_text|wash( xhtml )}</p>
   </div>

   {/let}
{/if}

</div>
</div>