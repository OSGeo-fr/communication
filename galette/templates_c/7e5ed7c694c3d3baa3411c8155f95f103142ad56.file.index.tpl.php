<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:11:39
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156377714152683b8bb7a2f9-72452617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e5ed7c694c3d3baa3411c8155f95f103142ad56' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/index.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156377714152683b8bb7a2f9-72452617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginfault' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683b8bbb8438_84401308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683b8bbb8438_84401308')) {function content_52683b8bbb8438_84401308($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if ($_smarty_tpl->tpl_vars['loginfault']->value){?>
                <div id="errorbox"><?php echo smarty_function__T(array('string'=>"Login failed."),$_smarty_tpl);?>
</div>
<?php }?>
                <form action="index.php" method="post">
                <section>
                    <table>
                        <tr>
                            <th><label for="login"><?php echo smarty_function__T(array('string'=>"Username:"),$_smarty_tpl);?>
</label></th>
                            <td><input type="text" name="login" id="login" autofocus/></td>
                        </tr>
                        <tr>
                            <th><label for="password"><?php echo smarty_function__T(array('string'=>"Password:"),$_smarty_tpl);?>
</label></th>
                            <td><input type="password" name="password" id="password"/></td>
                        </tr>
                    </table>
                    <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Login"),$_smarty_tpl);?>
" />
                    <input type="hidden" name="ident" value="1" />
                </section>
                </form>
<?php }} ?>