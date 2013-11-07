<h1 id="titre">{_T string="Paypal payment success"}</h1>
{if $post}
<p>{_T string="Your paypal payment was successful. Some details are shown below:"}</p>
<table>
    <tr>
        <th>{_T string="Label"}</th>
        <td>{$post.transaction_subject}</td>
    </tr>
    <tr>
        <th>{_T string="Payment date"}</th>
        <td>{$post.payment_date}</td>
    </tr>
    <tr>
        <th>{_T string="Payment status"}</th>
        <td>{$post.payment_status}</td>
    </tr>
    <tr>
        <th>{_T string="Payment type"}</th>
        <td>{$post.payment_type}</td>
    </tr>
    <tr>
        <th>{_T string="Amount"}</th>
        <td>{$post.mc_gross} {$post.mc_currency}</td>
    </tr>
</table>
{else}
<p>{_T string="Your paypal payment was successful. You may receive a mail from paypal with details."}</p>
{/if}
