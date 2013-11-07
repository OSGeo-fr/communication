<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 22:21:33
         compiled from "templates/default/paypal_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:523517686526f9a984dc835-33850502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '178780ef7ff1006102e56562ee8d47a77d67b7a0' => 
    array (
      0 => 'templates/default/paypal_form.tpl',
      1 => 1383081499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '523517686526f9a984dc835-33850502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f9a9868bcb8_73748375',
  'variables' => 
  array (
    'paypal' => 0,
    'custom' => 0,
    'plugin_url' => 0,
    'galette_url' => 0,
    'preferences' => 0,
    'amounts' => 0,
    'login' => 0,
    'k' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f9a9868bcb8_73748375')) {function content_526f9a9868bcb8_73748375($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if (!$_smarty_tpl->tpl_vars['paypal']->value->isLoaded()){?>
<div id="errorbox">
    <h1><?php echo smarty_function__T(array('string'=>"- ERROR -"),$_smarty_tpl);?>
</h1>
    <p><?php echo smarty_function__T(array('string'=>"<strong>Payment coult not work</strong>: An error occured (that has been logged) while loading Paypal preferences from database.<br/>Please report the issue to the staff."),$_smarty_tpl);?>
</p>
    <p><?php echo smarty_function__T(array('string'=>"Our apologies for the annoyance :("),$_smarty_tpl);?>
</p>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['paypal']->value->getId()==null){?>
    <div id="errorbox">
        <h1><?php echo smarty_function__T(array('string'=>"- ERROR -"),$_smarty_tpl);?>
</h1>
        <p><?php echo smarty_function__T(array('string'=>"Paypal id has not been defined. Please ask an administrator to add it from plugin preferences."),$_smarty_tpl);?>
</p>
    </div>
<?php }else{ ?>
    <?php if (!$_smarty_tpl->tpl_vars['paypal']->value->areAmountsLoaded()){?>
<div id="warningbox">
    <h1><?php echo smarty_function__T(array('string'=>"- WARNING -"),$_smarty_tpl);?>
</h1>
    <p><?php echo smarty_function__T(array('string'=>"Predefined amounts cannot be loaded, that is not a critical error."),$_smarty_tpl);?>
</p>
</div>
    <?php }?>
    <section>
<form action="<?php if (constant('GALETTE_MODE')=='DEV'){?>https://www.sandbox.paypal.com/fr/cgi-bin/webscr<?php }else{ ?>https://www.paypal.com/cgi-bin/webscr<?php }?>" method="post" id="paypal">
    
    <!-- Paypal required variables -->
    <?php if (isset($_smarty_tpl->tpl_vars['custom']->value)){?>
    <input type="hidden" name="custom" value="<?php echo $_smarty_tpl->tpl_vars['custom']->value;?>
"/>
    <?php }?>
    <input type="hidden" name="cmd" value="_xclick"/>
    <input type="hidden" name="business" value="<?php echo $_smarty_tpl->tpl_vars['paypal']->value->getId();?>
"/>
    <input type="hidden" name="lc" value="FR"/>
    <input type="hidden" name="currency_code" value="EUR"/>
    <input type="hidden" name="button_subtype" value="services"/>
    <input type="hidden" name="no_note" value="1"/>
    <input type="hidden" name="no_shipping" value="1"/>
    
    <!-- Paypal dialogs -->
    <input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['plugin_url']->value;?>
paypal_success.php"/>
    <input type="hidden" name="rm" value="2"/>
    <input type="hidden" name="charset" value="UTF-8"/>
    <input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->tpl_vars['galette_url']->value;?>
picture.php?logo=true"/>
    <input type="hidden" name="cancel_return" value="<?php echo $_smarty_tpl->tpl_vars['plugin_url']->value;?>
paypal_form.php?cancelled=true"/>
    <input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->tpl_vars['plugin_url']->value;?>
paypal_notify.php"/>
    <input type="hidden" name="cbt" value="<?php echo smarty_function__T(array('string'=>"Go back to %s's website to complete your inscription.",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['preferences']->value->pref_nom),$_smarty_tpl);?>
"/>

    <fieldset id="paypal_form">
        <legend class="ui-state-active ui-corner-top">
    <?php if (count($_smarty_tpl->tpl_vars['amounts']->value)==0){?>
            <?php echo smarty_function__T(array('string'=>"Enter payment reason"),$_smarty_tpl);?>

    <?php }elseif(count($_smarty_tpl->tpl_vars['amounts']->value)==1){?>
            <?php echo smarty_function__T(array('string'=>"Payment reason"),$_smarty_tpl);?>

    <?php }elseif(count($_smarty_tpl->tpl_vars['amounts']->value)>1){?>
            <?php echo smarty_function__T(array('string'=>"Select an payment reason"),$_smarty_tpl);?>

    <?php }?>
        </legend>

    <?php if ($_smarty_tpl->tpl_vars['paypal']->value->areAmountsLoaded()){?>
        <div id="amounts">
        <?php if (count($_smarty_tpl->tpl_vars['amounts']->value)>0){?>
            <input type="hidden" name="item_name" id="item_name" value="<?php if ($_smarty_tpl->tpl_vars['login']->value->isLogged()){?><?php echo smarty_function__T(array('string'=>"annual fee"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function__T(array('string'=>"donation in money"),$_smarty_tpl);?>
<?php }?>"/>
            <?php  $_smarty_tpl->tpl_vars['amount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['amount']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['amounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['amounts']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['amount']->key => $_smarty_tpl->tpl_vars['amount']->value){
$_smarty_tpl->tpl_vars['amount']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['amount']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['amounts']['index']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amounts']['index']!=0){?><br/><?php }?>
            <input type="radio" name="item_number" id="in<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amounts']['index']==0){?> checked="checked"<?php }?>/>
            <label for="in<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><span id="in<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_name"><?php echo $_smarty_tpl->tpl_vars['amount']->value['name'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['amount']->value['amount']>0){?>
                (<span id="in<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_amount"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['amount']->value['amount']);?>
</span> €)
                <?php }?>
            </label>
            <?php } ?>
        <?php }else{ ?>
            <label for="item_name"><?php echo smarty_function__T(array('string'=>"Payment reason:"),$_smarty_tpl);?>
</label>
            <input type="text" name="item_name" id="item_name" value="<?php if ($_smarty_tpl->tpl_vars['login']->value->isLogged()){?><?php echo smarty_function__T(array('string'=>"annual fee"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function__T(array('string'=>"donation in money"),$_smarty_tpl);?>
<?php }?>"/>
        <?php }?>
        </div>
    <?php }else{ ?>
        <p><?php echo smarty_function__T(array('string'=>"No predefined amounts have been configured yet."),$_smarty_tpl);?>
</p>
    <?php }?>

        <p>
    <?php if ($_smarty_tpl->tpl_vars['paypal']->value->areAmountsLoaded()&&count($_smarty_tpl->tpl_vars['amounts']->value)>0){?>
            <noscript>
                <br/><span class="required"><?php echo smarty_function__T(array('string'=>"WARNING: If you enter an amount below, make sure that it is not lower than the amount of the option you've selected."),$_smarty_tpl);?>
</span>
            </noscript>
    <?php }?>
        </p>
        <p>
            <label for="amount"><?php echo smarty_function__T(array('string'=>"Amount"),$_smarty_tpl);?>
