<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 22:21:40
         compiled from "templates/default/paypal_preferences.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1857654356526f9a8ad518e7-60050180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d4e2653802b8b41e6c19b4312b1b1d059d90fe' => 
    array (
      0 => 'templates/default/paypal_preferences.tpl',
      1 => 1383081505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1857654356526f9a8ad518e7-60050180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f9a8b04a806_83899258',
  'variables' => 
  array (
    'paypal' => 0,
    'login' => 0,
    'amounts' => 0,
    'k' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f9a8b04a806_83899258')) {function content_526f9a8b04a806_83899258($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <form action="paypal_preferences.php" method="post" enctype="multipart/form-data">
<?php if (!$_smarty_tpl->tpl_vars['paypal']->value->isLoaded()){?>
            <div id="errorbox">
                <h1><?php echo smarty_function__T(array('string'=>"- ERROR -"),$_smarty_tpl);?>
</h1>
            </div>
<?php }?>
        <div class="bigtable">
            <input type="hidden" name="valid" value="1"/>
            <fieldset class="cssform paypalprefs ">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Paypal preferences"),$_smarty_tpl);?>
</legend>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()){?>
                <p>
                    <label for="paypal_id" class="bline"><?php echo smarty_function__T(array('string'=>"Paypal identifier:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Enter here one of your Paypal ID or email adress associated within your paypal account."),$_smarty_tpl);?>
</span>
                    <input type="text" name="paypal_id" id="paypal_id" value="<?php echo $_smarty_tpl->tpl_vars['paypal']->value->getId();?>
" required/>
                </p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['paypal']->value->areAmountsLoaded()&&count($_smarty_tpl->tpl_vars['amounts']->value)>0){?>
                <table>
                    <thead>
                        <tr>
                            <th class="listing"><?php echo smarty_function__T(array('string'=>"Cotisation type"),$_smarty_tpl);?>
</th>
                            <th class="listing"><?php echo smarty_function__T(array('string'=>"Amount"),$_smarty_tpl);?>
</th>
                            <th class="listing"><?php echo smarty_function__T(array('string'=>"Inactive"),$_smarty_tpl);?>
</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php  $_smarty_tpl->tpl_vars['amount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['amount']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['amounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['amount']->key => $_smarty_tpl->tpl_vars['amount']->value){
$_smarty_tpl->tpl_vars['amount']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['amount']->key;
?>
                        <tr>
                            <td>
                                <input type="hidden" name="amount_id[]" id="amount_id_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/>
                                <label for="amount_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['amount']->value['name'];?>
</label>
                            </td>
                            <td>
                                <input type="text" name="amounts[]" id="amount_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['amount']->value['amount']);?>
"/>
                            </td>
                            <td>
                                <input type="checkbox" name="inactives[]" id="inactives_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['paypal']->value->isInactive($_smarty_tpl->tpl_vars['k']->value)){?> checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/>
                            </td>
                        </tr>
    <?php } ?>
                    </tbody>
                </table>
            </fieldset>
<?php }else{ ?>
            <p><?php echo smarty_function__T(array('string'=>"Error: no predefined amounts found."),$_smarty_tpl);?>
</p>
<?php }?>

        </div>
        <div class="button-container">
            <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
        </div>
        <p><?php echo smarty_function__T(array('string'=>"NB : The mandatory fields are in"),$_smarty_tpl);?>
 <span class="required"><?php echo smarty_function__T(array('string'=>"red"),$_smarty_tpl);?>
</span></p>
        </form>
<?php }} ?>