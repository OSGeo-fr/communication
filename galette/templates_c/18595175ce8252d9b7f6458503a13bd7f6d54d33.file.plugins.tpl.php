<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:50:42
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:675690822526844b260a325-66931098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18595175ce8252d9b7f6458503a13bd7f6d54d33' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/plugins.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675690822526844b260a325-66931098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins_list' => 0,
    'plugin' => 0,
    'name' => 0,
    'template_subdir' => 0,
    'plugins' => 0,
    'plugins_disabled_list' => 0,
    'GALETTE_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526844b271fd21_15402246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526844b271fd21_15402246')) {function content_526844b271fd21_15402246($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>    <table class="listing">
        <!--<caption><?php echo smarty_function__T(array('string'=>"Active plugins"),$_smarty_tpl);?>
</caption>-->
        <thead>
            <tr>
                <th class="listing"><?php echo smarty_function__T(array('string'=>"Name"),$_smarty_tpl);?>
</th>
                <th class="listing"><?php echo smarty_function__T(array('string'=>"Description"),$_smarty_tpl);?>
</th>
                <th class="listing"><?php echo smarty_function__T(array('string'=>"Author"),$_smarty_tpl);?>
</th>
                <th class="listing"><?php echo smarty_function__T(array('string'=>"Version"),$_smarty_tpl);?>
</th>
                <th class="listing actions_row"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="5" class="bgfree center"><strong><?php echo smarty_function__T(array('string'=>"Active plugins"),$_smarty_tpl);?>
</strong></th>
            </tr>
<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allplugins']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['plugin']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['allplugins']['iteration']++;
?>
            <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['allplugins']['iteration']%2==0){?>even<?php }else{ ?>odd<?php }?>">
                <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
)</td>
                <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value['desc'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value['author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value['version'];?>
</td>
                <td class="nowrap">
                    <a class="toggleActivation" href="?deactivate=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" title="<?php echo smarty_function__T(array('string'=>"Click here to deactivate plugin '%name'",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-on.png" alt="<?php echo smarty_function__T(array('string'=>"Disable plugin"),$_smarty_tpl);?>
"/>
                    </a>
    <?php if ($_smarty_tpl->tpl_vars['plugins']->value->needsDatabase($_smarty_tpl->tpl_vars['name']->value)){?>
                    <a href="ajax_plugins_initdb.php?plugid=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="initdb" id="initdb_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" title="<?php echo smarty_function__T(array('string'=>"Initialize '%name' database",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['plugin']->value['name']),$_smarty_tpl);?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-db.png" alt="<?php echo smarty_function__T(array('string'=>"Initialize database"),$_smarty_tpl);?>
" width="16" height="16"/>
                    </a>
    <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
    <?php }?>
                </td>
            </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['plugin']->_loop) {
?>
            <tr>
                <td colspan="5"><?php echo smarty_function__T(array('string'=>"No active plugin."),$_smarty_tpl);?>
</td>
            </tr>
<?php } ?>
            <tr>
                <th colspan="5" class="bgfree center"><strong><?php echo smarty_function__T(array('string'=>"Inactive plugins"),$_smarty_tpl);?>
</strong></th>
            </tr>
<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins_disabled_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
            <tr>
                <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
                <td>
                    <a class="toggleActivation" href="?activate=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" title="<?php echo smarty_function__T(array('string'=>"Click here to activate plugin '%name'",'pattern'=>"/%name/",'replace'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-off.png" alt="<?php echo smarty_function__T(array('string'=>"Enable plugin"),$_smarty_tpl);?>
"/>
                    </a>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-empty.png" alt="" width="16" height="16"/>
                </td>
            </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['plugin']->_loop) {
?>
            <tr>
                <td colspan="5"><?php echo smarty_function__T(array('string'=>"No inactive plugin."),$_smarty_tpl);?>
</td>
            </tr>
<?php } ?>
        </tbody>
    </table>

    <script type="text/javascript">
        $(function() {
<?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?>
            $('.initdb, a.toggleActivation').click(function(){
                alert('<?php echo smarty_function__T(array('string'=>"Application runs under demo mode. This functionnality is not enabled, sorry.",'escape'=>"js"),$_smarty_tpl);?>
');
                return false;
            });
<?php }else{ ?>
            var _initdb_dialog = function(res, _plugin){
                var _title = '<?php echo smarty_function__T(array('string'=>"Plugin database initialization: %name",'escape'=>"js"),$_smarty_tpl);?>
';
                var _el = $('<div id="initdb" title="' + _title.replace('%name', _plugin) + '"> </div>');
                _el.appendTo('body').dialog({
                    modal: true,
                    hide: 'fold',
                    width: '80%',
                    height: 500,
                    close: function(event, ui){
                        _el.remove();
                    }
                });
                _initdb_bindings(res);
            };
            var _initdb_bindings = function(res){
                $('#initdb').empty().append(res);
                $('#initdb input:submit, #initdb .button, #initdb input:reset' ).button();
                _messagesEffects();
                $('#btnback').click(function(){
                    $('#initdb').dialog('close');
                });
                $("#plugins_initdb_form").submit(function(event) {
                    /* stop form from submitting normally */
                    event.preventDefault();

                    var $form = $(this);
                    var _url = $form.attr('action');

                    var _dataString = $form.serialize();
                    _dataString += '&ajax=true';

                    $.ajax({
                        url: _url,
                        type: "POST",
                        data: _dataString,
                        <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                        success: function(res){
                            _initdb_bindings(res);
                        },
                        error: function() {
                            alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying plugin database initialization interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                        }
                    });
                });
            };

            $('.initdb').click(function(){
                var _plugin = this.id.substring(7);

                $.ajax({
                    url: 'ajax_plugins_initdb.php',
                    type: "POST",
                    data: {
                        ajax: true,
                        plugid: _plugin
                    },
                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                    success: function(res){
                        _initdb_dialog(res, _plugin);
                    },
                    error: function() {
                        alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying plugin database initialization interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                    }
                });
                return false;
            })
<?php }?>
        });
    </script>
<?php }} ?>