</label>
            <input type="text" name="amount" id="amount" value="<?php if (count($_smarty_tpl->tpl_vars['amounts']->value)>0){?><?php echo $_smarty_tpl->tpl_vars['amounts']->value[1]['amount'];?>
<?php }else{ ?>20<?php }?>"/>
        </p>
    </fieldset>

    <div class="button-container">
        <input type="submit" name="submit" value="<?php echo smarty_function__T(array('string'=>"Validate"),$_smarty_tpl);?>
"/>
    </div>
</form>
        </section>
<script type="text/javascript">
    $(function() {
        $('input[name="item_number"]').change(function(){
            var _amount = parseFloat($('#' + this.id + '_amount').text());
            var _name = $('#' + this.id + '_name').text();
            $('#item_name').val(_name);
            if ( _amount != '' && !isNaN(_amount) ) {
                $('#amount').val(_amount);
            }
        });
    <?php if (count($_smarty_tpl->tpl_vars['amounts']->value)>0){?>
        $('#paypal').submit(function(){
            var _checked = $('input:checked');
            if (_checked.length == 0 ) {
                alert("<?php echo smarty_function__T(array('string'=>"You have to select an option"),$_smarty_tpl);?>
");
                return false;
            } else {
                var _current_amount = parseFloat($('#amount').val());
                var _amount = parseFloat($('#' + _checked[0].id + '_amount').text());
                if ( isNaN(_current_amount) ) {
                    alert("<?php echo smarty_function__T(array('string'=>"Please enter an amount.",'escape'=>"js"),$_smarty_tpl);?>
");
                    return false;
                } else if ( !isNaN(_amount) && _current_amount < _amount ) {
                    alert("<?php echo smarty_function__T(array('string'=>"The amount you've entered is lower than the minimum amount for the selected option.\\nPlease choose another option or change the amount.",'escape'=>"js"),$_smarty_tpl);?>
");
                    return false;
                }
            }
            return true;
        });
    <?php }?>
    });
</script>
<?php }?>
<?php }} ?>