<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:47:57
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/ajouter_contribution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17337178625268440def2878-90534801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dbe6002b05e8ae0ade2f9d9d3bb8e4719732c67' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/ajouter_contribution.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17337178625268440def2878-90534801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head_redirect' => 0,
    'adh_options' => 0,
    'contribution' => 0,
    'galette_base_path' => 0,
    'template_subdir' => 0,
    'disabled' => 0,
    'adh_selected' => 0,
    'k' => 0,
    'v' => 0,
    'type_selected' => 0,
    'required' => 0,
    'type_cotis_options' => 0,
    'selectedid' => 0,
    'pref_membership_ext' => 0,
    'pref_mail_method' => 0,
    'galette_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268440e22e029_94772473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268440e22e029_94772473')) {function content_5268440e22e029_94772473($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?><?php if (!$_smarty_tpl->tpl_vars['head_redirect']->value){?>
<?php if (isset($_smarty_tpl->tpl_vars['adh_options']->value)){?>
        <form action="ajouter_contribution.php" method="post">
        <div class="bigtable">
    <?php if ($_smarty_tpl->tpl_vars['contribution']->value->isTransactionPart()){?>
        <?php if (isset($_smarty_tpl->tpl_vars["mid"])) {$_smarty_tpl->tpl_vars["mid"] = clone $_smarty_tpl->tpl_vars["mid"];
$_smarty_tpl->tpl_vars["mid"]->value = $_smarty_tpl->tpl_vars['contribution']->value->transaction->member; $_smarty_tpl->tpl_vars["mid"]->nocache = null; $_smarty_tpl->tpl_vars["mid"]->scope = 0;
} else $_smarty_tpl->tpl_vars["mid"] = new Smarty_variable($_smarty_tpl->tpl_vars['contribution']->value->transaction->member, null, 0);?>
            <table id="transaction_detail">
                <caption><?php echo smarty_function__T(array('string'=>"Related transaction informations"),$_smarty_tpl);?>
</caption>
                <thead>
                    <tr>
                        <td colspan="5">
                            <?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->description;?>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
ajouter_transaction.php?trans_id=<?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->id;?>
" title="<?php echo smarty_function__T(array('string'=>"View transaction"),$_smarty_tpl);?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-money.png"
                                    alt="<?php echo smarty_function__T(array('string'=>"[view]"),$_smarty_tpl);?>
"
                                    width="16"
                                    height="16"/>
                            </a>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="listing">#</th>
                        <th class="listing"><?php echo smarty_function__T(array('string'=>"Date"),$_smarty_tpl);?>
</th>
                        <th class="listing"><?php echo smarty_function__T(array('string'=>"Member"),$_smarty_tpl);?>
</th>
                        <th class="listing"><?php echo smarty_function__T(array('string'=>"Amount"),$_smarty_tpl);?>
</th>
                        <th class="listing"><?php echo smarty_function__T(array('string'=>"Not dispatched amount"),$_smarty_tpl);?>
</th>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->date;?>
</td>
                        <td><?php echo getMemberName(array('id'=>((string)$_smarty_tpl->tpl_vars['mid']->value)),$_smarty_tpl);?>
</td>
                        <td class="right"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->amount;?>
</td>
                        <td class="right"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->getMissingAmount();?>
</td>
                    </tr>
                </tbody>
            </table>
    <?php }?>
            <p><?php echo smarty_function__T(array('string'=>"NB : The mandatory fields are in"),$_smarty_tpl);?>
 <span class="required"><?php echo smarty_function__T(array('string'=>"red"),$_smarty_tpl);?>
</span></p>
            <fieldset class="cssform">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Select contributor and contribution type"),$_smarty_tpl);?>
</legend>
                <p>
                    <label for="id_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Contributor:"),$_smarty_tpl);?>
</label>
                    <select name="id_adh" id="id_adh"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['id_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['id_adh'];?>
<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['adh_selected']->value==0){?>
                        <option value=""><?php echo smarty_function__T(array('string'=>"-- select a name --"),$_smarty_tpl);?>
</option>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adh_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['contribution']->value->member==$_smarty_tpl->tpl_vars['k']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                        <?php } ?>
                    </select>
                </p>
                <p>
                    <label for="id_type_cotis" class="bline"><?php echo smarty_function__T(array('string'=>"Contribution type:"),$_smarty_tpl);?>
</label>
                    <select name="id_type_cotis" id="id_type_cotis"
                        <?php if ($_smarty_tpl->tpl_vars['type_selected']->value==0){?>onchange="form.submit()"<?php }?><?php if ($_smarty_tpl->tpl_vars['required']->value['id_type_cotis']==1){?> required<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['contribution']->value->type){?>
                            <?php if (isset($_smarty_tpl->tpl_vars["selectedid"])) {$_smarty_tpl->tpl_vars["selectedid"] = clone $_smarty_tpl->tpl_vars["selectedid"];
$_smarty_tpl->tpl_vars["selectedid"]->value = $_smarty_tpl->tpl_vars['contribution']->value->type->id; $_smarty_tpl->tpl_vars["selectedid"]->nocache = null; $_smarty_tpl->tpl_vars["selectedid"]->scope = 0;
} else $_smarty_tpl->tpl_vars["selectedid"] = new Smarty_variable($_smarty_tpl->tpl_vars['contribution']->value->type->id, null, 0);?>
                        <?php }else{ ?>
                            <?php if (isset($_smarty_tpl->tpl_vars["selectedid"])) {$_smarty_tpl->tpl_vars["selectedid"] = clone $_smarty_tpl->tpl_vars["selectedid"];
$_smarty_tpl->tpl_vars["selectedid"]->value = null; $_smarty_tpl->tpl_vars["selectedid"]->nocache = null; $_smarty_tpl->tpl_vars["selectedid"]->scope = 0;
} else $_smarty_tpl->tpl_vars["selectedid"] = new Smarty_variable(null, null, 0);?>
                        <?php }?>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['type_cotis_options']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedid']->value),$_smarty_tpl);?>

                    </select>
    <?php if ($_smarty_tpl->tpl_vars['type_selected']->value==1){?>
                    <a class="button" id="btnback" href="javascript:back();" title="<?php echo smarty_function__T(array('string'=>"Back to previous window, if you want to select a contribution type that is not listed here"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Back"),$_smarty_tpl);?>
</a>
    <?php }?>
                </p>
            </fieldset>

    <?php if ($_smarty_tpl->tpl_vars['type_selected']->value==1){?>
            <fieldset class="cssform">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Details of contribution"),$_smarty_tpl);?>
</legend>
                <p>
                    <label class="bline" for="montant_cotis"><?php echo smarty_function__T(array('string'=>"Amount:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="montant_cotis" id="montant_cotis" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->amount;?>
" maxlength="10"<?php if ($_smarty_tpl->tpl_vars['required']->value['montant_cotis']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label class="bline" for="type_paiement_cotis"><?php echo smarty_function__T(array('string'=>"Payment type:"),$_smarty_tpl);?>
</label>
                    <select name="type_paiement_cotis" id="type_paiement_cotis">
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_CASH;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contribution']->value->payment_type==constant('Galette\Entity\Contribution::PAYMENT_CASH')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Cash"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_CREDITCARD;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contribution']->value->payment_type==constant('Galette\Entity\Contribution::PAYMENT_CREDITCARD')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Credit card"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_CHECK;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contribution']->value->payment_type==constant('Galette\Entity\Contribution::PAYMENT_CHECK')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Check"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_TRANSFER;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contribution']->value->payment_type==constant('Galette\Entity\Contribution::PAYMENT_TRANSFER')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Transfer"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_PAYPAL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contribution']->value->payment_type==constant('Galette\Entity\Contribution::PAYMENT_PAYPAL')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Paypal"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_OTHER;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contribution']->value->payment_type==constant('Galette\Entity\Contribution::PAYMENT_OTHER')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Other"),$_smarty_tpl);?>
</option>
                    </select>
                </p>
                <p>
                    <label class="bline" for="date_debut_cotis">
                        <?php if ($_smarty_tpl->tpl_vars['contribution']->value->isCotis()){?>
                            <?php echo smarty_function__T(array('string'=>"Date of contribution:"),$_smarty_tpl);?>

                        <?php }else{ ?>
                            <?php echo smarty_function__T(array('string'=>"Start date of membership:"),$_smarty_tpl);?>

                        <?php }?>
                    </label>
                    <input class="past-date-pick" type="text" name="date_debut_cotis" id="date_debut_cotis" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->begin_date;?>
