<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:12:33
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_contributions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121207856452683bc1dd5a45-45891095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e613359a24a9e49921b7819d2a905c6a3becfc83' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_contributions.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121207856452683bc1dd5a45-45891095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contributions' => 0,
    'member' => 0,
    'mode' => 0,
    'login' => 0,
    'nb_contributions' => 0,
    'max_amount' => 0,
    'nbshow_options' => 0,
    'numrows' => 0,
    'template_subdir' => 0,
    'pagination' => 0,
    'list_contribs' => 0,
    'contribution' => 0,
    'cclass' => 0,
    'ordre' => 0,
    'galette_base_path' => 0,
    'mid' => 0,
    'galette_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683bc237cf99_48536767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683bc237cf99_48536767')) {function content_52683bc237cf99_48536767($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?>        <form action="gestion_contributions.php" method="get" id="filtre">
        <div id="listfilter">
            <label for="start_date_filter"><?php echo smarty_function__T(array('string'=>"Show contributions since"),$_smarty_tpl);?>
</label>&nbsp;
            <input type="text" name="start_date_filter" id="start_date_filter" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['contributions']->value->start_date_filter;?>
"/>
            <label for="end_date_filter"><?php echo smarty_function__T(array('string'=>"until"),$_smarty_tpl);?>
</label>&nbsp;
            <input type="text" name="end_date_filter" id="end_date_filter" maxlength="10" size="10" value="<?php echo $_smarty_tpl->tpl_vars['contributions']->value->end_date_filter;?>
"/>
            <label for="payment_type_filter"><?php echo smarty_function__T(array('string'=>"Payment type"),$_smarty_tpl);?>
</label>
            <select name="payment_type_filter" id="payment_type_filter">
                <option value="-1"><?php echo smarty_function__T(array('string'=>"Select"),$_smarty_tpl);?>
</option>
                <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_CASH;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value->payment_type_filter==constant('Galette\Entity\Contribution::PAYMENT_CASH')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Cash"),$_smarty_tpl);?>
</option>
                <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_CREDITCARD;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value->payment_type_filter==constant('Galette\Entity\Contribution::PAYMENT_CREDITCARD')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Credit card"),$_smarty_tpl);?>
</option>
                <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_CHECK;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value->payment_type_filter==constant('Galette\Entity\Contribution::PAYMENT_CHECK')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Check"),$_smarty_tpl);?>
</option>
                <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_TRANSFER;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value->payment_type_filter==constant('Galette\Entity\Contribution::PAYMENT_TRANSFER')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Transfer"),$_smarty_tpl);?>
</option>
                <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_PAYPAL;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value->payment_type_filter==constant('Galette\Entity\Contribution::PAYMENT_PAYPAL')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Paypal"),$_smarty_tpl);?>
</option>
                <option value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Entity\Contribution::PAYMENT_OTHER;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php if ($_smarty_tpl->tpl_vars['contributions']->value->payment_type_filter===constant('Galette\Entity\Contribution::PAYMENT_OTHER')){?> selected="selected"<?php }?>><?php echo smarty_function__T(array('string'=>"Other"),$_smarty_tpl);?>
</option>
            </select>
            <input type="submit" class="inline" value="<?php echo smarty_function__T(array('string'=>"Filter"),$_smarty_tpl);?>
"/>
            <input type="submit" name="clear_filter" class="inline" value="<?php echo smarty_function__T(array('string'=>"Clear filter"),$_smarty_tpl);?>
"/>
        </div>
<?php if (isset($_smarty_tpl->tpl_vars['member']->value)){?>
        <div id="member_stateofdue" class="<?php echo $_smarty_tpl->tpl_vars['member']->value->getRowClass();?>
<?php if (!$_smarty_tpl->tpl_vars['member']->value->isActive()){?> inactive<?php }?>"><?php echo $_smarty_tpl->tpl_vars['member']->value->getDues();?>
</div>
<?php }?>
        <table class="infoline">
            <tr>
                <td class="left nowrap">
<?php if (isset($_smarty_tpl->tpl_vars['member']->value)&&$_smarty_tpl->tpl_vars['mode']->value!='ajax'){?>
    <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                    <a id="clearfilter" href="?id_adh=all" title="<?php echo smarty_function__T(array('string'=>"Show all members contributions"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Show all members contributions"),$_smarty_tpl);?>
</a>
    <?php }?>
                    <strong><?php echo $_smarty_tpl->tpl_vars['member']->value->sname;?>
