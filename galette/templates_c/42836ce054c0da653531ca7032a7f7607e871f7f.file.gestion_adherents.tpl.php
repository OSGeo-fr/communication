<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:11:58
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_adherents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38531709052683b9e550541-21183139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42836ce054c0da653531ca7032a7f7607e871f7f' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_adherents.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38531709052683b9e550541-21183139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_filters' => 0,
    'filters' => 0,
    'filter_field_options' => 0,
    'filter_membership_options' => 0,
    'filter_accounts_options' => 0,
    'filter_groups_options' => 0,
    'group' => 0,
    'nb_members' => 0,
    'nbshow_options' => 0,
    'numrows' => 0,
    'template_subdir' => 0,
    'login' => 0,
    'pref_mail_method' => 0,
    'pagination' => 0,
    'members' => 0,
    'member' => 0,
    'rclass' => 0,
    'ordre' => 0,
    'plugin_actions' => 0,
    'action' => 0,
    'existing_mailing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683b9e9e2199_46429117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683b9e9e2199_46429117')) {function content_52683b9e9e2199_46429117($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?>        <form action="gestion_adherents.php" method="get" id="filtre">
        <div id="listfilter">
<?php if (!$_smarty_tpl->tpl_vars['adv_filters']->value){?>
            <label for="filter_str"><?php echo smarty_function__T(array('string'=>"Search:"),$_smarty_tpl);?>
&nbsp;</label>
            <input type="text" name="filter_str" id="filter_str" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value->filter_str;?>
" type="search" placeholder="<?php echo smarty_function__T(array('string'=>"Enter a value"),$_smarty_tpl);?>
"/>&nbsp;
             <?php echo smarty_function__T(array('string'=>"in:"),$_smarty_tpl);?>
&nbsp;
            <select name="filter_field">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filter_field_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->field_filter),$_smarty_tpl);?>

            </select>
             <?php echo smarty_function__T(array('string'=>"among:"),$_smarty_tpl);?>
&nbsp;
            <select name="filter_membership" onchange="form.submit()">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filter_membership_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->membership_filter),$_smarty_tpl);?>

            </select>
            <select name="filter_account" onchange="form.submit()">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filter_accounts_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filters']->value->account_status_filter),$_smarty_tpl);?>

            </select>
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
            <input type="submit" class="inline" value="<?php echo smarty_function__T(array('string'=>"Filter"),$_smarty_tpl);?>
"/>
            <input type="submit" name="clear_filter" class="inline" value="<?php echo smarty_function__T(array('string'=>"Clear filter"),$_smarty_tpl);?>
"/>
            <div>
                <?php echo smarty_function__T(array('string'=>"Members that have an email adress:"),$_smarty_tpl);?>

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
            </div>
<?php }else{ ?>
            <p>
                <strong><?php echo smarty_function__T(array('string'=>"Advanced search mode"),$_smarty_tpl);?>
</strong>
                <input type="submit" name="adv_criterias" class="inline" value="<?php echo smarty_function__T(array('string'=>"Change search criterias"),$_smarty_tpl);?>
"/>
                <input type="submit" name="clear_filter" class="inline" value="<?php echo smarty_function__T(array('string'=>"Clear filter"),$_smarty_tpl);?>
"/>
                <br/>
                <a href="#" id="showhideqry"><?php echo smarty_function__T(array('string'=>"Show/hide query"),$_smarty_tpl);?>
</a>
            </p>
            <pre id="sql_qry" class="hidden"><?php echo $_smarty_tpl->tpl_vars['filters']->value->query;?>
</pre>
<?php }?>
        </div>
        <table class="infoline">
            <tr>
                <td class="left"><?php echo $_smarty_tpl->tpl_vars['nb_members']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nb_members']->value!=1){?><?php echo smarty_function__T(array('string'=>"members"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function__T(array('string'=>"member"),$_smarty_tpl);?>
<?php }?></td>
                <td class="right">
                    <label for="nbshow"><?php echo smarty_function__T(array('string'=>"Records per page:"),$_smarty_tpl);?>
</label>
                    <select name="nbshow" id="nbshow">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['nbshow_options']->value,'selected'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>

                    </select>
                    <noscript> <span><input type="submit" value="<?php echo smarty_function__T(array('string'=>"Change"),$_smarty_tpl);?>
