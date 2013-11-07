<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:50:47
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/config_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1232063749526844b7c578a4-01247099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b0fa0ab56979056003909bfd58546d0e0f0755' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/config_fields.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1232063749526844b7c578a4-01247099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'categories' => 0,
    'category' => 0,
    'fs' => 0,
    'categorized_fields' => 0,
    'field' => 0,
    'fid' => 0,
    'non_required' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526844b7e17496_44505201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526844b7e17496_44505201')) {function content_526844b7e17496_44505201($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>    
    
    
    <form action="config_fields.php" method="post" id="config_fields_form">
    <div id="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
_tab">
        
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories_list']['iteration']++;
?>
        <fieldset class="cssform large" id="cat_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['categories_list']['iteration'];?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['catname'])) {$_smarty_tpl->tpl_vars['catname'] = clone $_smarty_tpl->tpl_vars['catname'];
$_smarty_tpl->tpl_vars['catname']->value = $_smarty_tpl->tpl_vars['category']->value->category; $_smarty_tpl->tpl_vars['catname']->nocache = null; $_smarty_tpl->tpl_vars['catname']->scope = 0;
} else $_smarty_tpl->tpl_vars['catname'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->category, null, 0);?>
            <input type="hidden" name="categories[]" id="category<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['categories_list']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_field_category;?>
"/>
            <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>((string)$_smarty_tpl->tpl_vars['catname']->value)),$_smarty_tpl);?>
</legend>
            <ul id="sortable_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['categories_list']['iteration'];?>
" class="fields_list connectedSortable">
                <li class="listing ">
                    <span class="label"><?php echo smarty_function__T(array('string'=>"Field name"),$_smarty_tpl);?>
</span>
                    <span class="yesno"><?php echo smarty_function__T(array('string'=>"Required"),$_smarty_tpl);?>
</span>
                    <span class="yesnoadmin"><?php echo smarty_function__T(array('string'=>"Visible"),$_smarty_tpl);?>
</span>
                </li>
    <?php if (isset($_smarty_tpl->tpl_vars['fs'])) {$_smarty_tpl->tpl_vars['fs'] = clone $_smarty_tpl->tpl_vars['fs'];
$_smarty_tpl->tpl_vars['fs']->value = $_smarty_tpl->tpl_vars['category']->value->id_field_category; $_smarty_tpl->tpl_vars['fs']->nocache = null; $_smarty_tpl->tpl_vars['fs']->scope = 0;
} else $_smarty_tpl->tpl_vars['fs'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->id_field_category, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorized_fields']->value[$_smarty_tpl->tpl_vars['fs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fields_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['col']->value = $_smarty_tpl->tpl_vars['field']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fields_list']['iteration']++;
?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_id']!='id_adh'){?>
            <?php if (isset($_smarty_tpl->tpl_vars['fid'])) {$_smarty_tpl->tpl_vars['fid'] = clone $_smarty_tpl->tpl_vars['fid'];
$_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['field']->value['field_id']; $_smarty_tpl->tpl_vars['fid']->nocache = null; $_smarty_tpl->tpl_vars['fid']->scope = 0;
} else $_smarty_tpl->tpl_vars['fid'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
                <li class="tbl_line_<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fields_list']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                    <span class="label">
                        <input type="hidden" name="fields[]" value="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
"/>
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_category" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_field_category;?>
"/>
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_label" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
"/>
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>

                    </span>
                    <span class="yesno" title="<?php if (in_array($_smarty_tpl->tpl_vars['fid']->value,$_smarty_tpl->tpl_vars['non_required']->value)){?><?php echo smarty_function__T(array('string'=>"Field '%field' cannot be set as required.",'pattern'=>"/%field/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['label']),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function__T(array('string'=>"Mark '%field' as (not) required",'pattern'=>"/%field/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['label']),$_smarty_tpl);?>
<?php }?>">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_required_yes"><?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_required" id="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_required_yes" value="1"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']){?> checked="checked"<?php }?><?php if (in_array($_smarty_tpl->tpl_vars['fid']->value,$_smarty_tpl->tpl_vars['non_required']->value)){?> disabled="disabled"<?php }?>/>
                        <label for="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_required_no"><?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_required" id="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_required_no" value="0"<?php if (!$_smarty_tpl->tpl_vars['field']->value['required']){?> checked="checked"<?php }?><?php if (in_array($_smarty_tpl->tpl_vars['fid']->value,$_smarty_tpl->tpl_vars['non_required']->value)){?> disabled="disabled"<?php }?>/>
                    </span>
                    <span class="yesnoadmin" title="<?php echo smarty_function__T(array('string'=>"Change '%field' visibility",'pattern'=>"/%field/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['label']),$_smarty_tpl);?>
">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible_yes"><?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible" id="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible_yes" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\FieldsConfig::VISIBLE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['visible']==constant('Galette\Entity\FieldsConfig::VISIBLE')){?> checked="checked"<?php }?>/>
                        <label for="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible_no"><?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible" id="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible_no" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\FieldsConfig::HIDDEN;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['visible']==constant('Galette\Entity\FieldsConfig::HIDDEN')){?> checked="checked"<?php }?>/>
                        <label for="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible_admin"><?php echo smarty_function__T(array('string'=>"Admin only"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible" id="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
_visible_admin" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\FieldsConfig::ADMIN;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['visible']==constant('Galette\Entity\FieldsConfig::ADMIN')){?> checked="checked"<?php }?>/>
                    </span>
                </li>
        <?php }?>
    <?php } ?>
            </ul>
        </fieldset>
<?php } ?>
    </div>
        <div class="button-container">
            <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
        </div>
    </form>
    <script type="text/javascript">


        var _warnings = [];
        var _checkCoherence = function(index, elt){
            var _elt = $(elt);
            var _disabled = _elt.find('.yesno input:disabled, .yesnoadmin input:disabled');
            if ( _disabled.length == 0 ) {
                var _required = parseInt(_elt.find('.yesno input:checked').val());
                var _visible = parseInt(_elt.find('.yesnoadmin input:checked').val());

                if ( _required === 1 && _visible !== 1 ) {
                    _elt.find('.label').addClass('warnings');
                    _warnings[_warnings.length] = _elt;
                }
            }
        }

        var _bindForm = function(){
            $('#config_fields_form').submit(function(){

                _warnings = [];
                $('.warnings').removeClass('warnings');
                $('.fields_list li').each(_checkCoherence);

                if ( _warnings.length > 0 ) {
                    var _w = $('#warnings');

                    _w.find('li').remove();
                    $.each(_warnings, function(i,w){
                        var _val = w.find('.label').text().trim();
                        _w.find('ul').append('<li>' + _val + '</li>');
                        console.log(w);
                    });

                    _w.dialog({
                        modal: true,
                        buttons: {
                            Ok: function() {
                                $(this).dialog('close');
                            }
                        }
                    });
                    return false;
                } else {
                    return true;
                }
            });
        }

        $(function() {
            $('body').append($('<div id="warnings" title="<?php echo smarty_function__T(array('string'=>"Warning",'escape'=>"js"),$_smarty_tpl);?>
"><p><?php echo smarty_function__T(array('string'=>"Some warnings has been thrown:",'escape'=>"js"),$_smarty_tpl);?>
</p><ul></ul><p><?php echo smarty_function__T(array('string'=>"Please correct above warnings to continue."),$_smarty_tpl);?>
</p></div>').hide());

            _collapsibleFieldsets();
            _bindForm();

        });
    </script>
<?php }} ?>