</strong>
    <?php if (!$_smarty_tpl->tpl_vars['member']->value->isActive()){?> (<?php echo smarty_function__T(array('string'=>"Inactive"),$_smarty_tpl);?>
)<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                    (<a href="voir_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"See member profile"),$_smarty_tpl);?>
</a> -
                    <a href="ajouter_contribution.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
"><?php echo smarty_function__T(array('string'=>"Add a contribution"),$_smarty_tpl);?>
</a>)
    <?php }?>
                    &nbsp;:
<?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['nb_contributions']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nb_contributions']->value!=1){?><?php echo smarty_function__T(array('string'=>"contributions"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function__T(array('string'=>"contribution"),$_smarty_tpl);?>
<?php }?>
                </td>
                <td class="right">
                    <?php if ($_smarty_tpl->tpl_vars['mode']->value=='ajax'){?>
                        <input type="hidden" name="ajax" value="true"/>
                        <input type="hidden" name="max_amount" value="<?php echo $_smarty_tpl->tpl_vars['max_amount']->value;?>
"/>
                    <?php }?>
                    <label for="nbshow"><?php echo smarty_function__T(array('string'=>"Show:"),$_smarty_tpl);?>
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
        <form action="gestion_contributions.php" method="post" id="listform">
        <table class="listing">
            <thead>
                <tr>
                    <th class="listing id_row">#</th>
                    <th class="listing left date_row">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_DATE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"Date"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_DATE')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                            <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                            <?php }?>
                        <?php }?>
                        </a>
                    </th>
                    <th class="listing left date_row">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_BEGIN_DATE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"Begin"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_BEGIN_DATE')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                            <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                            <?php }?>
                        <?php }?>
                        </a>
                    </th>
                    <th class="listing left date_row">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_END_DATE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"End"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_END_DATE')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                            <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                            <?php }?>
                        <?php }?>
                        </a>
                    </th>
<?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&!isset($_smarty_tpl->tpl_vars['member']->value)){?>
                    <th class="listing left">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_MEMBER;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"Member"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_MEMBER')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
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
                    <th class="listing left">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_TYPE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"Type"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_TYPE')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                            <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                            <?php }?>
                        <?php }?>
                        </a>
                    </th>
                    <th class="listing left">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_AMOUNT;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"Amount"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_AMOUNT')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                            <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                            <?php }?>
                        <?php }?>
                        </a>
                    </th>
                    <th class="listing left">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_PAYMENT_TYPE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"Payment type"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_PAYMENT_TYPE')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                            <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                            <?php }?>
                        <?php }?>
                        </a>
                    </th>
                    <th class="listing left">
                        <a href="gestion_contributions.php?tri=<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo Galette\Repository\Contributions::ORDERBY_DURATION;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="listing"><?php echo smarty_function__T(array('string'=>"Duration"),$_smarty_tpl);?>

                        <?php if ($_smarty_tpl->tpl_vars['contributions']->value->orderby==constant('Galette\Repository\Contributions::ORDERBY_DURATION')){?>
                            <?php if ($_smarty_tpl->tpl_vars['contributions']->value->ordered==constant('Galette\Repository\Contributions::ORDER_ASC')){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt=""/>
                            <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt=""/>
                            <?php }?>
                        <?php }?>
                        </a>
                    </th>
<?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&$_smarty_tpl->tpl_vars['mode']->value!='ajax'){?>
                    <th class="listing nowrap actions_row"><?php echo smarty_function__T(array('string'=>"Actions"),$_smarty_tpl);?>
</th>
<?php }?>
                </tr>
            </thead>
<?php if ($_smarty_tpl->tpl_vars['nb_contributions']->value!=0){?>
            <tfoot>
                <tr>
                    <td class="right" colspan="<?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&!isset($_smarty_tpl->tpl_vars['member']->value)){?>10<?php }elseif($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>9<?php }else{ ?>8<?php }?>">
                        <?php echo smarty_function__T(array('string'=>"Found contributions total %f",'pattern'=>"/%f/",'replace'=>$_smarty_tpl->tpl_vars['contributions']->value->sum),$_smarty_tpl);?>

                    </td>
                </tr>
    <?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&$_smarty_tpl->tpl_vars['mode']->value!='ajax'){?>
                <tr>
                    <td colspan="8" id="table_footer">
                        <ul class="selection_menu">
                            <li><?php echo smarty_function__T(array('string'=>"For the selection:"),$_smarty_tpl);?>
</li>
                            <li><input type="submit" id="delete" onclick="return confirm('<?php echo smarty_function__T(array('string'=>strtr("Do you really want to delete all selected contributions?", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
');" name="delete" value="<?php echo smarty_function__T(array('string'=>"Delete"),$_smarty_tpl);?>
"/></li>
                        </ul>
                    </td>
                </tr>
    <?php }?>
                <tr>
                    <td colspan="<?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&!isset($_smarty_tpl->tpl_vars['member']->value)){?>10<?php }elseif($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>9<?php }else{ ?>8<?php }?>" class="center" id="table_footer">
                        <?php echo smarty_function__T(array('string'=>"Pages:"),$_smarty_tpl);?>
