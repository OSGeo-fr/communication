<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:15:24
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/preferences.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183450295752683c6d00af99-05390144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df8622a6e2c451e7fd0006337d819c09c1b3d397' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/preferences.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183450295752683c6d00af99-05390144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
    'required' => 0,
    'pref' => 0,
    'logo' => 0,
    'galette_base_path' => 0,
    'time' => 0,
    'GALETTE_MODE' => 0,
    'staff_members' => 0,
    'staff' => 0,
    'languages' => 0,
    'langue' => 0,
    'pref_numrows_options' => 0,
    'reminder' => 0,
    'print_logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c6d8827a3_48429389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c6d8827a3_48429389')) {function content_52683c6d8827a3_48429389($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?>        <form action="preferences.php" method="post" enctype="multipart/form-data" class="tabbed">
        <div id="prefs_tabs">
            <ul>
                <li><a href="#general"><?php echo smarty_function__T(array('string'=>"General"),$_smarty_tpl);?>
</a></li>
                <li><a href="#social"><?php echo smarty_function__T(array('string'=>"Social networks"),$_smarty_tpl);?>
</a></li>
                <li><a href="#parameters"><?php echo smarty_function__T(array('string'=>"Parameters"),$_smarty_tpl);?>
</a></li>
                <li><a href="#mail"><?php echo smarty_function__T(array('string'=>"E-Mail"),$_smarty_tpl);?>
</a></li>
                <li><a href="#labels"><?php echo smarty_function__T(array('string'=>"Labels"),$_smarty_tpl);?>
</a></li>
                <li><a href="#cards"><?php echo smarty_function__T(array('string'=>"Cards"),$_smarty_tpl);?>
</a></li>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()){?>
                <li><a href="#admin"><?php echo smarty_function__T(array('string'=>"Admin"),$_smarty_tpl);?>
</a></li>
<?php }?>
            </ul>
            <fieldset class="cssform" id="general">
                <legend><?php echo smarty_function__T(array('string'=>"General information"),$_smarty_tpl);?>
</legend>
                <p>
                    <label for="pref_nom" class="bline"><?php echo smarty_function__T(array('string'=>"Name of the association:"),$_smarty_tpl);?>
</label>
                    <input<?php if ($_smarty_tpl->tpl_vars['required']->value['pref_nom']==1){?> required<?php }?> type="text" name="pref_nom" id="pref_nom" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_nom'];?>
" maxlength="190"/>
                </p>
                <p>
                    <label for="pref_slogan" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Enter here a short description for your association, it will be displayed on the index page and into pages' title."),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Association's short description:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Enter here a short description for your association, it will be displayed on the index page and into pages' title."),$_smarty_tpl);?>
</span>
                    <input<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_slogan'])&&$_smarty_tpl->tpl_vars['required']->value['pref_slogan']==1){?> required<?php }?> type="text" class="large" name="pref_slogan" id="pref_slogan" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_slogan'];?>
"/>
                </p>
                <p>
                    <label for="logo_picture" class="bline"><?php echo smarty_function__T(array('string'=>"Logo:"),$_smarty_tpl);?>
</label>
<?php if ($_smarty_tpl->tpl_vars['logo']->value->isCustom()){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
picture.php?logo=true&amp;rand=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" class="picture" width="<?php echo $_smarty_tpl->tpl_vars['logo']->value->getOptimalWidth();?>
" height="<?php echo $_smarty_tpl->tpl_vars['logo']->value->getOptimalHeight();?>
" alt="<?php echo smarty_function__T(array('string'=>"Current logo"),$_smarty_tpl);?>
"/><br/>
                    <label for="del_logo"><?php echo smarty_function__T(array('string'=>"Delete image"),$_smarty_tpl);?>
</label><input type="checkbox" name="del_logo" id="del_logo" value="1" /><br />
<?php }?>
                    <input type="file" name="logo" id="logo_picture"<?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?> disabled="disabled"<?php }?>/>
                </p>
                <p>
                    <label for="pref_adresse" class="bline"><?php echo smarty_function__T(array('string'=>"Address:"),$_smarty_tpl);?>
</label>
                    <input<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_adresse'])&&$_smarty_tpl->tpl_vars['required']->value['pref_adresse']==1){?> required<?php }?> type="text" name="pref_adresse" id="pref_adresse" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_adresse'];?>
" maxlength="190" class="large"/><br/>
                    <label for="pref_adresse2" class="bline libelle"><?php echo smarty_function__T(array('string'=>"Address:"),$_smarty_tpl);?>
 <?php echo smarty_function__T(array('string'=>" (continuation)"),$_smarty_tpl);?>
