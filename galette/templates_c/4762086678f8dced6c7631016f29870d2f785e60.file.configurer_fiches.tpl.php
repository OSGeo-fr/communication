<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:51:05
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/configurer_fiches.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1423750587526844c9d777a7-37038450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4762086678f8dced6c7631016f29870d2f785e60' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/configurer_fiches.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423750587526844c9d777a7-37038450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perm_names' => 0,
    'field_type_names' => 0,
    'form_name' => 0,
    'all_forms' => 0,
    'key' => 0,
    'form' => 0,
    'activetab' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526844c9e4aa64_19945802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526844c9e4aa64_19945802')) {function content_526844c9e4aa64_19945802($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_escape')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/modifier.escape.php';
?>        <form action="configurer_fiches.php" method="post" enctype="multipart/form-data" class="tabbed">
            <div id="addfield" class="cssform">
                <p>
                    <label for="field_name" class="bline"><?php echo smarty_function__T(array('string'=>"Field name"),$_smarty_tpl);?>
</label>
                    <input size="40" type="text" name="field_name" id="field_name"/>
                </p>
                <p>
                    <label for="field_perm" class="bline"><?php echo smarty_function__T(array('string'=>"Visibility"),$_smarty_tpl);?>
</label>
                    <select name="field_perm" id="field_perm">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['perm_names']->value,'selected'=>"0"),$_smarty_tpl);?>

                    </select>
                </p>
                <p>
                    <label for="field_type" class="bline"><?php echo smarty_function__T(array('string'=>"Type"),$_smarty_tpl);?>
</label>
                    <select name="field_type" id="field_type">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['field_type_names']->value,'selected'=>"0"),$_smarty_tpl);?>

                    </select>
                </p>
                <p>
                    <label for="field_required" class="bline"><?php echo smarty_function__T(array('string'=>"Required"),$_smarty_tpl);?>
</label>
                    <select name="field_required" id="field_required">
                        <option value="0"><?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>
</option>
                        <option value="1"><?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>
</option>
                    </select>
                </p>
                <div class="center">
                    <input type="submit" name="valid" id="btnadd" value="<?php echo smarty_function__T(array('string'=>"Add"),$_smarty_tpl);?>
"/>
                    <input type="hidden" name="form" id="formname" value="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
"/>
                </div>
            </div>

        <div id="configfiches_tabs">
        <ul>
<?php  $_smarty_tpl->tpl_vars['form'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_forms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['formseach']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['form']->key => $_smarty_tpl->tpl_vars['form']->value){
$_smarty_tpl->tpl_vars['form']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['form']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['formseach']['iteration']++;
?>
    <?php if ($_smarty_tpl->tpl_vars['form_name']->value==$_smarty_tpl->tpl_vars['key']->value){?>
        <?php if (isset($_smarty_tpl->tpl_vars['activetab'])) {$_smarty_tpl->tpl_vars['activetab'] = clone $_smarty_tpl->tpl_vars['activetab'];
$_smarty_tpl->tpl_vars['activetab']->value = $_smarty_tpl->getVariable('smarty')->value['foreach']['formseach']['iteration']; $_smarty_tpl->tpl_vars['activetab']->nocache = null; $_smarty_tpl->tpl_vars['activetab']->scope = 0;
} else $_smarty_tpl->tpl_vars['activetab'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['formseach']['iteration'], null, 0);?>
    <?php }?>
            <li<?php if ($_smarty_tpl->tpl_vars['form_name']->value==$_smarty_tpl->tpl_vars['key']->value){?> class="ui-tabs-selected"<?php }?>><a href="?form=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['form']->value;?>
</a></li>
<?php } ?>
        </ul>
        <div id="ui-tabs-<?php echo $_smarty_tpl->tpl_vars['activetab']->value;?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("configurer_fiche_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        </div>
        </form>
        <script type="text/javascript">
            $('#configfiches_tabs').append('<a class="button notext" id="btnadd_small"><?php echo smarty_function__T(array('string'=>"Add"),$_smarty_tpl);?>
</a>');
            var _dialogform = $('<form id="dialogform" action="configurer_fiches.php" method="post" title="<?php echo smarty_function__T(array('string'=>"Add new dynamic field"),$_smarty_tpl);?>
"">');
            _dialogform.append($('#addfield'));
            _dialogform.dialog({
                autoOpen: false,
                modal: true,
                hide: 'fold',
                width: '40%'
            }).dialog('close');

            $('#btnadd_small').click(function(){
                $('#dialogform').dialog('open');
                return false;
            });

            $('#configfiches_tabs > ul > li > a').each(function(){
                $(this).attr('href', $(this).attr('href')  + '&ajax=true');
            });

            $('#configfiches_tabs').tabs({
                load: function(event, ui) {
                    $('#configfiches_tabs input:submit, #configfiches_tabs .button, #configfiches_tabs input:reset' ).button();
                },
                beforeLoad: function(event, ui) {
                    var _reg = /\?form=(.*)&ajax=true/g;
                    $('#formname').val(_reg.exec(ui.ajaxSettings.url)[1]);
                    if ( ui.ajaxSettings.url.match(/\?form=<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
.*/) ) {
                        return false; //avoid reloading first tab onload
                    }

                    var _img = $('<figure id="loading"><p><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/loading.png" alt="<?php echo smarty_function__T(array('string'=>"Loading..."),$_smarty_tpl);?>
"/><br/><?php echo smarty_function__T(array('string'=>"Currently loading..."),$_smarty_tpl);?>
</p></figure>');
                    $('body').append(_img);

                    ui.jqXHR.complete(function(){
                        $('#loading').remove();
                    });

                    ui.jqXHR.error(function(){
                        alert('<?php echo smarty_function__T(array('string'=>smarty_modifier_escape("An error occured :(", "js")),$_smarty_tpl);?>
');
                    });
                }
            });
        </script>
<?php }} ?>