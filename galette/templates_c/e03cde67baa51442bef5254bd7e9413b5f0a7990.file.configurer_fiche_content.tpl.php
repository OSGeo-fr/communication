<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:51:05
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/configurer_fiche_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:679339446526844c9e516e9-99817908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03cde67baa51442bef5254bd7e9413b5f0a7990' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/configurer_fiche_content.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679339446526844c9e516e9-99817908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dyn_fields' => 0,
    'field' => 0,
    'template_subdir' => 0,
    'form_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526844ca038b67_91303391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526844ca038b67_91303391')) {function content_526844ca038b67_91303391($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <table class="listing">
            <thead>
                <tr>
                    <th class="id_row">#</th>
                    <th><?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>
</th>
                    <th class="date_row"><?php echo smarty_function__T(array('string'=>"Visibility"),$_smarty_tpl);?>
</th>
                    <th class="date_row"><?php echo smarty_function__T(array('string'=>"Type"),$_smarty_tpl);?>
</th>
                    <th class="date_row"><?php echo smarty_function__T(array('string'=>"Required"),$_smarty_tpl);?>
</th>
                    <th><?php echo smarty_function__T(array('string'=>"Actions"),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
            <tbody>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dyn_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['alldyn']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['alldyn']['iteration']++;
?>
                <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['alldyn']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                    <td><?php echo $_smarty_tpl->tpl_vars['field']->value['index'];?>
</td>
                    <td class="left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td class="left"><?php echo $_smarty_tpl->tpl_vars['field']->value['perm'];?>
</td>
                    <td class="left"><?php echo $_smarty_tpl->tpl_vars['field']->value['type_name'];?>
</td>
                    <td>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['type']!=constant('Galette\Entity\DynamicFields::SEPARATOR')){?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']){?><?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>
<?php }?>
    <?php }?>
                    </td>
                    <td class="center actions_row">
    <?php if (isset($_smarty_tpl->tpl_vars['field']->value['no_data'])){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" border="0" width="16" height="16"/>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" border="0" width="16" height="16"/>
    <?php }else{ ?>
                        <a href="editer_champ.php?form=<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-edit.png" alt="<?php echo smarty_function__T(array('string'=>"Edit '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Edit '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" width="16" height="16"/></a>
                        <a href="traduire_libelles.php?text_orig=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-i18n.png" alt="<?php echo smarty_function__T(array('string'=>"Edit '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Translate '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" width="16" height="16"/></a>
    <?php }?>
                        <a onclick="return confirm('<?php echo smarty_function__T(array('string'=>strtr("Do you really want to delete this field ?\n All associated data will be deleted as well.", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
')" href="configurer_fiches.php?form=<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
&amp;del=<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"Delete '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Delete '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" width="16" height="16"/>
                        </a>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['index']==1){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="9" height="8"/>
    <?php }else{ ?>
                        <a href="configurer_fiches.php?form=<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
&amp;up=<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-up.png" alt="<?php echo smarty_function__T(array('string'=>"Send up '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Send up '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" width="9" height="8"/>
                        </a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['index']==count($_smarty_tpl->tpl_vars['dyn_fields']->value)){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="9" height="8"/>
    <?php }else{ ?>
                        <a href="configurer_fiches.php?form=<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
&amp;down=<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-down.png" alt="<?php echo smarty_function__T(array('string'=>"Send down '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Send down '%s' field",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>
" width="9" height="8"/>
                        </a>
    <?php }?>
                    </td>
                </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['field']->_loop) {
?>
                <tr>
                    <td colspan="7">
                        <?php echo smarty_function__T(array('string'=>"There is not yet any dynamic field configured for '%formname'",'pattern'=>"/%formname/",'replace'=>$_smarty_tpl->tpl_vars['form_name']->value),$_smarty_tpl);?>

                    </td>
                </tr>
<?php } ?>
            </tbody>
        </table>
<?php }} ?>