<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:56:59
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/advanced_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17779349375268462bab5093-55262497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471c154d752d9969c190b72560e1b1049673cad9' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/advanced_search.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17779349375268462bab5093-55262497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filters' => 0,
    'filter_field_options' => 0,
    'filter_membership_options' => 0,
    'filter_accounts_options' => 0,
    'filter_groups_options' => 0,
    'group' => 0,
    'statuts' => 0,
    'contributions_types' => 0,
    'payments_types' => 0,
    'cdynamic_fields' => 0,
    'field' => 0,
    'rid' => 0,
    'k' => 0,
    'cds' => 0,
    'choice' => 0,
    'fs' => 0,
    'search_fields' => 0,
    'dynamic_fields' => 0,
    'galette_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268462bea1b57_31743477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268462bea1b57_31743477')) {function content_5268462bea1b57_31743477($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?>        <form action="gestion_adherents.php" method="post" id="filtre">
            <fieldset class="cssform large">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Simple search"),$_smarty_tpl);?>
</legend>
                <div>
                    <p>
                        <label class="bline" for="filter_str"><?php echo smarty_function__T(array('string'=>"Search:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="filter_str" id="filter_str" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->filter_str;?>
" type="search" placeholder="<?php echo smarty_function__T(array('string'=>"Enter a value"),$_smarty_tpl);?>
"/>&nbsp;
                        <?php echo smarty_function__T(array('string'=>"in:"),$_smarty_tpl);?>
&nbsp;
                        <select name="filter_field">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filter_field_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->field_filter),$_smarty_tpl);?>

                        </select>
                    </p>
                    <p>
                        <label class="bline" for="filter_membership"><?php echo smarty_function__T(array('string'=>"Membership status"),$_smarty_tpl);?>
</label>
                        <select id="filter_membership" name="filter_membership">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filter_membership_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->membership_filter),$_smarty_tpl);?>

                        </select>
                    </p>
                    <p>
                        <label class="bline" for="filter_account"><?php echo smarty_function__T(array('string'=>"Account activity"),$_smarty_tpl);?>
</label>
                        <select id="filter_account" name="filter_account">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filter_accounts_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->account_status_filter),$_smarty_tpl);?>

                        </select>
                    </p>
                    <p>
                        <label class="bline" for="group_filter"><?php echo smarty_function__T(array('string'=>"Member of group"),$_smarty_tpl);?>
</label>
                        <select name="group_filter" onchange="form.submit()">
                            <option value="0"><?php echo smarty_function__T(array('string'=>"Select a group"),$_smarty_tpl);?>
</option>
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_groups_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['filters']->value->group_filter==$_smarty_tpl->tpl_vars['group']->value->getId()){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value->getName();?>
</option>
<?php } ?>
                        </select>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"With mail:"),$_smarty_tpl);?>
