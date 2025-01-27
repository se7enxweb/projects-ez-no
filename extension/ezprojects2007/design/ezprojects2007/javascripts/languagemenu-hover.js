/* LANGUAGE MENU HOVER - th[eZ]20051019 */

/* Custom settings */
var languageElement = 'language-menu';
var languageDelayMs = 1000;

/* General settings */
var languageTriggerCount = 0;
var languageHoverCheck = false;

/* Main script */
function languageMenuShow()
{
    document.getElementById(languageElement).style.display = 'block';
}

function languageHoldReset()
{
    languageHoverCheck = true;
}

function languageDelayReset()
{
    languageHoverCheck = false;
    if (languageTriggerCount <= 10) { languageTriggerCount++; setTimeout('languageTryReset()',languageDelayMs); }
}

function languageTryReset()
{
    languageTriggerCount--;
    if (languageTriggerCount == 0 && !languageHoverCheck) { document.getElementById(languageElement).style.display = 'none'; }
}