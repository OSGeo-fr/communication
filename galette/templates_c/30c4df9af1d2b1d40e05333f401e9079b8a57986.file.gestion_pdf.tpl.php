<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:15:09
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_pdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182690428952683c5d1c6c16-55098173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30c4df9af1d2b1d40e05333f401e9079b8a57986' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_pdf.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182690428952683c5d1c6c16-55098173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'models' => 0,
    'm' => 0,
    'model' => 0,
    'activetab' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52683c5d337c76_88726111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52683c5d337c76_88726111')) {function content_52683c5d337c76_88726111($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_modifier_escape')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/modifier.escape.php';
?>        <div class="tabbed">
        <div id="tabs">
            <ul>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['formodels']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['formodels']['iteration']++;
?>
    <?php if ($_smarty_tpl->tpl_vars['m']->value->id==$_smarty_tpl->tpl_vars['model']->value->id){?>
        <?php if (isset($_smarty_tpl->tpl_vars['activetab'])) {$_smarty_tpl->tpl_vars['activetab'] = clone $_smarty_tpl->tpl_vars['activetab'];
$_smarty_tpl->tpl_vars['activetab']->value = $_smarty_tpl->getVariable('smarty')->value['foreach']['formodels']['iteration']; $_smarty_tpl->tpl_vars['activetab']->nocache = null; $_smarty_tpl->tpl_vars['activetab']->scope = 0;
} else $_smarty_tpl->tpl_vars['activetab'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['formodels']['iteration'], null, 0);?>
    <?php }?>
                <li<?php if ($_smarty_tpl->tpl_vars['m']->value->id==$_smarty_tpl->tpl_vars['model']->value->id){?> class="ui-tabs-selected"<?php }?>><a href="?id=<?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value->name;?>
</a></li>
<?php } ?>
            </ul>
            <div id="ui-tabs-<?php echo $_smarty_tpl->tpl_vars['activetab']->value;?>
">
<?php echo $_smarty_tpl->getSubTemplate ("gestion_pdf_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>
        </div>
        <div id="legende" class="texts_legend" title="<?php echo smarty_function__T(array('string'=>"Existing variables"),$_smarty_tpl);?>
">
            <h1><?php echo smarty_function__T(array('string'=>"Existing variables"),$_smarty_tpl);?>
</h1>
            <table>
                <tr>
                    <th><tt>{ASSO_NAME}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Your organisation name"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"globally available"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{ASSO_SLOGAN}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Your organisation slogan"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"globally available"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{ASSO_ADDRESS}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Your organisation address"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"globally available"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{ASSO_WEBSITE}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Your organisation website"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"globally available"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{NAME_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's name"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{ADDRESS_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's address"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{ZIP_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's zipcode"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{TOWN_ADH}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Member's town"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{CONTRIBUTION_LABEL}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution label"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{CONTRIBUTION_AMOUNT}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution amount"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{CONTRIBUTION_DATE}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution full date"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{CONTRIBUTION_YEAR}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution year"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{CONTRIBUTION_COMMENT}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution comment"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{CONTRIBUTION_BEGIN_DATE}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution begin date"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{CONTRIBUTION_END_DATE}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution end date"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th><tt>{CONTRIBUTION_ID}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution id"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                </tr>
                <tr>
                    <th><tt>{CONTRIBUTION_PAYMENT_TYPE}</tt></th>
                    <td class="back"><?php echo smarty_function__T(array('string'=>"Contribution payment type"),$_smarty_tpl);?>
<br/><span>(<?php echo smarty_function__T(array('string'=>"available with reservations"),$_smarty_tpl);?>
)</span></td>
                    <th>&nbsp;</th>
                    <td class="back">&nbsp;</td>
                </tr>
            </table>
        </div>
        <script type="text/javascript">
            $('#tabs').append('<a class="button notext" id="btninfo_small" title="<?php echo smarty_function__T(array('string'=>"Show existing variables"),$_smarty_tpl);?>
"><?php echo smarty_function__T(array('string'=>"Show existing variables"),$_smarty_tpl);?>
</a>');
            $(function(){
                $('#legende h1').remove();
                $('#legende').dialog({
                    autoOpen: false,
                    modal: true,
                    hide: 'fold',
                    width: '60em'
                }).dialog('close');

                $('#btninfo_small').click(function(){
                    $('#legende').dialog('open');
                        return false;
                });

                $('#tabs > ul > li > a').each(function(){
                    $(this).attr('href', $(this).attr('href')  + '&ajax=true');
                });

                $('#tabs').tabs({
                    load: function(event, ui) {
                        $('#tabs input:submit, #tabs .button, #tabs input:reset' ).button();
                    },
                    ajaxOptions: {
                        
                        beforeSend: function(xhr, settings) {
                            if ( settings.url.match(/\?id=<?php echo $_smarty_tpl->tpl_vars['model']->value->id;?>
.*/) ) {
                                return false; //avoid reloading first tab onload
                            }
                            var _img = $('<figure id="loading"><p><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/loading.png" alt="<?php echo smarty_function__T(array('string'=>"Loading..."),$_smarty_tpl);?>
"/><br/><?php echo smarty_function__T(array('string'=>"Currently loading..."),$_smarty_tpl);?>
</p></figure>');
                            $('body').append(_img);
                        },
                        complete: function() {
                            $('#loading').remove();
                        },
                        error: function( xhr, status, index, anchor ) {
                            alert('<?php echo smarty_function__T(array('string'=>smarty_modifier_escape("An error occured :(", "js")),$_smarty_tpl);?>
');
                        }
                    }
                });
            });
        </script>
<?php }} ?>