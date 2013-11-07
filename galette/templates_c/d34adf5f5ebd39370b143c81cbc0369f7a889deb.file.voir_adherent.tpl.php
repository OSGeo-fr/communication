<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 00:40:44
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/voir_adherent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1485649548526ef5fc9d42c3-07079728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd34adf5f5ebd39370b143c81cbc0369f7a889deb' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/voir_adherent.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1485649548526ef5fc9d42c3-07079728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigate' => 0,
    'pref_card_self' => 0,
    'login' => 0,
    'member' => 0,
    'pref_mail_method' => 0,
    'plugin_detailled_actions' => 0,
    'action' => 0,
    'template_subdir' => 0,
    'galette_base_path' => 0,
    'time' => 0,
    'visibles' => 0,
    'pref_lang_img' => 0,
    'pref_lang' => 0,
    'groups' => 0,
    'group' => 0,
    'kgroup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526ef5fd2307b9_90981956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ef5fd2307b9_90981956')) {function content_526ef5fd2307b9_90981956($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if (count($_smarty_tpl->tpl_vars['navigate']->value)!=0){?>
    <nav>
        <a id="prev" href="<?php if (isset($_smarty_tpl->tpl_vars['navigate']->value['prev'])){?>?id_adh=<?php echo $_smarty_tpl->tpl_vars['navigate']->value['prev'];?>
<?php }else{ ?>#<?php }?>" class="button<?php if (!isset($_smarty_tpl->tpl_vars['navigate']->value['prev'])){?> selected<?php }?>"><?php echo smarty_function__T(array('string'=>"Previous"),$_smarty_tpl);?>
</a>
        <?php echo $_smarty_tpl->tpl_vars['navigate']->value['pos'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigate']->value['count'];?>

        <a id="next" href="<?php if (isset($_smarty_tpl->tpl_vars['navigate']->value['next'])){?>?id_adh=<?php echo $_smarty_tpl->tpl_vars['navigate']->value['next'];?>
<?php }else{ ?>#<?php }?>"class="button<?php if (!isset($_smarty_tpl->tpl_vars['navigate']->value['next'])){?> selected<?php }?>"><?php echo smarty_function__T(array('string'=>"Next"),$_smarty_tpl);?>
</a>
    </nav>
<?php }?>
        <ul id="details_menu">
<?php if (($_smarty_tpl->tpl_vars['pref_card_self']->value==1)||($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())){?>
            <li>
                <a class="button<?php if (!$_smarty_tpl->tpl_vars['member']->value->isUp2Date()){?> disabled<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['member']->value->isUp2Date()){?>carte_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
<?php }else{ ?>#<?php }?>" id="btn_membercard"><?php echo smarty_function__T(array('string'=>"Generate Member Card"),$_smarty_tpl);?>
</a>
            </li>
    <?php if ($_smarty_tpl->tpl_vars['pref_mail_method']->value!=constant('Galette\Core\GaletteMail::METHOD_DISABLED')){?>
            <li>
                <a class="button" href="lostpasswd.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" id="btn_lostpassword" title="<?php echo smarty_function__T(array('string'=>"Send member a link to generate a new passord, as if had used the 'lost password' functionnality."),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"New password"),$_smarty_tpl);?>
</a>
            </li>
    <?php }?>
<?php }?>
            <li>
                <a class="button" href="ajouter_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" id="btn_edit"><?php echo smarty_function__T(array('string'=>"Modification"),$_smarty_tpl);?>
</a>
            </li>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
            <li>
                <a class="button" href="gestion_contributions.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" id="btn_contrib"><?php echo smarty_function__T(array('string'=>"View contributions"),$_smarty_tpl);?>
</a>
            </li>
            <li>
                <a class="button" href="ajouter_contribution.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" id="btn_addcontrib"><?php echo smarty_function__T(array('string'=>"Add a contribution"),$_smarty_tpl);?>
</a>
            </li>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['plugin_detailled_actions']->value)!=0){?>
  <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin_detailled_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['action']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php } ?>
<?php }?>

        </ul>
    <div class="bigtable wrmenu">
        <div id="member_stateofdue" class="<?php echo $_smarty_tpl->tpl_vars['member']->value->getRowClass();?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->getDues();?>
