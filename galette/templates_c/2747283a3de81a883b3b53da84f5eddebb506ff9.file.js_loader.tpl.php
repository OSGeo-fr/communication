<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:14:33
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/js_loader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180631227752683c39360e28-14244000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2747283a3de81a883b3b53da84f5eddebb506ff9' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/js_loader.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180631227752683c39360e28-14244000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c3936f8f9_97412015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c3936f8f9_97412015')) {function content_52683c3936f8f9_97412015($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        beforeSend: function() {
            var _img = $('<figure id="loading"><p><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/loading.png" alt="<?php echo smarty_function__T(array('string'=>"Loading..."),$_smarty_tpl);?>
"/><br/><?php echo smarty_function__T(array('string'=>"Currently loading..."),$_smarty_tpl);?>
</p></figure>');
            $('body').append(_img);
        },
        complete: function() {
            $('#loading').remove();
        }

<?php }} ?>