<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:51:14
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/traduire_libelles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580025088526844d202ee54-90021033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35dd933623e4924a196e407bedbeb4208c519d6' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/traduire_libelles.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580025088526844d202ee54-90021033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trans' => 0,
    'exists' => 0,
    'orig' => 0,
    'text_orig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526844d20cb271_93926524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526844d20cb271_93926524')) {function content_526844d20cb271_93926524($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?><?php if (count($_smarty_tpl->tpl_vars['trans']->value)>0){?>
        <form action="traduire_libelles.php" method="post" enctype="multipart/form-data">
            <div clasis="bigtable">
                <p class="right">
    <?php if ($_smarty_tpl->tpl_vars['exists']->value){?>
                    <label for="text_orig"><?php echo smarty_function__T(array('string'=>"Choose label to translate"),$_smarty_tpl);?>
</label>
                    <select name="text_orig" id="text_orig">
                        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['orig']->value,'output'=>$_smarty_tpl->tpl_vars['orig']->value,'selected'=>$_smarty_tpl->tpl_vars['text_orig']->value),$_smarty_tpl);?>

                    </select>
                    <noscript> <span><input type="submit" value="<?php echo smarty_function__T(array('string'=>"Change"),$_smarty_tpl);?>
" /></span></noscript>
    <?php }else{ ?>
                    <span><?php echo smarty_function__T(array('string'=>"Original text: '%s'",'pattern'=>'/%s/','replace'=>$_smarty_tpl->tpl_vars['text_orig']->value),$_smarty_tpl);?>
</span>
                    <input type=hidden name="text_orig" value="<?php echo $_smarty_tpl->tpl_vars['text_orig']->value;?>
"/>
                    <input type="hidden" name="new" value="true"/>
    <?php }?>
                </p>
                <fieldset class="cssform">
                    <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Translation of '%s' label",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['text_orig']->value),$_smarty_tpl);?>
</legend>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['name'] = "lang";
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["lang"]['total']);
?>
                    <p>
                        <label for="text_trans_<?php echo $_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['key'];?>
" class="bline"><?php echo $_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['name'];?>
</label>
                        <input type="text" name="text_trans_<?php echo $_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['key'];?>
" id="text_trans_<?php echo $_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['key'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lang']['index']]['text'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                    </p>
<?php endfor; endif; ?>
                </fieldset>
            </div>
            <div class="button-container">
                <input type="submit" name="trans" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
            </div>
        </form>
        <script type="text/javascript">
            $('#text_orig').change(function() {
                this.form.submit();
            });
        </script>
<?php }else{ ?>
        <p><?php echo smarty_function__T(array('string'=>"No fields to translate."),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>