" /></span></noscript>
                </td>
            </tr>
        </table>
        </form>
        <form action="gestion_adherents.php" method="post" id="listform">
        <table class="listing">
            <thead>
                <tr>
                    <th class="id_row">#</th>
                    <th class="left">
                        <a href="gestion_adherents.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::ORDERBY_NAME;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['filters']->value->orderby==constant('galette\Repository\Members::ORDERBY_NAME')){?>
                                <?php if ($_smarty_tpl->tpl_vars['filters']->value->ordered==constant('Galette\Filters\MembersList::ORDER_ASC')){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                                <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                                <?php }?>
                            <?php }?>
                        </a>
                    </th>
                    <th class="left">
                        <a href="gestion_adherents.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::ORDERBY_NICKNAME;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <?php echo smarty_function__T(array('string'=>"Nickname"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['filters']->value->orderby==constant('Galette\Repository\Members::ORDERBY_NICKNAME')){?>
                                <?php if ($_smarty_tpl->tpl_vars['filters']->value->ordered==constant('Galette\Filters\MembersList::ORDER_ASC')){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                                <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                                <?php }?>
                            <?php }?>
                        </a>
                    </th>
                    <th class="left">
                        <a href="gestion_adherents.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::ORDERBY_STATUS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <?php echo smarty_function__T(array('string'=>"Status"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['filters']->value->orderby==constant('Galette\Repository\Members::ORDERBY_STATUS')){?>
                                <?php if ($_smarty_tpl->tpl_vars['filters']->value->ordered==constant('Galette\Filters\MembersList::ORDER_ASC')){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                                <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                                <?php }?>
                            <?php }?>
                        </a>
                    </th>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                    <th class="left">
                        <a href="gestion_adherents.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::ORDERBY_FEE_STATUS;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <?php echo smarty_function__T(array('string'=>"State of dues"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['filters']->value->orderby==constant('Galette\Repository\Members::ORDERBY_FEE_STATUS')){?>
                                <?php if ($_smarty_tpl->tpl_vars['filters']->value->ordered==constant('Galette\Filters\MembersList::ORDER_ASC')){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                                <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                                <?php }?>
                            <?php }?>
                        </a>
                    </th>
                    <th class="left">
                        <a href="gestion_adherents.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::ORDERBY_MODIFDATE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <?php echo smarty_function__T(array('string'=>"Modified"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['filters']->value->orderby==constant('Galette\Repository\Members::ORDERBY_MODIFDATE')){?>
                                <?php if ($_smarty_tpl->tpl_vars['filters']->value->ordered==constant('Galette\Filters\MembersList::ORDER_ASC')){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                                <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                                <?php }?>
                            <?php }?>
                        </a>
                    </th>
<?php }?>
                    <th class="actions_row"><?php echo smarty_function__T(array('string'=>"Actions"),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
<?php if ($_smarty_tpl->tpl_vars['nb_members']->value!=0){?>
            <tfoot>
                <tr>
                    <td colspan="7" id="table_footer">
                        <ul class="selection_menu">
                            <li><?php echo smarty_function__T(array('string'=>"For the selection:"),$_smarty_tpl);?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                            <li><input type="submit" id="delete" name="delete" value="<?php echo smarty_function__T(array('string'=>"Delete"),$_smarty_tpl);?>
"/></li>
        <?php if ($_smarty_tpl->tpl_vars['pref_mail_method']->value!=constant('Galette\Core\GaletteMail::METHOD_DISABLED')){?>
                            <li><input type="submit" id="sendmail" name="mailing" value="<?php echo smarty_function__T(array('string'=>"Mail"),$_smarty_tpl);?>
"/></li>
        <?php }?>
    <?php }?>
                            <li>
                                <input type="submit" id="attendance_sheet" name="attendance_sheet" value="<?php echo smarty_function__T(array('string'=>"Attendance sheet"),$_smarty_tpl);?>
"/>
                            </li>
                            <li><input type="submit" name="labels" value="<?php echo smarty_function__T(array('string'=>"Generate labels"),$_smarty_tpl);?>
"/></li>
                            <li><input type="submit" name="cards" value="<?php echo smarty_function__T(array('string'=>"Generate Member Cards"),$_smarty_tpl);?>
"/></li>
    <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                            <li><input type="submit" name="csv" value="<?php echo smarty_function__T(array('string'=>"Export as CSV"),$_smarty_tpl);?>
"/></li>
    <?php }?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" class="center">
                        <?php echo smarty_function__T(array('string'=>"Pages:"),$_smarty_tpl);?>
