<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:14:57
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_intitule_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206075560052683c52004549-01954451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '198132d65734c954baac8c1b7b43d91dc4a15a08' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_intitule_content.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206075560052683c52004549-01954451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'non_staff_priority' => 0,
    'fields' => 0,
    'entries' => 0,
    'eid' => 0,
    'entry' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c52100fe9_55597203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c52100fe9_55597203')) {function content_52683c52100fe9_55597203($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>    <table class="listing">
<?php if ($_smarty_tpl->tpl_vars['class']->value=='Status'){?>
        <caption>
            <?php echo smarty_function__T(array('string'=>"Note: members with a status priority lower than %priority are staff members.",'pattern'=>"/%priority/",'replace'=>$_smarty_tpl->tpl_vars['non_staff_priority']->value),$_smarty_tpl);?>

        </caption>
<?php }?>
        <thead>
            <tr>
                <th class="id_row">#</th>
                <th><?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>
</th>
<?php if ($_smarty_tpl->tpl_vars['class']->value=='ContributionsTypes'){?>
                <th><?php echo smarty_function__T(array('string'=>"Extends membership?"),$_smarty_tpl);?>
</th>
<?php }elseif($_smarty_tpl->tpl_vars['class']->value=='Status'){?>
                <th><?php echo smarty_function__T(array('string'=>"Priority"),$_smarty_tpl);?>
</th>
<?php }?>
                <th><?php echo smarty_function__T(array('string'=>"Actions"),$_smarty_tpl);?>
</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>&nbsp;</td>
                <td class="left">
                    <input size="40" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['name'];?>
"/>
                </td>
                <td class="left">
<?php if ($_smarty_tpl->tpl_vars['class']->value=='ContributionsTypes'){?>
                    <select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'];?>
">
                        <option value="0" selected="selected"><?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>
</option>
                        <option value="1"><?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>
</option>
                    </select>
<?php }elseif($_smarty_tpl->tpl_vars['class']->value=='Status'){?>
                    <input size="4" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'];?>
" value="99" />
<?php }?>
                </td>
                <td class="center">
                    <input type="hidden" name="new" value="1" />
                    <input type="hidden" name="class" value="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" />
                    <input type="submit" name="valid" id="btnadd" value="<?php echo smarty_function__T(array('string'=>"Add"),$_smarty_tpl);?>
"/>
                </td>
            </tr>
        </tfoot>
        <tbody>
<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['eid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allentries']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['eid']->value = $_smarty_tpl->tpl_vars['entry']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allentries']['iteration']++;
?>
            <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['allentries']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                <td><?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
</td>
                <td class="left">

                    <?php if ($_smarty_tpl->tpl_vars['class']->value=='Status'){?>
                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['extra']<30){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-staff.png" alt="<?php echo smarty_function__T(array('string'=>"[staff]"),$_smarty_tpl);?>
" width="16" height="16"/>
                        <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
                        <?php }?>
                    <?php }?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </td>
                <td>
    <?php if ($_smarty_tpl->tpl_vars['class']->value=='ContributionsTypes'){?>
                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['extra']==1){?>
                        <?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>

                    <?php }else{ ?>
                        <?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>

                    <?php }?>
    <?php }elseif($_smarty_tpl->tpl_vars['class']->value=='Status'){?>
                    <?php echo $_smarty_tpl->tpl_vars['entry']->value['extra'];?>

    <?php }?>
                </td>
                <td class="center actions_row">
                    <a href="gestion_intitules.php?class=<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-edit.png" alt="<?php echo smarty_function__T(array('string'=>"Edit '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['entry']->value['name']),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Edit '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['entry']->value['name']),$_smarty_tpl);?>
" width="16" height="16"/>
                    </a>
                    <a onclick="return confirm('<?php echo smarty_function__T(array('string'=>strtr("Do you really want to delete this entry?", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
')" href="gestion_intitules.php?class=<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
&amp;del=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"Delete '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['entry']->value['name']),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Delete '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['entry']->value['name']),$_smarty_tpl);?>
" width="16" height="16" />
                    </a>
                </td>
            </tr>
<?php } ?>
        </tbody>
    </table>
<?php }} ?>