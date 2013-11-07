{*{if $login->isLogged()}*}
        <h1 class="nojs">{_T string="Paypal"}</h1>
        <ul>
            <li{if $PAGENAME eq "paypal_form.php" or $PAGENAME eq "paypal_success.php"} class="selected"{/if}><a href="{$galette_base_path}{$galette_galette_paypal_path}paypal_form.php">{_T string="Payment form"}</a></li>
    {if $login->isAdmin() or $login->isStaff()}
            <li{if $PAGENAME eq "paypal_history.php"} class="selected"{/if}><a href="{$galette_base_path}{$galette_galette_paypal_path}paypal_history.php">{_T string="Paypal History"}</a></li>
            <li{if $PAGENAME eq "paypal_preferences.php"} class="selected"{/if}><a href="{$galette_base_path}{$galette_galette_paypal_path}paypal_preferences.php">{_T string="Paypal Preferences"}</a></li>
    {/if}
        </ul>
{*{/if}*}
