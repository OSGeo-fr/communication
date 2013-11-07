<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:11:39
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/public_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115598901252683b8bbbbe69-49784975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d0ab89e0c53968d0f7a9f908dc2ca7c46ee7661' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/public_page.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115598901252683b8bbbbe69-49784975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'galette_lang' => 0,
    'additionnal_html_class' => 0,
    'require_calendar' => 0,
    'jquery_dir' => 0,
    'jquery_ui_version' => 0,
    'headers' => 0,
    'header' => 0,
    'head_redirect' => 0,
    'galette_base_path' => 0,
    'logo' => 0,
    'languages' => 0,
    'langue' => 0,
    'login' => 0,
    'GALETTE_MODE' => 0,
    'page_title' => 0,
    'preferences' => 0,
    'PAGENAME' => 0,
    'pref_mail_method' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683b8bd0fea7_74374307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683b8bd0fea7_74374307')) {function content_52683b8bd0fea7_74374307($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['galette_lang']->value;?>
" class="public_page<?php if ($_smarty_tpl->tpl_vars['additionnal_html_class']->value){?> <?php echo $_smarty_tpl->tpl_vars['additionnal_html_class']->value;?>
<?php }?>">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('common_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
        <header>
            <img src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
picture.php?logo=true" width="<?php echo $_smarty_tpl->tpl_vars['logo']->value->getOptimalWidth();?>
" height="<?php echo $_smarty_tpl->tpl_vars['logo']->value->getOptimalHeight();?>
" alt="[ Galette ]" />
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
            <div id="user">
                <a id="userlink" title="<?php echo smarty_function__T(array('string'=>"View your member card"),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
voir_adherent.php"><?php echo $_smarty_tpl->tpl_vars['login']->value->loggedInAs(true);?>
</a>
                <a id="logout" title="<?php echo smarty_function__T(array('string'=>"Log off"),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
index.php?logout=1"><?php echo smarty_function__T(array('string'=>"Log off"),$_smarty_tpl);?>
</a>
            </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?>
        <div id="demo" title="<?php echo smarty_function__T(array('string'=>"This application runs under DEMO mode, all features may not be available."),$_smarty_tpl);?>
">
            <?php echo smarty_function__T(array('string'=>"Demonstration"),$_smarty_tpl);?>

        </div>
<?php }?>
        </header>
        <h1 id="titre"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
        <p id="asso_name"><?php echo $_smarty_tpl->tpl_vars['preferences']->value->pref_nom;?>
<?php if ($_smarty_tpl->tpl_vars['preferences']->value->pref_slogan){?>&nbsp;: <?php echo $_smarty_tpl->tpl_vars['preferences']->value->pref_slogan;?>
<?php }?></p>
        <nav>
            <a id="backhome" class="button<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="index.php"){?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
index.php"><?php echo smarty_function__T(array('string'=>"Home"),$_smarty_tpl);?>
</a>
    <?php if (!$_smarty_tpl->tpl_vars['login']->value->isLogged()){?>
        <?php if ($_smarty_tpl->tpl_vars['preferences']->value->pref_bool_selfsubscribe==true){?>
            <a id="subscribe" class="button<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="self_adherent.php"){?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
self_adherent.php"><?php echo smarty_function__T(array('string'=>"Subscribe"),$_smarty_tpl);?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pref_mail_method']->value!=constant('Galette\Core\GaletteMail::METHOD_DISABLED')){?>
            <a id="lostpassword" class="button<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="lostpasswd.php"){?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
lostpasswd.php"><?php echo smarty_function__T(array('string'=>"Lost your password?"),$_smarty_tpl);?>
</a>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['preferences']->value->showPublicPages()==true){?>
            <a id="memberslist" class="button<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="liste_membres.php"){?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
public/liste_membres.php" title="<?php echo smarty_function__T(array('string'=>"Members list"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Members list"),$_smarty_tpl);?>
</a>
            <a id="trombino" class="button<?php if ($_smarty_tpl->tpl_vars['PAGENAME']->value=="trombinoscope.php"){?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
public/trombinoscope.php" title="<?php echo smarty_function__T(array('string'=>"Trombinoscope"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Trombinoscope"),$_smarty_tpl);?>
</a>
    <?php }?>
        </nav>
        <?php echo $_smarty_tpl->getSubTemplate ("global_messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html>
<?php }} ?>