" maxlength="10"<?php if ($_smarty_tpl->tpl_vars['required']->value['date_debut_cotis']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(yyyy-mm-dd format)"),$_smarty_tpl);?>
</span>
                </p>
        <?php if ($_smarty_tpl->tpl_vars['contribution']->value->isCotis()){?>
                <p>
            <?php if ($_smarty_tpl->tpl_vars['pref_membership_ext']->value!=''){?>
                    <label class="bline" for="duree_mois_cotis"><?php echo smarty_function__T(array('string'=>"Membership extension:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="duree_mois_cotis" id="duree_mois_cotis" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->duration;?>
" maxlength="3"<?php if ($_smarty_tpl->tpl_vars['required']->value['date_fin_cotis']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"months"),$_smarty_tpl);?>
</span>
            <?php }else{ ?>
                    <label class="bline" for="date_fin_cotis"><?php echo smarty_function__T(array('string'=>"End date of membership:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="date_fin_cotis" id="date_fin_cotis" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->end_date;?>
" maxlength="10"<?php if ($_smarty_tpl->tpl_vars['required']->value['date_fin_cotis']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(yyyy-mm-dd format)"),$_smarty_tpl);?>
</span>
            <?php }?>
                </p>
        <?php }?>
                <p>
                    <label class="bline" for="info_cotis"><?php echo smarty_function__T(array('string'=>"Comments:"),$_smarty_tpl);?>
</label>
                    <textarea name="info_cotis" id="info_cotis" cols="61" rows="6"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['info_cotis'])&&$_smarty_tpl->tpl_vars['required']->value['info_cotis']==1){?> required<?php }?>><?php echo $_smarty_tpl->tpl_vars['contribution']->value->info;?>
