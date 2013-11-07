<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:12:10
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/import_model.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173871459452683baa705579-18633158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d822e19354b5ee484415274e1bfb4a7481f40e' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/import_model.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173871459452683baa705579-18633158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaults_loaded' => 0,
    'model' => 0,
    'fields' => 0,
    'field' => 0,
    'members_fields' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683baa7d0750_14906222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683baa7d0750_14906222')) {function content_52683baa7d0750_14906222($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_modifier_replace')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/modifier.replace.php';
?><div id="model_tabs" class="tabbed">
    <ul>
        <li><a href="#current"><?php echo smarty_function__T(array('string'=>"Current model"),$_smarty_tpl);?>
</a></li>
        <li><a href="#change"><?php echo smarty_function__T(array('string'=>"Change model"),$_smarty_tpl);?>
</a></li>
    </ul>
    <div id="current">
        <table class="listing">
            <caption>
                <?php if ($_smarty_tpl->tpl_vars['defaults_loaded']->value){?>
                    <?php echo smarty_function__T(array('string'=>"Default fields"),$_smarty_tpl);?>

                <?php }else{ ?>
                    <?php echo smarty_function__T(array('string'=>"Model parameted on %date",'pattern'=>"/%date/",'replace'=>$_smarty_tpl->tpl_vars['model']->value->getCreationDate()),$_smarty_tpl);?>

                <?php }?>
            </caption>
            <thead>
                <tr>
                    <th><?php echo smarty_function__T(array('string'=>"Field"),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
            <tbody>
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fields_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fields_list']['iteration']++;
?>
                <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fields_list']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                    <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['members_fields']->value[$_smarty_tpl->tpl_vars['field']->value]['label'],':','');?>
</td>
                </tr>
        <?php } ?>
        </table>
        <div class="button-container">
            <a id="memberslist" class="button" href="import_model.php?generate=true"><?php echo smarty_function__T(array('string'=>"Generate empty CSV file"),$_smarty_tpl);?>
</a>
            <?php if (!$_smarty_tpl->tpl_vars['defaults_loaded']->value){?>
            <a id="delete" class="button" href="import_model.php?remove=true"><?php echo smarty_function__T(array('string'=>"Remove model and back to defaults"),$_smarty_tpl);?>
</a>
            <?php }?>
        </div>
    </div>
    <div id="change">
        <form action="import_model.php" method="POST">
        <table class="listing">
            <thead>
                <tr>
                    <th></th>
                    <th><?php echo smarty_function__T(array('string'=>"Field"),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
            <tbody>
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['members_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['members_fields_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['field']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['members_fields_list']['iteration']++;
?>
                <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['members_fields_list']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                    <td>
                        <input type="checkbox" name="fields[]" id="field_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['fields']->value)){?> checked="checked"<?php }?>/>
                    </td>
                    <td>
                        <label for="field_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['label'],':','');?>
</label>
                    </td>
                </tr>
        <?php } ?>
        </table>
        <div class="button-container">
            <input type="submit" name="upload" value="<?php echo smarty_function__T(array('string'=>"Store new model"),$_smarty_tpl);?>
"/>
        </div>
        </form>
    </div>
</div>
<p class="center">
    <a class="button" id="btnback" href="import.php"><?php echo smarty_function__T(array('string'=>"Go back to import page"),$_smarty_tpl);?>
</a>
</p>

<script type="text/javascript">
    $(function(){
        $('#model_tabs').tabs();

        $('input[type="submit"]').click(function(){
            var _checkeds = $('table.listing').find('input[type=checkbox]:checked').length;
            if ( _checkeds == 0 ) {
                var _el = $('<div id="pleaseselect" title="<?php echo smarty_function__T(array('string'=>"No field selected",'escape'=>"js"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Please make sure to select at least one field from the list to perform this action.",'escape'=>"js"),$_smarty_tpl);?>
</div>');
                _el.appendTo('body').dialog({
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $(this).dialog( "close" );
                        }
                    },
                    close: function(event, ui){
                        _el.remove();
                    }
                });
                return false;
            }
        });
    });
</script>
<?php }} ?>