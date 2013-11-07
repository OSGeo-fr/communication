<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 00:41:16
         compiled from "templates/default/admintools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1411025265526ef61c0a0046-41280297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a1ec6ef95a2732be1feb40936f20279b356e3e3' => 
    array (
      0 => 'templates/default/admintools.tpl',
      1 => 1376124571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1411025265526ef61c0a0046-41280297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules_res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ef61c117a66_20352636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ef61c117a66_20352636')) {function content_526ef61c117a66_20352636($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>    <section>
        <form action="" method="post">
            <fieldset>
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Content tools"),$_smarty_tpl);?>
</legend>
                <div class="warningbox">
                    <p><?php echo smarty_function__T(array('string'=>"Make sure you've done a backup of the database before using any of the following tools!"),$_smarty_tpl);?>
</p>
                </div>
                <article>
                    <p class="center">
                        <input name="inittexts" type="submit" value="<?php echo smarty_function__T(array('string'=>"Reinitialize emails contents"),$_smarty_tpl);?>
"/>
                        <input name="initfields" type="submit" value="<?php echo smarty_function__T(array('string'=>"Reinitialize fields configuration"),$_smarty_tpl);?>
"/>
                        <input name="initpdfmodels" type="submit" value="<?php echo smarty_function__T(array('string'=>"Reinitialize PDF models"),$_smarty_tpl);?>
"/>
                    </p>
                </article>
                <article>
                    <p class="center">
                        <input name="emptylogins" type="submit" value="<?php echo smarty_function__T(array('string'=>"Generate values for empty logins and passwords"),$_smarty_tpl);?>
"/>
                    </p>
                </article>
                <article>
                    <p class="center">
                        <input name="checkmodules" type="submit" value="<?php echo smarty_function__T(array('string'=>"Check PHP modules"),$_smarty_tpl);?>
"/>
                    </p>
                </article>
            </fieldset>
<?php if (@constant('TYPE_DB')=='mysql'){?>
            <fieldset>
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Database tools"),$_smarty_tpl);?>
</legend>
                <div class="warningbox">
                    <p><?php echo smarty_function__T(array('string'=>"Make sure you've done a backup of the database before using any of the following tools!"),$_smarty_tpl);?>
</p>
                </div>
                <article>
                    <p>
                        <span><?php echo smarty_function__T(array('string'=>"That function is available for MySQL installations only!"),$_smarty_tpl);?>
</span><br/>
                        <?php echo smarty_function__T(array('string'=>"Converts the whole database data to UTF-8, do not change anything on the tables, just proceed data conversion."),$_smarty_tpl);?>
<br/>
                        <?php echo smarty_function__T(array('string'=>"You should use that function if you can see strange characters in your datas; after a manual import, or if you've not used Galette's update scripts."),$_smarty_tpl);?>
<br/>
                        <?php echo smarty_function__T(array('string'=>"That conversion stuff will read your entire database, and write back each non UTF-8 values after conversion; this may take a while."),$_smarty_tpl);?>

                    </p>
                    <p class="center">
                        <input name="convert_encoding" type="submit" value="<?php echo smarty_function__T(array('string'=>"Convert encoding"),$_smarty_tpl);?>
"/>
                    </p>
                </article>
            </fieldset>
<?php }?>
        </form>
    </section>
<?php if (isset($_smarty_tpl->tpl_vars['modules_res']->value)){?>
    <section id="modules" title="<?php echo smarty_function__T(array('string'=>"Modules report"),$_smarty_tpl);?>
">
        <?php echo $_smarty_tpl->tpl_vars['modules_res']->value;?>

    </section>
    <script type="text/javascript">
        $(function(){
            $('#modules').dialog({
                modal: true,
                hide: 'fold',
                width: '40%'
            });
        });
    </script>
<?php }?>
<?php }} ?>