</textarea>
                </p>
            </fieldset>
        <?php echo $_smarty_tpl->getSubTemplate ("edit_dynamic_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['pref_mail_method']->value!=constant('Galette\Core\GaletteMail::METHOD_DISABLED')){?>
            <p>
                <label for="mail_confirm"><?php echo smarty_function__T(array('string'=>"Notify member"),$_smarty_tpl);?>
</label>
                <input type="checkbox" name="mail_confirm" id="mail_confirm" value="1" <?php if (isset($_POST['mail_confirm'])&&$_POST['mail_confirm']!=''){?>checked="checked"<?php }?>/>
                <br/><span class="exemple"><?php echo smarty_function__T(array('string'=>"Member will receive a notification by email, if he has an address."),$_smarty_tpl);?>
</span>
            </p>
    <?php }?>
        </div>
        <div class="button-container">
    <?php if ($_smarty_tpl->tpl_vars['type_selected']->value==1){?>
            <input type="submit" id="btnsave" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
            <input type="hidden" name="id_cotis" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->id;?>
"/>
            
            <input type="hidden" name="valid" value="1"/>
    <?php }else{ ?> 
            <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Continue"),$_smarty_tpl);?>
"/>
            
            <input type="hidden" name="montant_cotis" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->amount;?>
"/>
    <?php }?> 
            <input type="hidden" name="trans_id" value="<?php if ($_smarty_tpl->tpl_vars['contribution']->value->transaction!=null){?><?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->id;?>
<?php }?>"/>
            
            <input type="hidden" name="type_selected" value="1"/>
        </div>
        </form>
    <script type="text/javascript">
        $(function(){
            $.datepicker.setDefaults($.datepicker.regional['<?php echo $_smarty_tpl->tpl_vars['galette_lang']->value;?>
']);
            $('#date_debut_cotis, #date_fin_cotis').datepicker({
                changeMonth: true,
                changeYear: true,
                showOn: 'button',
                buttonImage: '<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/calendar.png',
                buttonImageOnly: true
            });
        });
    </script>
<?php }else{ ?> 
    <div class="center" id="warningbox">
        <h3><?php echo smarty_function__T(array('string'=>"No member registered!"),$_smarty_tpl);?>
</h3>
        <p>
            <?php echo smarty_function__T(array('string'=>"Unfortunately, there is no member in your database yet,"),$_smarty_tpl);?>

            <br/>
            <a href="ajouter_adherent.php"><?php echo smarty_function__T(array('string'=>"please create a member"),$_smarty_tpl);?>
</a>
        </p>
    </div>
<?php }?>
<?php }?>
<?php }} ?>