<br/>
                        <ul class="pages"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</ul>
                    </td>
                </tr>
            </tfoot>
<?php }?>
            <tbody>
<?php  $_smarty_tpl->tpl_vars['contribution'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contribution']->_loop = false;
 $_smarty_tpl->tpl_vars['ordre'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_contribs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contribution']->key => $_smarty_tpl->tpl_vars['contribution']->value){
$_smarty_tpl->tpl_vars['contribution']->_loop = true;
 $_smarty_tpl->tpl_vars['ordre']->value = $_smarty_tpl->tpl_vars['contribution']->key;
?>
    <?php if (isset($_smarty_tpl->tpl_vars["mid"])) {$_smarty_tpl->tpl_vars["mid"] = clone $_smarty_tpl->tpl_vars["mid"];
$_smarty_tpl->tpl_vars["mid"]->value = $_smarty_tpl->tpl_vars['contribution']->value->member; $_smarty_tpl->tpl_vars["mid"]->nocache = null; $_smarty_tpl->tpl_vars["mid"]->scope = 0;
} else $_smarty_tpl->tpl_vars["mid"] = new Smarty_variable($_smarty_tpl->tpl_vars['contribution']->value->member, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["cclass"])) {$_smarty_tpl->tpl_vars["cclass"] = clone $_smarty_tpl->tpl_vars["cclass"];
$_smarty_tpl->tpl_vars["cclass"]->value = $_smarty_tpl->tpl_vars['contribution']->value->getRowClass(); $_smarty_tpl->tpl_vars["cclass"]->nocache = null; $_smarty_tpl->tpl_vars["cclass"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cclass"] = new Smarty_variable($_smarty_tpl->tpl_vars['contribution']->value->getRowClass(), null, 0);?>
                <tr<?php if ($_smarty_tpl->tpl_vars['mode']->value=='ajax'){?> class="contribution_row" id="row_<?php echo $_smarty_tpl->tpl_vars['contribution']->value->id;?>
"<?php }?>>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 center nowrap">
                        <?php if ($_smarty_tpl->tpl_vars['mode']->value!='ajax'){?>
                            <input type="checkbox" name="contrib_sel[]" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->id;?>
"/>
                        <?php }else{ ?>
                            <input type="hidden" name="contrib_id" value="<?php echo $_smarty_tpl->tpl_vars['contribution']->value->id;?>
"/>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['ordre']->value+1;?>

        <?php if ($_smarty_tpl->tpl_vars['contribution']->value->isTransactionPart()){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
ajouter_transaction.php?trans_id=<?php echo $_smarty_tpl->tpl_vars['contribution']->value->transaction->id;?>
" title="<?php echo smarty_function__T(array('string'=>"Transaction: %s",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['contribution']->value->transaction->description),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-money.png"
                                alt="<?php echo smarty_function__T(array('string'=>"[view]"),$_smarty_tpl);?>
"
                                width="16"
                                height="16"/>
                        </a>
        <?php }else{ ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png"
                            alt="<?php echo smarty_function__T(array('string'=>"[view]"),$_smarty_tpl);?>
"
                            width="16"
                            height="16"/>
        <?php }?>
                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 center nowrap"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->date;?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 center nowrap"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->begin_date;?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 center nowrap"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->end_date;?>
</td>
    <?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&!isset($_smarty_tpl->tpl_vars['member']->value)){?>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['contribution']->value->filtre_cotis_adh==''){?>
                        <a href="gestion_contributions.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
"><?php if (isset($_smarty_tpl->tpl_vars['member']->value)){?><?php echo $_smarty_tpl->tpl_vars['member']->value->sname;?>
<?php }else{ ?><?php echo getMemberName(array('id'=>((string)$_smarty_tpl->tpl_vars['mid']->value)),$_smarty_tpl);?>
<?php }?></a>
        <?php }else{ ?>
                        <a href="voir_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
"><?php if (isset($_smarty_tpl->tpl_vars['member']->value)){?><?php echo $_smarty_tpl->tpl_vars['member']->value->sname;?>
<?php }else{ ?><?php echo getMemberName(array('id'=>((string)$_smarty_tpl->tpl_vars['mid']->value)),$_smarty_tpl);?>
<?php }?></a>
        <?php }?>
                    </td>
    <?php }?>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->type->libelle;?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 nowrap"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->amount;?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 nowrap"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->spayment_type;?>
</td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 nowrap"><?php echo $_smarty_tpl->tpl_vars['contribution']->value->duration;?>
</td>
    <?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&$_smarty_tpl->tpl_vars['mode']->value!='ajax'){?>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>
 center nowrap">
                        <a href="pdf_contribution.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['contribution']->value->id;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-pdf.png" alt="<?php echo smarty_function__T(array('string'=>"[pdf]"),$_smarty_tpl);?>
" width="16" height="16" title="<?php echo smarty_function__T(array('string'=>"Print an invoice or a receipt (depending on contribution type)"),$_smarty_tpl);?>
"/>
                        </a>
                        <a href="ajouter_contribution.php?id_cotis=<?php echo $_smarty_tpl->tpl_vars['contribution']->value->id;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-edit.png" alt="<?php echo smarty_function__T(array('string'=>"[mod]"),$_smarty_tpl);?>
" width="16" height="16" title="<?php echo smarty_function__T(array('string'=>"Edit the contribution"),$_smarty_tpl);?>
"/>
                        </a>
                        <a onclick="return confirm('<?php echo smarty_function__T(array('string'=>strtr("Do you really want to delete this contribution of the database ?", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
')" href="gestion_contributions.php?sup=<?php echo $_smarty_tpl->tpl_vars['contribution']->value->id;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"[del]"),$_smarty_tpl);?>
" width="16" height="16" title="<?php echo smarty_function__T(array('string'=>"Delete the contribution"),$_smarty_tpl);?>
"/>
                        </a>
                    </td>
    <?php }?>
                </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['contribution']->_loop) {
?>
                <tr><td colspan="<?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&!isset($_smarty_tpl->tpl_vars['member']->value)){?>10<?php }elseif($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>9<?php }else{ ?>8<?php }?>" class="emptylist"><?php echo smarty_function__T(array('string'=>"no contribution"),$_smarty_tpl);?>
</td></tr>
<?php } ?>
            </tbody>
        </table>
        </form>
        <div id="legende" title="<?php echo smarty_function__T(array('string'=>"Legend"),$_smarty_tpl);?>