<br/>
                        <ul class="pages"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</ul>
                    </td>
                </tr>
            </tfoot>
<?php }?>
            <tbody>
<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_smarty_tpl->tpl_vars['ordre'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
 $_smarty_tpl->tpl_vars['ordre']->value = $_smarty_tpl->tpl_vars['member']->key;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['rclass'])) {$_smarty_tpl->tpl_vars['rclass'] = clone $_smarty_tpl->tpl_vars['rclass'];
$_smarty_tpl->tpl_vars['rclass']->value = $_smarty_tpl->tpl_vars['member']->value->getRowClass(); $_smarty_tpl->tpl_vars['rclass']->nocache = null; $_smarty_tpl->tpl_vars['rclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['rclass'] = new Smarty_variable($_smarty_tpl->tpl_vars['member']->value->getRowClass(), null, 0);?>
                <tr>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['rclass']->value;?>
 right"><?php echo $_smarty_tpl->tpl_vars['ordre']->value+1+($_smarty_tpl->tpl_vars['filters']->value->current_page-1)*$_smarty_tpl->tpl_vars['numrows']->value;?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['rclass']->value;?>
 nowrap username_row">
                        <input type="checkbox" name="member_sel[]" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"/>
                    <?php if ($_smarty_tpl->tpl_vars['member']->value->isCompany()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-company.png" alt="<?php echo smarty_function__T(array('string'=>"[C]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isMan()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-male.png" alt="<?php echo smarty_function__T(array('string'=>"[M]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isWoman()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-female.png" alt="<?php echo smarty_function__T(array('string'=>"[W]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['member']->value->email!=''){?>
                        <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['member']->value->email;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-mail.png" alt="<?php echo smarty_function__T(array('string'=>"[Mail]"),$_smarty_tpl);?>
" width="16" height="16"/></a>
                    <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['member']->value->isAdmin()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-star.png" alt="<?php echo smarty_function__T(array('string'=>"[admin]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isStaff()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-staff.png" alt="<?php echo smarty_function__T(array('string'=>"[staff]"),$_smarty_tpl);?>
" width="16" height="16"/>
                    <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
                    <?php }?>
                        <a href="voir_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->sname;?>
<?php if ($_smarty_tpl->tpl_vars['member']->value->company_name){?> (<?php echo $_smarty_tpl->tpl_vars['member']->value->company_name;?>
)<?php }?></a>
                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['rclass']->value;?>
 nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['rclass']->value;?>
 nowrap"><?php echo getStatusLabel(array('id'=>$_smarty_tpl->tpl_vars['member']->value->status),$_smarty_tpl);?>
</td>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['rclass']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->getDues();?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['rclass']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->modification_date;?>
</td>
<?php }?>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['rclass']->value;?>
 center nowrap actions_row">
                        <a href="ajouter_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-edit.png" alt="<?php echo smarty_function__T(array('string'=>"[mod]"),$_smarty_tpl);?>
" width="16" height="16" title="<?php echo smarty_function__T(array('string'=>"%membername: edit informations",'pattern'=>"/%membername/",'replace'=>$_smarty_tpl->tpl_vars['member']->value->sname),$_smarty_tpl);?>
"/></a>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                        <a href="gestion_contributions.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-money.png" alt="<?php echo smarty_function__T(array('string'=>"["."$"."]"),$_smarty_tpl);?>
" width="16" height="16" title="<?php echo smarty_function__T(array('string'=>"%membername: contributions",'pattern'=>"/%membername/",'replace'=>$_smarty_tpl->tpl_vars['member']->value->sname),$_smarty_tpl);?>
"/></a>
                        <a onclick="return confirm('<?php echo smarty_function__T(array('string'=>"Do you really want to delete this member from the base? This will also delete the history of his fees. You could instead disable the account.\\n\\nDo you still want to delete this member ?",'escape'=>"js"),$_smarty_tpl);?>
')" href="gestion_adherents.php?sup=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"[del]"),$_smarty_tpl);?>
" width="16" height="16" title="<?php echo smarty_function__T(array('string'=>"%membername: remove from database",'pattern'=>"/%membername/",'replace'=>$_smarty_tpl->tpl_vars['member']->value->sname),$_smarty_tpl);?>
"/></a>
<?php }?>
            
            <?php if (count($_smarty_tpl->tpl_vars['plugin_actions']->value)!=0){?>
              <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['action']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

              <?php } ?>
            <?php }?>
                    </td>
                </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['member']->_loop) {
?>
                <tr><td colspan="7" class="emptylist"><?php echo smarty_function__T(array('string'=>"No member has been found"),$_smarty_tpl);?>
</td></tr>
<?php } ?>
            </tbody>
        </table>
        </form>
<?php if ($_smarty_tpl->tpl_vars['nb_members']->value!=0){?>
        <div id="legende" title="<?php echo smarty_function__T(array('string'=>"Legend"),$_smarty_tpl);?>
">
            <h1><?php echo smarty_function__T(array('string'=>"Legend"),$_smarty_tpl);?>
</h1>
            <table>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-male.png" alt="<?php echo smarty_function__T(array('string'=>"Mister"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Man"),$_smarty_tpl);?>
</td>
                    <th class="back"><?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>
</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Active account"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-female.png" alt="<?php echo smarty_function__T(array('string'=>"Miss"),$_smarty_tpl);?>
 / <?php echo smarty_function__T(array('string'=>"Mrs."),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Woman"),$_smarty_tpl);?>
</td>
                    <th class="inactif back"><?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>
</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Inactive account"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-company.png" alt="<?php echo smarty_function__T(array('string'=>"Society"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Society"),$_smarty_tpl);?>
</td>
                    <th class="cotis-never color-sample">&nbsp;</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Never contributed"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-staff.png" alt="<?php echo smarty_function__T(array('string'=>"[staff]"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Staff member"),$_smarty_tpl);?>
</td>
                    <th class="cotis-ok color-sample">&nbsp;</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Membership in order"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-star.png" alt="<?php echo smarty_function__T(array('string'=>"Admin"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Admin"),$_smarty_tpl);?>
</td>
                    <th class="cotis-soon color-sample">&nbsp;</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Membership will expire soon (&lt;30d)"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-edit.png" alt="<?php echo smarty_function__T(array('string'=>"Modify"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Modification"),$_smarty_tpl);?>
