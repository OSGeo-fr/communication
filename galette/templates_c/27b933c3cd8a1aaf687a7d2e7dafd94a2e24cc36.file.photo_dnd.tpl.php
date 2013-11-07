<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:46:41
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/photo_dnd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13328247526843c113ecb6-41405471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b933c3cd8a1aaf687a7d2e7dafd94a2e24cc36' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/photo_dnd.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13328247526843c113ecb6-41405471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526843c116d751_75237659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526843c116d751_75237659')) {function content_526843c116d751_75237659($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>    <?php if ($_smarty_tpl->tpl_vars['member']->value->id){?>
                //Photo dnd
                // Check if window.FileReader exists to make
                // sure the browser supports file uploads
                if ( typeof(window.FileReader) ) {
                    var _dz = $('#photo_adh');

                    // Add a nice drag effect
                    _dz[0].ondragover = function() {
                        _dz.addClass('dndhover');
                        return false;
                    };

                    // Remove the drag effect when stopping our drag
                    _dz[0].ondragend = function() {
                        _dz.removeClass('dndhover');
                        return false;
                    };

                    // The drop event handles the file sending
                    _dz[0].ondrop = function(event) {
                        // Stop the browser from opening the file in the window
                        event.preventDefault();
                        _dz.removeClass('dndhover');

                        var file = event.dataTransfer.files[0];
                        var reader = new FileReader();
                        reader.readAsDataURL(file);

                        reader.onload = function(evt) {
                            $.ajax({
                                    type: 'POST',
                                    dataType: 'json',
                                    url : 'ajax_photo.php',
                                    data: {
                                        member_id: <?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
,
                                        filename: file.name,
                                        filesize: file.size,
                                        file: evt.target.result
                                    },
                                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                                    success: function(res){
                                        if ( res.result == true ) {
                                            d = new Date();
                                            var _photo = $('#photo_adh');
                                            _photo.removeAttr('width').removeAttr('height');
                                            _photo.attr('src', $('#photo_adh')[0].src + '&' + d.getTime());
                                            alert("<?php echo smarty_function__T(array('string'=>"Member photo has been changed.",'escape'=>"js"),$_smarty_tpl);?>
");
                                        } else {
                                            alert(res.message);
                                        }
                                    },
                                error: function() {
                                    alert("<?php echo smarty_function__T(array('string'=>"An error occured sending photo :(",'escape'=>"js"),$_smarty_tpl);?>
");
                                }
                            });
                        }
                    }
                }
    <?php }?>
<?php }} ?>