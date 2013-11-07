<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:46:39
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1276097030526843bfd20009-65189231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da7b750325f275be48597bce657a143b87e54c1' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/member.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1276097030526843bfd20009-65189231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigate' => 0,
    'login' => 0,
    'self_adh' => 0,
    'head_redirect' => 0,
    'pref_mail_method' => 0,
    'member' => 0,
    'galette_base_path' => 0,
    'time' => 0,
    'visibles' => 0,
    'disabled' => 0,
    'required' => 0,
    'titles_list' => 0,
    'title' => 0,
    'languages' => 0,
    'langue' => 0,
    'statuts' => 0,
    'spam_pass' => 0,
    'spam_img' => 0,
    'groups' => 0,
    'group' => 0,
    'isnotfirst' => 0,
    'isnotfirstm' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526843c0cb8696_23760143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526843c0cb8696_23760143')) {function content_526843c0cb8696_23760143($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?><?php if (isset($_smarty_tpl->tpl_vars['navigate']->value)&&count($_smarty_tpl->tpl_vars['navigate']->value)!=0){?>
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
        <form action="<?php if ($_smarty_tpl->tpl_vars['login']->value->isLogged()){?>ajouter_adherent.php<?php }else{ ?>self_adherent.php<?php }?>" method="post" enctype="multipart/form-data" id="form">
        <div class="bigtable">
<?php if ($_smarty_tpl->tpl_vars['self_adh']->value&&$_smarty_tpl->tpl_vars['head_redirect']->value){?>
            <div id="infobox">
                <h1><?php echo smarty_function__T(array('string'=>"Account registered!"),$_smarty_tpl);?>
</h1>
                <p>
    <?php if ($_smarty_tpl->tpl_vars['pref_mail_method']->value==constant('Galette\Core\GaletteMail::METHOD_DISABLED')||$_smarty_tpl->tpl_vars['member']->value->email==''){?>
                    <?php echo smarty_function__T(array('string'=>"Your subscription has been registered."),$_smarty_tpl);?>

    <?php }else{ ?>
                    <?php echo smarty_function__T(array('string'=>"Your subscription has been registered, you will receive a recapitulative email soon (remember to check your spam box ;) )."),$_smarty_tpl);?>

    <?php }?>
                    <br/><?php echo smarty_function__T(array('string'=>"You'll be redirected to the login page in a few seconds"),$_smarty_tpl);?>

                </p>
            </div>
<?php }else{ ?>
            <p><?php echo smarty_function__T(array('string'=>"NB : The mandatory fields are in"),$_smarty_tpl);?>
 <span class="required"><?php echo smarty_function__T(array('string'=>"red"),$_smarty_tpl);?>
</span></p>
            <fieldset class="cssform">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Identity:"),$_smarty_tpl);?>
</legend>
                <div>
    <?php if (!$_smarty_tpl->tpl_vars['self_adh']->value){?>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Picture:"),$_smarty_tpl);?>
</span>
                        <img id="photo_adh" src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
picture.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
&amp;rand=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" class="picture" width="<?php echo $_smarty_tpl->tpl_vars['member']->value->picture->getOptimalWidth();?>
" height="<?php echo $_smarty_tpl->tpl_vars['member']->value->picture->getOptimalHeight();?>
" alt="<?php echo smarty_function__T(array('string'=>"Picture"),$_smarty_tpl);?>
"/><br/>
        <?php if ($_smarty_tpl->tpl_vars['member']->value->hasPicture()==1){?>
                        <span class="labelalign"><label for="del_photo"><?php echo smarty_function__T(array('string'=>"Delete image"),$_smarty_tpl);?>
</label></span><input type="checkbox" name="del_photo" id="del_photo" value="1"/><br/>
        <?php }?>
                        <input class="labelalign" type="file" name="photo"/>
                    </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['titre_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['titre_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="titre_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Title:"),$_smarty_tpl);?>
</label>
                        <select name="titre_adh" id="titre_adh"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['titre_adh'])){?> disabled="disabled"<?php }?>>
                            <option value="<?php if (isset($_smarty_tpl->tpl_vars['required']->value['titre_adh'])&&$_smarty_tpl->tpl_vars['required']->value['titre_adh']==1){?>-1<?php }?>"><?php echo smarty_function__T(array('string'=>"Not supplied"),$_smarty_tpl);?>