</td>
                    <th class="cotis-late color-sample">&nbsp;</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Lateness in fee"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-money.png" alt="<?php echo smarty_function__T(array('string'=>"Contribution"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contributions"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"Delete"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Deletion"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-mail.png" alt="<?php echo smarty_function__T(array('string'=>"E-mail"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Send a mail"),$_smarty_tpl);?>
</td>
                </tr>
            </table>
        </div>
<?php }?>
        <script type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['nb_members']->value!=0){?>
        var _is_checked = true;
        var _bind_check = function(){
            $('#checkall').click(function(){
                $('table.listing :checkbox[name="member_sel[]"]').each(function(){
                    this.checked = _is_checked;
                });
                _is_checked = !_is_checked;
                return false;
            });
            $('#checkinvert').click(function(){
                $('table.listing :checkbox[name="member_sel[]"]').each(function(){
                    this.checked = !$(this).is(':checked');
                });
                return false;
            });
        }
<?php }?>
        
        $(function(){
<?php if ($_smarty_tpl->tpl_vars['nb_members']->value!=0){?>
            $('#table_footer').parent().before('<tr><td id="checkboxes" colspan="4"><span class="fleft"><a href="#" id="checkall"><?php echo smarty_function__T(array('string'=>"(Un)Check all"),$_smarty_tpl);?>
</a> | <a href="#" id="checkinvert"><?php echo smarty_function__T(array('string'=>"Invert selection"),$_smarty_tpl);?>
</a></span></td></tr>');
            _bind_check();
            $('#nbshow').change(function() {
                this.form.submit();
            });
            $('#checkboxes').after('<td class="right" colspan="3"><a href="#" id="show_legend"><?php echo smarty_function__T(array('string'=>"Show legend"),$_smarty_tpl);?>
</a></td>');
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
            $('.selection_menu input[type="submit"], .selection_menu input[type="button"]').click(function(){
                var _checkeds = $('table.listing').find('input[type=checkbox]:checked').length;
                if ( _checkeds == 0 ) {
                    var _el = $('<div id="pleaseselect" title="<?php echo smarty_function__T(array('string'=>"No member selected",'escape'=>"js"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Please make sure to select at least one member from the list to perform this action.",'escape'=>"js"),$_smarty_tpl);?>
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
                } else {
    <?php if ($_smarty_tpl->tpl_vars['existing_mailing']->value==true){?>
                    if (this.id == 'sendmail') {
                        var _el = $('<div id="existing_mailing" title="<?php echo smarty_function__T(array('string'=>"Existing mailing"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"A mailing already exists. Do you want to create a new one or resume the existing?"),$_smarty_tpl);?>
</div>');
                        _el.appendTo('body').dialog({
                            modal: true,
                            hide: 'fold',
                            width: '25em',
                            height: 150,
                            close: function(event, ui){
                                _el.remove();
                            },
                            buttons: {
                                '<?php echo smarty_function__T(array('string'=>"Resume"),$_smarty_tpl);?>
': function() {
                                    $(this).dialog( "close" );
                                    location.href = 'mailing_adherents.php';
                                },
                                '<?php echo smarty_function__T(array('string'=>"New"),$_smarty_tpl);?>
': function() {
                                    $(this).dialog( "close" );
                                    //add required controls to the form, change its action URI, and send it.
                                    var _form = $('#listform');
                                    _form.append($('<input type="hidden" name="mailing_new" value="true"/>'));
                                    _form.append($('<input type="hidden" name="mailing" value="true"/>'));
                                    _form.submit();
                                }
                            }
                        });
                        return false;
                    }
    <?php }?>
                    if (this.id == 'attendance_sheet') {
                        _attendance_sheet_details();
                        return false;
                    }

                    if ( this.id == 'delete' ) {
                        return confirm('<?php echo smarty_function__T(array('string'=>"Do you really want to delete all selected accounts (and related contributions)?",'escape'=>"js"),$_smarty_tpl);?>
');
                    }
                    return true;
                }
            });
<?php }?>
            if ( _shq = $('#showhideqry') ) {
                _shq.click(function(){
                    $('#sql_qry').toggleClass('hidden');
                    return false;
                });
            }
        });
<?php if ($_smarty_tpl->tpl_vars['nb_members']->value!=0){?>
        var _attendance_sheet_details = function(){
            var _selecteds = [];
            $('table.listing').find('input[type=checkbox]:checked').each(function(){
                _selecteds.push($(this).val());
            });
            $.ajax({
                url: 'ajax_attendance_sheet_details.php',
                type: "POST",
                data: {
                    ajax: true,
                    selection: _selecteds
                },
                dataType: 'html',
                success: function(res){
                    var _el = $('<div id="attendance_sheet_details" title="<?php echo smarty_function__T(array('string'=>"Attendance sheet details",'escape'=>"js"),$_smarty_tpl);?>
"> </div>');
                    _el.appendTo('body').dialog({
                        modal: true,
                        hide: 'fold',
                        width: '60%',
                        height: 400,
                        close: function(event, ui){
                            _el.remove();
                        },
                        buttons: {
                            Ok: function() {
                                $('#sheet_details_form').submit();
                                $(this).dialog( "close" );
                            },
                            Cancel: function() {
                                $(this).dialog( "close" );
                            }
                        }
                    }).append(res);
                    $('#sheet_date').datepicker({
                        changeMonth: true,
                        changeYear: true,
                        showOn: 'button',
                        buttonImage: '<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/calendar.png',
                        buttonImageOnly: true,
                        yearRange: 'c:c+5'
                    });
                },
                error: function() {
                    alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying attendance sheet details interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                }
            });
        }
<?php }?>
        </script>
<?php }} ?>