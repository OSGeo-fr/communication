<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 12:23:21
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/ajax_plugins_initdb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1821387371526f9aa99280a1-51311629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6a75a95a68261c7d312ddb7e6ac7a420adeaa3b' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/ajax_plugins_initdb.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821387371526f9aa99280a1-51311629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'step' => 0,
    'plugin' => 0,
    'update_scripts' => 0,
    'val' => 0,
    'last' => 0,
    'eror_detected' => 0,
    'istep' => 0,
    'plugid' => 0,
    'install_type' => 0,
    'error_detected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f9aa9b82b54_46682590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f9aa9b82b54_46682590')) {function content_526f9aa9b82b54_46682590($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if ($_smarty_tpl->tpl_vars['ajax']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("global_messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<form action="ajax_plugins_initdb.php" id="plugins_initdb_form" method="post">
    <div id="installpage">
<?php if ($_smarty_tpl->tpl_vars['step']->value==1){?>
        <p><?php echo smarty_function__T(array('string'=>"Plugin '%name' requires a database to work. These screens will help you setup that one for the first time.",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>
</p>
        <p id="warningbox">
            <?php echo smarty_function__T(array('string'=>"Warning: Don't forget to backup your current database."),$_smarty_tpl);?>

        </p>
        <p><?php echo smarty_function__T(array('string'=>"Select installation mode to launch"),$_smarty_tpl);?>
</p>
        <p>
            <input type="radio" name="install_type" value="install" checked="checked" id="install"/> <label for="install"><?php echo smarty_function__T(array('string'=>"New installation:"),$_smarty_tpl);?>
</label><br />
            <?php echo smarty_function__T(array('string'=>"You're installing '%name' plugin for the first time, or you wish to erase an older version of the plugin without keeping your data",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>

        </p>
    <?php if (count($_smarty_tpl->tpl_vars['update_scripts']->value)>0){?>
        <p><?php echo smarty_function__T(array('string'=>"Update"),$_smarty_tpl);?>
</p>
        <ul class="list">
        <?php if (isset($_smarty_tpl->tpl_vars['last'])) {$_smarty_tpl->tpl_vars['last'] = clone $_smarty_tpl->tpl_vars['last'];
$_smarty_tpl->tpl_vars['last']->value = '0.00'; $_smarty_tpl->tpl_vars['last']->nocache = null; $_smarty_tpl->tpl_vars['last']->scope = 0;
} else $_smarty_tpl->tpl_vars['last'] = new Smarty_variable('0.00', null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['update_scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
            <input type="radio" name="install_type" value="upgrade-<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" id="upgrade-<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"/>
            <label for="upgrade-<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['last']->value!=$_smarty_tpl->tpl_vars['val']->value-number_format(0.01,2)){?>
                <?php echo smarty_function__T(array('string'=>"Your current %name version is comprised between",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['last']->value;?>
 <?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value-number_format(0.01,2);?>
 </label><br />
            <?php }else{ ?>
                <?php echo smarty_function__T(array('string'=>"Your current %name version is",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value-number_format(0.01,2);?>
</label>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['last'])) {$_smarty_tpl->tpl_vars['last'] = clone $_smarty_tpl->tpl_vars['last'];
$_smarty_tpl->tpl_vars['last']->value = $_smarty_tpl->tpl_vars['val']->value; $_smarty_tpl->tpl_vars['last']->nocache = null; $_smarty_tpl->tpl_vars['last']->scope = 0;
} else $_smarty_tpl->tpl_vars['last'] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value, null, 0);?>
        <?php } ?>
        </ul>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['step']->value=='i2'||$_smarty_tpl->tpl_vars['step']->value=='u2'){?>
        <p>
    <?php if ($_smarty_tpl->tpl_vars['step']->value=='i2'){?>
            <?php echo smarty_function__T(array('string'=>"To run, Galette needs a number of rights on the database (CREATE, DROP, DELETE, UPDATE, SELECT and INSERT)"),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value=='u2'){?>
            <?php echo smarty_function__T(array('string'=>"In order to be updated, Galette needs a number of rights on the database (CREATE, DROP, DELETE, UPDATE, SELECT and INSERT)"),$_smarty_tpl);?>

    <?php }?>
        </p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['step']->value=='i3'||$_smarty_tpl->tpl_vars['step']->value=='u3'){?>
        <p><?php echo smarty_function__T(array('string'=>"(Errors on DROP and RENAME operations can be ignored)"),$_smarty_tpl);?>
</p>
    <?php if (count($_smarty_tpl->tpl_vars['eror_detected']->value)>0){?>
        <p id="errorbox">
        <?php if ($_smarty_tpl->tpl_vars['step']->value=='i3'){?>
            <?php echo smarty_function__T(array('string'=>"The tables are not totally created, it may be a permission problem."),$_smarty_tpl);?>

        <?php }else{ ?>
            <?php echo smarty_function__T(array('string'=>"The tables have not been totally created, it may be a permission problem."),$_smarty_tpl);?>

            <br/>
            <?php echo smarty_function__T(array('string'=>"Your database is maybe not usable, try to restore the older version."),$_smarty_tpl);?>

        <?php }?>
        </p>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['step']->value=='i4'||$_smarty_tpl->tpl_vars['step']->value=='u4'){?>
        <p>
            <?php if ($_smarty_tpl->tpl_vars['step']->value=='i4'){?>
                <?php echo smarty_function__T(array('string'=>"Plugin '%name' has been successfully installed!",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>

            <?php }else{ ?>
                <?php echo smarty_function__T(array('string'=>"Plugin '%name' has been successfully updated!",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>

            <?php }?>
        </p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['istep']->value<4){?>
        <p id="submit_btn">
            <input type="hidden" name="plugid" value="<?php echo $_smarty_tpl->tpl_vars['plugid']->value;?>
"/>
    <?php if ($_smarty_tpl->tpl_vars['istep']->value>1){?>
            <input type="hidden" name="install_type" value="<?php echo $_smarty_tpl->tpl_vars['install_type']->value;?>
"/>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['error_detected']->value)==0&&$_smarty_tpl->tpl_vars['istep']->value>=2||$_smarty_tpl->tpl_vars['istep']->value>2){?>
            <input type="hidden" name="install_permsok" value="1"/>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['error_detected']->value)==0&&$_smarty_tpl->tpl_vars['istep']->value>=3||$_smarty_tpl->tpl_vars['istep']->value>3){?>
            <input type="hidden" name="install_dbwrite_ok" value="1"/>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['error_detected']->value)>0){?>
            <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Retry"),$_smarty_tpl);?>
"/>
    <?php }else{ ?>
            <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Next step"),$_smarty_tpl);?>
"/>
    <?php }?>
<?php }else{ ?>
    <?php if ($_smarty_tpl->tpl_vars['ajax']->value){?>
            <a href="#" class="button" id="btnback"><?php echo smarty_function__T(array('string'=>"Close"),$_smarty_tpl);?>
</a>
    <?php }else{ ?>
            <a href="plugins.php" class="button" id="btnback"><?php echo smarty_function__T(array('string'=>"Back to plugins managment page"),$_smarty_tpl);?>
</a>
    <?php }?>
<?php }?>
        </p>
    </div>
</form>
<div id="footerinstall">
    <p><?php echo smarty_function__T(array('string'=>"Steps:"),$_smarty_tpl);?>
</p>
    <ol>
        <li<?php if ($_smarty_tpl->tpl_vars['step']->value==1){?> class="current"<?php }?>><?php echo smarty_function__T(array('string'=>"Installation mode"),$_smarty_tpl);?>
 - </li>
        <li<?php if ($_smarty_tpl->tpl_vars['step']->value=='i2'||$_smarty_tpl->tpl_vars['step']->value=='u2'){?> class="current"<?php }?>><?php echo smarty_function__T(array('string'=>"Access permissions to database"),$_smarty_tpl);?>
 - </li>
        <li<?php if ($_smarty_tpl->tpl_vars['step']->value=='i3'||$_smarty_tpl->tpl_vars['step']->value=='u3'){?> class="current"<?php }?>><?php echo smarty_function__T(array('string'=>"Tables Creation/Update"),$_smarty_tpl);?>
 - </li>
        <li<?php if ($_smarty_tpl->tpl_vars['step']->value=='i4'||$_smarty_tpl->tpl_vars['step']->value=='u4'){?> class="current"<?php }?>><?php echo smarty_function__T(array('string'=>"End!"),$_smarty_tpl);?>
</li>
    </ol>
</div>
<?php }} ?>