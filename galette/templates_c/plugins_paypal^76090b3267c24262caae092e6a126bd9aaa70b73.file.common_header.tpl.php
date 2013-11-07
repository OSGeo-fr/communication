<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 12:22:51
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/common_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:918279727526f9a8b5a7050-75187635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76090b3267c24262caae092e6a126bd9aaa70b73' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/common_header.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '918279727526f9a8b5a7050-75187635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pref_slogan' => 0,
    'page_title' => 0,
    'GALETTE_VERSION' => 0,
    'template_subdir' => 0,
    'localstylesheet' => 0,
    'jquery_dir' => 0,
    'jquery_version' => 0,
    'jquery_migrate_version' => 0,
    'scripts_dir' => 0,
    'jquery_ui_version' => 0,
    'localprintstylesheet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f9a8b697dd4_72217079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f9a8b697dd4_72217079')) {function content_526f9a8b697dd4_72217079($_smarty_tpl) {?>
<title><?php if ($_smarty_tpl->tpl_vars['pref_slogan']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['pref_slogan']->value;?>
 - <?php }?><?php if ($_smarty_tpl->tpl_vars['page_title']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php }?>Galette <?php echo $_smarty_tpl->tpl_vars['GALETTE_VERSION']->value;?>
</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
galette.css" />
        
        <?php if (isset($_smarty_tpl->tpl_vars["localstylesheet"])) {$_smarty_tpl->tpl_vars["localstylesheet"] = clone $_smarty_tpl->tpl_vars["localstylesheet"];
$_smarty_tpl->tpl_vars["localstylesheet"]->value = ((string)$_smarty_tpl->tpl_vars['template_subdir']->value)."galette_local.css"; $_smarty_tpl->tpl_vars["localstylesheet"]->nocache = null; $_smarty_tpl->tpl_vars["localstylesheet"]->scope = 0;
} else $_smarty_tpl->tpl_vars["localstylesheet"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['template_subdir']->value)."galette_local.css", null, 0);?>
        <?php if (file_exists($_smarty_tpl->tpl_vars['localstylesheet']->value)){?>
            <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['localstylesheet']->value;?>
" />
        <?php }?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-<?php echo $_smarty_tpl->tpl_vars['jquery_version']->value;?>
.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-migrate-<?php echo $_smarty_tpl->tpl_vars['jquery_migrate_version']->value;?>
.min.js"></script>
        
        <!--[if lte IE 9]>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scripts_dir']->value;?>
html5-ie.js"></script>
            <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
ie.css" />
        <![endif]-->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery.bgFade.js"></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.core.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.widget.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.accordion.min.js"></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.button.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scripts_dir']->value;?>
common.js"></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.position.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.tooltip.min.js"></script>
        <meta name="viewport" content="width=device-width" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
jquery-ui/jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
.custom.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
galette_print.css" media="print" />
        <?php if (isset($_smarty_tpl->tpl_vars["localprintstylesheet"])) {$_smarty_tpl->tpl_vars["localprintstylesheet"] = clone $_smarty_tpl->tpl_vars["localprintstylesheet"];
$_smarty_tpl->tpl_vars["localprintstylesheet"]->value = ((string)$_smarty_tpl->tpl_vars['template_subdir']->value)."galette_print_local.css"; $_smarty_tpl->tpl_vars["localprintstylesheet"]->nocache = null; $_smarty_tpl->tpl_vars["localprintstylesheet"]->scope = 0;
} else $_smarty_tpl->tpl_vars["localprintstylesheet"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['template_subdir']->value)."galette_print_local.css", null, 0);?>
        <?php if (file_exists($_smarty_tpl->tpl_vars['localprintstylesheet']->value)){?>
            <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['localprintstylesheet']->value;?>
" media="print" />
        <?php }?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/favicon.png" />
<?php }} ?>