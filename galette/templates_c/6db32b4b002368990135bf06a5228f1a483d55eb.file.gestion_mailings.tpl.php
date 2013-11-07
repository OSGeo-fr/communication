<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:14:33
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_mailings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64282944052683c391cd867-84696861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db32b4b002368990135bf06a5228f1a483d55eb' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_mailings.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64282944052683c391cd867-84696861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbshow_options' => 0,
    'numrows' => 0,
    'history' => 0,
    'template_subdir' => 0,
    'pagination' => 0,
    'logs' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c3935acd6_84912261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c3935acd6_84912261')) {function content_52683c3935acd6_84912261($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/modifier.date_format.php';
?>        <table class="listing">
            <thead>
                <tr>
                    <td colspan="7" class="right">
                        <form action="gestion_mailings.php" method="get" id="historyform">
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
                    <th class="left date_row">
                        <a href="?tri=date_log">
                            <?php echo smarty_function__T(array('string'=>"Date"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['history']->value->orderby=="date_log"){?>
                                <?php if ($_smarty_tpl->tpl_vars['history']->value->getDirection()=="DESC"){?>
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
                    <th class="left username_row">
                        <a href="?tri=adh_log">
                            <?php echo smarty_function__T(array('string'=>"Sender"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['history']->value->orderby=="adh_log"){?>
                                <?php if ($_smarty_tpl->tpl_vars['history']->value->getDirection()=="DESC"){?>
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
                    <th class="left username_row">
                        <?php echo smarty_function__T(array('string'=>"Recipients"),$_smarty_tpl);?>

                    </th>
                    <th class="left">
                        <a href="?tri=action_log">
                            <?php echo smarty_function__T(array('string'=>"Subject"),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['history']->value->orderby=="action_log"){?>
                                <?php if ($_smarty_tpl->tpl_vars['history']->value->getDirection()=="DESC"){?>
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
                    <th class="left right small_head"><?php echo smarty_function__T(array('string'=>"Sent"),$_smarty_tpl);?>
</th>
                    <th></th>
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
                    <td class="nowrap"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['mailing_date'],"%a %d/%m/%Y - %R");?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['log']->value['mailing_sender']==0){?><?php echo smarty_function__T(array('string'=>"Superadmin"),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['log']->value['mailing_sender_name'];?>
<?php }?></td>
                    <td><?php echo count(unserialize($_smarty_tpl->tpl_vars['log']->value['mailing_recipients']));?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['mailing_subject'];?>
</td>
                    <td class="center">
                        <?php if ($_smarty_tpl->tpl_vars['log']->value['mailing_sent']==1){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-on.png" alt="<?php echo smarty_function__T(array('string'=>"Sent"),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Mailing has been sent"),$_smarty_tpl);?>
"/>
                        <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-off.png" alt="<?php echo smarty_function__T(array('string'=>"Not sent"),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Mailing has not been sent yet"),$_smarty_tpl);?>
"/>
                        <?php }?>
                    </td>
                    <td class="center nowrap actions_row">
                        <a id ="showdetails" href="ajax_mailing_preview.php?id=<?php echo $_smarty_tpl->tpl_vars['log']->value['mailing_id'];?>
">
                            <img
                                src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-preview.png"
                                alt="<?php echo smarty_function__T(array('string'=>"Show mailing %s details",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['log']->value['mailing_id']),$_smarty_tpl);?>
"
                                width="16"
                                height="16"
                                title="<?php echo smarty_function__T(array('string'=>"Display mailing '%subject' details in preview window",'pattern'=>"/%subject/",'replace'=>$_smarty_tpl->tpl_vars['log']->value['mailing_subject']),$_smarty_tpl);?>
"
                                />
                        </a>
                        <a href="mailing_adherents.php?from=<?php echo $_smarty_tpl->tpl_vars['log']->value['mailing_id'];?>
">
                            <img
                                src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-mail.png"
                                alt="<?php echo smarty_function__T(array('string'=>"New mailing from %s",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['log']->value['mailing_id']),$_smarty_tpl);?>
"
                                width="16"
                                height="16"
                                title="<?php echo smarty_function__T(array('string'=>"Use mailing '%subject' as a template for a new one",'pattern'=>"/%subject/",'replace'=>$_smarty_tpl->tpl_vars['log']->value['mailing_subject']),$_smarty_tpl);?>
"
                                />
                        </a>
                        <a
                            onclick="return confirm('<?php echo smarty_function__T(array('string'=>strtr("Do you really want to delete this mailing from the base?", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
')"
                            title="<?php echo smarty_function__T(array('string'=>"Delete mailing '%subject'",'pattern'=>"/%subject/",'replace'=>$_smarty_tpl->tpl_vars['log']->value['mailing_subject']),$_smarty_tpl);?>
"
                            href="?sup=<?php echo $_smarty_tpl->tpl_vars['log']->value['mailing_id'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-trash.png" alt="<?php echo smarty_function__T(array('string'=>"[del]"),$_smarty_tpl);?>
" width="16" height="16"/>
                        </a>
                    </td>
                </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
                <tr><td colspan="7" class="emptylist"><?php echo smarty_function__T(array('string'=>"No sent mailing has been stored in the database yet."),$_smarty_tpl);?>
</td></tr>
<?php } ?>
            </tbody>
        </table>
        <div class="center">
            <a class="button" id="btnadd" href="mailing_adherents.php?mailing_new=true"><?php echo smarty_function__T(array('string'=>"Create new mailing"),$_smarty_tpl);?>
</a>
        </div>
        <script type="text/javascript">
            $('#nbshow').change(function() {
                this.form.submit();
            });

            
            $('#showdetails').click(function(){
                $.ajax({
                    url: $(this).attr('href'),
                    type: "POST",
                    data: {
                        ajax: true,
                    },
                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                    success: function(res){
                        _preview_dialog(res);
                    },
                    error: function() {
                        alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying preview :(",'escape'=>"js"),$_smarty_tpl);?>
");
                    }
                });
                return false;
            });

            var _preview_dialog = function(res){
                var _el = $('<div id="ajax_preview" title="<?php echo smarty_function__T(array('string'=>"Mailing preview",'escape'=>"js"),$_smarty_tpl);?>
"> </div>');
                _el.appendTo('body').dialog({
                    modal: true,
                    hide: 'fold',
                    width: '80%',
                    height: 500,
                    close: function(event, ui){
                        _el.remove();
                    }
                });
                $('#ajax_preview').append( res );
            }

        </script>
<?php }} ?>