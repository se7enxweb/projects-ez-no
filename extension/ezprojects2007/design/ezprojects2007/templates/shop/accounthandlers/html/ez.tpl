
<div class="split float-break">

<div class="split-two-left">
<h2>{"Customer"|i18n("design/standard/shop")}</h2>

<p>
{section show=$order.account_information.street1}
<label>Company:</label> {$order.account_information.street1}<br />
{/section}
<label>Name:</label> {$order.account_information.first_name} {$order.account_information.last_name}<br />
<label>E-mail:</label> {$order.account_information.email}<br />
<label>Phone:</label> {$order.account_information.phone}<br />
{section show=$order.account_information.comment}
<label>Comment:</label> {$order.account_information.comment}<br />
{/section}
</p>
</div>

<div class="split-two-right">
<h2>{"Address"|i18n("design/standard/shop")}</h2>
<p>
<label>Street:</label> {$order.account_information.street2}<br />
<label>Postal code:</label> {$order.account_information.zip}<br />
<label>Place:</label> {$order.account_information.place}<br />
{section show=$order.account_information.state}
<label>State:</label> {$order.account_information.state}<br />
{/section}
<label>Country:</label> {$order.account_information.country}<br />
</p>

</div>

</div>