</option>
    <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['titles_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value){
$_smarty_tpl->tpl_vars['title']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['member']->value->title!=null&&$_smarty_tpl->tpl_vars['member']->value->title->id==$_smarty_tpl->tpl_vars['title']->value->id){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['title']->value->long;?>
</option>
    <?php } ?>
                        </select>
                    </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['sexe_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['sexe_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Gender:"),$_smarty_tpl);?>
</span>
                        <input type="radio" name="sexe_adh" id="gender_nc" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Adherent::NC;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if (!$_smarty_tpl->tpl_vars['member']->value->isMan()&&!$_smarty_tpl->tpl_vars['member']->value->isWoman()){?> checked="checked"<?php }?>/>
                        <label for="gender_nc"><?php echo smarty_function__T(array('string'=>"Unspecified"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="sexe_adh" id="gender_man" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Adherent::MAN;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['member']->value->isMan()){?> checked="checked"<?php }?>/>
                        <label for="gender_man"><?php echo smarty_function__T(array('string'=>"Man"),$_smarty_tpl);?>
</label>
                        <input type="radio" name="sexe_adh" id="gender_woman" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Adherent::WOMAN;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['member']->value->isWoman()){?> checked="checked"<?php }?>/>
                        <label for="gender_woman"><?php echo smarty_function__T(array('string'=>"Woman"),$_smarty_tpl);?>
</label>
                    </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['nom_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['nom_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="nom_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Name:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="nom_adh" id="nom_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" maxlength="50"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['nom_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['nom_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['nom_adh'])&&$_smarty_tpl->tpl_vars['required']->value['nom_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="nom_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['prenom_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['prenom_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="prenom_adh" class="bline"><?php echo smarty_function__T(array('string'=>"First name:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="prenom_adh" id="prenom_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->surname;?>
" maxlength="50"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['prenom_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['prenom_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['prenom_adh'])&&$_smarty_tpl->tpl_vars['required']->value['prenom_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="prenom_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->surname;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['societe_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['societe_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="is_company" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Is member a company?"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Is company?"),$_smarty_tpl);?>
</label>
                        <span class="tip"><?php echo smarty_function__T(array('string'=>"Do you manage a non profit organization, or a company? If you do so, check the box, and then enter its name in the field that will appear."),$_smarty_tpl);?>
</span>
                        <input type="checkbox" name="is_company" id="is_company" value="1"<?php if ($_smarty_tpl->tpl_vars['member']->value->isCompany()){?> checked="checked"<?php }?>/>
                    </p>
                    <p id="company_field"<?php if (!$_smarty_tpl->tpl_vars['member']->value->isCompany()){?> class="hidden"<?php }?>>
                        <label for="societe_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Company name:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="societe_adh" id="societe_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->company_name;?>
" maxlength="200"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['societe_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['societe_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['societe_adh'])&&$_smarty_tpl->tpl_vars['required']->value['societe_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="societe_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->company_name;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['pseudo_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['pseudo_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="pseudo_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Nickname:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="pseudo_adh" id="pseudo_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['pseudo_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['pseudo_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pseudo_adh'])&&$_smarty_tpl->tpl_vars['required']->value['pseudo_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="pseudo_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['ddn_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['ddn_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="ddn_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Birth date:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="ddn_adh" id="ddn_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->birthdate;?>
" maxlength="10"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['ddn_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['ddn_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['ddn_adh'])&&$_smarty_tpl->tpl_vars['required']->value['ddn_adh']==1){?> required<?php }?>/> <span class="exemple"><?php echo smarty_function__T(array('string'=>"(yyyy-mm-dd format)"),$_smarty_tpl);?>
</span>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="ddn_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->birthdate;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['lieu_naissance']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['lieu_naissance']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="lieu_naissance" class="bline"><?php echo smarty_function__T(array('string'=>"Birthplace:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="lieu_naissance" id="lieu_naissance" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->birth_place;?>
"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['lieu_naissance'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['lieu_naissance'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['lieu_naissance'])&&$_smarty_tpl->tpl_vars['required']->value['lieu_naissance']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="lieu_naissance" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->birth_place;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['prof_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['prof_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="prof_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Profession:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="prof_adh" id="prof_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->job);?>
" maxlength="150"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['prof_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['prof_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['prof_adh'])&&$_smarty_tpl->tpl_vars['required']->value['prof_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="prof_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->job);?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['pref_lang']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['pref_lang']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="pref_lang" class="bline"><?php echo smarty_function__T(array('string'=>"Language:"),$_smarty_tpl);?>
</label>
                        <select name="pref_lang" id="pref_lang"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['pref_lang'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['pref_lang'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pref_lang'])&&$_smarty_tpl->tpl_vars['required']->value['pref_lang']==1){?> required<?php }?>>
                            <?php  $_smarty_tpl->tpl_vars['langue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langue']->key => $_smarty_tpl->tpl_vars['langue']->value){
$_smarty_tpl->tpl_vars['langue']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['langue']->value->getID();?>
"<?php if ($_smarty_tpl->tpl_vars['member']->value->language==$_smarty_tpl->tpl_vars['langue']->value->getID()){?> selected="selected"<?php }?> style="background:url(<?php echo $_smarty_tpl->tpl_vars['langue']->value->getFlag();?>
) no-repeat;padding-left:30px;"><?php echo ucfirst($_smarty_tpl->tpl_vars['langue']->value->getName());?>
</option>
                            <?php } ?>
                        </select>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="pref_lang" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->language;?>
"/>
    <?php }?>
                </div>
            </fieldset>

            <fieldset class="cssform">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Contact information:"),$_smarty_tpl);?>
</legend>
                <div>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['adresse_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['adresse_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="adresse_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Address:"),$_smarty_tpl);?>
</label>
                        <input type="text" class="large" name="adresse_adh" id="adresse_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->adress);?>
" maxlength="150"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['adresse_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['adresse_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['adresse_adh'])&&$_smarty_tpl->tpl_vars['required']->value['adresse_adh']==1){?> required<?php }?>/><br/>
                        
                        <label for="adresse2_adh" class="bline libelle"><?php echo smarty_function__T(array('string'=>"Address:"),$_smarty_tpl);?>
 <?php echo smarty_function__T(array('string'=>" (continuation)"),$_smarty_tpl);?>
</label>
                        <input type="text" class="large" name="adresse2_adh" id="adresse2_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->adress_continuation);?>
" maxlength="150"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['adresse2_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['adresse2_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['adresse2_adh'])&&$_smarty_tpl->tpl_vars['required']->value['adresse2_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="adresse_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->adress);?>
"/>
                    <input type="hidden" name="adresse2_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->adress_continuation);?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['cp_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['cp_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="cp_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Zip Code:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="cp_adh" id="cp_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->zipcode;?>
" maxlength="10"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['cp_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['cp_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['cp_adh'])&&$_smarty_tpl->tpl_vars['required']->value['cp_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="cp_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->zipcode;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['ville_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['ville_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="ville_adh" class="bline"><?php echo smarty_function__T(array('string'=>"City:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="ville_adh" id="ville_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->town);?>
" maxlength="50"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['ville_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['ville_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['ville_adh'])&&$_smarty_tpl->tpl_vars['required']->value['ville_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="ville_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->town);?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['pays_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['pays_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="pays_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Country:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="pays_adh" id="pays_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->country);?>
" maxlength="50"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['pays_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['pays_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['pays_adh'])&&$_smarty_tpl->tpl_vars['required']->value['pays_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="pays_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->country);?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['tel_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['tel_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="tel_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Phone:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="tel_adh" id="tel_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->phone;?>
" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['tel_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['tel_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['tel_adh'])&&$_smarty_tpl->tpl_vars['required']->value['tel_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="tel_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->phone;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['gsm_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['gsm_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="gsm_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Mobile phone:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="gsm_adh" id="gsm_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->gsm;?>
" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['gsm_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['gsm_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['gsm_adh'])&&$_smarty_tpl->tpl_vars['required']->value['gsm_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="gsm_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->gsm;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['email_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['email_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="email_adh" class="bline"><?php echo smarty_function__T(array('string'=>"E-Mail:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="email_adh" id="email_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->email;?>
" maxlength="150" size="30"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['email_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['email_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['email_adh'])&&$_smarty_tpl->tpl_vars['required']->value['email_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="email_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->email;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['url_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['url_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="url_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Website:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="url_adh" id="url_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->website;?>
" maxlength="200" size="30"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['url_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['url_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['url_adh'])&&$_smarty_tpl->tpl_vars['required']->value['url_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="url_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->website;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['icq_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['icq_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="icq_adh" class="bline"><?php echo smarty_function__T(array('string'=>"ICQ:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="icq_adh" id="icq_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->icq;?>
" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['icq_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['icq_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['icq_adh'])&&$_smarty_tpl->tpl_vars['required']->value['icq_adh']==1){?>required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="icq_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->icq;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['jabber_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['jabber_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="jabber_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Jabber:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="jabber_adh" id="jabber_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->jabber;?>
" maxlength="150" size="30"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['jabber_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['jabber_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['jabber_adh'])&&$_smarty_tpl->tpl_vars['required']->value['jabber_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="jabber_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->jabber;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['msn_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['msn_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="msn_adh" class="bline"><?php echo smarty_function__T(array('string'=>"MSN:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="msn_adh" id="msn_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->msn;?>
" maxlength="150" size="30"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['msn_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['msn_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['msn_adh'])&&$_smarty_tpl->tpl_vars['required']->value['msn_adh']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="msn_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->msn;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['gpgid']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['gpgid']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="gpgid" class="bline"><?php echo smarty_function__T(array('string'=>"Id GNUpg (GPG):"),$_smarty_tpl);?>
</label>
                        <input type="text" name="gpgid" id="gpgid" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->gnupgid;?>
" maxlength="8" size="8"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['gpgid'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['gpgid'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['gpgid'])&&$_smarty_tpl->tpl_vars['required']->value['gpgid']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="gpgid" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->gnupgid;?>
"/>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['fingerprint']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['fingerprint']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="fingerprint" class="bline"><?php echo smarty_function__T(array('string'=>"fingerprint:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="fingerprint" id="fingerprint" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->fingerprint;?>
" maxlength="40" size="40"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['fingerprint'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['fingerprint'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['fingerprint'])&&$_smarty_tpl->tpl_vars['required']->value['fingerprint']==1){?>required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="fingerprint" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->fingerprint;?>
"/>
    <?php }?>
                </div>
            </fieldset>

            <fieldset class="cssform">
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Galette-related data:"),$_smarty_tpl);?>
</legend>
                <div>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['bool_display_info']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['bool_display_info']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="bool_display_info" class="bline tooltip" title="<?php echo smarty_function__T(array('string'=>"Do member want to appear publically?"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Be visible in the members list:"),$_smarty_tpl);?>
</label>
                        <span class="tip"><?php echo smarty_function__T(array('string'=>"If you check this box (and if you are up to date with your contributions), your full name, website adress ad other informations will be publically visilbe on the members list.<br/>If you've uploaded a photo, it will be displayed on the trombinoscope page.<br/>Note that administrators can disabled public pages, this setting will have no effect in that case."),$_smarty_tpl);?>
</span>
                        <input type="checkbox" name="bool_display_info" id="bool_display_info" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value->appearsInMembersList()==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['bool_display_info'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['bool_display_info'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['bool_display_info'])&&$_smarty_tpl->tpl_vars['required']->value['bool_display_info']==1){?> required<?php }?>/>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="bool_display_info" value="<?php if ($_smarty_tpl->tpl_vars['member']->value->appearsInMembersList()==1){?>1<?php }else{ ?>0<?php }?>"/>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['self_adh']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
            <?php if ($_smarty_tpl->tpl_vars['visibles']->value['activite_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['activite_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
                    <p>
                        <label for="activite_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Account:"),$_smarty_tpl);?>
</label>
                        <select name="activite_adh" id="activite_adh"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['activite_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['activite_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['activite_adh'])&&$_smarty_tpl->tpl_vars['required']->value['activite_adh']==1){?> required<?php }?>>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value->isActive()==1){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Active"),$_smarty_tpl);?>
</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['member']->value->isActive()==0){?>selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Inactive"),$_smarty_tpl);?>
</option>
                        </select>
                    </p>
            <?php }else{ ?>
                    <input type="hidden" name="activite_adh" value="<?php if ($_smarty_tpl->tpl_vars['member']->value->isActive()){?>1<?php }else{ ?>0<?php }?>"/>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['visibles']->value['id_statut']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['id_statut']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
                    <p>
                        <label for="id_statut" class="bline"><?php echo smarty_function__T(array('string'=>"Status:"),$_smarty_tpl);?>
</label>
                        <select name="id_statut" id="id_statut"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['id_statut'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['id_statut'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['id_statut'])&&$_smarty_tpl->tpl_vars['required']->value['id_statut']==1){?> required<?php }?>>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['statuts']->value,'selected'=>$_smarty_tpl->tpl_vars['member']->value->status),$_smarty_tpl);?>

                        </select>
                    </p>
            <?php }else{ ?>
                    <input type="hidden" name="id_statut" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->status;?>
"/>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()){?>
                <?php if ($_smarty_tpl->tpl_vars['visibles']->value['bool_admin_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['bool_admin_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
                    <p>
                        <label for="bool_admin_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Galette Admin:"),$_smarty_tpl);?>
</label>
                        <input type="checkbox" name="bool_admin_adh" id="bool_admin_adh" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value->isAdmin()){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['bool_admin_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['bool_admin_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['bool_admin_adh'])&&$_smarty_tpl->tpl_vars['required']->value['bool_admin_adh']==1){?> required<?php }?>/>
                    </p>
                <?php }else{ ?>
                    <input type="hidden" name="bool_admin_adh" value="<?php if ($_smarty_tpl->tpl_vars['member']->value->isAdmin()){?>1<?php }else{ ?>0<?php }?>"/>
            <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['visibles']->value['bool_exempt_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['bool_exempt_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
                    <p>
                        <label for="bool_exempt_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Freed of dues:"),$_smarty_tpl);?>
</label>
                        <input type="checkbox" name="bool_exempt_adh" id="bool_exempt_adh" value="1" <?php if ($_smarty_tpl->tpl_vars['member']->value->isDueFree()==1){?>checked="checked"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['bool_exempt_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['bool_exempt_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['bool_exempt_adh'])&&$_smarty_tpl->tpl_vars['required']->value['bool_exempt_adh']==1){?> required<?php }?>/>
                    </p>
            <?php }else{ ?>
                <input type="hidden" name="bool_exempt_adh" value="<?php if ($_smarty_tpl->tpl_vars['member']->value->isDueFree()){?>1<?php }else{ ?>0<?php }?>"/>
        <?php }?>
    <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['login_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['login_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="login_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Username:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="login_adh" id="login_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->login;?>
" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['login_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['login_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['login_adh'])&&$_smarty_tpl->tpl_vars['required']->value['login_adh']==1){?> required<?php }?>/>
                        
                        <span class="exemple"><?php echo smarty_function__T(array('string'=>"(at least %i characters)",'pattern'=>"/%i/",'replace'=>2),$_smarty_tpl);?>
</span>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="login_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->login;?>
"/>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['self_adh']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['visibles']->value['mdp_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['mdp_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="mdp_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Password:"),$_smarty_tpl);?>
</label>
                        <input type="password" name="mdp_adh" id="mdp_adh" value="" maxlength="20" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['mdp_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['mdp_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['mdp_adh'])&&$_smarty_tpl->tpl_vars['required']->value['mdp_adh']==1){?> required<?php }?>/>
                        
                        <span class="exemple"><?php echo smarty_function__T(array('string'=>"(at least %i characters)",'pattern'=>"/%i/",'replace'=>6),$_smarty_tpl);?>
</span>
                    </p>
                    <p>
                        <input class="labelalign" type="password" name="mdp_adh2" value="" maxlength="20" autocomplete="off"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['mdp_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['mdp_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['mdp_adh'])&&$_smarty_tpl->tpl_vars['required']->value['mdp_adh']==1){?> required<?php }?>/>
                        <span class="exemple"><?php echo smarty_function__T(array('string'=>"(Confirmation)"),$_smarty_tpl);?>
</span>
                    </p>
        <?php }?>
    <?php }else{ ?>
                    <p>
                        <label for="mdp_adh" class="bline libelle"><?php echo smarty_function__T(array('string'=>"Password:"),$_smarty_tpl);?>
</label>
                        <input type="hidden" name="mdp_crypt" value="<?php echo $_smarty_tpl->tpl_vars['spam_pass']->value;?>
" />
                        <img src="<?php echo $_smarty_tpl->tpl_vars['spam_img']->value;?>
" alt="<?php echo smarty_function__T(array('string'=>"Password image"),$_smarty_tpl);?>
" />
                        <input type="text" name="mdp_adh" id="mdp_adh" value="" maxlength="20"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['mdp_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['mdp_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['mdp_adh'])&&$_smarty_tpl->tpl_vars['required']->value['mdp_adh']==1){?> required<?php }?>/>
                        <span class="exemple"><?php echo smarty_function__T(array('string'=>"Please repeat in the field the password shown in the image."),$_smarty_tpl);?>
</span>
                    </p>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['self_adh']->value&&($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())){?>
        <?php if ($_smarty_tpl->tpl_vars['visibles']->value['date_crea_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['date_crea_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
                    <p>
                        <label for="date_crea_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Creation date:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="date_crea_adh" id="date_crea_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->creation_date;?>
" maxlength="10"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['date_crea_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['date_crea_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['date_crea_adh'])&&$_smarty_tpl->tpl_vars['required']->value['date_crea_adh']==1){?> required<?php }?>/>
                        <span class="exemple"><?php echo smarty_function__T(array('string'=>"(yyyy-mm-dd format)"),$_smarty_tpl);?>
</span>
                    </p>
        <?php }else{ ?>
                    <input type="hidden" name="date_crea_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->creation_date;?>
"/>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['visibles']->value['info_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||$_smarty_tpl->tpl_vars['visibles']->value['info_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')){?>
                    <p>
                        <label for="info_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Other informations (admin):"),$_smarty_tpl);?>
</label>
                        <textarea name="info_adh" id="info_adh" cols="50" rows="6"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['info_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['info_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['info_adh'])&&$_smarty_tpl->tpl_vars['required']->value['info_adh']==1){?> required<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->others_infos_admin);?>
</textarea><br/>
                        <span class="exemple labelalign"><?php echo smarty_function__T(array('string'=>"This comment is only displayed for admins and staff members."),$_smarty_tpl);?>
</span>
                    </p>
        <?php }else{ ?>
                    <input type="hidden" name="info_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->others_infos_admin);?>
"/>
    <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibles']->value['info_public_adh']==constant('Galette\Entity\FieldsConfig::VISIBLE')||($_smarty_tpl->tpl_vars['visibles']->value['info_public_adh']==constant('Galette\Entity\FieldsConfig::ADMIN')&&($_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isSuperAdmin()))){?>
                    <p>
                        <label for="info_public_adh" class="bline"><?php echo smarty_function__T(array('string'=>"Other informations:"),$_smarty_tpl);?>
</label> 
                        <textarea name="info_public_adh" id="info_public_adh" cols="61" rows="6"<?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['info_public_adh'])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['info_public_adh'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['required']->value['info_public_adh'])&&$_smarty_tpl->tpl_vars['required']->value['info_public_adh']==1){?> required<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->others_infos);?>
</textarea>
    <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                        <br/><span class="exemple labelalign"><?php echo smarty_function__T(array('string'=>"This comment is reserved to the member."),$_smarty_tpl);?>
</span>
    <?php }?>
                    </p>
    <?php }else{ ?>
                    <input type="hidden" name="info_public_adh" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->others_infos);?>