</label>
                    <input<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_adresse'])&&$_smarty_tpl->tpl_vars['required']->value['pref_adresse']==1){?> required<?php }?> type="text" name="pref_adresse2" id="pref_adresse2" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_adresse2'];?>
" maxlength="190" class="large"/>
                </p>
                <p>
                    <label for="pref_cp" class="bline"><?php echo smarty_function__T(array('string'=>"Zip Code:"),$_smarty_tpl);?>
</label>
                    <input<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_cp'])&&$_smarty_tpl->tpl_vars['required']->value['pref_cp']==1){?> required<?php }?> type="text" name="pref_cp" id="pref_cp" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_cp'];?>
" maxlength="10"/>
                </p>
                <p>
                    <label for="pref_ville" class="bline"><?php echo smarty_function__T(array('string'=>"City:"),$_smarty_tpl);?>
</label>
                    <input<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_ville'])&&$_smarty_tpl->tpl_vars['required']->value['pref_ville']==1){?> required<?php }?> type="text" name="pref_ville" id="pref_ville" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_ville'];?>
" maxlength="100"/>
                </p>
                <p>
                    <label for="pref_pays" class="bline"><?php echo smarty_function__T(array('string'=>"Country:"),$_smarty_tpl);?>
</label>
                    <input<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_pays'])&&$_smarty_tpl->tpl_vars['required']->value['pref_pays']==1){?> required<?php }?> type="text" name="pref_pays" id="pref_pays" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_pays'];?>
" maxlength="50"/>
                </p>
        <div class="p">
          <span class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Use either the adress setted below or select user status to retrieve another adress."),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Postal adress:"),$_smarty_tpl);?>
</span>
          <span class="tip"><?php echo smarty_function__T(array('string'=>"Use either the adress setted below or select a staff member to retrieve he's adress."),$_smarty_tpl);?>
</span>
          <label for="pref_postal_adress_0"><?php echo smarty_function__T(array('string'=>"from preferences"),$_smarty_tpl);?>
</label>
          <input type="radio" name="pref_postal_adress" id="pref_postal_adress_0" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\Preferences::POSTAL_ADRESS_FROM_PREFS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_postal_adress']==constant('Galette\Core\Preferences::POSTAL_ADRESS_FROM_PREFS')){?>checked="checked"<?php }?>/>
          <label for="pref_postal_adress_1"><?php echo smarty_function__T(array('string'=>"from a staff user"),$_smarty_tpl);?>
</label>
          <input type="radio" name="pref_postal_adress" id="pref_postal_adress_1" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\Preferences::POSTAL_ADRESS_FROM_STAFF;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_postal_adress']==constant('Galette\Core\Preferences::POSTAL_ADRESS_FROM_STAFF')){?>checked="checked"<?php }?>/>
          <br/><label for="pref_postal_staff_member"><?php echo smarty_function__T(array('string'=>"Staff member"),$_smarty_tpl);?>
</label>
          <select name="pref_postal_staff_member" id="pref_postal_staff_member">
            <option value="-1"><?php echo smarty_function__T(array('string'=>"-- Choose a staff member --"),$_smarty_tpl);?>
</option>
          <?php  $_smarty_tpl->tpl_vars['staff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['staff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['staff_members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['staff']->key => $_smarty_tpl->tpl_vars['staff']->value){
$_smarty_tpl->tpl_vars['staff']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['staff']->value->id==$_smarty_tpl->tpl_vars['pref']->value['pref_postal_staff_member']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['staff']->value->sname;?>
 (<?php echo $_smarty_tpl->tpl_vars['staff']->value->sstatus;?>
)</option>
          <?php } ?>
          </select>
        </div>
                <p>
                    <label for="pref_website" class="bline"><?php echo smarty_function__T(array('string'=>"Website:"),$_smarty_tpl);?>
</label>
                    <input<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_website'])&&$_smarty_tpl->tpl_vars['required']->value['pref_website']==1){?> required<?php }?> type="text" name="pref_website" id="pref_website" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_website'];?>
" maxlength="100"/>
                </p>
            </fieldset>

            <fieldset class="cssform" id="social">
                <legend><?php echo smarty_function__T(array('string'=>"Social networks"),$_smarty_tpl);?>