</span>
                        <input type="radio" name="email_filter" id="filter_dc_email" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::FILTER_DC_EMAIL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['filters']->value->email_filter==constant('Galette\Repository\Members::FILTER_DC_EMAIL')){?> checked="checked"<?php }?>>
                        <label for="filter_dc_email" ><?php echo smarty_function__T(array('string'=>"Don't care"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="email_filter" id="filter_with_email" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::FILTER_W_EMAIL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['filters']->value->email_filter==constant('Galette\Repository\Members::FILTER_W_EMAIL')){?> checked="checked"<?php }?>>
                        <label for="filter_with_email" ><?php echo smarty_function__T(array('string'=>"With"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="email_filter" id="filter_without_email" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::FILTER_WO_EMAIL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['filters']->value->email_filter==constant('Galette\Repository\Members::FILTER_WO_EMAIL')){?> checked="checked"<?php }?>>
                        <label for="filter_without_email" ><?php echo smarty_function__T(array('string'=>"Without"),$_smarty_tpl);?>
</label>
                    </p>
                </div>
            </fieldset>
            <fieldset class="cssform large">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Advanced search"),$_smarty_tpl);?>
</legend>
                <div>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Creation date"),$_smarty_tpl);?>
</span>
                        <label for="creation_date_begin"><?php echo smarty_function__T(array('string'=>"beetween"),$_smarty_tpl);?>
</label>
                        <input id="creation_date_begin" name="creation_date_begin" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->creation_date_begin;?>
"/>
                        <label for="creation_date_end"><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</label>
                        <input id="creation_date_end" name="creation_date_end" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->creation_date_end;?>
"/>
                    </p>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Modification date"),$_smarty_tpl);?>
</span>
                        <label for="modif_date_begin"><?php echo smarty_function__T(array('string'=>"beetween"),$_smarty_tpl);?>
</label>
                        <input id="modif_date_begin" name="modif_date_begin" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->modif_date_begin;?>
"/>
                        <label for="modif_date_end"><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</label>
                        <input id="modif_date_end" name="modif_date_end" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->modif_date_end;?>
"/>
                    </p>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Due date"),$_smarty_tpl);?>
</span>
                        <label for="due_date_begin"><?php echo smarty_function__T(array('string'=>"beetween"),$_smarty_tpl);?>
</label>
                        <input id="due_date_begin" name="due_date_begin" type="text" class="due_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->due_date_begin;?>
"/>
                        <label for="due_date_end"><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</label>
                        <input id="due_date_end" name="due_date_end" type="text" class="due_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->due_date_end;?>
"/>
                    </p>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Show public infos"),$_smarty_tpl);?>
</span>
                        <input type="radio" name="show_public_infos" id="show_public_infos_dc" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::FILTER_DC_PUBINFOS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['filters']->value->show_public_infos==constant('Galette\Repository\Members::FILTER_DC_PUBINFOS')){?> checked="checked"<?php }?>>
                        <label for="show_public_infos_dc" ><?php echo smarty_function__T(array('string'=>"Don't care"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="show_public_infos" id="show_public_infos_yes" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::FILTER_W_PUBINFOS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['filters']->value->show_public_infos==constant('Galette\Repository\Members::FILTER_W_PUBINFOS')){?> checked="checked"<?php }?>>
                        <label for="show_public_infos_yes" ><?php echo smarty_function__T(array('string'=>"Yes"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="show_public_infos" id="show_public_infos_no" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::FILTER_WO_PUBINFOS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['filters']->value->show_public_infos==constant('Galette\Repository\Members::FILTER_WO_PUBINFOS')){?> checked="checked"<?php }?>>
                        <label for="show_public_infos_no" ><?php echo smarty_function__T(array('string'=>"No"),$_smarty_tpl);?>
</label>
                    </p>
                    <p>
                        <label class="bline" for="status"><?php echo smarty_function__T(array('string'=>"Statuts"),$_smarty_tpl);?>
</label>
                        <select name="status[]" id="status" multiple="multiple">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['statuts']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->status),$_smarty_tpl);?>

                        </select>
                    </p>
                </div>
            </fieldset>
            <fieldset class="cssform large">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Within contributions"),$_smarty_tpl);?>
</legend>
                <div>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Creation date"),$_smarty_tpl);?>
</span>
                        <label for="contrib_creation_date_begin"><?php echo smarty_function__T(array('string'=>"beetween"),$_smarty_tpl);?>
</label>
                        <input id="contrib_creation_date_begin" name="contrib_creation_date_begin" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_creation_date_begin;?>
"/>
                        <label for="contrib_creation_date_end"><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</label>
                        <input id="contrib_creation_date_end" name="contrib_creation_date_end" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_creation_date_end;?>
"/>
                    </p>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Begin date"),$_smarty_tpl);?>
</span>
                        <label for="contrib_begin_date_begin"><?php echo smarty_function__T(array('string'=>"beetween"),$_smarty_tpl);?>
</label>
                        <input id="contrib_begin_date_begin" name="contrib_begin_date_begin" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_begin_date_begin;?>
"/>
                        <label for="contrib_begin_date_end"><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</label>
                        <input id="contrib_begin_date_end" name="contrib_begin_date_end" type="text" class="modif_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_begin_date_end;?>
"/>
                    </p>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"End date"),$_smarty_tpl);?>