"/>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)&&count($_smarty_tpl->tpl_vars['groups']->value)!=0){?>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Groups:"),$_smarty_tpl);?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['login']->value->isGroupManager()){?>
                        <a class="button" id="btngroups"><?php echo smarty_function__T(array('string'=>"Manage user's groups"),$_smarty_tpl);?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                        <a class="button" id="btnmanagedgroups"><?php echo smarty_function__T(array('string'=>"Manage user's managed groups"),$_smarty_tpl);?>
</a>
        <?php }?>
                        <span id="usergroups_form">
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['member']->value->isGroupMember($_smarty_tpl->tpl_vars['group']->value->getName())){?>
                            <input type="hidden" name="groups_adh[]" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->getId();?>
|<?php echo $_smarty_tpl->tpl_vars['group']->value->getName();?>
"/>
            <?php }?>
        <?php } ?>
                        </span>
        <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isGroupManager()){?>
                        <span id="managedgroups_form">
            <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['member']->value->isGroupManager($_smarty_tpl->tpl_vars['group']->value->getName())){?>
                            <input type="hidden" name="groups_managed_adh[]" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->getId();?>
|<?php echo $_smarty_tpl->tpl_vars['group']->value->getName();?>
"/>
                <?php }?>
            <?php } ?>
                        </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()||$_smarty_tpl->tpl_vars['login']->value->isGroupManager()){?><br/><?php }?>
                        <span id="usergroups">
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['member']->value->isGroupMember($_smarty_tpl->tpl_vars['group']->value->getName())){?>
                <?php if (isset($_smarty_tpl->tpl_vars['isnotfirst']->value)){?>, <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['isnotfirst'])) {$_smarty_tpl->tpl_vars['isnotfirst'] = clone $_smarty_tpl->tpl_vars['isnotfirst'];
$_smarty_tpl->tpl_vars['isnotfirst']->value = true; $_smarty_tpl->tpl_vars['isnotfirst']->nocache = null; $_smarty_tpl->tpl_vars['isnotfirst']->scope = 0;
} else $_smarty_tpl->tpl_vars['isnotfirst'] = new Smarty_variable(true, null, 0);?>
                <?php echo smarty_function__T(array('string'=>"Member of '%groupname'",'pattern'=>"/%groupname/",'replace'=>$_smarty_tpl->tpl_vars['group']->value->getName()),$_smarty_tpl);?>

            <?php }?>
        <?php } ?>
                        </span>
        <?php if (isset($_smarty_tpl->tpl_vars['isnotfirst']->value)){?><br/><?php }?>
                        <span id="managedgroups">
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['member']->value->isGroupManager($_smarty_tpl->tpl_vars['group']->value->getName())){?>
                <?php if (isset($_smarty_tpl->tpl_vars['isnotfirstm']->value)){?>, <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['isnotfirstm'])) {$_smarty_tpl->tpl_vars['isnotfirstm'] = clone $_smarty_tpl->tpl_vars['isnotfirstm'];
$_smarty_tpl->tpl_vars['isnotfirstm']->value = true; $_smarty_tpl->tpl_vars['isnotfirstm']->nocache = null; $_smarty_tpl->tpl_vars['isnotfirstm']->scope = 0;
} else $_smarty_tpl->tpl_vars['isnotfirstm'] = new Smarty_variable(true, null, 0);?>
                <?php echo smarty_function__T(array('string'=>"Manager for '%groupname'",'pattern'=>"/%groupname/",'replace'=>$_smarty_tpl->tpl_vars['group']->value->getName()),$_smarty_tpl);?>

            <?php }?>
        <?php } ?>
                        </span>
                    </p>
    <?php }?>
                </div>
            </fieldset>

    <?php echo $_smarty_tpl->getSubTemplate ("edit_dynamic_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['pref_mail_method']->value!=constant('Galette\Core\GaletteMail::METHOD_DISABLED')&&(!$_smarty_tpl->tpl_vars['self_adh']->value&&($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()))&&(!isset($_smarty_tpl->tpl_vars['disabled']->value['send_mail'])||!$_smarty_tpl->tpl_vars['disabled']->value['send_mail'])){?>
                    <p>
                        <label for="mail_confirm">
        <?php if ($_smarty_tpl->tpl_vars['member']->value->id){?>
                            <?php echo smarty_function__T(array('string'=>"Notify member his account has been modified"),$_smarty_tpl);?>

        <?php }else{ ?>
                            <?php echo smarty_function__T(array('string'=>"Notify member his account has been created"),$_smarty_tpl);?>

        <?php }?>
                        </label>
                        <input type="checkbox" name="mail_confirm" id="mail_confirm" value="1" <?php if (isset($_POST['mail_confirm'])&&$_POST['mail_confirm']!=''){?>checked="checked"<?php }?>/>
                        <br/><span class="exemple">
        <?php if ($_smarty_tpl->tpl_vars['member']->value->id){?>
                            <?php echo smarty_function__T(array('string'=>"Member will be notified by mail his account has been modified."),$_smarty_tpl);?>

        <?php }else{ ?>
                            <?php echo smarty_function__T(array('string'=>"Member will receive his username and password by email, if he has an address."),$_smarty_tpl);?>

        <?php }?>
                        </span>
                    </p>
    <?php }?>
        </div>
        <div class="button-container">
            <input type="submit" name="valid" id="btnsave" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
            <input type="hidden" name="id_adh" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"/>
        </div>
        </form> 
        <script type="text/javascript">
            $(function() {
                $('#is_company').change(function(){
                    //console.log(this.checked);
                    $('#company_field').toggleClass('hidden');
                });

                _collapsibleFieldsets();

                $('#ddn_adh').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    showOn: 'button',
                    buttonImage: '<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/calendar.png',
                    buttonImageOnly: true,
                    maxDate: '-0d',
                    yearRange: 'c-100:c+0'
                });
                $('#date_crea_adh').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    showOn: 'button',
                    buttonImage: '<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/calendar.png',
                    buttonImageOnly: true,
                    maxDate: '-0d',
                    yearRange: 'c-10:c+0'
                });

                
                $('#btngroups, #btnmanagedgroups').click(function(){
                    var _managed = false;
                    if ( $(this).attr('id') == 'btnmanagedgroups' ) {
                        _managed = true;
                    }
                    var _groups = [];
                    var _form = (_managed) ? 'managed' : 'user';
                    $('#' + _form + 'groups_form input').each(function(){
                        _group = $(this).val().split('|');
                        _groups[_groups.length] = {
                            id: _group[0],
                            name: _group[1]
                        };
                    });
                    $.ajax({
                        url: 'ajax_groups.php',
                        type: "POST",
                        data: {
                            ajax: true,
                            groups: _groups,
                            managed: _managed
                        },
                        <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                        success: function(res){
                            _groups_dialog(res, _groups, _managed);
                        },
                        error: function() {
                            alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying groups interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                        }
                    });
                    return false;
                });

                var _groups_dialog = function(res, _groups, _managed){
                    var _title = '<?php echo smarty_function__T(array('string'=>"Groups selection",'escape'=>"js"),$_smarty_tpl);?>
';
                    if ( _managed ) {
                        _title = '<?php echo smarty_function__T(array('string'=>"Managed groups selection",'escape'=>"js"),$_smarty_tpl);?>
';
                    }
                    var _el = $('<div id="ajax_groups_list" title="' + _title + '"> </div>');
                    _el.appendTo('body').dialog({
                        modal: true,
                        hide: 'fold',
                        width: '80%',
                        height: 500,
                        close: function(event, ui){
                            _el.remove();
                        }
                    });
                    _groups_ajax_mapper(res, _groups, _managed);
                }

                var _groups_ajax_mapper = function(res, _groups, _managed){
                    $('#ajax_groups_list').append(res);
                    $('#btnvalid').button().click(function(){
                        //remove actual groups
                        var _form = (_managed) ? 'managed' : 'user';
                        $('#' + _form + 'groups_form').empty();
                        var _groups = new Array();
                        var _groups_str = '';
                        $('li[id^="group_"]').each(function(){
                            //get group values
                            _gid = this.id.substring(6, this.id.length);
                            _gname = $(this).text();
                            _groups[_groups.length] = this.id.substring(6, this.id.length);
                            var _iname = (_managed) ? 'groups_managed_adh' : 'groups_adh';
                            $('#' + _form + 'groups_form').append(
                                '<input type="hidden" value="' +
                                _gid + '|' + _gname + '|' +
                                '" name="' + _iname + '[]">'
                            );
                            if ( _groups_str != '' ) {
                                _groups_str += ', ';
                            }
                            if ( _managed ) {
                                _groups_str += '<?php echo smarty_function__T(array('string'=>"Manager for '%groupname'",'escape'=>"js"),$_smarty_tpl);?>
'.replace(/%groupname/, _gname);
                            } else {
                                _groups_str += '<?php echo smarty_function__T(array('string'=>"Member of '%groupname'",'escape'=>"js"),$_smarty_tpl);?>
'.replace(/%groupname/, _gname);
                            }
                        });
                        $('#' + _form + 'groups').html(_groups_str);
                        $('#ajax_groups_list').dialog("close");
                    });
                    //Remap links
                    var _none = $('#none_selected').clone();
                    $('li input[type=checkbox]').click(function(e){
                        e.stopPropagation();
                    });
                    $('li[id^="group_"]').click(function(){
                        $(this).remove();
                        if ( $('#selected_groups ul li').length == 0 ) {
                            $('#selected_groups ul').append(_none);
                        }
                    });
                    $('#listing a').click(function(){
                        var _gid = this.href.substring(this.href.indexOf('?')+10);
                        var _gname = $(this).text();
                        $('#none_selected').remove()
                        if ( $('#group_' + _gid).length == 0 ) {
                            var _li = '<li id="group_' + _gid + '">' + _gname + '</li>';
                            $('#selected_groups ul').append(_li);
                            $('#group_' + _gid).click(function(){
                                $(this).remove();
                                if ( $('#selected_groups ul li').length == 0 ) {
                                    $('#selected_groups ul').append(_none);
                                }
                            });
                        }
                        return false;
                    });

                }

                <?php echo $_smarty_tpl->getSubTemplate ("photo_dnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            });
        </script>
<?php }?>
<?php }} ?>