</legend>
                <p>
                    <label for="pref_googleplus" class="bline"><?php echo smarty_function__T(array('string'=>"Google+"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_googleplus" id="pref_googleplus" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_googleplus'];?>
" class="large"/>
                </p>
                <p>
                    <label for="pref_facebook" class="bline"><?php echo smarty_function__T(array('string'=>"Facebook"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_facebook" id="pref_facebook" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_facebook'];?>
" class="large"/>
                </p>
                <p>
                    <label for="pref_twitter" class="bline"><?php echo smarty_function__T(array('string'=>"Twitter"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_twitter" id="pref_twitter" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_twitter'];?>
" class="large"/>
                </p>
                <p>
                    <label for="pref_linkedin" class="bline"><?php echo smarty_function__T(array('string'=>"LinkedIn"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_linkedin" id="pref_linkedin" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_linkedin'];?>
" class="large"/>
                </p>
                <p>
                    <label for="pref_viadeo" class="bline"><?php echo smarty_function__T(array('string'=>"Viadeo"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_viadeo" id="pref_viadeo" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_viadeo'];?>
" class="large"/>
                </p>
            </fieldset>

            <fieldset class="cssform" id="parameters">
                <legend><?php echo smarty_function__T(array('string'=>"Galette's parameters"),$_smarty_tpl);?>
</legend>
                <p>
                    <label for="pref_lang" class="bline"><?php echo smarty_function__T(array('string'=>"Default language:"),$_smarty_tpl);?>
</label>
                    <select name="pref_lang" id="pref_lang">
<?php  $_smarty_tpl->tpl_vars['langue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langue']->key => $_smarty_tpl->tpl_vars['langue']->value){
$_smarty_tpl->tpl_vars['langue']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['langue']->value->getID();?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_lang']==$_smarty_tpl->tpl_vars['langue']->value->getID()){?>selected="selected"<?php }?> style="padding-left: 30px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['langue']->value->getFlag();?>
); background-repeat: no-repeat"><?php echo ucfirst($_smarty_tpl->tpl_vars['langue']->value->getName());?>
</option>
<?php } ?>
                    </select>
                </p>
                
                <p>
                    <label for="pref_numrows" class="bline"><?php echo smarty_function__T(array('string'=>"Lines / Page:"),$_smarty_tpl);?>
</label>
                    <select name="pref_numrows" id="pref_numrows">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pref_numrows_options']->value,'selected'=>$_smarty_tpl->tpl_vars['pref']->value['pref_numrows']),$_smarty_tpl);?>

                    </select>
                </p>
                <p>
                    <label for="pref_log" class="bline"><?php echo smarty_function__T(array('string'=>"Logging level:"),$_smarty_tpl);?>
</label>
                    <select name="pref_log" id="pref_log">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_log']==0){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Disabled"),$_smarty_tpl);?>
</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_log']==1){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Normal"),$_smarty_tpl);?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_log']==2){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Detailed"),$_smarty_tpl);?>
</option>
                    </select>
                </p>
                <p>
                    <label for="pref_membership_ext" class="bline"><?php echo smarty_function__T(array('string'=>"Default membership extension:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_membership_ext" id="pref_membership_ext" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_membership_ext'];?>
" maxlength="2"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_membership_ext'])&&$_smarty_tpl->tpl_vars['required']->value['pref_membership_ext']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Months)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_beg_membership" class="bline"><?php echo smarty_function__T(array('string'=>"Beginning of membership:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_beg_membership" id="pref_beg_membership" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_beg_membership'];?>
" maxlength="5"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_beg_membership'])&&$_smarty_tpl->tpl_vars['required']->value['pref_beg_membership']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(dd/mm)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_bool_publicpages" class="bline"><?php echo smarty_function__T(array('string'=>"Public pages enabled?"),$_smarty_tpl);?>
</label>
                    <input type="checkbox" name="pref_bool_publicpages" id="pref_bool_publicpages" value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_bool_publicpages']){?> checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_bool_publicpages'])&&$_smarty_tpl->tpl_vars['required']->value['pref_bool_publicpages']==1){?> required<?php }?>/>
                </p>
                <p id="publicpages_visibility"<?php if (!$_smarty_tpl->tpl_vars['pref']->value['pref_bool_publicpages']){?> class="hidden"<?php }?>>
                    <label for="pref_publicpages_visibility" class="bline"><?php echo smarty_function__T(array('string'=>"Show public pages for"),$_smarty_tpl);?>
</label>
                    <select name="pref_publicpages_visibility" id="pref_publicpages_visibility">
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\Preferences::PUBLIC_PAGES_VISIBILITY_PUBLIC;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_publicpages_visibility']==constant('Galette\Core\Preferences::PUBLIC_PAGES_VISIBILITY_PUBLIC')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Everyone"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\Preferences::PUBLIC_PAGES_VISIBILITY_RESTRICTED;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_publicpages_visibility']==constant('Galette\Core\Preferences::PUBLIC_PAGES_VISIBILITY_RESTRICTED')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Up to date members"),$_smarty_tpl);?>
</option>
                        <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\Preferences::PUBLIC_PAGES_VISIBILITY_PRIVATE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_publicpages_visibility']==constant('Galette\Core\Preferences::PUBLIC_PAGES_VISIBILITY_PRIVATE')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Admin and staff only"),$_smarty_tpl);?>
</option>
                    </select>
                </p>
                <p>
                    <label for="pref_bool_selfsubscribe" class="bline"><?php echo smarty_function__T(array('string'=>"Self subscription enabled?"),$_smarty_tpl);?>
</label>
                    <input type="checkbox" name="pref_bool_selfsubscribe" id="pref_bool_selfsubscribe" value="1"<?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_bool_selfsubscribe']){?> checked="checked"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_bool_selfsubscribe'])&&$_smarty_tpl->tpl_vars['required']->value['pref_bool_selfsubscribe']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_new_contrib_script" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Enter a script URI that would be called after adding a new contribution."),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Post new contribution script URI"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Enter a script URI that would be called after adding a new contribution.<br/>Script URI must be prefixed by one of '<em>galette://</em>' for Galette internal call. '<em>file://</em>' for a direct file call, '<em>get://</em>' or '<em>post://</em>' for HTTP calls (prefix will be replaced by http:// in those cases)."),$_smarty_tpl);?>
</span>
                    <input type="text" name="pref_new_contrib_script" id="pref_new_contrib_script" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_new_contrib_script'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_new_contrib_script'])&&$_smarty_tpl->tpl_vars['required']->value['pref_new_contrib_script']==1){?> required<?php }?>/>
                </p>
            </fieldset>

            <fieldset class="cssform" id="mail">
                <legend><?php echo smarty_function__T(array('string'=>"Mail settings"),$_smarty_tpl);?>