</span>
                        <label for="contrib_end_date_begin"><?php echo smarty_function__T(array('string'=>"beetween"),$_smarty_tpl);?>
</label>
                        <input id="contrib_end_date_begin" name="contrib_end_date_begin" type="text" class="due_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_end_date_begin;?>
"/>
                        <label for="contrib_end_date_end"><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</label>
                        <input id="contrib_end_date_end" name="contrib_end_date_end" type="text" class="due_date" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_end_date_end;?>
"/>
                    </p>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Amount"),$_smarty_tpl);?>
</span>
                        <label for="contrib_min_amount"><?php echo smarty_function__T(array('string'=>"beetween"),$_smarty_tpl);?>
</label>
                        <input id="contrib_min_amount" name="contrib_min_amount" type="text" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_min_amount;?>
"/>
                        <label for="contrib_max_amount"><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</label>
                        <input id="contrib_max_amount" name="contrib_max_amount" type="text" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_max_amount;?>
"/>
                    </p>
                    <p>
                        <label class="bline" for="contributions_types"><?php echo smarty_function__T(array('string'=>"Type"),$_smarty_tpl);?>
</label>
                        <select name="contributions_types[]" id="contributions_types" multiple="multiple">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['contributions_types']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->contributions_types),$_smarty_tpl);?>

                        </select>
                    </p>
                    <p>
                        <label class="bline" for="payments_types"><?php echo smarty_function__T(array('string'=>"Payment type"),$_smarty_tpl);?>
</label>
                        <select name="payments_types[]" id="payments_types" multiple="multiple">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['payments_types']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->payments_types),$_smarty_tpl);?>

                        </select>
                    </p>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cdynamic_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['fid'])) {$_smarty_tpl->tpl_vars['fid'] = clone $_smarty_tpl->tpl_vars['fid'];
$_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['field']->value['field_id']; $_smarty_tpl->tpl_vars['fid']->nocache = null; $_smarty_tpl->tpl_vars['fid']->scope = 0;
} else $_smarty_tpl->tpl_vars['fid'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>
        <?php if (isset($_smarty_tpl->tpl_vars['rid'])) {$_smarty_tpl->tpl_vars['rid'] = clone $_smarty_tpl->tpl_vars['rid'];
$_smarty_tpl->tpl_vars['rid']->value = "cdsc_".((string)$_smarty_tpl->tpl_vars['fid']->value); $_smarty_tpl->tpl_vars['rid']->nocache = null; $_smarty_tpl->tpl_vars['rid']->scope = 0;
} else $_smarty_tpl->tpl_vars['rid'] = new Smarty_variable("cdsc_".((string)$_smarty_tpl->tpl_vars['fid']->value), null, 0);?>
    <?php }else{ ?>
        <?php if (isset($_smarty_tpl->tpl_vars['rid'])) {$_smarty_tpl->tpl_vars['rid'] = clone $_smarty_tpl->tpl_vars['rid'];
$_smarty_tpl->tpl_vars['rid']->value = "cds_".((string)$_smarty_tpl->tpl_vars['fid']->value); $_smarty_tpl->tpl_vars['rid']->nocache = null; $_smarty_tpl->tpl_vars['rid']->scope = 0;
} else $_smarty_tpl->tpl_vars['rid'] = new Smarty_variable("cds_".((string)$_smarty_tpl->tpl_vars['fid']->value), null, 0);?>
    <?php }?>
                    <p>
                        <label class="bline" for="cds<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
</label>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::LINE')){?>
                        <input type="text" name="cds<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
" id="cds<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['filters']->value->contrib_dynamic[$_smarty_tpl->tpl_vars['rid']->value])){?><?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_dynamic[$_smarty_tpl->tpl_vars['rid']->value];?>
<?php }?>" />
    <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::TEXT')){?>
                        <textarea name="cds<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
