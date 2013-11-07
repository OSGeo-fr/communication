<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 00:40:45
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/display_dynamic_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389789814526ef5fd242260-35421329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd72ea48360a4f0448333a758de8ee70a80cbdca8' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/display_dynamic_fields.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1389789814526ef5fd242260-35421329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_fields' => 0,
    'field' => 0,
    'login' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ef5fd3add41_64512363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ef5fd3add41_64512363')) {function content_526ef5fd3add41_64512363($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['dynamic_fields']->value)){?>
<table class="details">
    <caption class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Additionnal fields:"),$_smarty_tpl);?>
</caption>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dynamic_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_perm']!=1||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==0){?>
    <tr>
        <th class="separator" colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8', true);?>
</th>
    </tr>
            <?php }else{ ?>
    <tr>
        <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8', true);?>
</th>
        <td>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['name'] = "fieldLoop";
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['field']->value['field_repeat']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total']);
?>
            <?php if (isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fieldLoop']['index']])&&\Galette\Core\GaletteMail::isValidEmail($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']])){?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index_prev']>0){?><br /><?php }?>
                <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']];?>
</a>
            <?php }elseif(isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fieldLoop']['index']])&&\Galette\Core\GaletteMail::isUrl($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']])){?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index_prev']>0){?><br /><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']];?>
" target="_blank" title="<?php echo smarty_function__T(array('string'=>"Open '%s' in a new window",'replace'=>$_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']],'pattern'=>"/%s/"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']];?>
</a>
            <?php }elseif(isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fieldLoop']['index']])&&$_smarty_tpl->tpl_vars['field']->value['field_type']==5){?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']]){?>
            <?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>

        <?php }else{ ?>
            <?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>

        <?php }?>
        <br/>
            <?php }else{ ?>
            <?php echo (($tmp = @nl2br($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']]))===null||$tmp==='' ? "&nbsp;" : $tmp);?>
<br/>
            <?php }?>
                <?php endfor; endif; ?>
        </td>
    </tr>
            <?php }?>
        <?php }?>
    <?php } ?>
</table>
<?php }?>
<?php }} ?>