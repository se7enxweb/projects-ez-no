{let user=fetch( user, current_user )}
<hr />
{section show=$user.is_logged_in}
    <div class="block float-break">
        <form method="post" action={"/content/action"|ezurl}>
            <input type="hidden" name="NodeID" value="62064" />
            <input type="hidden" name="ClassIdentifier" value="partner" />
            <input class="button" type="submit" name="NewButton" value="{'Become eZ partner'|i18n( 'ezno' )}" />
            <input type="hidden" name="ContentLanguageCode" value="eng-GB" />
        </form>
    </div>
{section-else}
    <p>You need to be <a href={"/user/login"|ezurl}>logged in</a> to apply for partnership. If you do not have an user account you may <a href="/user/register">register here</a>.</p>
{/section}
{/let}