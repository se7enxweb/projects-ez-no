{* User login template *}

<div class="template-design area-main-normal">
<div class="template-module user-forgotpassword">
<div class="template-object">


<div class="attribute-heading">
    <h1>Forgot your password?</h1>
</div>


{section show=$link}
    <p>A mail has been send to the following e-mail address: {$email|wash}. This e-mail
        contains a link you need to click so that we can confirm that the correct
        user is getting the new password.</p>
{section-else}

    {section show=$generated}
        <p>{"Password was successfully generated and sent to"|ez18n} {$email|wash}.</p>
    {section-else}
        <form method="post" name="forgetpassword" action={"/user/forgotpassword/"|ezurl}>

        {section show=$wrong_email}
            <div class="warning"><p>{"There is no registered user with that e-mail address"|ez18n}.</p></div>
        {/section}


        <p>If you have forgot your password we can generate a new one for you. All you need to do
        is to enter your e-mail address and we will create a new one for you.</p>

        <div class="block">
            <label for="email">E-mail:</label><div class="labelbreak"></div>
            <input class="halfbox" type="text" name="UserEmail" size="40" value="" />
        </div>

        <div class="buttonblock">
            <input class="button" type="submit" name="GenerateButton" value="Generate new password" />
        </div>
        </form>
    {/section}
{/section}

</div>
</div>
</div>