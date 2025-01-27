{default parent_group_id=0
         current_depth=0
         offset=$view_parameters.offset item_limit=10
         summary_indentation=10}

<div class="template-design area-main-normal">
<div class="template-module collaboration-view">
<div class="template-object">

<div class="attribute-heading">
    <h1>{'Summary'|i18n('design/standard/collaboration')}</h1>
</div>

{let group_tree=fetch("collaboration","group_tree",hash("parent_group_id",$parent_group_id))
     latest_item_count=fetch("collaboration","item_count",hash("is_active",true()))
     latest_item_list=fetch("collaboration","item_list",hash("limit",$item_limit,"offset",$offset,"is_active",true()))}

{if $latest_item_count|gt(0)}

{include uri="design:collaboration/item_list.tpl" item_list=$latest_item_list}

{include name=Navigator
         uri='design:navigator/google.tpl'
         page_uri="/collaboration/view/summary"
         item_count=$latest_item_count
         view_parameters=$view_parameters
         item_limit=$item_limit}

{else}
<p>{"No new items to be handled."|i18n('design/standard/collaboration')}</p>
{/if}

</div>
</div>
</div>

{* Right Area *}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object">

  {include uri="design:collaboration/group_tree.tpl" group_tree=$group_tree current_depth=$current_depth
           summary_indentation=$summary_indentation parent_group_id=$parent_group_id}

</div>
</div>
</div>

{/let}

{/default}