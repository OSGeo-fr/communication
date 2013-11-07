<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 00:41:16
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127165524526ef61c11be21-90061843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '580b49ece7a76b23d4b34be074beedfe48c72bb1' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/page.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127165524526ef61c11be21-90061843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'galette_lang' => 0,
    'color_picker' => 0,
    'jquery_dir' => 0,
    'template_subdir' => 0,
    'require_sorter' => 0,
    'require_dialog' => 0,
    'jquery_ui_version' => 0,
    'require_calendar' => 0,
    'require_tabs' => 0,
    'require_cookie' => 0,
    'require_charts' => 0,
    'jquery_jqplot_version' => 0,
    'html_editor' => 0,
    'plugged_html_editor' => 0,
    'jquery_markitup_version' => 0,
    'html_editor_active' => 0,
    'require_tree' => 0,
    'headers' => 0,
    'header' => 0,
    'head_redirect' => 0,
    'galette_base_path' => 0,
    'logo' => 0,
    'login' => 0,
    'GALETTE_MODE' => 0,
    'PAGENAME' => 0,
    'preferences' => 0,
    'class' => 0,
    'tpl' => 0,
    'plugins' => 0,
    'languages' => 0,
    'langue' => 0,
    'contentcls' => 0,
    'page_title' => 0,
    'existing_mailing' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ef61c585f76_48380466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ef61c585f76_48380466')) {function content_526ef61c585f76_48380466($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['galette_lang']->value;?>