</legend>
    <?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?>
                <div><?php echo smarty_function__T(array('string'=>"Application runs under demo mode. This functionnality is not enabled, sorry."),$_smarty_tpl);?>
</div>
    <?php }else{ ?>
                <p>
                    <label for="pref_email_nom" class="bline"><?php echo smarty_function__T(array('string'=>"Sender name:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_email_nom" id="pref_email_nom" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_email_nom'];?>
" maxlength="50"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_email_nom'])&&$_smarty_tpl->tpl_vars['required']->value['pref_email_nom']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_email" class="bline"><?php echo smarty_function__T(array('string'=>"Sender Email:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_email" id="pref_email" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_email'];?>
" maxlength="100" size="30"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_email'])&&$_smarty_tpl->tpl_vars['required']->value['pref_email']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_email_reply_to" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Leave empty to use Sender Email as reply address"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Reply-To Email:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Leave empty to use Sender Email as reply address"),$_smarty_tpl);?>
</span>
                    <input type="text" name="pref_email_reply_to" id="pref_email_reply_to" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_email_reply_to'];?>
" maxlength="100" size="30"<?php if (isset($_smarty_tpl->tpl_vars['reminder']->value['pref_email_reply_to'])&&$_smarty_tpl->tpl_vars['required']->value['pref_email_reply_to']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_email_newadh" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Recipient of new online registation emails"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Members administrator's Email:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Recipient of new online registation emails"),$_smarty_tpl);?>
</span>
                    <input type="text" name="pref_email_newadh" id="pref_email_newadh" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_email_newadh'];?>
" maxlength="100" size="30"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_email_newadh'])&&$_smarty_tpl->tpl_vars['required']->value['pref_email_newadh']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_bool_mailadh" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Sends an email each time a new member registers online"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Send email to administrators ?"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Sends an email each time a new member registers online"),$_smarty_tpl);?>
</span>
                    <input type="checkbox" name="pref_bool_mailadh" id="pref_bool_mailadh" value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_bool_mailadh']==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_bool_mailadh'])&&$_smarty_tpl->tpl_vars['required']->value['pref_bool_mailadh']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_editor_enabled" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Should HTML editor be activated on page load ?"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Activate HTML editor ?"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Should HTML editor be activated on page load ?"),$_smarty_tpl);?>
</span>
                    <input type="checkbox" name="pref_editor_enabled" id="pref_editor_enabled" value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_editor_enabled']==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_editor_enabled'])&&$_smarty_tpl->tpl_vars['required']->value['pref_editor_enabled']==1){?> required<?php }?>/>
                </p>
                <div class="p">
                    <span class="bline"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_mail_method'])&&$_smarty_tpl->tpl_vars['required']->value['pref_mail_method']==1){?> required<?php }?>><?php echo smarty_function__T(array('string'=>"Emailing method:"),$_smarty_tpl);?>
</span>
                    <ul>
                        <li>
                            <input type="radio" name="pref_mail_method" id="no" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\GaletteMail::METHOD_DISABLED;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']==constant('Galette\Core\GaletteMail::METHOD_DISABLED')){?>checked="checked"<?php }?>/><label for="no"><?php echo smarty_function__T(array('string'=>"Emailing disabled"),$_smarty_tpl);?>
