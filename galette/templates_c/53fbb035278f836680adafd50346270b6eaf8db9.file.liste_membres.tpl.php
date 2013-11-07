<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:12:42
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/liste_membres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212936082252683bca276aa5-57190226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53fbb035278f836680adafd50346270b6eaf8db9' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/liste_membres.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212936082252683bca276aa5-57190226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'members' => 0,
    'nb_members' => 0,
    'nbshow_options' => 0,
    'numrows' => 0,
    'filters' => 0,
    'template_subdir' => 0,
    'pagination' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683bca3ad1e6_08619367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683bca3ad1e6_08619367')) {function content_52683bca3ad1e6_08619367($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?><?php if (count($_smarty_tpl->tpl_vars['members']->value)>0){?>
        <p><?php echo smarty_function__T(array('string'=>"This page shows only members who have choosen to be visible on the public lists and are up-to-date within their contributions. If you want your account to be visible here, edit your profile and check 'Be visible in the members list'"),$_smarty_tpl);?>
</p>
        <form action="liste_membres.php" method="get" id="filtre">
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
        <table class="listing">
            <thead>

                <tr>
                    <th class="left">
                        <a href="?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::ORDERBY_NAME;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing">
                            <?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['filters']->value->orderby==constant('Galette\Repository\Members::ORDERBY_NAME')){?>
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
                        <a href="?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Members::ORDERBY_NICKNAME;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing">
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
                        <a href="?tri=infos" class="listing"><?php echo smarty_function__T(array('string'=>"Informations"),$_smarty_tpl);?>
</a>
                    </th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="7" class="center">
                        <?php echo smarty_function__T(array('string'=>"Pages:"),$_smarty_tpl);?>
<br/>
                        <ul class="pages"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</ul>
                    </td>
                </tr>
            </tfoot>
            <tbody>
    <?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allmembers']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allmembers']['iteration']++;
?>
                <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['allmembers']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                    <td class="<?php echo $_smarty_tpl->tpl_vars['member']->value->getRowClass(true);?>
 nowrap username_row">
                    <?php if ($_smarty_tpl->tpl_vars['member']->value->isCompany()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-company.png" alt="" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isMan()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-male.png" alt="" width="16" height="16"/>
                    <?php }elseif($_smarty_tpl->tpl_vars['member']->value->isWoman()){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-female.png" alt="" width="16" height="16"/>
                    <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="10" height="12"/>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['member']->value->website!=''){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['member']->value->website;?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->sfullname;?>
</a>
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['member']->value->sfullname;?>

                    <?php }?>
                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['member']->value->getRowClass(true);?>
 nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['member']->value->nickname);?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['member']->value->getRowClass(true);?>
 nowrap"><?php echo $_smarty_tpl->tpl_vars['member']->value->others_infos;?>
</td>
                </tr>
    <?php } ?>
            </tbody>
        </table>

        <script type="text/javascript">
            $(function(){
                $('#nbshow').change(function() {
                    this.form.submit();
                });
            });
        </script>
<?php }else{ ?>
    <div id="infobox"><?php echo smarty_function__T(array('string'=>"No member to show"),$_smarty_tpl);?>
</div>
<?php }?>
<?php }} ?>