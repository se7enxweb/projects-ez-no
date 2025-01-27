<div class="shop-progress float-break">

<ul>

{switch match=$current}
{case match="basket"}
    <li><strong>{"Shopping basket"|i18n("ezno")}</strong></li>
    <li>{"Account information"|i18n("ezno/shop")}</li>
    <li>{"Confirm order"|i18n("ezno/shop")}</li>
    <li>{"Payment"|i18n("ezno/shop")}</li>
{/case}
{case match="account"}
    <li><a href={"/shop/basket"|ezurl}>{"Shopping basket"|i18n("ezno")}</a></li>
    <li><strong>{"Account information"|i18n("ezno/shop")}</strong></li>
    <li>{"Confirm order"|i18n("ezno/shop")}</li>
    <li>{"Payment"|i18n("ezno/shop")}</li>
{/case}
{case match="confirmorder"}
    <li><a href={"/shop/basket"|ezurl}>{"Shopping basket"|i18n("ezno")}</a></li>
    <li><a href={"/ezshop/register"|ezurl}>{"Account information"|i18n("ezno/shop")}</a></li>
    <li><strong>{"Confirm order"|i18n("ezno/shop")}</strong></li>
    <li>{"Payment"|i18n("ezno/shop")}</li>
{/case}
{case match="payment"}
    <li><a href={"/shop/basket"|ezurl}>{"Shopping basket"|i18n("ezno")}</a></li>
    <li><a href={"/ezshop/register"|ezurl}>{"Account information"|i18n("ezno/shop")}</a></li>
    <li><a href={"/shop/confirmorder"|ezurl}>{"Confirm order"|i18n("ezno/shop")}</a></li>
    <li><strong>{"Payment"|i18n("ezno/shop")}</strong></li>
{/case}
{/switch}

</ul>

</div>