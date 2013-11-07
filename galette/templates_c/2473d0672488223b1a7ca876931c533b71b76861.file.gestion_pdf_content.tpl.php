<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:15:09
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_pdf_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135143670252683c5d33e122-78077354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2473d0672488223b1a7ca876931c533b71b76861' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_pdf_content.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135143670252683c5d33e122-78077354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c5d40a0f4_90489484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c5d40a0f4_90489484')) {function content_52683c5d40a0f4_90489484($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <form action="gestion_pdf.php" method="post" enctype="multipart/form-data">
            <fieldset class="cssform">
                <legend><?php echo $_smarty_tpl->tpl_vars['model']->value->name;?>
</legend>
<?php if ($_smarty_tpl->tpl_vars['model']->value->id!=1){?>
                <p>
                    <label class="bline" for="title_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"Title"),$_smarty_tpl);?>
</label>
                    <input type="text" name="model_title" id="title_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->title, ENT_QUOTES, 'UTF-8', true);?>
"/>
                </p>
                <p>
                    <label class="bline" for="subtitle_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"Subtitle"),$_smarty_tpl);?>
</label>
                    <input type="text" name="model_subtitle" id="subtitle_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->subtitle, ENT_QUOTES, 'UTF-8', true);?>
"/>
                </p>
<?php }?>
                <p>
                    <label class="bline" for="header_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"Header"),$_smarty_tpl);?>
</label>
                    <textarea name="model_header" id="header_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value->header;?>
</textarea>
                </p>
                <p>
                    <label class="bline" for="footer_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"Footer"),$_smarty_tpl);?>
</label>
                    <textarea name="model_footer" id="footer_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value->footer;?>
</textarea>
                </p>
<?php if ($_smarty_tpl->tpl_vars['model']->value->id!=1){?>
                <p>
                    <label class="bline" for="body_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"Body"),$_smarty_tpl);?>
</label>
                    <textarea name="model_body" id="body_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value->body;?>
</textarea>
                </p>
<?php }?>
                <p>
                    <label class="bline" for="styles_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"CSS styles"),$_smarty_tpl);?>
</label>
                    <textarea name="model_styles" id="styles_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value->styles;?>
</textarea>
                </p>
<?php if ($_smarty_tpl->tpl_vars['model']->value->id>3){?>
                <p>
                    <label class="bline" for="type_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"Type"),$_smarty_tpl);?>
</label>
                    <select name="model_type" id="type_<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
" required>
                        <option value=""><?php echo smarty_function__T(array('string'=>"Select"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\PdfModel::INVOICE_MODEL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo smarty_function__T(array('string'=>"Invoice"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\PdfModel::RECEIPT_MODEL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php echo smarty_function__T(array('string'=>"Receipt"),$_smarty_tpl);?>
</option>
                    </select>
                </p>
<?php }?>
            </fieldset>
            <div class="button-container">
                <input type="hidden" name="store" value="true"/>
                <input type="hidden" name="model_id" value="<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
"/>
<?php if ($_smarty_tpl->tpl_vars['model']->value->id<=3){?>
                <input type="hidden" name="model_type" value="<?php echo $_smarty_tpl->tpl_vars['model']->value->type;?>
"/>
<?php }?>
                <input type="submit" id="btnsave" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
            </div>
        </form>
<?php }} ?>