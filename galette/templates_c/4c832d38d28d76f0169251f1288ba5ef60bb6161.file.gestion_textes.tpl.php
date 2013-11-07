<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:49:17
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_textes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12363290145268445d61e5c6-30267109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c832d38d28d76f0169251f1288ba5ef60bb6161' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_textes.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12363290145268445d61e5c6-30267109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mtxt' => 0,
    'langlist' => 0,
    'langue' => 0,
    'cur_lang' => 0,
    'reflist' => 0,
    'ref' => 0,
    'cur_ref' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268445d792272_26849933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268445d792272_26849933')) {function content_5268445d792272_26849933($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <form action="gestion_textes.php" method="post" enctype="multipart/form-data"> 
        <div class="bigtable">
            <fieldset class="cssform" id="<?php echo $_smarty_tpl->tpl_vars['mtxt']->value->tlang;?>
">
                <legend class="ui-state-active ui-corner-top"><?php echo $_smarty_tpl->tpl_vars['mtxt']->value->tcomment;?>
</legend>
                <p>
                    <label for="sel_lang" class="bline"><?php echo smarty_function__T(array('string'=>"Language:"),$_smarty_tpl);?>
</label>
                    <select name="sel_lang" id="sel_lang">
                        <?php  $_smarty_tpl->tpl_vars['langue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langue']->key => $_smarty_tpl->tpl_vars['langue']->value){
$_smarty_tpl->tpl_vars['langue']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['langue']->value->getID();?>
" <?php if ($_smarty_tpl->tpl_vars['cur_lang']->value==$_smarty_tpl->tpl_vars['langue']->value->getID()){?>selected="selected"<?php }?> style="padding-left: 30px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['langue']->value->getFlag();?>
); background-repeat: no-repeat"><?php echo $_smarty_tpl->tpl_vars['langue']->value->getName();?>
</option>
                        <?php } ?>
                    </select>
                    <noscript> <span><input type="submit" name="change_lang" value="<?php echo smarty_function__T(array('string'=>"Change"),$_smarty_tpl);?>
" /></span></noscript>
                </p>
                <p>
                    <label for="sel_ref" class="bline"><?php echo smarty_function__T(array('string'=>"Reference:"),$_smarty_tpl);?>
</label>
                    <select name="sel_ref" id="sel_ref">
                        <?php  $_smarty_tpl->tpl_vars['ref'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ref']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reflist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ref']->key => $_smarty_tpl->tpl_vars['ref']->value){
$_smarty_tpl->tpl_vars['ref']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ref']->value['tref'];?>
" <?php if ($_smarty_tpl->tpl_vars['cur_ref']->value==$_smarty_tpl->tpl_vars['ref']->value['tref']){?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['ref']->value['tcomment'];?>
</option>
                        <?php } ?>
                    </select>
                    <noscript> <span><input type="submit" value="<?php echo smarty_function__T(array('string'=>"Change"),$_smarty_tpl);?>
" /></span></noscript>
                </p>
                <p>
                    <label for="tsubject" class="bline"><?php echo smarty_function__T(array('string'=>"Email Subject"),$_smarty_tpl);?>
</label> 
                    <input type="text" name="text_subject" id="tsubject" value="<?php echo $_smarty_tpl->tpl_vars['mtxt']->value->tsubject;?>
" maxlength="255" size="32"/> <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Max 255 characters)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="text_body" class="bline"><?php echo smarty_function__T(array('string'=>"Email Body:"),$_smarty_tpl);?>
</label>
                    <textarea name="text_body" id="text_body" cols="64" rows="15"><?php echo $_smarty_tpl->tpl_vars['mtxt']->value->tbody;?>
</textarea>
                </p>
            </fieldset>
        </div>
        <div class="button-container">
            <input type="hidden" name="valid" id="valid" value="1"/>
            <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
        </div>
        </form>
        <div id="legende" class="texts_legend" title="<?php echo smarty_function__T(array('string'=>"Existing variables"),$_smarty_tpl);?>
">
            <h1><?php echo smarty_function__T(array('string'=>"Existing variables"),$_smarty_tpl);?>
</h1>
            <table>
                <tr>
                    <th><tt>{ASSO_NAME}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Your organisation name"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"globally available"),$_smarty_tpl);?>
)</span></td>
                    <th class="back"><tt>{ASSO_SLOGAN}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Your organisation slogan"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"globally available"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{NAME_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's first and last name"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th class="back"><tt>{MAIL_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's email address"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{LASTNAME_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's last name"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{FIRSTNAME_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's first name"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{LOGIN}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's login"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{LOGIN_URI}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Galette's login URI"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"globally available"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{PASSWORD}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's password"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only from self subscribe page"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{CHG_PWD_URI}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Galette's change password URI"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for new password request"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{LINK_VALIDITY}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Link validity"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for new password request"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{DEADLINE}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's deadline"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for new contributions"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{CONTRIB_INFO}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution informations"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for new contributions"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{CONTRIB_AMOUNT}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution amount"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for new contributions"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{CONTRIB_TYPE}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution type"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for new contributions"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{DAYS_REMAINING}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Membership remaining days"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for reminders"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{DAYS_EXPIRED}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Membership expired since"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available only for reminders"),$_smarty_tpl);?>
)</span></td>
                    <th>&nbsp;</th>
                    <td class="back">&nbsp;</td>
                </tr>
        </table>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#sel_ref, #sel_lang').change(function() {
                    $(':input[type="submit"]').attr('disabled', 'disabled');
                    //Change the input[@id='value'] ; we do not want to validate, but to change lang/ref
                    $('#valid').attr('value', (this.id === 'sel_lang') ? 'change_lang' : 'change_text');
                    this.form.submit();
                });

                $('.cssform').prepend('<div class="fright"><a href="#" id="show_legend" class="help"><?php echo smarty_function__T(array('string'=>"Show existing variables"),$_smarty_tpl);?>
</a></div>');
                $('#legende h1').remove();
                $('#legende').dialog({
                    autoOpen: false,
                    modal: true,
                    hide: 'fold',
                    width: '40%'
                }).dialog('close');

                $('#show_legend').click(function(){
                    $('#legende').dialog('open');
                        return false;
                });
            });
        </script>
<?php }} ?>