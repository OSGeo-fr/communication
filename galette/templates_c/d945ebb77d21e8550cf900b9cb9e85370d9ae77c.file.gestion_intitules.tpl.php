<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:14:57
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_intitules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38670440352683c51f1a9a2-64660214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd945ebb77d21e8550cf900b9cb9e85370d9ae77c' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_intitules.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38670440352683c51f1a9a2-64660214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c520012c7_07007393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c520012c7_07007393')) {function content_52683c520012c7_07007393($_smarty_tpl) {?><form action="gestion_intitules.php" method="post" enctype="multipart/form-data" class="tabbed">
<div id="intitules_tabs">
    <?php echo $_smarty_tpl->getSubTemplate ("gestion_intitule_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</form><?php }} ?>