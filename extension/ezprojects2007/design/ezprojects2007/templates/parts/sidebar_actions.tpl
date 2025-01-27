{default $current_user=fetch('user','current_user')
         $showTrackChanges=false()}

{if and( $current_user.is_logged_in, or( $showTrackChanges, $node.object.can_edit, $node.object.can_remove ) )}
<div class="template-design area-sidebar-normal">
<div class="template-module content-view-sidebar">
<div class="template-object class-{$node.class_identifier}">

<form method="post" action={"/content/action"|ezurl}>

<input type="hidden" name="ContentNodeID" value="{$node.node_id}" />
<input type="hidden" name="ContentObjectID" value="{$node.object.id}" />
<input type="hidden" name="ContentLanguageCode" value="eng-GB" />
<input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />

<div class="block float-break">
        {* Track changes *}
        {if $showTrackChanges}
        <div class="element">
               <input class="button" type="submit" name="ActionAddToNotification" value="Track changes" />
        </div>
        {/if}

        {* Edit *}
        {if $node.object.can_edit}
        <div class="element">
            <input class="button button-type-admin" type="submit" name="EditButton" value="Edit" />
        </div>
        {/if}

        {* Remove *}
        {if $node.object.can_remove}
        <div class="element">
            <input type="hidden" name="DeleteIDArray[]" value="{$node.node_id}" />
            <input class="button button-type-admin" type="submit" name="RemoveButton" value="Remove" />
        </div>
        {/if}
</div>

</form>

</div>
</div>
</div>
{/if}

{/default}