" id="cds<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['filters']->value->contrib_dynamic[$_smarty_tpl->tpl_vars['rid']->value])){?><?php echo $_smarty_tpl->tpl_vars['filters']->value->contrib_dynamic[$_smarty_tpl->tpl_vars['rid']->value];?>
<?php }?></textarea>
    <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>
                        <select name="cds<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
[]" id="cds<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
" multiple="multiple">
                            <option value=""><?php echo smarty_function__T(array('string'=>"Select"),$_smarty_tpl);?>
</option>
        <?php  $_smarty_tpl->tpl_vars['choice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['choice']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['choices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['choice']->key => $_smarty_tpl->tpl_vars['choice']->value){
$_smarty_tpl->tpl_vars['choice']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['choice']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['cds']->value['field'])&&$_smarty_tpl->tpl_vars['cds']->value['field']==$_smarty_tpl->tpl_vars['rid']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['choice']->value;?>
</option>
        <?php } ?>
                        </select>
    <?php }?>
                    </p>
<?php } ?>
                </div>
            </fieldset>
            <fieldset class="cssform large">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Free search"),$_smarty_tpl);?>
<a class="clearfilter" href="#" title="<?php echo smarty_function__T(array('string'=>"Add new free search criteria"),$_smarty_tpl);?>
" id="btnadd_small"><?php echo smarty_function__T(array('string'=>"Add"),$_smarty_tpl);?>
</a></legend>
                <ul id="fs_sortable" class="fields_list connectedSortable">
<?php  $_smarty_tpl->tpl_vars['fs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value->free_search; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fs']->key => $_smarty_tpl->tpl_vars['fs']->value){
$_smarty_tpl->tpl_vars['fs']->_loop = true;
?>
                    <li>
                        <select name="free_logical_operator[]">
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_AND;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['log_op']==constant('Galette\Filters\AdvancedMembersList::OP_AND')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"and"),$_smarty_tpl);?>
</option>
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_OR;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['log_op']==constant('Galette\Filters\AdvancedMembersList::OP_OR')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"or"),$_smarty_tpl);?>
</option>
                        </select>
                        <select name="free_field[]">
                            <option value=""><?php echo smarty_function__T(array('string'=>"Select a field"),$_smarty_tpl);?>
</option>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['field']->key;?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['field']==$_smarty_tpl->tpl_vars['field']->key){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</option>
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dynamic_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
        <?php if (isset($_smarty_tpl->tpl_vars['fid'])) {$_smarty_tpl->tpl_vars['fid'] = clone $_smarty_tpl->tpl_vars['fid'];
$_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['field']->value['field_id']; $_smarty_tpl->tpl_vars['fid']->nocache = null; $_smarty_tpl->tpl_vars['fid']->scope = 0;
} else $_smarty_tpl->tpl_vars['fid'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>
            <?php if (isset($_smarty_tpl->tpl_vars['rid'])) {$_smarty_tpl->tpl_vars['rid'] = clone $_smarty_tpl->tpl_vars['rid'];
$_smarty_tpl->tpl_vars['rid']->value = "dync_".((string)$_smarty_tpl->tpl_vars['fid']->value); $_smarty_tpl->tpl_vars['rid']->nocache = null; $_smarty_tpl->tpl_vars['rid']->scope = 0;
} else $_smarty_tpl->tpl_vars['rid'] = new Smarty_variable("dync_".((string)$_smarty_tpl->tpl_vars['fid']->value), null, 0);?>
        <?php }else{ ?>
            <?php if (isset($_smarty_tpl->tpl_vars['rid'])) {$_smarty_tpl->tpl_vars['rid'] = clone $_smarty_tpl->tpl_vars['rid'];
$_smarty_tpl->tpl_vars['rid']->value = "dyn_".((string)$_smarty_tpl->tpl_vars['fid']->value); $_smarty_tpl->tpl_vars['rid']->nocache = null; $_smarty_tpl->tpl_vars['rid']->scope = 0;
} else $_smarty_tpl->tpl_vars['rid'] = new Smarty_variable("dyn_".((string)$_smarty_tpl->tpl_vars['fid']->value), null, 0);?>
        <?php }?>
                                    <option value="dyn<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==constant('Galette\Entity\DynamicFields::CHOICE')){?>c<?php }?>_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['field']==$_smarty_tpl->tpl_vars['rid']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
</option>
    <?php } ?>
                        </select>
                        <select name="free_query_operator[]">
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_EQUALS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['qry_op']==constant('Galette\Filters\AdvancedMembersList::OP_EQUALS')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"is"),$_smarty_tpl);?>
</option>
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_CONTAINS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['qry_op']==constant('Galette\Filters\AdvancedMembersList::OP_CONTAINS')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"contains"),$_smarty_tpl);?>
</option>
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_NOT_EQUALS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['qry_op']==constant('Galette\Filters\AdvancedMembersList::OP_NOT_EQUALS')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"is not"),$_smarty_tpl);?>
</option>
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_NOT_CONTAINS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['qry_op']==constant('Galette\Filters\AdvancedMembersList::OP_NOT_CONTAINS')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"do not contains"),$_smarty_tpl);?>
</option>
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_STARTS_WITH;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['qry_op']==constant('Galette\Filters\AdvancedMembersList::OP_STARTS_WITH')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"starts with"),$_smarty_tpl);?>
</option>
                            <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Filters\AdvancedMembersList::OP_ENDS_WITH;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['fs']->value['qry_op']==constant('Galette\Filters\AdvancedMembersList::OP_ENDS_WITH')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"ends with"),$_smarty_tpl);?>
