<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:11:39
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/global_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102386968952683b8bdbbc38-78294047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cca6c939d0c7b1fb34e343aa01d19b610614b659' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/global_messages.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102386968952683b8bdbbc38-78294047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_detected' => 0,
    'error' => 0,
    'warning_detected' => 0,
    'warning' => 0,
    'head_redirect' => 0,
    'success_detected' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683b8be19f90_21601431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683b8be19f90_21601431')) {function content_52683b8be19f90_21601431($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>    
    <?php if (count($_smarty_tpl->tpl_vars['error_detected']->value)!=0){?>
            <div id="errorbox">
                <h1><?php echo smarty_function__T(array('string'=>"- ERROR -"),$_smarty_tpl);?>
</h1>
                <ul>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error_detected']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php } ?>
                </ul>
            </div>
    <?php }?>

    
    <?php if (count($_smarty_tpl->tpl_vars['warning_detected']->value)!=0){?>
            <div id="warningbox">
                <h1><?php echo smarty_function__T(array('string'=>"- WARNING -"),$_smarty_tpl);?>
</h1>
                <ul>
        <?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warning_detected']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
        <?php } ?>
                </ul>
            </div>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['head_redirect']->value){?>
        <div id="infobox">
            <?php echo smarty_function__T(array('string'=>"You will be redirected in %timeout seconds. If not, please click on the following link:",'pattern'=>"/%timeout/",'replace'=>$_smarty_tpl->tpl_vars['head_redirect']->value['timeout']),$_smarty_tpl);?>

            <br/><a href="<?php echo $_smarty_tpl->tpl_vars['head_redirect']->value['url'];?>
"><?php echo smarty_function__T(array('string'=>"Do not wait timeout and go to the next page now :)"),$_smarty_tpl);?>
</a>
        </div>
    <?php }?>

    
    <?php if (count($_smarty_tpl->tpl_vars['success_detected']->value)>0){?>
        <div id="successbox">
                <ul>
        <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['success_detected']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value){
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</li>
        <?php } ?>
                </ul>
        </div>
    <?php }?>
<?php }} ?>