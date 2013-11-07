<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:52:03
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/ajax_members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18490591425268450375fff5-06523579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d3758f3d7f80fde6b2bafbd9a9814fa0dde2dc4' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/ajax_members.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18490591425268450375fff5-06523579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'multiple' => 0,
    'pagination' => 0,
    'members_list' => 0,
    'member' => 0,
    'template_subdir' => 0,
    'selected_members' => 0,
    'recipient' => 0,
    'unreachables_members' => 0,
    'the_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52684503868241_87851468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52684503868241_87851468')) {function content_52684503868241_87851468($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <table id="listing" class="select_members<?php if (!$_smarty_tpl->tpl_vars['multiple']->value){?> single<?php }?>">
            <thead>
                <tr> 
                    <th class="listing id_row">#</th>
                    <th class="listing left">
                        <?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>

                    </th>
                    <th class="listing left">
                        <?php echo smarty_function__T(array('string'=>"Nickname"),$_smarty_tpl);?>

                    </th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3" class="center">
                        <?php echo smarty_function__T(array('string'=>"Pages:"),$_smarty_tpl);?>
<br/>
                        <ul class="pages"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</ul>
                    </td>
                </tr>
            </tfoot>
            <tbody>
<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
                <tr>
                    <td class="right"><?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
</td>
                    <td class="nowrap username_row">
                    <?php if ($_smarty_tpl->tpl_vars['member']->value->isCompany()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-company.png" alt="<?php echo smarty_function__T(array('string'=>"[W]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isMan()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-male.png" alt="<?php echo smarty_function__T(array('string'=>"[M]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isWoman()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-female.png" alt="<?php echo smarty_function__T(array('string'=>"[W]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="10" height="12"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['member']->value->isAdmin()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-star.png" alt="<?php echo smarty_function__T(array('string'=>"[admin]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isStaff()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-staff.png" alt="<?php echo smarty_function__T(array('string'=>"[staff]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
                    <?php }?>
                    <a href="voir_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->sfullname;?>
</a>
                    </td>
                    <td class="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
</td>
                </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['member']->_loop) {
?>
                <tr><td colspan="3" class="emptylist"><?php echo smarty_function__T(array('string'=>"no member"),$_smarty_tpl);?>
</td></tr>
<?php } ?>
            </tbody>
        </table>
<?php if ($_smarty_tpl->tpl_vars['multiple']->value){?>
        <section id="selected_members">
            <header class="ui-state-default ui-state-active"><h3><?php echo smarty_function__T(array('string'=>"Selected members"),$_smarty_tpl);?>
</h3></header>
            <ul>
    <?php  $_smarty_tpl->tpl_vars['recipient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recipient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recipient']->key => $_smarty_tpl->tpl_vars['recipient']->value){
$_smarty_tpl->tpl_vars['recipient']->_loop = true;
?>
                <li id="member_<?php echo $_smarty_tpl->tpl_vars['recipient']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['recipient']->value->sfullname;?>
</li>
    <?php }
if (!$_smarty_tpl->tpl_vars['recipient']->_loop) {
?>
                <li id="none_selected"><?php echo smarty_function__T(array('string'=>"No members has been selected yet."),$_smarty_tpl);?>
</li>
    <?php } ?>
    <?php if (count($_smarty_tpl->tpl_vars['unreachables_members']->value)>0){?>
        <?php  $_smarty_tpl->tpl_vars['recipient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recipient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unreachables_members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recipient']->key => $_smarty_tpl->tpl_vars['recipient']->value){
$_smarty_tpl->tpl_vars['recipient']->_loop = true;
?>
                <li id="member_<?php echo $_smarty_tpl->tpl_vars['recipient']->value->id;?>
" class="unreachables"><?php echo $_smarty_tpl->tpl_vars['recipient']->value->sfullname;?>
</li>
        <?php } ?>
    <?php }?>
            </ul>
            <button class="button" id="btnvalid"><?php echo smarty_function__T(array('string'=>"Validate"),$_smarty_tpl);?>
</button>
            <?php if (isset($_smarty_tpl->tpl_vars['the_id']->value)){?>
                <input type="hidden" name="the_id" id="the_id" value="<?php echo $_smarty_tpl->tpl_vars['the_id']->value;?>
"/>
            <?php }?>
        </section>
<?php }?>
<?php }} ?>