">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('common_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['color_picker']->value){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
farbtastic.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
farbtastic.css"/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['require_sorter']->value||$_smarty_tpl->tpl_vars['require_dialog']->value){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.mouse.min.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['require_sorter']->value){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.sortable.min.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['require_calendar']->value){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.datepicker.min.js"></script>
    <?php if ($_smarty_tpl->tpl_vars['galette_lang']->value!='en'){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['galette_lang']->value;?>
.min.js"></script>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['require_tabs']->value){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.tabs.min.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['require_dialog']->value){?>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.draggable.min.js"></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.position.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery-ui-<?php echo $_smarty_tpl->tpl_vars['jquery_ui_version']->value;?>
/jquery.ui.dialog.min.js"></script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['require_cookie']->value){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery.cookie.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['require_charts']->value){?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jqplot-<?php echo $_smarty_tpl->tpl_vars['jquery_jqplot_version']->value;?>
/jquery.jqplot.css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jqplot-<?php echo $_smarty_tpl->tpl_vars['jquery_jqplot_version']->value;?>
/jquery.jqplot.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jqplot-<?php echo $_smarty_tpl->tpl_vars['jquery_jqplot_version']->value;?>
/plugins/jqplot.pieRenderer.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jqplot-<?php echo $_smarty_tpl->tpl_vars['jquery_jqplot_version']->value;?>
/plugins/jqplot.barRenderer.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jqplot-<?php echo $_smarty_tpl->tpl_vars['jquery_jqplot_version']->value;?>
/plugins/jqplot.pointLabels.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jqplot-<?php echo $_smarty_tpl->tpl_vars['jquery_jqplot_version']->value;?>
/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['html_editor']->value){?>
    <?php if (!isset($_smarty_tpl->tpl_vars['plugged_html_editor']->value)){?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
markitup-<?php echo $_smarty_tpl->tpl_vars['jquery_markitup_version']->value;?>
/jquery.markitup.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
markitup-<?php echo $_smarty_tpl->tpl_vars['jquery_markitup_version']->value;?>
/sets/html/set-<?php echo $_smarty_tpl->tpl_vars['galette_lang']->value;?>
.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
markitup-<?php echo $_smarty_tpl->tpl_vars['jquery_markitup_version']->value;?>
/skins/galette/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
markitup-<?php echo $_smarty_tpl->tpl_vars['jquery_markitup_version']->value;?>
/sets/html/style.css" />
        <script language="javascript">
            function toggleMailingEditor(id) {
                if(!$('#mailing_html').attr('checked')){
                    $('#mailing_html').attr('checked', true);
                }

                $('input#html_editor_active').attr('value', '1');
                
                $('#toggle_editor').remove();
                $('#mailing_corps').markItUp(galetteSettings);
            }
        <?php if ($_smarty_tpl->tpl_vars['html_editor_active']->value==1){?>
            $(document).ready(function(){
                
                $('#toggle_editor').remove();
                $('#mailing_corps').markItUp(galetteSettings);
            });
        <?php }?>
        </script>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['require_tree']->value){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jquery_dir']->value;?>
jquery.jstree.js"></script>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['headers']->value)!=0){?>
    <?php  $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['header']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['header']->key => $_smarty_tpl->tpl_vars['header']->value){
$_smarty_tpl->tpl_vars['header']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php } ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['head_redirect']->value){?>
    <meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['head_redirect']->value['timeout'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['head_redirect']->value['url'];?>
" />
<?php }?>
</head>
<body>
        
        <!--[if lt IE 8]>
        <div id="oldie">
            <p><?php echo smarty_function__T(array('string'=>"Your browser version is way too old and no longer supported in Galette for a while."),$_smarty_tpl);?>
</p>
            <p><?php echo smarty_function__T(array('string'=>"Please update your browser or use an alternative one, like Mozilla Firefox (http://mozilla.org)."),$_smarty_tpl);?>
</p>
        </div>
        <![endif]-->
    <div id="menu">
        <div id="logo">
            <img src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
picture.php?logo=true" width="<?php echo $_smarty_tpl->tpl_vars['logo']->value->getOptimalWidth();?>
" height="<?php echo $_smarty_tpl->tpl_vars['logo']->value->getOptimalHeight();?>
" alt="[ Galette ]" />
        </div>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()){?>
        <div id="superadmin" title="<?php echo smarty_function__T(array('string'=>"You are actually logged-in as superadmin. Some functionnalities may not be available since this is *not* a regular member."),$_smarty_tpl);?>
">
            <?php echo smarty_function__T(array('string'=>"Superadmin"),$_smarty_tpl);?>

        </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?>
        <div id="demo" title="<?php echo smarty_function__T(array('string'=>"This application runs under DEMO mode, all features may not be available."),$_smarty_tpl);?>
">
            <?php echo smarty_function__T(array('string'=>"Demonstration"),$_smarty_tpl);?>

        </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isLogged()){?>
        <h1 class="nojs"><?php echo smarty_function__T(array('string'=>"Navigation"),$_smarty_tpl);?>
</h1>
        <ul>
  <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isGroupManager()){?>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="desktop.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
desktop.php" title="<?php echo smarty_function__T(array('string'=>"Go to Galette's dashboard"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Dashboard"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_adherents.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_adherents.php" title="<?php echo smarty_function__T(array('string'=>"View, search into and filter member's list"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"List of members"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="advanced_search.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
advanced_search.php" title="<?php echo smarty_function__T(array('string'=>"Perform advanced search into members list"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Advanced search"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_groupes.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_groupes.php" title="<?php echo smarty_function__T(array('string'=>"View and manage groups"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Manage groups"),$_smarty_tpl);?>
</a></li>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_contributions.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_contributions.php?id_adh=all" title="<?php echo smarty_function__T(array('string'=>"View and filter contributions"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"List of contributions"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_transactions.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_transactions.php" title="<?php echo smarty_function__T(array('string'=>"View and filter transactions"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"List of transactions"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="ajouter_adherent.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
ajouter_adherent.php" title="<?php echo smarty_function__T(array('string'=>"Add new member in database"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Add a member"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="ajouter_contribution.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
ajouter_contribution.php" title="<?php echo smarty_function__T(array('string'=>"Add new contribution in database"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Add a contribution"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="ajouter_transaction.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
ajouter_transaction.php" title="<?php echo smarty_function__T(array('string'=>"Add new transaction in database"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Add a transaction"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="reminder.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
reminder.php" title="<?php echo smarty_function__T(array('string'=>"Send reminders to late members"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Reminders"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="history.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
history.php" title="<?php echo smarty_function__T(array('string'=>"View application's logs"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Logs"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_mailings.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_mailings.php" title="<?php echo smarty_function__T(array('string'=>"Manage mailings that has been sent"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Manage mailings"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="export.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
export.php" title="<?php echo smarty_function__T(array('string'=>"Export some data in various formats"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Exports"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="import.php"||$_smarty_tpl->tpl_vars['PAGENAME']->value=="import_model.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
import.php" title="<?php echo smarty_function__T(array('string'=>"Import members from CSV files"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Imports"),$_smarty_tpl);?>
</a></li>
            <li class="mnu_last<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="charts.php"){?> selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
charts.php" title="<?php echo smarty_function__T(array('string'=>"Various charts"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Charts"),$_smarty_tpl);?>
</a></li>
  <?php }else{ ?>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_contributions.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_contributions.php" title="<?php echo smarty_function__T(array('string'=>"View and filter all my contributions"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"My contributions"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_transactions.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_transactions.php" title="<?php echo smarty_function__T(array('string'=>"View and filter all my transactions"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"My transactions"),$_smarty_tpl);?>
</a></li>
  <?php }?>
  <?php if (!$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()){?>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="voir_adherent.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
voir_adherent.php" title="<?php echo smarty_function__T(array('string'=>"View my member card"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"My information"),$_smarty_tpl);?>
</a></li>
  <?php }?>
        </ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['preferences']->value->showPublicPages()==true){?>
        <h1 class="nojs"><?php echo smarty_function__T(array('string'=>"Public pages"),$_smarty_tpl);?>
</h1>
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
public/liste_membres.php" title="<?php echo smarty_function__T(array('string'=>"Members list"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Members list"),$_smarty_tpl);?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
public/trombinoscope.php" title="<?php echo smarty_function__T(array('string'=>"Trombinoscope"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Trombinoscope"),$_smarty_tpl);?>
</a></li>
        </ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()){?>
        <h1 class="nojs"><?php echo smarty_function__T(array('string'=>"Configuration"),$_smarty_tpl);?>
</h1>
        <ul>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="preferences.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
preferences.php" title="<?php echo smarty_function__T(array('string'=>"Set applications preferences (adress, website, member's cards configuration, ...)"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Settings"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="plugins.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
plugins.php" title="<?php echo smarty_function__T(array('string'=>"Informations about available plugins"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Plugins"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="config_fields.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
config_fields.php" title="<?php echo smarty_function__T(array('string'=>"Customize fields order, set which are required, and for who they're visibles"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Customize fields"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="configurer_fiches.php"||$_smarty_tpl->tpl_vars['PAGENAME']->value=="editer_champ.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
configurer_fiches.php" title="<?php echo smarty_function__T(array('string'=>"Manage additional fields for various forms"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Configure member forms"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="traduire_libelles.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
traduire_libelles.php" title="<?php echo smarty_function__T(array('string'=>"Translate additionnals fields labels"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Translate labels"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_intitules.php"&&$_smarty_tpl->tpl_vars['class']->value=='Status'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_intitules.php?class=Status" title="<?php echo smarty_function__T(array('string'=>"Manage statuses"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Manage statuses"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_intitules.php"&&$_smarty_tpl->tpl_vars['class']->value=='ContributionsTypes'){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_intitules.php?class=ContributionsTypes" title="<?php echo smarty_function__T(array('string'=>"Manage contributions types"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Manage contributions types"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_textes.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_textes.php" title="<?php echo smarty_function__T(array('string'=>"Manage emails texts and subjects"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Emails content"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_titres.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_titres.php" title="<?php echo smarty_function__T(array('string'=>"Manage titles"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Titles"),$_smarty_tpl);?>
</a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="gestion_pdf.php"){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
gestion_pdf.php" title="<?php echo smarty_function__T(array('string'=>"Manage PDF models"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"PDF models"),$_smarty_tpl);?>
</a></li>
        </ul>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['plugins']->value->getMenus($_smarty_tpl->tpl_vars['tpl']->value,$_smarty_tpl->tpl_vars['preferences']->value);?>


        <ul id="langs">
<?php  $_smarty_tpl->tpl_vars['langue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langue']->key => $_smarty_tpl->tpl_vars['langue']->value){
$_smarty_tpl->tpl_vars['langue']->_loop = true;
?>
            <li><a href="?pref_lang=<?php echo $_smarty_tpl->tpl_vars['langue']->value->getID();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['langue']->value->getFlag();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['langue']->value->getName();?>
" lang="<?php echo $_smarty_tpl->tpl_vars['langue']->value->getAbbrev();?>
" class="flag"/></a></li>
<?php } ?>
        </ul>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isLogged()){?>
        <div><?php echo $_smarty_tpl->tpl_vars['login']->value->loggedInAs();?>
</div>
        <a id="logout" class="button" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
index.php?logout=1"><?php echo smarty_function__T(array('string'=>"Log off"),$_smarty_tpl);?>
</a>
<?php }?>
    </div>
    <div id="content"<?php if ($_smarty_tpl->tpl_vars['contentcls']->value){?> class="<?php echo $_smarty_tpl->tpl_vars['contentcls']->value;?>
"<?php }?>>
        <h1 id="titre">
            <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value!='mailing_adherents.php'&&$_smarty_tpl->tpl_vars['existing_mailing']->value==true){?>
                <a class="button" id="sendmail" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
mailing_adherents.php" title="<?php echo smarty_function__T(array('string'=>"A mailing exists in the current session. Click here if you want to resume or cancel it."),$_smarty_tpl);?>
">
                    <?php echo smarty_function__T(array('string'=>"Existing mailing"),$_smarty_tpl);?>

                </a>
            <?php }?>
        </h1>
        <p id="asso_name"><?php echo $_smarty_tpl->tpl_vars['preferences']->value->pref_nom;?>
<?php if ($_smarty_tpl->tpl_vars['preferences']->value->pref_slogan){?>&nbsp;: <?php echo $_smarty_tpl->tpl_vars['preferences']->value->pref_slogan;?>
<?php }?></p>

    <?php echo $_smarty_tpl->getSubTemplate ("global_messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>