">
            <h1><?php echo smarty_function__T(array('string'=>"Legend"),$_smarty_tpl);?>
</h1>
            <table>
<?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&$_smarty_tpl->tpl_vars['mode']->value!='ajax'){?>
                <tr>
                    <th class="back"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-edit.png" alt="<?php echo smarty_function__T(array('string'=>"[mod]"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Modification"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th class="back"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"[del]"),$_smarty_tpl);?>
" width="16" height="16"/></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Deletion"),$_smarty_tpl);?>
</td>
                </tr>
<?php }?>
                <tr>
                    <th class="cotis-normal color-sample">&nbsp;</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution"),$_smarty_tpl);?>
</td>
                </tr>
                <tr>
                    <th class="cotis-give color-sample">&nbsp;</th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Gift"),$_smarty_tpl);?>
</td>
                </tr>
            </table>
        </div>

        <script type="text/javascript">
            $(function(){
                var _init_contribs_page = function(res){
                    $('#nbshow').change(function() {
                        this.form.submit();
                    });
                    $('#table_footer').parent().before('<td class="right" colspan="<?php if (($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff())&&!isset($_smarty_tpl->tpl_vars['member']->value)){?>10<?php }elseif($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>9<?php }else{ ?>8<?php }?>"><a href="#" id="show_legend"><?php echo smarty_function__T(array('string'=>"Show legend"),$_smarty_tpl);?>
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

                    $.datepicker.setDefaults($.datepicker.regional['<?php echo $_smarty_tpl->tpl_vars['galette_lang']->value;?>
']);
                    $('#start_date_filter, #end_date_filter').datepicker({
                        changeMonth: true,
                        changeYear: true,
                        showOn: 'button',
                        buttonImage: '<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/calendar.png',
                        buttonImageOnly: true
                    });
                }
                _init_contribs_page();
            });
        </script>
<?php }} ?>