</label>
                        </li>
                        <li>
                            <input type="radio" name="pref_mail_method" id="php" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\GaletteMail::METHOD_PHPMAIL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']==constant('Galette\Core\GaletteMail::METHOD_PHPMAIL')){?>checked="checked"<?php }?>/><label for="php"><?php echo smarty_function__T(array('string'=>"PHP mail() function"),$_smarty_tpl);?>
</label>
                        </li>
                        <li>
                            <input type="radio" name="pref_mail_method" id="smtp" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\GaletteMail::METHOD_SMTP;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']==constant('Galette\Core\GaletteMail::METHOD_SMTP')){?>checked="checked"<?php }?>/><label for="smtp"><?php echo smarty_function__T(array('string'=>"Using a SMTP server (slower)"),$_smarty_tpl);?>
</label>
                        </li>
                        <li>
                            <input type="radio" name="pref_mail_method" id="gmail" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\GaletteMail::METHOD_GMAIL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']==constant('Galette\Core\GaletteMail::METHOD_GMAIL')){?>checked="checked"<?php }?>/><label for="gmail"><?php echo smarty_function__T(array('string'=>"Using GMAIL as SMTP server (slower)"),$_smarty_tpl);?>
</label>
                        </li>
                        <li>
                            <input type="radio" name="pref_mail_method" id="sendmail" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\GaletteMail::METHOD_SENDMAIL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']==constant('Galette\Core\GaletteMail::METHOD_SENDMAIL')){?>checked="checked"<?php }?>/><label for="sendmail"><?php echo smarty_function__T(array('string'=>"Using Sendmail server"),$_smarty_tpl);?>
</label>
                        </li>
                        <li>
                            <input type="radio" name="pref_mail_method" id="qmail" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Core\GaletteMail::METHOD_QMAIL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']==constant('Galette\Core\GaletteMail::METHOD_QMAIL')){?>checked="checked"<?php }?>/><label for="qmail"><?php echo smarty_function__T(array('string'=>"Using QMAIL server"),$_smarty_tpl);?>
</label>
                        </li>
                    </ul>
                </div>
                <div id="smtp_parameters"<?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']!=constant('Galette\Core\GaletteMail::METHOD_SMTP')){?> style="display: none;"<?php }?>>
                    <p>
                        <label for="pref_mail_smtp_host" class="bline"><?php echo smarty_function__T(array('string'=>"SMTP server:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="pref_mail_smtp_host" id="pref_mail_smtp_host" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_mail_smtp_host'];?>
" maxlength="100" size="30"/<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_host'])&&$_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_host']==1){?> required<?php }?>>
                    </p>
                    <p>
                        <label for="pref_mail_smtp_port" class="bline"><?php echo smarty_function__T(array('string'=>"SMTP port:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="pref_mail_smtp_port" id="pref_mail_smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_mail_smtp_port'];?>
" size="10"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_port'])&&$_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_port']==1){?> required<?php }?>/>
                    </p>
                    <p>
                        <label for="pref_mail_smtp_auth" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Do you want to use SMTP authentication?"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Use SMTP authentication?"),$_smarty_tpl);?>
</label>
                        <span class="tip"><?php echo smarty_function__T(array('string'=>"Would emailing use any SMTP authentication? You'll have to provide username and passwrod below. For GMail, authentication will always be on."),$_smarty_tpl);?>
</span>
                        <input type="checkbox" name="pref_mail_smtp_auth" id="pref_mail_smtp_auth" value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_smtp_auth']==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_auth'])&&$_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_auth']==1){?> required<?php }?>/>
                    </p>
                    <p>
                        <label for="pref_mail_smtp_secure" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Do you want to use SMTP authentication?"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Use TLS for SMTP?"),$_smarty_tpl);?>
</label>
                        <span class="tip"><?php echo smarty_function__T(array('string'=>"Do you want to use server's TLS capabilities?<br/>For GMail, this will always be on."),$_smarty_tpl);?>
