<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:12:42
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/trombinoscope.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203701860552683bcad722e6-17843377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0bd200961d91119ffc8d7ff3c19a901040651ed' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/trombinoscope.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203701860552683bcad722e6-17843377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'members' => 0,
    'galette_base_path' => 0,
    'member' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683bcadf3e80_65120188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683bcadf3e80_65120188')) {function content_52683bcadf3e80_65120188($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
        <div class="trombino">
            <img src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
picture.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
&amp;rand=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['member']->value->picture->getOptimalHeight();?>
" width="<?php echo $_smarty_tpl->tpl_vars['member']->value->picture->getOptimalWidth();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['member']->value->sfullname;?>
<?php if ($_smarty_tpl->tpl_vars['member']->value->nickname!=''){?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
)<?php }?>"/>
            <br/><?php echo $_smarty_tpl->tpl_vars['member']->value->sfullname;?>
<?php if ($_smarty_tpl->tpl_vars['member']->value->nickname!=''){?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
)<?php }?>
        </div>
<?php }
if (!$_smarty_tpl->tpl_vars['member']->_loop) {
?>
        <div id="infobox"><?php echo smarty_function__T(array('string'=>"No member to show"),$_smarty_tpl);?>
</div>
<?php } ?><?php }} ?>