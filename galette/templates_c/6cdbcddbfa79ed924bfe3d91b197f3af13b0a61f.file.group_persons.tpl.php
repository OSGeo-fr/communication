<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:43:40
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/group_persons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3385783215268430c4b8ac7-43674048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cdbcddbfa79ed924bfe3d91b197f3af13b0a61f' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/group_persons.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3385783215268430c4b8ac7-43674048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'persons' => 0,
    'person_mode' => 0,
    'person' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268430c554d04_78386409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268430c554d04_78386409')) {function content_5268430c554d04_78386409($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>                     <table class="listing">
                        <thead>
                            <tr>
                                <th class="left">
                                    <?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>

                                </th>
                                <th class="left">
                                    <?php echo smarty_function__T(array('string'=>"Nickname"),$_smarty_tpl);?>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
<?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['person']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['persons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allpersons']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value){
$_smarty_tpl->tpl_vars['person']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allpersons']['iteration']++;
?>
                            <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['allpersons']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                                <td class="nowrap username_row">
                                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['person_mode']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->id;?>
"/>
                                <?php if ($_smarty_tpl->tpl_vars['person']->value->isCompany()){?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-company.png" alt="<?php echo smarty_function__T(array('string'=>"[W]"),$_smarty_tpl);?>
" width="16" height="16"/>
                                <?php }elseif($_smarty_tpl->tpl_vars['person']->value->isMan()){?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-male.png" alt="<?php echo smarty_function__T(array('string'=>"[M]"),$_smarty_tpl);?>
" width="16" height="16"/>
                                <?php }elseif($_smarty_tpl->tpl_vars['person']->value->isWoman()){?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-female.png" alt="<?php echo smarty_function__T(array('string'=>"[W]"),$_smarty_tpl);?>
" width="16" height="16"/>
                                <?php }else{ ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="10" height="12"/>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['person']->value->isAdmin()){?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-star.png" alt="<?php echo smarty_function__T(array('string'=>"[admin]"),$_smarty_tpl);?>
" width="16" height="16"/>
                                <?php }elseif($_smarty_tpl->tpl_vars['person']->value->isStaff()){?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-staff.png" alt="<?php echo smarty_function__T(array('string'=>"[staff]"),$_smarty_tpl);?>
" width="16" height="16"/>
                                <?php }else{ ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
                                <?php }?>
                                <a href="voir_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['person']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['person']->value->sfullname;?>
</a>
                                </td>
                                <td class="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['person']->value->nickname);?>
</td>
                            </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['person']->_loop) {
?>
                            <tr>
                                <td colspan="2">
    <?php if ($_smarty_tpl->tpl_vars['person_mode']->value=='members'){?>
                                    <?php echo smarty_function__T(array('string'=>"No member attached"),$_smarty_tpl);?>

    <?php }else{ ?>
                                    <?php echo smarty_function__T(array('string'=>"No manager attached"),$_smarty_tpl);?>

    <?php }?>
                                </td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>

<?php }} ?>