</span>
                        <input type="checkbox" name="pref_mail_smtp_secure" id="pref_mail_smtp_secure" value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_smtp_secure']==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_secure'])&&$_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_secure']==1){?> required<?php }?>/>
                    </p>
                </div>
                <div id="smtp_auth"<?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']!=constant('Galette\Core\GaletteMail::METHOD_SMTP')&&$_smarty_tpl->tpl_vars['pref']->value['pref_mail_method']!=constant('Galette\Core\GaletteMail::METHOD_GMAIL')){?> style="display: none;"<?php }?>>
                    <p>
                        <label for="pref_mail_smtp_user" class="bline"><?php echo smarty_function__T(array('string'=>"SMTP (or GMail) user:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="pref_mail_smtp_user" id="pref_mail_smtp_user" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_mail_smtp_user'];?>
" maxlength="100" size="30"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_user'])&&$_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_user']==1){?> required<?php }?>/>
                    </p>
                    <p>
                        <label for="pref_mail_smtp_password" class="bline"><?php echo smarty_function__T(array('string'=>"SMTP (or GMail) password:"),$_smarty_tpl);?>
</label>
                        <input type="password" name="pref_mail_smtp_password" id="pref_mail_smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_mail_smtp_password'];?>
" autocomplete="off" maxlength="100" size="30"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_password'])&&$_smarty_tpl->tpl_vars['required']->value['pref_mail_smtp_password']==1){?> required<?php }?>/>
                    </p>
                </div>
                <p>
                    <label for="pref_mail_sign" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Enter here the text that will be automatically set as signature for all outgoing emails."),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Mail signature"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"The text that will be automatically set as signature for all outgoing emails.<br/>Variables are quoted with braces, are upper case, and will be replaced automatically.<br/>Refer to the doc to know what variables ara available. "),$_smarty_tpl);?>
</span>
                    <textarea name="pref_mail_sign" id="pref_mail_sign"><?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_mail_sign'];?>
</textarea>
                </p>
    <?php }?>
            </fieldset>

            <fieldset class="cssform" id="labels">
                <legend><?php echo smarty_function__T(array('string'=>"Label generation parameters"),$_smarty_tpl);?>
</legend>
                <p>
                    <label for="pref_etiq_marges_v" class="bline"><?php echo smarty_function__T(array('string'=>"Vertical margins:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_marges_v" id="pref_etiq_marges_v" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_marges_v'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_marges_v'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_marges_v']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_etiq_marges_h" class="bline"><?php echo smarty_function__T(array('string'=>"Horizontal margins:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_marges_h" id="pref_etiq_marges_h" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_marges_h'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_marges_h'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_marges_h']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_etiq_hspace" class="bline"><?php echo smarty_function__T(array('string'=>"Horizontal spacing:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_hspace" id="pref_etiq_hspace" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_hspace'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_hspace'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_hspace']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_etiq_vspace" class="bline"><?php echo smarty_function__T(array('string'=>"Vertical spacing:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_vspace" id="pref_etiq_vspace" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_vspace'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_vspace'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_vspace']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_etiq_hsize" class="bline"><?php echo smarty_function__T(array('string'=>"Label width:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_hsize" id="pref_etiq_hsize" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_hsize'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_hsize'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_hsize']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_etiq_vsize" class="bline"><?php echo smarty_function__T(array('string'=>"Label height:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_vsize" id="pref_etiq_vsize" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_vsize'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_vsize'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_vsize']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_etiq_cols" class="bline"><?php echo smarty_function__T(array('string'=>"Number of label columns:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_cols" id="pref_etiq_cols" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_cols'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_cols'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_cols']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_etiq_rows" class="bline"><?php echo smarty_function__T(array('string'=>"Number of label lines:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_rows" id="pref_etiq_rows" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_rows'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_rows'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_rows']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_etiq_corps" class="bline"><?php echo smarty_function__T(array('string'=>"Font size:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_etiq_corps" id="pref_etiq_corps" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_etiq_corps'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_etiq_corps'])&&$_smarty_tpl->tpl_vars['required']->value['pref_etiq_corps']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
            </fieldset>

            <fieldset class="cssform" id="cards">
                <legend><?php echo smarty_function__T(array('string'=>"Cards generation parameters"),$_smarty_tpl);?>
</legend>
                <p>
                    <label for="pref_card_abrev" class="bline"><?php echo smarty_function__T(array('string'=>"Short Text (Card Center):"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_card_abrev" id="pref_card_abrev" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_abrev'];?>
" size="10" maxlength="10"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_abrev'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_abrev']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(10 characters max)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_strip" class="bline"><?php echo smarty_function__T(array('string'=>"Long Text (Bottom Line):"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_card_strip" id="pref_card_strip" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_strip'];?>
" size="40" maxlength="65"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_strip'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_strip']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(65 characters max)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_tcol" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Strip Text Color:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
</span>
                    <input type="text" name="pref_card_tcol" id="pref_card_tcol" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_tcol'];?>
" size="7" maxlength="7" class="hex"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_tcol'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_tcol']==1){?> required<?php }?>/>
                </p>
                <div class="subtitle"><?php echo smarty_function__T(array('string'=>"Strip Background colors:"),$_smarty_tpl);?>
 <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Strip color will change according to member's status)"),$_smarty_tpl);?>
</span></div>
                <p>
                    <label for="pref_card_scol" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Active Member Color:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
</span>
                    <input type="text" name="pref_card_scol" id="pref_card_scol" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_scol'];?>
" size="7" maxlength="7" class="hex"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_scol'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_scol']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_card_bcol" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Board Members Color:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
</span>
                    <input type="text" name="pref_card_bcol" id="pref_card_bcol" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_bcol'];?>
" size="7" maxlength="7" class="hex"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_bcol'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_bcol']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_card_hcol" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Honor Members Color:"),$_smarty_tpl);?>
</label>
                    <span class="tip"><?php echo smarty_function__T(array('string'=>"Hexadecimal color notation: #RRGGBB"),$_smarty_tpl);?>
</span>
                    <input type="text" name="pref_card_hcol" id="pref_card_hcol" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_hcol'];?>
" size="7" maxlength="7" class="hex"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_hcol'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_hcol']==1){?>required<?php }?>/>
                </p>
                <div class="subtitle">&nbsp;</div>
                <p>
                    <label for="card_logo" class="bline"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['card_logo'])&&$_smarty_tpl->tpl_vars['required']->value['card_logo']==1){?>required<?php }?>><?php echo smarty_function__T(array('string'=>"Logo:"),$_smarty_tpl);?>
</label>
<?php if ($_smarty_tpl->tpl_vars['print_logo']->value->isCustom()){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
picture.php?print_logo=true&amp;rand=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" class="picture" width="<?php echo $_smarty_tpl->tpl_vars['print_logo']->value->getOptimalWidth();?>
" height="<?php echo $_smarty_tpl->tpl_vars['print_logo']->value->getOptimalHeight();?>
" alt="<?php echo smarty_function__T(array('string'=>"Current logo for printing"),$_smarty_tpl);?>
"/><br/>
                    <label for="del_card_logo"><?php echo smarty_function__T(array('string'=>"Delete image"),$_smarty_tpl);?>
</label><input type="checkbox" name="del_card_logo" id="del_card_logo" value="1" /><br />
<?php }?>
                    <input type="file" name="card_logo" id="card_logo"<?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?> disabled="disabled"<?php }?>/>
                </p>
                <p>
                    <label for="pref_card_self" class="bline"><?php echo smarty_function__T(array('string'=>"Allow members to print card ?"),$_smarty_tpl);?>
</label>
                    <input type="checkbox" name="pref_card_self" id="pref_card_self" value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_self']==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_bool_display_title'])&&$_smarty_tpl->tpl_vars['required']->value['pref_bool_display_title']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Members will be able to generate their own member card)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_bool_display_title" class="bline"><?php echo smarty_function__T(array('string'=>"Show title ?"),$_smarty_tpl);?>
</label>
                    <input type="checkbox" name="pref_bool_display_title" id="pref_bool_display_title" value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_bool_display_title']==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_bool_display_title'])&&$_smarty_tpl->tpl_vars['required']->value['pref_bool_display_title']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Show or not title in front of name)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_address" class="bline"><?php echo smarty_function__T(array('string'=>"Address type:"),$_smarty_tpl);?>