</div>
        <table class="details">
            <caption class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Identity:"),$_smarty_tpl);?>
</caption>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Name:"),$_smarty_tpl);?>
</th>
                <td>
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
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['member']->value->sfullname;?>

                </td>
                <td rowspan="<?php if ($_smarty_tpl->tpl_vars['member']->value->isCompany()){?>7<?php }else{ ?>6<?php }?>" style="width:<?php echo $_smarty_tpl->tpl_vars['member']->value->picture->getOptimalWidth();?>
px;">
                    <img
                        src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
picture.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
&amp;rand=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"
                        width="<?php echo $_smarty_tpl->tpl_vars['member']->value->picture->getOptimalWidth();?>
"
                        height="<?php echo $_smarty_tpl->tpl_vars['member']->value->picture->getOptimalHeight();?>
"
                        alt="<?php echo smarty_function__T(array('string'=>"Picture"),$_smarty_tpl);?>
"
                        id="photo_adh"/>
                </td>
            </tr>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['societe_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['societe_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
    <?php if ($_smarty_tpl->tpl_vars['member']->value->isCompany()){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Company:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->company_name;?>
</td>
            </tr>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['pseudo_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['pseudo_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Nickname:"),$_smarty_tpl);?>
</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['ddn_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['ddn_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Birth date:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->birthdate;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['lieu_naissance']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['lieu_naissance']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Birthplace:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->birth_place;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['prof_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['prof_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Profession:"),$_smarty_tpl);?>
</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->job);?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['pref_lang']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['pref_lang']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Language:"),$_smarty_tpl);?>
</th>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['pref_lang_img']->value;?>
" alt=""/> <?php echo $_smarty_tpl->tpl_vars['pref_lang']->value;?>
</td>
            </tr>
<?php }?>
        </table>

        <table class="details">
            <caption class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Contact information:"),$_smarty_tpl);?>
</caption>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['adresse_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['adresse_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Address:"),$_smarty_tpl);?>
</th>
                <td>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->adress);?>

    <?php if ($_smarty_tpl->tpl_vars['member']->value->adress_continuation!=''){?>
                    <br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->adress_continuation);?>

    <?php }?>
                </td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['cp_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['cp_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Zip Code:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->zipcode;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['ville_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['ville_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"City:"),$_smarty_tpl);?>
</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->town);?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['pays_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['pays_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Country:"),$_smarty_tpl);?>
</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->country);?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['tel_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['tel_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Phone:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->phone;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['gsm_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['gsm_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Mobile phone:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->gsm;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['email_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['email_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"E-Mail:"),$_smarty_tpl);?>
</th>
                <td>
    <?php if ($_smarty_tpl->tpl_vars['member']->value->email!=''){?>
                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['member']->value->email;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->email;?>
</a>
    <?php }?>
                </td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['url_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['url_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Website:"),$_smarty_tpl);?>
</th>
                <td>
    <?php if ($_smarty_tpl->tpl_vars['member']->value->website!=''){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['member']->value->website;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->website;?>
</a>
    <?php }?>
                </td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['icq_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['icq_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"ICQ:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->icq;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['jabber_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['jabber_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Jabber:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->jabber;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['msn_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['msn_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"MSN:"),$_smarty_tpl);?>
</th>
                <td>
    <?php if ($_smarty_tpl->tpl_vars['member']->value->msn!=''){?>
                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['member']->value->msn;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->msn;?>
</a>
    <?php }?>
                </td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['gpgid']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['gpgid']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Id GNUpg (GPG):"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->gnupgid;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['fingerprint']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['fingerprint']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"fingerprint:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->fingerprint;?>
</td>
            </tr>
<?php }?>
        </table>

        <table class="details">
            <caption class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Galette-related data:"),$_smarty_tpl);?>
</caption>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['bool_display_info']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['bool_display_info']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Be visible in the members list:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->sappears_in_list;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['activite_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['activite_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Account:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->sactive;?>
</td>
            </tr>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['id_statut']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['id_statut']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Status:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->sstatus;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['bool_admin_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['bool_admin_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Galette Admin:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->sadmin;?>
</td>
            </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['bool_exempt_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['bool_exempt_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Freed of dues:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->sdue_free;?>
</td>
            </tr>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['login_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['login_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Username:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->login;?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['date_crea_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['date_crea_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Creation date:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->creation_date;?>
</td>
            </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['date_modif_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['date_modif_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Last modification date:"),$_smarty_tpl);?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['member']->value->modification_date;?>
</td>
            </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['info_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['info_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Other informations (admin):"),$_smarty_tpl);?>
</th>
                <td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->others_infos_admin));?>
</td>
            </tr>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['visibles']->value['info_public_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['info_public_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Other informations:"),$_smarty_tpl);?>
</th>
                <td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->others_infos));?>
</td>
            </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['member']->value->groups!=false&&count($_smarty_tpl->tpl_vars['member']->value->groups)!=0||$_smarty_tpl->tpl_vars['member']->value->managed_groups!=false&&count($_smarty_tpl->tpl_vars['member']->value->managed_groups)!=0){?>
            <tr>
                <th><?php echo smarty_function__T(array('string'=>"Groups:"),$_smarty_tpl);?>
</th>
                <td>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['kgroup'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['kgroup']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['member']->value->isGroupMember($_smarty_tpl->tpl_vars['group']->value)||$_smarty_tpl->tpl_vars['member']->value->isGroupManager($_smarty_tpl->tpl_vars['group']->value)){?>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['login']->value->isGroupManager($_smarty_tpl->tpl_vars['kgroup']->value)){?>gestion_groupes.php?id_group=<?php echo $_smarty_tpl->tpl_vars['kgroup']->value;?>
<?php }else{ ?>#<?php }?>" class="button group-btn<?php if (!$_smarty_tpl->tpl_vars['login']->value->isGroupManager($_smarty_tpl->tpl_vars['kgroup']->value)){?> notmanaged<?php }?>">
                        <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['member']->value->isGroupMember($_smarty_tpl->tpl_vars['group']->value)){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-user.png" alt="<?php echo smarty_function__T(array('string'=>"[member]"),$_smarty_tpl);?>
" width="16" height="16"/>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['member']->value->isGroupManager($_smarty_tpl->tpl_vars['group']->value)){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-star.png" alt="<?php echo smarty_function__T(array('string'=>"[manager]"),$_smarty_tpl);?>
" width="16" height="16"/>
            <?php }?>
                    </a>
        <?php }?>
    <?php } ?>
                </td>
            </tr>
<?php }?>
        </table>

<?php echo $_smarty_tpl->getSubTemplate ("display_dynamic_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('is_form'=>false), 0);?>

    </div>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->login==$_smarty_tpl->tpl_vars['member']->value->login){?>
    <script type="text/javascript">
        $(function() {
            <?php echo $_smarty_tpl->getSubTemplate ("photo_dnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            $('.notmanaged').click(function(){
                var _el = $('<div id="not_managed_group" title="<?php echo smarty_function__T(array('string'=>"Not managed group",'escape'=>"js"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"You are not part of managers for the requested group.",'escape'=>"js"),$_smarty_tpl);?>
</div>');
                _el.appendTo('body').dialog({
                    modal: true,
                    buttons: {
                        "<?php echo smarty_function__T(array('string'=>"Ok",'escape'=>"js"),$_smarty_tpl);?>
": function() {
                            $( this ).dialog( "close" );
                        }
                    },
                    close: function(event, ui){
                        _el.remove();
                    }
                });
                return false;
            });
        });
    </script>
<?php }?>
<?php }} ?>