<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:14:38
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/reminder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47523699352683c3e0fbc91-07765827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '583827eb9aa270ca297cbb0e6a9f126f18cc96c2' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/reminder.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47523699352683c3e0fbc91-07765827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count_impending' => 0,
    'count_impending_nomail' => 0,
    'count_late' => 0,
    'count_late_nomail' => 0,
    'previews' => 0,
    'key' => 0,
    'preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c3e1ebad9_60266273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c3e1ebad9_60266273')) {function content_52683c3e1ebad9_60266273($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <form class="form" id="send_reminders" action="reminder.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Choose wich reminder(s) you want to send:"),$_smarty_tpl);?>
</legend>
                <div>
                    <ul>
                        <li<?php if ($_smarty_tpl->tpl_vars['count_impending']->value==0&&$_smarty_tpl->tpl_vars['count_impending_nomail']->value==0){?> class="disabled"<?php }?>>
                            <input type="checkbox" name="reminders[]" id="reminder_impending" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\Entity\Reminder::IMPENDING;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['count_impending']->value==0&&$_smarty_tpl->tpl_vars['count_impending_nomail']->value==0){?> disabled="disabled"<?php }?>/>
                            <label for="reminder_impending"><?php echo smarty_function__T(array('string'=>"Impending due date"),$_smarty_tpl);?>
</label>
                            <a class="show_previews" id="impending" href="#impending_preview">(<?php echo smarty_function__T(array('string'=>"preview"),$_smarty_tpl);?>
)</a> -
                            <a href="gestion_adherents.php?filter_membership=1&filter_account=1&email_filter=6"><?php echo smarty_function__T(array('string'=>"%s members with mail",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['count_impending']->value),$_smarty_tpl);?>
</a>
                            <a href="gestion_adherents.php?filter_membership=1&filter_account=1&email_filter=7"><?php echo smarty_function__T(array('string'=>"%s members without mail",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['count_impending_nomail']->value),$_smarty_tpl);?>
</a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['count_late']->value==0&&$_smarty_tpl->tpl_vars['count_late_nomail']->value==0){?> class="disabled"<?php }?>>
                            <input type="checkbox" name="reminders[]" id="reminder_late" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\Entity\Reminder::LATE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['count_late']->value==0&&$_smarty_tpl->tpl_vars['count_late_nomail']->value==0){?> disabled="disabled"<?php }?>/>
                            <label for="reminder_late"><?php echo smarty_function__T(array('string'=>"Late"),$_smarty_tpl);?>
</label>
                            <a class="show_previews" id="late" href="#impending_preview">(<?php echo smarty_function__T(array('string'=>"preview"),$_smarty_tpl);?>
)</a> -
                            <a href="gestion_adherents.php?filter_membership=2&filter_account=1&email_filter=6"><?php echo smarty_function__T(array('string'=>"%s members with mail",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['count_late']->value),$_smarty_tpl);?>
</a>
                            <a href="gestion_adherents.php?filter_membership=2&filter_account=1&email_filter=7"><?php echo smarty_function__T(array('string'=>"%s members without mail",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['count_late_nomail']->value),$_smarty_tpl);?>
</a>
                        </li>
                        <li<?php if ($_smarty_tpl->tpl_vars['count_impending_nomail']->value==0&&$_smarty_tpl->tpl_vars['count_late_nomail']->value==0){?> class="disabled"<?php }?>>
                            <input type="checkbox" name="reminder_wo_mail" id="reminder_wo_mail" value="1"<?php if ($_smarty_tpl->tpl_vars['count_impending_nomail']->value==0&&$_smarty_tpl->tpl_vars['count_late_nomail']->value==0){?> disabled="disabled"<?php }?>/>
                            <label for="reminder_wo_mail"><?php echo smarty_function__T(array('string'=>"Generate labels for late members without mail address"),$_smarty_tpl);?>
</label>
                        </li>
                    </ul>
                </div>
            </fieldset>
            <div class="button-container">
                <input id="btnsend" type="submit" name="valid" value="<?php echo smarty_function__T(array('string'=>"Send"),$_smarty_tpl);?>
"/>
            </div>
        </form>
<?php  $_smarty_tpl->tpl_vars['preview'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preview']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['previews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['preview']->key => $_smarty_tpl->tpl_vars['preview']->value){
$_smarty_tpl->tpl_vars['preview']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['preview']->key;
?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_preview" title="<?php echo $_smarty_tpl->tpl_vars['preview']->value->tcomment;?>
" class="preview">
            <div>
                <p>
                    <span class="bline"><?php echo smarty_function__T(array('string'=>"Subject:"),$_smarty_tpl);?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['preview']->value->tsubject;?>
</span>
                </p>
                <p>
                    <span class="bline"><?php echo smarty_function__T(array('string'=>"Message:"),$_smarty_tpl);?>
</span>
                    <span><?php echo nl2br($_smarty_tpl->tpl_vars['preview']->value->tbody);?>
</span>
                </p>
            </div>
        </div>
<?php } ?>
        <script type="text/javascript">
            $(function(){
                $('.preview').hide().dialog({
                    autoOpen: false
                });
                $('.show_previews').click(function(){
                    $('#' + $(this).attr('id') + '_preview').dialog('open');
                    return false;
                });
                $('#send_reminders').submit(function(){
                    var _this = $(this);
                    var _checkeds = _this.find('input[type=checkbox]:checked').length;

                    if ( _checkeds == 0 ) {
                        var _el = $('<div id="pleaseselect" title="<?php echo smarty_function__T(array('string'=>"No reminder selected",'escape'=>"js"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Please make sure to select at least one reminder.",'escape'=>"js"),$_smarty_tpl);?>
</div>');
                        _el.appendTo('body').dialog({
                            modal: true,
                            buttons: {
                                Ok: function() {
                                    $(this).dialog( "close" );
                                }
                            },
                            close: function(event, ui){
                                _el.remove();
                            }
                        });
                        return false;
                    } else {
                        return true;
                    }
                });
            });
        </script>
<?php }} ?>