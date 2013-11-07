<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 12:22:51
         compiled from "/home/simon/www/osgeo-fr/galette/galette/plugins/galette-plugin-paypal/templates/default/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1024309352526f9a8b701703-57573097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7fba91403b3d0511a35614692b148e582d69c7f' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/plugins/galette-plugin-paypal/templates/default/menu.tpl',
      1 => 1376131168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1024309352526f9a8b701703-57573097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGENAME' => 0,
    'galette_base_path' => 0,
    'galette_galette_paypal_path' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f9a8b754cc0_52040335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f9a8b754cc0_52040335')) {function content_526f9a8b754cc0_52040335($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>
        <h1 class="nojs"><?php echo smarty_function__T(array('string'=>"Paypal"),$_smarty_tpl);?>
</h1>
        <ul>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="paypal_form.php"||$_smarty_tpl->tpl_vars['PAGENAME']->value=="paypal_success.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['galette_galette_paypal_path']->value;?>
paypal_form.php"><?php echo smarty_function__T(array('string'=>"Payment form"),$_smarty_tpl);?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="paypal_history.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['galette_galette_paypal_path']->value;?>
paypal_history.php"><?php echo smarty_function__T(array('string'=>"Paypal History"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="paypal_preferences.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['galette_galette_paypal_path']->value;?>
paypal_preferences.php"><?php echo smarty_function__T(array('string'=>"Paypal Preferences"),$_smarty_tpl);?>
</a></li>
    <?php }?>
        </ul>

<?php }} ?>