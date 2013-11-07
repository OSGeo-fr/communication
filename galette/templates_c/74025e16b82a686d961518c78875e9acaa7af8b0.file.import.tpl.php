<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:12:03
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157273809352683ba3716fe7-32518255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74025e16b82a686d961518c78875e9acaa7af8b0' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/import.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157273809352683ba3716fe7-32518255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'existing' => 0,
    'import' => 0,
    'import_file' => 0,
    'template_subdir' => 0,
    'dryrun' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683ba3814878_40350002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683ba3814878_40350002')) {function content_52683ba3814878_40350002($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <p class="center">
            <a class="button" id="preferences" href="import_model.php"><?php echo smarty_function__T(array('string'=>"Configure import model"),$_smarty_tpl);?>
</a>
        </p>
        <form class="form" action="import.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Existing files"),$_smarty_tpl);?>
</legend>
                <div class="warningbox">
                    <?php echo smarty_function__T(array('string'=>"Warning: Don't forget to backup your current database."),$_smarty_tpl);?>

                </div>
                <div>
<?php if (count($_smarty_tpl->tpl_vars['existing']->value)>0){?>
                    <p><?php echo smarty_function__T(array('string'=>"The following files seems ready to import on the disk:"),$_smarty_tpl);?>
</p>
                    <table class="listing">
                        <thead>
                            <tr>
                                <th><?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>
</th>
                                <th><?php echo smarty_function__T(array('string'=>"Date"),$_smarty_tpl);?>
</th>
                                <th><?php echo smarty_function__T(array('string'=>"Size"),$_smarty_tpl);?>
</th>
                                <th class="actions_row"></th>
                            </tr>
                        </thead>
                        <tbody>
    <?php  $_smarty_tpl->tpl_vars['import'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['import']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['existing']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['existing_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['import']->key => $_smarty_tpl->tpl_vars['import']->value){
$_smarty_tpl->tpl_vars['import']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['existing_list']['iteration']++;
?>
                            <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['existing_list']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                                <td>
                                    <input type="radio" name="import_file" id="file<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['existing_list']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['import']->value['name'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['import_file']->value)&&$_smarty_tpl->tpl_vars['import_file']->value==$_smarty_tpl->tpl_vars['import']->value['name']){?> checked="checked"<?php }?>/>
                                    <label for="file<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['existing_list']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['import']->value['name'];?>
</label> (<a href="get_import.php?file=<?php echo $_smarty_tpl->tpl_vars['import']->value['name'];?>
"><?php echo smarty_function__T(array('string'=>"see"),$_smarty_tpl);?>
</a>)
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['import']->value['date'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['import']->value['size'];?>

                                </td>
                                <td class="actions_row">
                                    <a href="import.php?sup=<?php echo $_smarty_tpl->tpl_vars['import']->value['name'];?>
" title="<?php echo smarty_function__T(array('string'=>"Remove '%file' from disk",'pattern'=>"/%file/",'replace'=>$_smarty_tpl->tpl_vars['import']->value['name']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/delete.png" alt="<?php echo smarty_function__T(array('string'=>"Delete"),$_smarty_tpl);?>
"/></a>
                                </td>
                            </tr>
    <?php } ?>
                        </tbody>
                    </table>
                    <div class="button-container">
                        <label for="dryrun" title="<?php echo smarty_function__T(array('string'=>"Run the import process, but do *not* store anything in the database"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Dry run"),$_smarty_tpl);?>
</label>
                        <input type="checkbox" name="dryrun" id="dryrun" value="1"<?php if (isset($_smarty_tpl->tpl_vars['dryrun']->value)&&$_smarty_tpl->tpl_vars['dryrun']->value==true){?> checked="checked"<?php }?>/><br/>
                        <input type="submit" name="import" id="import" value="<?php echo smarty_function__T(array('string'=>"Import"),$_smarty_tpl);?>
"/>
                    </div>
<?php }else{ ?>
                    <p><?php echo smarty_function__T(array('string'=>"No import file actually exists."),$_smarty_tpl);?>
<br/><?php echo smarty_function__T(array('string'=>"Use upload form below to send a new file on server, or copy it directly in the imports directory."),$_smarty_tpl);?>
</p>
<?php }?>
                </div>
            </fieldset>

            <fieldset>
                <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Upload new file"),$_smarty_tpl);?>
</legend>
                <div>
                    <p>
                        <label for="new_file"><?php echo smarty_function__T(array('string'=>"Select a file:"),$_smarty_tpl);?>
</label>
                        <input class="labelalign" type="file" name="new_file" accept="text/csv" id="new_file"/>
                    </p>
                    <div class="button-container">
                        <input type="submit" name="upload" value="<?php echo smarty_function__T(array('string'=>"Upload file"),$_smarty_tpl);?>
" id="upload"/>
                    </div>
                </div>
            </fieldset>
        </form>

        <script type="text/javascript">
            $(function() {
                _collapsibleFieldsets();
                //bind import click to check if one is selected
                $('#import').on('click', function(){
                    if ( $('input[name=import_file]:checked').length > 0 ) {
                        return true;
                    } else {
                        var _el = $('<div id="pleaseselect" title="<?php echo smarty_function__T(array('string'=>"No file selected",'escape'=>"js"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Please make sure to select one file to import.",'escape'=>"js"),$_smarty_tpl);?>
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
                    }
                });

                $('#upload').click(function(){
                    var _selected = $('#new_file')[0].files.length;
                    if ( _selected == 0 ) {
                         var _el = $('<div id="pleaseupload" title="<?php echo smarty_function__T(array('string'=>"No file to upload",'escape'=>"js"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Please make sure to select one file to upload.",'escape'=>"js"),$_smarty_tpl);?>
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
                        return true;
                    }
                });
            });
        </script>
<?php }} ?>