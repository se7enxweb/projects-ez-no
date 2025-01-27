{* List children with google navigation *}

{* This template passes on $sequence to the line view if set.
   The following node should be persent in the current namespace:
   - $node
   - $child_count
   - $view_parameters
   - $page_limit *}

{let sequence_value=array()
     used_node}

{section show=is_set( $sequence )}
    {set sequence_value=$sequence}
{/section}

{section var=child loop=$children sequence=$sequence_value}
    {node_view_gui view=line content_node=$child.item sequence=$child.sequence}
{/section}

{include name=navigator
         uri='design:navigator/google.tpl'
         page_uri=$node.url_alias
         item_count=$child_count
         view_parameters=$view_parameters
         item_limit=$page_limit}


{/let}