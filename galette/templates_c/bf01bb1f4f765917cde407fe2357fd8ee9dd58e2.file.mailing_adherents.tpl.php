<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:49:09
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/mailing_adherents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125322214652684455817e17-69426351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf01bb1f4f765917cde407fe2357fd8ee9dd58e2' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/mailing_adherents.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125322214652684455817e17-69426351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pref_mail_method' => 0,
    'GALETTE_MODE' => 0,
    'mailing_saved' => 0,
    'mailing' => 0,
    'count' => 0,
    'count_unreachables' => 0,
    'html_editor_active' => 0,
    'pref_editor_enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526844559df3c4_84641834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526844559df3c4_84641834')) {function content_526844559df3c4_84641834($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if ($_smarty_tpl->tpl_vars['pref_mail_method']->value==constant('Galette\Core\Mailing::METHOD_DISABLED')&&$_smarty_tpl->tpl_vars['GALETTE_MODE']->value!='DEMO'){?>
        <div id="errorbox">
            <h1><?php echo smarty_function__T(array('string'=>"- ERROR -"),$_smarty_tpl);?>
</h1>
            <p><?php echo smarty_function__T(array('string'=>"Email sent is disabled in the preferences. Ask galette admin"),$_smarty_tpl);?>
</p>
        </div>
<?php }elseif(!isset($_smarty_tpl->tpl_vars['mailing_saved']->value)){?>
        <form action="mailing_adherents.php#mail_preview" id="listform" method="post">
        <div class="mailing">
            <section class="mailing_infos">
                <header class="ui-state-default ui-state-active"><?php echo smarty_function__T(array('string'=>"Mailing informations"),$_smarty_tpl);?>
</header>
    <?php if (isset($_smarty_tpl->tpl_vars['count'])) {$_smarty_tpl->tpl_vars['count'] = clone $_smarty_tpl->tpl_vars['count'];
$_smarty_tpl->tpl_vars['count']->value = count($_smarty_tpl->tpl_vars['mailing']->value->recipients); $_smarty_tpl->tpl_vars['count']->nocache = null; $_smarty_tpl->tpl_vars['count']->scope = 0;
} else $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['mailing']->value->recipients), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['count_unreachables'])) {$_smarty_tpl->tpl_vars['count_unreachables'] = clone $_smarty_tpl->tpl_vars['count_unreachables'];
$_smarty_tpl->tpl_vars['count_unreachables']->value = count($_smarty_tpl->tpl_vars['mailing']->value->unreachables); $_smarty_tpl->tpl_vars['count_unreachables']->nocache = null; $_smarty_tpl->tpl_vars['count_unreachables']->scope = 0;
} else $_smarty_tpl->tpl_vars['count_unreachables'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['mailing']->value->unreachables), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['count']->value>0){?>
        <?php if ($_smarty_tpl->tpl_vars['mailing']->value->current_step==constant('Galette\Core\Mailing::STEP_SENT')){?>
                <p><?php echo smarty_function__T(array('string'=>"Your message has been sent to <strong>%s members</strong>",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['count']->value),$_smarty_tpl);?>
</p>
        <?php }else{ ?>
                <p id="recipients_count"><?php echo smarty_function__T(array('string'=>"You are about to send an e-mail to <strong>%s members</strong>",'pattern'=>"/%s/",'replace'=>$_smarty_tpl->tpl_vars['count']->value),$_smarty_tpl);?>
</p>
        <?php }?>
    <?php }else{ ?>
        <?php if ($_smarty_tpl->tpl_vars['count_unreachables']->value>0){?>
                <p id="recipients_count"><strong><?php echo smarty_function__T(array('string'=>"None of the selected members has an email address."),$_smarty_tpl);?>
</strong></p>
         <?php }else{ ?>
                <p id="recipients_count"><strong><?php echo smarty_function__T(array('string'=>"No member selected (yet)."),$_smarty_tpl);?>
</strong></p>
         <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['count_unreachables']->value>0){?>
                <p id="unreachables_count">
                    <strong><?php echo $_smarty_tpl->tpl_vars['count_unreachables']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['count_unreachables']->value!=1){?><?php echo smarty_function__T(array('string'=>"unreachable members:"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function__T(array('string'=>"unreachable member:"),$_smarty_tpl);?>
<?php }?></strong><br/>
                    <?php echo smarty_function__T(array('string'=>"Some members you have selected have no e-mail address. However, you can generate envelope labels to contact them by snail mail."),$_smarty_tpl);?>

                    <br/><a id="btnlabels" class="button" href="etiquettes_adherents.php?from=mailing"><?php echo smarty_function__T(array('string'=>"Generate labels"),$_smarty_tpl);?>
</a>
                </p>
    <?php }?>

                <div class="center">
    <?php if ($_smarty_tpl->tpl_vars['mailing']->value->current_step==constant('Galette\Core\Mailing::STEP_SENT')){?>
                    <a class="button" id="btnusers" href="gestion_adherents.php"><?php echo smarty_function__T(array('string'=>"Go back to members list"),$_smarty_tpl);?>
</a>
    <?php }else{ ?>
                    <a class="button" id="btnusers" href="gestion_adherents.php?nbshow=0&showChecked=true"><?php echo smarty_function__T(array('string'=>"Manage selected members"),$_smarty_tpl);?>
</a>
    <?php }?>
                </div>
            </section>
        <?php if ($_smarty_tpl->tpl_vars['mailing']->value->current_step==constant('Galette\Core\Mailing::STEP_START')){?>
            <section class="mailing_write">
                <header class="ui-state-default ui-state-active"><?php echo smarty_function__T(array('string'=>"Write your mailing"),$_smarty_tpl);?>
</header>
                <div>
                    <label for="mailing_objet" class="bline"><?php echo smarty_function__T(array('string'=>"Object:"),$_smarty_tpl);?>
</label>
                    <input type="text" name="mailing_objet" id="mailing_objet" value="<?php echo $_smarty_tpl->tpl_vars['mailing']->value->subject;?>
" size="80" required/>
                </div>
                <div>
                    <span class="fright"><a href="javascript:toggleMailingEditor('mailing_corps');" id="toggle_editor"><?php echo smarty_function__T(array('string'=>"(De)Activate HTML editor"),$_smarty_tpl);?>
</a></span>
                    <label for="mailing_corps" class="bline"><?php echo smarty_function__T(array('string'=>"Message:"),$_smarty_tpl);?>
</label>
                    <textarea name="mailing_corps" id="mailing_corps" cols="80" rows="15" required><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailing']->value->message, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    <input type="hidden" name="html_editor_active" id="html_editor_active" value="<?php if ($_smarty_tpl->tpl_vars['html_editor_active']->value){?>1<?php }else{ ?>0<?php }?>"/>
                </div>
                <div class="center">
                    <input type="checkbox" name="mailing_html" id="mailing_html" value="1" <?php if ($_smarty_tpl->tpl_vars['mailing']->value->html==1||$_smarty_tpl->tpl_vars['pref_editor_enabled']->value==1){?>checked="checked"<?php }?>/><label for="mailing_html"><?php echo smarty_function__T(array('string'=>"Interpret HTML"),$_smarty_tpl);?>
</label><br/>
                    <input type="submit" id="btnpreview" name="mailing_go" value="<?php echo smarty_function__T(array('string'=>"Preview"),$_smarty_tpl);?>
"/>
                    <input type="submit" id="btnsave" name="mailing_save" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
                    <input type="submit" id="btnsend" name="mailing_confirm" value="<?php echo smarty_function__T(array('string'=>"Send"),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?> class="disabled" disabled="disabled"<?php }?>/>
                    <input type="submit" id="btncancel" name="mailing_cancel" value="<?php echo smarty_function__T(array('string'=>"Cancel mailing"),$_smarty_tpl);?>
" formnovalidate/>
                </div>
            </section>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['mailing']->value->current_step==constant('Galette\Core\Mailing::STEP_PREVIEW')){?>
            <section class="mailing_write" id="mail_preview">
                <header class="ui-state-default ui-state-active"><?php echo smarty_function__T(array('string'=>"Preview your mailing"),$_smarty_tpl);?>
</header>
                <div>
                    <p><span class="bline"><?php echo smarty_function__T(array('string'=>"Object:"),$_smarty_tpl);?>
</span><?php echo $_smarty_tpl->tpl_vars['mailing']->value->subject;?>
</p>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Message:"),$_smarty_tpl);?>
</span><br/>
            <?php if ($_smarty_tpl->tpl_vars['mailing']->value->html){?>
                    <?php echo $_smarty_tpl->tpl_vars['mailing']->value->message;?>

            <?php }else{ ?>
                        <pre><?php echo $_smarty_tpl->tpl_vars['mailing']->value->message;?>
</pre>
            <?php }?>
                    </p>
                </div>
                <div>
                    <p>
                        <input type="submit" name="mailing_reset" class="button" id="btnback" value="<?php echo smarty_function__T(array('string'=>"Modifiy mailing"),$_smarty_tpl);?>
"/>
                        <input type="submit" name="mailing_confirm" value="<?php echo smarty_function__T(array('string'=>"Send"),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['GALETTE_MODE']->value=='DEMO'){?> class="disabled" disabled="disabled"<?php }?>/>
                        <input type="submit" id="btncancel" name="mailing_cancel" value="<?php echo smarty_function__T(array('string'=>"Cancel mailing"),$_smarty_tpl);?>
"/>
                        <input type="hidden" name="mailing_objet" value="<?php echo $_smarty_tpl->tpl_vars['mailing']->value->subject;?>
"/>
                        <input type="hidden" name="mailing_corps" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailing']->value->message, ENT_QUOTES, 'UTF-8', true);?>
"/>
                    </p>
                </div>
        <?php }?>

            </section>
        </div>
        </form>
    <?php if ($_smarty_tpl->tpl_vars['mailing']->value->current_step!=constant('Galette\Core\Mailing::STEP_SENT')){?>
<script type="text/javascript">
    $(function() {
        
        $('#btnpreview').click(function(){
            var _subject = $('#mailing_objet').val();
            var _body = $('#mailing_corps').val();
            var _html = $('#mailing_html').is(':checked');
            $.ajax({
                url: 'ajax_mailing_preview.php',
                type: "POST",
                data: {
                    ajax: true,
                    subject: _subject,
                    body: _body,
                    html: _html
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

        
        $('#btnusers').click(function(){
            $.ajax({
                url: 'ajax_members.php',
                type: "POST",
                data: {
                    ajax: true
                },
                <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                success: function(res){
                    _members_dialog(res);
                },
                error: function() {
                    alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying members interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                }
            });
            return false;
        });

        var _members_dialog = function(res){
            var _el = $('<div id="members_list" title="<?php echo smarty_function__T(array('string'=>"Members selection",'escape'=>"js"),$_smarty_tpl);?>
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
            _members_ajax_mapper(res);

        }

        var _members_ajax_mapper = function(res){
            $('#members_list').append(res);
            $('#selected_members ul').css(
                'max-height',
                $('#members_list').innerHeight() - $('#btnvalid').outerHeight() - $('#selected_members header').outerHeight() - 60 // -60 to fix display; do not know why
            );
            $('#btnvalid').button().click(function(){
                //first, let's store new recipients in mailing object
                var _recipients = new Array();
                $('li[id^="member_"]').each(function(){
                    _recipients[_recipients.length] = this.id.substring(7, this.id.length);
                });
                $.ajax({
                    url: 'ajax_recipients.php',
                    type: "POST",
                    data: {
                        recipients: _recipients
                    },
                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                    success: function(res){
                        $('#unreachables_count').remove();
                        $('#recipients_count').replaceWith(res);
                        $('.mailing_infos input:submit, .mailing_infos .button, .mailing_infos input:reset' ).button();
                        $('#members_list').dialog("close");
                    },
                    error: function() {
                        alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying members interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                    }
                });
            });
            //Remap links
            var _none = $('#none_selected').clone();
            $('li[id^="member_"]').click(function(){
                $(this).remove();
                if ( $('#selected_members ul li').length == 0 ) {
                    $('#selected_members ul').append(_none);
                }
            });
            $('#listing tbody a').click(function(){
                var _mid = this.href.substring(this.href.indexOf('?')+8);
                var _mname = $(this).text();
                $('#none_selected').remove()
                if ( $('#member_' + _mid).length == 0 ) {
                    var _li = '<li id="member_' + _mid + '">' + _mname + '</li>';
                    $('#selected_members ul').append(_li);
                    $('#member_' + _mid).click(function(){
                        $(this).remove();
                        if ( $('#selected_members ul li').length == 0 ) {
                            $('#selected_members ul').append(_none);
                        }
                    });
                }
                return false;
            });

            $('#members_list .pages a').click(function(){
                var _page = this.href.substring(this.href.indexOf('?')+6);
                var _members = new Array();
                $('li[id^="member_"]').each(function(){
                    _members[_members.length] = this.id.substring(7, this.id.length);
                });

                $.ajax({
                    url: 'ajax_members.php',
                    type: "POST",
                    data: {
                        ajax: true,
                        members: _members,
                        page: _page
                    },
                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                    success: function(res){
                        $('#members_list').empty();
                        _members_ajax_mapper(res);
                    },
                    error: function() {
                        alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying members interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                    }
                });
                return false;
            });
        }
    });
</script>
    <?php }?>
<?php }?>
<?php }} ?>