<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 12:47:36
         compiled from "templates/default/paypal_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1759019150526fa058743250-82208846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b41eb8739fb27ea6fa8970da91490106099e4057' => 
    array (
      0 => 'templates/default/paypal_history.tpl',
      1 => 1383047142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759019150526fa058743250-82208846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbshow_options' => 0,
    'numrows' => 0,
    'paypal_history' => 0,
    'template_subdir' => 0,
    'pagination' => 0,
    'logs' => 0,
    'log' => 0,
    'galette_base_path' => 0,
    'paypal_tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526fa058940f34_85246370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526fa058940f34_85246370')) {function content_526fa058940f34_85246370($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/modifier.date_format.php';
?>        <table class="listing">
            <thead>
                <tr>
                    <td colspan="6" class="right">
                        <form action="paypal_history.php" method="get" id="historyform">
                            <span>
                                <label for="nbshow"><?php echo smarty_function__T(array('string'=>"Records per page:"),$_smarty_tpl);?>
</label>
                                <select name="nbshow" id="nbshow">
                                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['nbshow_options']->value,'selected'=>$_smarty_tpl->tpl_vars['numrows']->value),$_smarty_tpl);?>

                                </select>
                                <noscript> <span><input type="submit" value="<?php echo smarty_function__T(array('string'=>"Change"),$_smarty_tpl);?>
" /></span></noscript>
                            </span>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th class="small_head">#</th>
                    <th class="left">
                        <a href="?tri=date_log">
                            <?php echo smarty_function__T(array('string'=>"Date"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['paypal_history']->value->orderby=="date_log"){?>
                                <?php if ($_smarty_tpl->tpl_vars['paypal_history']->value->getDirection()=="DESC"){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/down.png" width="10" height="6" alt="<?php echo smarty_function__T(array('string'=>"Ascendent"),$_smarty_tpl);?>
"/>
                                <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/up.png" width="10" height="6" alt="<?php echo smarty_function__T(array('string'=>"Descendant"),$_smarty_tpl);?>
"/>
                                <?php }?>
                            <?php }?>
                        </a>
                    </th>
                    <th>
                        <?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>

                    </th>
                    <th>
                        <?php echo smarty_function__T(array('string'=>"Subject"),$_smarty_tpl);?>

                    </th>
                    <th>
                        <?php echo smarty_function__T(array('string'=>"Amount"),$_smarty_tpl);?>

                    </th>
                    <th class="left actions_row"></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="6" class="center">
                        <?php echo smarty_function__T(array('string'=>"Pages:"),$_smarty_tpl);?>
<br/>
                        <ul class="pages"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</ul>
                    </td>
                </tr>
            </tfoot>
            <tbody>
<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['eachlog']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value){
$_smarty_tpl->tpl_vars['log']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['eachlog']['iteration']++;
?>
                <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['eachlog']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                    <td class="center"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['eachlog']['iteration'];?>
</td>
                    <td class="nowrap big_date_row">
                        <?php if (isset($_smarty_tpl->tpl_vars['log']->value['duplicate'])){?><img class="img-dup" src="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['paypal_tpl_dir']->value;?>
images/warning.png" alt="<?php echo smarty_function__T(array('string'=>"duplicate"),$_smarty_tpl);?>
"/><?php }?>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['history_date'],"%a %d/%m/%Y - %R");?>

                    </td>
                    <td>
    <?php if ($_smarty_tpl->tpl_vars['log']->value['request']['custom']){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['galette_base_path']->value;?>
voir_adherent.php?id_adh=<?php echo $_smarty_tpl->tpl_vars['log']->value['request']['custom'];?>
">
    <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['log']->value['request']['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['log']->value['request']['first_name'];?>

    <?php if (isset($_smarty_tpl->tpl_vars['log']->value['request']['transaction_subject'])){?>
                        </a>
    <?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['log']->value['request']['item_name'];?>

                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['request']['mc_gross'];?>
</td>
                    <td class="nowrap info"></td>
                </tr>
                <tr class="request tbl_line_<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['eachlog']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                    <th colspan="2"><?php echo smarty_function__T(array('string'=>"Request"),$_smarty_tpl);?>
</th>
                    <td colspan="4"><pre><?php echo $_smarty_tpl->tpl_vars['log']->value['raw_request'];?>
</pre></td>
                </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
                <tr><td colspan="6" class="emptylist"><?php echo smarty_function__T(array('string'=>"logs are empty"),$_smarty_tpl);?>
</td></tr>
<?php } ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $('#nbshow').change(function() {
                this.form.submit();
            });

            $(function() {
                var _elt = $('<img src="../../templates/default/images/info.png" class="reqhide" alt="" title="<?php echo smarty_function__T(array('string'=>"Show/hide full request"),$_smarty_tpl);?>
"/>');
                $('.request').hide().prev('tr').find('td.info').prepend(_elt);
                $('.reqhide').click(function() {
                    $(this).parents('tr').next('.request').toggle();
                });
            });
        </script>
<?php }} ?>