</label>
                    <select name="pref_card_address" id="pref_card_address">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==0){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Email"),$_smarty_tpl);?>
</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==1){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"MSN"),$_smarty_tpl);?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==2){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Jabber"),$_smarty_tpl);?>
</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==3){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Web Site"),$_smarty_tpl);?>
</option>
                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==4){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"ICQ"),$_smarty_tpl);?>
</option>
                        <option value="5" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==5){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Zip - Town"),$_smarty_tpl);?>
</option>
                        <option value="6" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==6){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Nickname"),$_smarty_tpl);?>
</option>
                        <option value="7" <?php if ($_smarty_tpl->tpl_vars['pref']->value['pref_card_address']==7){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Profession"),$_smarty_tpl);?>
</option>
                    </select>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Choose address printed below name)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_year" class="bline"><?php echo smarty_function__T(array('string'=>"Year:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_card_year" id="pref_card_year" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_year'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_year'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_year']==1){?> required<?php }?>/>
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_marges_v" class="bline"><?php echo smarty_function__T(array('string'=>"Vertical margins:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_card_marges_v" id="pref_card_marges_v" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_marges_v'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_marges_v'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_marges_v']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_marges_h" class="bline"><?php echo smarty_function__T(array('string'=>"Horizontal margins:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_card_marges_h" id="pref_card_marges_h" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_marges_h'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_marges_h'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_marges_h']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_vspace" class="bline"><?php echo smarty_function__T(array('string'=>"Vertical spacing:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_card_vspace" id="pref_card_vspace" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_vspace'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_vspace'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_vspace']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
                <p>
                    <label for="pref_card_hspace" class="bline"><?php echo smarty_function__T(array('string'=>"Horizontal spacing:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_card_hspace" id="pref_card_hspace" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_card_hspace'];?>
" maxlength="4"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_card_hspace'])&&$_smarty_tpl->tpl_vars['required']->value['pref_card_hspace']==1){?> required<?php }?>/> mm
                    <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Integer)"),$_smarty_tpl);?>
</span>
                </p>
            </fieldset>

<?php if ($_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()){?>
            <fieldset class="cssform" id="admin">
                <legend><?php echo smarty_function__T(array('string'=>"Admin account (independant of members)"),$_smarty_tpl);?>
</legend>
    <?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?>
                <div><?php echo smarty_function__T(array('string'=>"Application runs under demo mode. This functionnality is not enabled, sorry."),$_smarty_tpl);?>
</div>
    <?php }else{ ?>
                <p>
                    <label for="pref_admin_login" class="bline"><?php echo smarty_function__T(array('string'=>"Username:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="pref_admin_login" id="pref_admin_login" value="<?php echo $_smarty_tpl->tpl_vars['pref']->value['pref_admin_login'];?>
" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_admin_login'])&&$_smarty_tpl->tpl_vars['required']->value['pref_admin_login']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_admin_pass" class="bline"><?php echo smarty_function__T(array('string'=>"Password:"),$_smarty_tpl);?>
</label>
                    <input type="password" name="pref_admin_pass" id="pref_admin_pass" value="" maxlength="20" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_admin_pass'])&&$_smarty_tpl->tpl_vars['required']->value['pref_admin_pass']==1){?> required<?php }?>/>
                </p>
                <p>
                    <label for="pref_admin_pass_check" class="bline"><?php echo smarty_function__T(array('string'=>"Retype password:"),$_smarty_tpl);?>
</label>
                    <input type="password" name="pref_admin_pass_check" id="pref_admin_pass_check" value="" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_admin_pass_check'])&&$_smarty_tpl->tpl_vars['required']->value['pref_admin_pass_check']==1){?> required<?php }?>/>
                </p>
    <?php }?>
            </fieldset>
<?php }?>
        </div>
        <div class="button-container">
            <input type="hidden" name="valid" value="1"/>
            <input type="hidden" name="pref_theme" value="default"/>
            <input type="submit" id="btnsave" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
        </div>
        <p><?php echo smarty_function__T(array('string'=>"NB : The mandatory fields are in"),$_smarty_tpl);?>
 <span class="required"><?php echo smarty_function__T(array('string'=>"red"),$_smarty_tpl);?>
</span></p>
        </form>
        <script type="text/javascript">
            $('#prefs_tabs').tabs();

            $('#no,#php,#qmail').click(function(){
                $('#smtp_parameters,#smtp_auth').hide();
            });
            $('#smtp,#gmail').click(function(){
                $('#smtp_parameters,#smtp_auth').show();
            });
            $('#gmail').click(function(){
                $('#smtp_parameters').hide();
                $('#smtp_auth').show();
            });


            $(function(){
                //for color pickers
                // hex inputs
                $('input.hex')
                    .validHex()
                    .keyup(function() {
                        $(this).validHex();
                    })
                    .click(function(){
                        $(this).addClass('focus');
                        $('#picker').remove();
                        $('div.picker-on').removeClass('picker-on');
                        $(this).after('<div id="picker"></div>').parent().addClass('picker-on');
                        $('#picker').farbtastic(this);
                        return false;
                    })
                    .wrap('<div class="hasPicker"></div>')
                    .applyFarbtastic();

                //general app click cleanup
                $('body').click(function() {
                    $('div.picker-on').removeClass('picker-on');
                    $('#picker').remove();
                    $('input.focus, select.focus').removeClass('focus');
                });

                $('#pref_bool_publicpages').change(function(){
                    $('#publicpages_visibility').toggleClass('hidden');
                });
            });

            //color pickers setup (sets bg color of inputs)
            $.fn.applyFarbtastic = function() {
                return this.each(function() {
                    $('<div/>').farbtastic(this).remove();
                });
            };

            // validation for hex inputs
            $.fn.validHex = function() {

                return this.each(function() {

                    var value = $(this).val();
                    value = value.replace(/[^#a-fA-F0-9]/g, ''); // non [#a-f0-9]
                    if(value.match(/#/g) && value.match(/#/g).length > 1) value = value.replace(/#/g, ''); // ##
                    if(value.indexOf('#') == -1) value = '#'+value; // no #
                    if(value.length > 7) value = value.substr(0,7); // too many chars

                    $(this).val(value);

                });

            };
        </script>
<?php }} ?>