</option>
                        </select>
                        <a class="fright clearfilter" href="#" title="<?php echo smarty_function__T(array('string'=>"Remove criteria"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Remove criteria"),$_smarty_tpl);?>
</a>
                        <br/>
                        <input type="text" name="free_text[]" class="large" value="<?php echo $_smarty_tpl->tpl_vars['fs']->value['search'];?>
"/>
                    </li>
<?php } ?>
                </ul>
            </fieldset>

            <div class="center">
                <input type="hidden" name="advanced_filtering" value="true" />
                <input type="submit" class="inline" value="<?php echo smarty_function__T(array('string'=>"Filter"),$_smarty_tpl);?>
"/>
                <input type="submit" name="clear_adv_filter" class="inline" value="<?php echo smarty_function__T(array('string'=>"Clear filter"),$_smarty_tpl);?>
"/>
            </div>
        </form>
        <script type="text/javascript">
            var _newFilter = function(elt) {
                elt.find('input').val('');
                elt.find('select').val('');
            }
            var _rmFilter = function(elt) {
                if ( !elt ) {
                    elt = $('li');
                }
                elt.find('.clearfilter').click(function(){
                    var _this = $(this);
                    if ( _this.parents('ul').find('li').length > 1 ) {
                        _this.parent('li').remove();
                    } else {
                        _newFilter(_this.parent('li'));
                    }
                    return false;
                });
            }

            $(function(){
                _collapsibleFieldsets();
                _initSortable();

                $.datepicker.setDefaults($.datepicker.regional['<?php echo $_smarty_tpl->tpl_vars['galette_lang']->value;?>
']);
                $('.modif_date').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    showOn: 'button',
                    buttonImage: './templates/default/images/calendar.png',
                    buttonImageOnly: true,
                    maxDate: '-0d',
                    yearRange: 'c-10:c+0'
                });
                $('.due_date').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    showOn: 'button',
                    buttonImage: './templates/default/images/calendar.png',
                    buttonImageOnly: true,
                    yearRange: 'c-10:c+5'
                });

                $('#btnadd_small').click(function(){
                    var _ul = $('#fs_sortable');
                    var _new = _ul.find('li').last().clone();
                    _newFilter(_new);
                    _rmFilter(_new);
                    _ul.append(_new);
                    _fieldsInSortable();
                    return false;
                });

                _rmFilter();
            });
        </script>
<?php }} ?>