<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 12:22:51
         compiled from "/home/simon/www/osgeo-fr/galette/galette/plugins/galette-plugin-admintools/templates/default/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:827218521526f9a8b6a7ea6-92657157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be81c10dc6d3340ebf87b12c12fce95e3042717b' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/plugins/galette-plugin-admintools/templates/default/menu.tpl',
      1 => 1376124571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '827218521526f9a8b6a7ea6-92657157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
    'PAGENAME' => 0,
    'galette_base_path' => 0,
    'galette_galette_admin_tools_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f9a8b6fda68_54177644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f9a8b6fda68_54177644')) {function content_526f9a8b6fda68_54177644($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if ($_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()){?>
        <h1 class="nojs"><?php echo smarty_function__T(array('string'=>"Admin Tools"),$_smarty_tpl);?>
</h1>
        <ul>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="admintools.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['galette_galette_admin_tools_path']->value;?>
admintools.php" title="<?php echo smarty_function__T(array('string'=>"Various administrative tools"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Admin tools"),$_smarty_tpl);?>
</a></li>
        </ul>
<?php }?>
<?php }} ?>