<div class="class-bugcomments">
{let name=Version
     children=fetch( content, list, hash( parent_node_id, $node.main_node_id,
                                          limit, 20,
                                          sort_by, array( array( published, true() ) ) ) )
     last=false()
     last_modified=false()
     sequence=0}

{section loop=$node.object.versions}
{section-exclude match=array( 0, 2, 5 )|contains( $:item.status )}

    {section name=Child loop=$:children}
    {section-exclude match=or( $Version:item.modified|le( $:item.object.published ),
                               $Version:last_modified|gt( $:item.object.published ) ) }
    {set name=Version scope=root sequence=$Version:sequence|choose( 1, 0 )}
    <div class="{$Version:sequence|choose( "bgdark", "bglight" )}">
{*
    {section show=and( $:item.object.can_edit, $show_edit_buttons|eq( true() ) )}
        <div class="object-right">
            <form method="post" action={"/content/action"|ezurl}>
            <input title="Edit forum message" type="image" src={"edit.gif"|ezimage} name="EditButton" />
            <input type="hidden" name="ContentObjectID" value="{$:item.object.id}" />
            <input type="hidden" name="RedirectURIAfterPublish" value={concat( '/bugs/view/',$node.object.data_map.bug_number.content, "#comments" )} />
            </form>
        </div>
    {/section}
*}
    <h2>"{$:item.object.data_map.subject.content|wash}" by {$:item.object.owner.name} ({$:item.object.published|l10n(shortdatetime)})</h2>
    <p>{$:item.object.data_map.comment.content|simpletags|autolink}</p>
    </div>
    {/section}

    {section show=$:index|gt( 0 )}
    {set name=Version scope=root sequence=$Version:sequence|choose( 1, 0 )}
    <div class="{$Version:sequence|choose( "bgdark", "bglight" )}">
        <h2>
        {section show=ne( $:last.data_map.status.content, $:item.data_map.status.content )}
            {$:item.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')}
            {section show=array(3,6,7)|contains($:item.data_map.status.content)}
                {section show=ne( $:last.data_map.resolution.content, $:item.data_map.resolution.content )}
                    ({$:item.data_map.resolution.content|choose('','none','fixed','invalid','will not fix','future addition','duplicate','works here')})
                {/section}
            {/section}
        {section-else}
            Updated
            {section show=ne( $:last.data_map.resolution.content, $:item.data_map.resolution.content )}
                ({$:item.data_map.resolution.content|choose('','none','fixed','invalid','will not fix','future addition','duplicate','works here')})
            {/section}
        {/section}

        by {$:item.creator.name|wash} ({$:item.modified|l10n(shortdatetime)})</h2>

        {section show=$:last}

            {section show=ne( $:last.data_map.type.content, $:item.data_map.type.content )}
                <p>Changed type to {$:item.data_map.type.content|choose('','Bug','Suggestion','Enhancement')}</p>
            {/section}

        {section-else}

            <p>{$:item.data_map.status.content|choose('','New','Open','Closed','Started','Reopened','Resolved','Verified','Confirmed')} {section show=$:item.data_map.resolution.content|gt(1)}({$:item.data_map.resolution.content|choose('','none','fixed','invalid','will not fix','future addition','duplicate','works here')}){/section} {$:item.data_map.type.content|choose('','bug','suggestion','enhancement')}</p>

        {/section}

        <p>{$:item.data_map.comments.content|simpletags|autolink}</p>
    </div>
    {/section}

    {set last=$:item}
    {set last_modified=$:item.modified}

{/section}

{section loop=$:children sequence=array( bglight, bgdark )}
{section-exclude match=$:last_modified|ge( $:item.object.published )}
    {set name=Version scope=root sequence=$Version:sequence|choose( 1, 0 )}
    <div class="{$Version:sequence|choose( "bgdark", "bglight" )}">
    {*
    {section show=and( $:item.object.can_edit, $show_edit_buttons|eq( true() ) )}
        <div class="object-right">
            <form method="post" action={"/content/action"|ezurl}>
            <input title="Edit forum message" type="image" src={"edit.gif"|ezimage} name="EditButton" />
            <input type="hidden" name="ContentObjectID" value="{$:item.object.id}" />
            <input type="hidden" name="RedirectURIAfterPublish" value={concat( '/bugs/view/',$node.object.data_map.bug_number.content, "#comments" )} />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
            <input type="hidden" name="ContentObjectLanguageCode" value="eng-GB" />
            </form>
        </div>
    {/section}
    *}
    <h2>
    "{$:item.object.data_map.subject.content|wash}" by {$:item.object.owner.name} ({$:item.object.published|l10n(shortdatetime)})
    </h2>
    <p>{$:item.object.data_map.comment.content|simpletags|autolink}</p>
    </div>
{/section}

{/let}
</div>