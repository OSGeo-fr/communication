<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:11:39
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32891033252683b8be1cc09-14916944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65afe7c018bd89e701e7e24b0e940f7863e564ef' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/footer.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32891033252683b8be1cc09-14916944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GALETTE_VERSION' => 0,
    'login' => 0,
    'galette_base_path' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683b8be5dbd5_92301968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683b8be5dbd5_92301968')) {function content_52683b8be5dbd5_92301968($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <footer>
            <a id="copyright" href="http://galette.tuxfamily.org/">Galette <?php echo $_smarty_tpl->tpl_vars['GALETTE_VERSION']->value;?>
</a>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isLogged()&&($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())){?>
            <br/><a id="sysinfos" href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
sysinfos.php"><?php echo smarty_function__T(array('string'=>"System informations"),$_smarty_tpl);?>
</a>
<?php }?>
            <nav>
                <ul>
                    <li><strong><?php echo smarty_function__T(array('string'=>"The project: "),$_smarty_tpl);?>
</strong></li>
                    <li><a href="http://galette.tuxfamily.org"><?php echo smarty_function__T(array('string'=>"Website"),$_smarty_tpl);?>
</a></li>
                    <li><a href="http://galette.tuxfamily.org/documentation/"><?php echo smarty_function__T(array('string'=>"Documentation"),$_smarty_tpl);?>
</a></li>
                </ul>
                <ul>
                    <li>
                        <a href="https://twitter.com/galette_soft" class="twitter-galette-button"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/twitter.png" alt="<?php echo smarty_function__T(array('string'=>"%s on Twitter!",'pattern'=>"/%s/",'replace'=>"@galette_soft"),$_smarty_tpl);?>
"/></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/116977415489200387309"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/gplus.png" alt="<?php echo smarty_function__T(array('string'=>"%s on Google+!",'pattern'=>"/%s/",'replace'=>"Galette"),$_smarty_tpl);?>
"/></a>
                    </li>
                </ul>
            </nav>
        </footer>

<?php }} ?>