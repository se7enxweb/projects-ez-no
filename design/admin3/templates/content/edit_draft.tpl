
{*<div id="leftmenu" class="sidebar left">
    <div id="leftmenu-design">
        {include uri="design:content/parts/object_information.tpl" object=$object manage_version_button=false()}
    </div>
</div>*}
{* hts *}

<div id="maincontent" class="content-wrapper">
    <div id="maincontent-design" class="float-break">
        <div id="fix">
            <!-- Maincontent START -->

            {let has_own_drafts=false()
                has_other_drafts=false()
                current_creator=fetch( user, current_user )
                draft_checked=false()}

            {section loop=$draft_versions}
                {if eq( $item.creator_id, $current_creator.contentobject_id )}
                    {set has_own_drafts=true()}
                {else}
                    {set has_other_drafts=true()}
                {/if}
            {/section}


            <div class="message-warning">

                <h2><span class="time">[{currentdate()|l10n( shortdatetime )}]</span>
                    {'Possible edit conflict'|i18n( 'design/admin/content/edit_draft' )}</h2>

                {if and( $has_own_drafts, $has_other_drafts )}
                    <p>{'This object is already being edited by someone else. In addition, it is already being edited by you.'|i18n( 'design/admin/content/edit_draft' )}
                    </p>
                    <p>{"You should contact the other user(s) to make sure that you are not stepping on anyone's toes."|i18n( 'design/admin/content/edit_draft' )}
                    <p>{'The most recently modified draft is version #%version, created by %creator, last changed: %modified.'|i18n( 'design/admin/content/edit_draft',, hash( '%version', $most_recent_draft.version, '%creator', $most_recent_draft.creator.name, '%modified', $most_recent_draft.modified|l10n( shortdatetime ) ) )|wash}
                    </p>
                {else}

                    {if $has_own_drafts}
                        <p>{'This object is already being edited by you.'|i18n( 'design/admin/content/edit_draft' )}</p>
                        <p>{'Your most recently modified draft is version #%version, last changed: %modified.'|i18n( 'design/admin/content/edit_draft',, hash( '%version', $most_recent_draft.version, '%creator', $most_recent_draft.creator.name, '%modified', $most_recent_draft.modified|l10n( shortdatetime ) ) )|wash}
                        </p>
                    {/if}

                    {if $has_other_drafts}
                        <p>{'This object is already being edited by someone else.'|i18n( 'design/admin/content/edit_draft' )}
                        </p>
                        <p>{"You should contact the other user(s) to make sure that you are not stepping on anyone's toes."|i18n( 'design/admin/content/edit_draft' )}
                        <p>{'The most recently modified draft is version #%version, created by %creator, last changed: %modified.'|i18n( 'design/admin/content/edit_draft',, hash( '%version', $most_recent_draft.version, '%creator', $most_recent_draft.creator.name, '%modified', $most_recent_draft.modified|l10n( shortdatetime ) ) )|wash}
                        </p>
                    {/if}

                {/if}

                <p>{'Possible actions'|i18n( 'design/admin/content/edit_draft' )}:</p>
                <ul>
                    {if $has_own_drafts}
                        <li>{'Continue editing one of your drafts.'|i18n( 'design/admin/content/edit_draft' )}</li>
                    {/if}
                    <li>{'Create a new draft and start editing it.'|i18n( 'design/admin/content/edit_draft' )}</li>
                    <li>{'Cancel the edit operation.'|i18n( 'design/admin/content/edit_draft' )}</li>
                </ul>

            </div>




            <form method="post"
                action={concat( '/content/edit/', $object.id, '/f/', $edit_language, '/', $from_language )|ezurl}>

                <div class="context-block">

                    {* DESIGN: Header START *}<div class="box-header">
                        <div class="box-ml">

                            <h2 class="context-title">
                                {'Current drafts (%draft_count)'|i18n( 'design/admin/content/edit_draft',, hash( '%draft_count', $draft_versions|count ) )}
                            </h2>



                            {* DESIGN: Header END *}
                        </div>
                    </div>

                    {* DESIGN: Content START *}<div class="box-ml">
                        <div class="box-mr">
                            <div class="box-content">

                                {section var=Drafts loop=$draft_versions}
                                    {if eq( $Drafts.item.creator_id, $current_creator.contentobject_id )}
                                        {set draft_checked=$Drafts.item.id}
                                    {/if}
                                {/section}

                                <div class="draft-list">
                                    <div class="draft-list-head">
                                        <div class="draft-list-row">
                                            <div class="draft-list-cell"></div>
                                            <div class="draft-list-cell">
                                                {'Version'|i18n( 'design/admin/content/edit_draft' )}</div>
                                            <div class="draft-list-cell">
                                                {'Translations'|i18n( 'design/admin/content/edit_draft' )}</div>
                                            <div class="draft-list-cell">
                                                {'Creator'|i18n( 'design/admin/content/edit_draft' )}</div>
                                            <div class="draft-list-cell">
                                                {'Created'|i18n( 'design/admin/content/edit_draft' )}</div>
                                            <div class="draft-list-cell">
                                                {'Modified'|i18n( 'design/admin/content/edit_draft' )}</div>
                                        </div>
                                    </div>
                                    <div class="draft-list-body">
                                        {section var=Drafts loop=$draft_versions sequence=array( bglight, bgdark )}
                                            <div
                                                class="{$Drafts.sequence} draft-list-row {if eq( $Drafts.item.id, $draft_checked )}active{/if}">
                                                {* Edit. *}
                                                <div class="draft-list-cell">
                                                    <div>
                                                        {if eq( $Drafts.item.creator_id, $current_creator.contentobject_id )}
                                                            <input type="radio" name="SelectedVersion"
                                                                value="{$Drafts.item.version}"
                                                                {if eq( $Drafts.item.id, $draft_checked )}checked="checked"
                                                                {/if}
                                                                title="{'Select draft version #%version for editing.'|i18n( 'design/admin/content/edit_draft',, hash( '%version', $Drafts.item.version ) )}" />
                                                        {else}
                                                            <input type="radio" name="SelectedVersion"
                                                                value="{$Drafts.item.version}" disabled="disabled"
                                                                title="{'You cannot select draft version #%version for editing because it belongs to another user. Please select a draft that belongs to you or create a new draft and then edit it.'|i18n( 'design/admin/content/edit_draft',, hash( '%version', $Drafts.item.version ) )}" />
                                                        {/if}
                                                    </div>
                                                </div>
                                                {* Version/view. *}
                                                <div class="draft-list-cell">
                                                    <div class="draft-list-cell-inner">
                                                        {'Version:'|i18n( 'design/admin/content/edit_draft' )}</div>
                                                    <a href={concat( '/content/versionview/', $object.id, '/', $Drafts.item.version, '/', $Drafts.item.language_list[0].language_code )|ezurl}
                                                        title="{'View the contents of version #%version. Translation: %translation.'|i18n( 'design/admin/content/edit_draft',, hash( '%version', $Drafts.item.version, '%translation', $Drafts.item.language_list[0].locale.intl_language_name ) )}">{$Drafts.item.version}</a>
                                                </div>
                                                {* Translation. *}
                                                <div class="draft-list-cell">
                                                    <div class="draft-list-cell-inner">
                                                        {'Translations:'|i18n( 'design/admin/content/edit_draft' )}</div>
                                                    {section var=Languages loop=$Drafts.item.language_list}
                                                        {delimiter}<br />{/delimiter}
                                                        <img src="{$Languages.item.language_code|flag_icon}" width="18"
                                                            height="12" alt="{$Languages.item.language_code}" />&nbsp;<a
                                                            href={concat('/content/versionview/', $object.id, '/', $Drafts.item.version, '/', $Languages.item.language_code, '/' )|ezurl}
                                                            title="{'View the contents of version #%version_number. Translation: %translation.'|i18n( 'design/admin/content/edit_draft',, hash( '%translation', $Languages.item.locale.intl_language_name, '%version_number', $Drafts.item.version ) )}">{$Languages.item.locale.intl_language_name}</a>
                                                    {/section}
                                                </div>
                                                {* Creator. *}
                                                <div class="draft-list-cell">
                                                    <div class="draft-list-cell-inner">
                                                        {'Creator:'|i18n( 'design/admin/content/edit_draft' )}</div>
                                                    {$Drafts.item.creator.name|wash}
                                                </div>
                                                {* Created. *}
                                                <div class="draft-list-cell">
                                                    <div class="draft-list-cell-inner">
                                                        {'Created:'|i18n( 'design/admin/content/edit_draft' )}</div>
                                                    {$Drafts.item.created|l10n( shortdatetime )}
                                                </div>
                                                {* Modified. *}
                                                <div class="draft-list-cell">
                                                    <div class="draft-list-cell-inner">
                                                        {'Modified:'|i18n( 'design/admin/content/edit_draft' )}</div>
                                                    {$Drafts.item.modified|l10n( shortdatetime )}
                                                </div>
                                            </div>
                                        {/section}
                                    </div>
                                </div>

                                {* DESIGN: Content END *}
                            </div>
                        </div>
                    </div>
                    <div class="controlbar">
                        {* DESIGN: Control bar START *}<div class="box-bc">
                            <div class="box-ml">
                                <div class="block">
                                    {if $has_own_drafts}
                                        <input class="defaultbutton" type="submit" name="EditButton"
                                            value="{'Edit selected'|i18n( 'design/admin/content/edit_draft' )}"
                                            title="{'Edit the selected draft.'|i18n( 'design/admin/content/edit_draft' )}" />
                                    {else}
                                        <input class="button-disabled" type="submit" name="EditButton"
                                            value="{'Edit selected'|i18n( 'design/admin/content/edit_draft' )}"
                                            disabled="disabled"
                                            title="{'You cannot edit any of the drafts because none of them belong to you. You can create a new draft, select it and then edit it.'|i18n( 'design/admin/content/edit_draft' )}" />
                                    {/if}

                                    <input class="button" type="submit" name="NewDraftButton"
                                        value="{'New draft'|i18n( 'design/admin/content/edit_draft' )}"
                                        title="{'Create a new draft. The contents of the new draft will be copied from the published version.'|i18n( 'design/admin/content/edit_draft' )}" />
                                    <input class="button" type="submit" name="CancelDraftButton"
                                        value="{'Cancel'|i18n( 'design/admin/content/edit_draft' )}"
                                        title="{'Cancel the edit operation.'|i18n( 'design/admin/content/edit_draft' )}" />
                                    <input type="hidden" name="DoNotEditAfterNewDraft" value="1" />
                                </div>
                                {* DESIGN: Control bar END *}
                            </div>
                        </div>

                    </div>
                </div>

            </form>

            {/let}


            <!-- Maincontent END -->
        </div>
        <div class="break"></div>
    </div>
</div>