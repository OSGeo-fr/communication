        <form action="paypal_preferences.php" method="post" enctype="multipart/form-data">
{if !$paypal->isLoaded()}
            <div id="errorbox">
                <h1>{_T string="- ERROR -"}</h1>
            </div>
{/if}
        <div class="bigtable">
            <input type="hidden" name="valid" value="1"/>
            <fieldset class="cssform paypalprefs ">
                <legend class="ui-state-active ui-corner-top">{_T string="Paypal preferences"}</legend>
{if $login->isAdmin()}
                <p>
                    <label for="paypal_id" class="bline">{_T string="Paypal identifier:"}</label>
                    <span class="tip">{_T string="Enter here one of your Paypal ID or email adress associated within your paypal account."}</span>
                    <input type="text" name="paypal_id" id="paypal_id" value="{$paypal->getId()}" required/>
                </p>
{/if}
{if $paypal->areAmountsLoaded() and $amounts|@count gt 0}
                <table>
                    <thead>
                        <tr>
                            <th class="listing">{_T string="Cotisation type"}</th>
                            <th class="listing">{_T string="Amount"}</th>
                            <th class="listing">{_T string="Inactive"}</th>
                        </tr>
                    </thead>
                    <tbody>
    {foreach from=$amounts key=k item=amount}
                        <tr>
                            <td>
                                <input type="hidden" name="amount_id[]" id="amount_id_{$k}" value="{$k}"/>
                                <label for="amount_{$k}">{$amount['name']}</label>
                            </td>
                            <td>
                                <input type="text" name="amounts[]" id="amount_{$k}" value="{$amount['amount']|string_format:"%.2f"}"/>
                            </td>
                            <td>
                                <input type="checkbox" name="inactives[]" id="inactives_{$k}"{if $paypal->isInactive($k)} checked="checked"{/if} value="{$k}"/>
                            </td>
                        </tr>
    {/foreach}
                    </tbody>
                </table>
            </fieldset>
{else}
            <p>{_T string="Error: no predefined amounts found."}</p>
{/if}

        </div>
        <div class="button-container">
            <input type="submit" value="{_T string="Save"}"/>
        </div>
        <p>{_T string="NB : The mandatory fields are in"} <span class="required">{_T string="red"}</span></p>
        </form>
