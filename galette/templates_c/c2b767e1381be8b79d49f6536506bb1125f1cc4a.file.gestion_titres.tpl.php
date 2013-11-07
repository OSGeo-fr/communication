<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:52:14
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_titres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4813635825268450eb960b1-12837608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b767e1381be8b79d49f6536506bb1125f1cc4a' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_titres.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4813635825268450eb960b1-12837608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titles_list' => 0,
    'title' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268450ecbd305_08838250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268450ecbd305_08838250')) {function content_5268450ecbd305_08838250($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <form action="gestion_titres.php" method="post" enctype="multipart/form-data">
                <table class="listing">
                    <thead>
                        <tr>
                            <th class="id_row">#</th>
                            <th><?php echo smarty_function__T(array('string'=>"Short form"),$_smarty_tpl);?>
</th>
                            <th><?php echo smarty_function__T(array('string'=>"Long form"),$_smarty_tpl);?>
</th>
                            <th><?php echo smarty_function__T(array('string'=>"Actions"),$_smarty_tpl);?>
</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="left">
                                <input size="20" type="text" name="short_label"/>
                            </td>
                            <td class="left">
                                <input size="20" type="text" name="long_label"/>
                            </td>
                            <td class="center">
                                <input type="hidden" name="new" value="1" />
                                <input type="submit" name="valid" id="btnadd" value="<?php echo smarty_function__T(array('string'=>"Add"),$_smarty_tpl);?>
"/>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
            <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['titles_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['alltitles']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value){
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['alltitles']['iteration']++;
?>
                        <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['alltitles']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                            <td><?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
</td>
                            <td class="left"><?php echo $_smarty_tpl->tpl_vars['title']->value->short;?>
</td>
                            <td class="left"><?php echo $_smarty_tpl->tpl_vars['title']->value->long;?>
</td>
                            <td class="center actions_row">

                                <a href="edit_title.php?id=<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-edit.png" alt="<?php echo smarty_function__T(array('string'=>"Edit '%s' title",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['title']->value->short),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Edit '%s' title",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['title']->value->short),$_smarty_tpl);?>
" width="16" height="16"/>
                                </a>
                <?php if ($_smarty_tpl->tpl_vars['title']->value->id==1||$_smarty_tpl->tpl_vars['title']->value->id==2){?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16px" height="16px"/>
                <?php }else{ ?>
                                <a onclick="return confirm('<?php echo smarty_function__T(array('string'=>strtr("Do you really want to delete this entry?", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
')" href="gestion_titres.php?del=<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"Delete '%s' title",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['title']->value->short),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Delete '%s' title",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['title']->value->short),$_smarty_tpl);?>
" width="16" height="16" />
                                </a>
                <?php }?>
                            </td>
                        </tr>
            <?php } ?>
                    </tbody>
                </table>
        </form>
<?php }} ?>