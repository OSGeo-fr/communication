<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:43:40
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_groupes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9830113405268430c291d65-47495508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd687238bc2cc7e3259f626ca20039bd8b8756a7' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/gestion_groupes.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9830113405268430c291d65-47495508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups_root' => 0,
    'g' => 0,
    'login' => 0,
    'group' => 0,
    'groups' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268430c3bea32_65639398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268430c3bea32_65639398')) {function content_5268430c3bea32_65639398($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><div class="panels">
    <aside id="groups_list">
        <header class="ui-state-default ui-state-active">
            <?php echo smarty_function__T(array('string'=>"Groups"),$_smarty_tpl);?>

        </header>
        <div id="groups_tree">
            <ul>
<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups_root']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
    <?php echo $_smarty_tpl->getSubTemplate ("group_tree_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['g']->value), 0);?>

<?php } ?>
            </ul>
        </div>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
        <div class="center">
            <a href="gestion_groupes.php?new" id="btnadd" class="button"><?php echo smarty_function__T(array('string'=>"New group"),$_smarty_tpl);?>
</a>
        </div>
<?php }?>
    </aside>
    <section id="group_infos">
        <header class="ui-state-default ui-state-active">
            <?php echo smarty_function__T(array('string'=>"Group informations"),$_smarty_tpl);?>

        </header>
        <div id="group_infos_wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ("group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>$_smarty_tpl->tpl_vars['group']->value,'groups'=>$_smarty_tpl->tpl_vars['groups']->value), 0);?>

        </div>
    </section>
</div>
<form action="gestion_groupes.php" method="POST">
    <div class="button-container">
        <input type="submit" name="pdf" value="<?php echo smarty_function__T(array('string'=>"Export as PDF"),$_smarty_tpl);?>
" title="<?php echo smarty_function__T(array('string'=>"Export all groups and their members as PDF"),$_smarty_tpl);?>
"/>
    </div>
</form>
<script type="text/javascript">
    $(function() {
        var _mode;
        
        $('#groups_tree').jstree({
<?php if (count($_smarty_tpl->tpl_vars['groups']->value)>0){?>
            'core': {
                'initially_open': [<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>'group_<?php echo $_smarty_tpl->tpl_vars['g']->value->getId();?>
',<?php } ?>]
            },
<?php }?>
            'themes': {
                'url': '<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
/jstree/style.css'
            },
            'unique' : {
                'error_callback': function (n, p, f) {
                    alert("Duplicate node `" + n + "` with function `" + f + "`!");
                }
            },
            'ui': {
                'select_limit': 1,
                'initially_select': 'group_<?php echo $_smarty_tpl->tpl_vars['group']->value->getId();?>
'
            },
            'plugins': [ 'themes', 'html_data', 'dnd', 'ui' ]
        }).bind("move_node.jstree", function (e, data) {
            var _gid = data.rslt.o.attr('id').substring(6);
            var _to = data.rslt.np.attr('id').substring(6);
            $.ajax({
                url: 'ajax_group.php',
                type: "POST",
                data: {
                    id_group: _gid,
                    ajax: true,
                    reorder: true,
                    to: _to
                },
                datatype: 'json',
                <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                success: function(res){
                    var _res = jQuery.parseJSON(res);
                    if ( _res.success == false ) {
                        alert("<?php echo smarty_function__T(array('string'=>"Missing destination group",'escape'=>"js"),$_smarty_tpl);?>
");
                        
                    }
                },
                error: function() {
                    
                    alert("<?php echo smarty_function__T(array('string'=>"An error occured reordering groups :(",'escape'=>"js"),$_smarty_tpl);?>
");
                }
            });
        }).delegate(
            'a',
            'click',
            function (event) {
                event.preventDefault();
                if ( $('#errorbox') ) {
                    $('#errorbox').remove();
                }
                if ( $(this).attr('href') != '#' ) {
                    var _gid = $(this).parent('li').attr('id').substring(6);
                    $.ajax({
                        url: 'ajax_group.php',
                        type: "POST",
                        data: {
                            id_group: _gid,
                            ajax: true
                        },
                        <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                        success: function(res){
                            $('#group_infos_wrapper').empty().append(res);
                            $('#group_infos_wrapper input:submit, #group_infos_wrapper .button').button();
                            _btnuser_mapping();
                        },
                        error: function() {
                            alert("<?php echo smarty_function__T(array('string'=>"An error occured loading selected group :(",'escape'=>"js"),$_smarty_tpl);?>
");
                        }
                    });
                }
            }
        );

        
        $('#btnadd').click(function(){
        var _href = $(this).attr('href');
            var _el = $('<div id="add_group" class="center" title="<?php echo smarty_function__T(array('string'=>"Add a new group"),$_smarty_tpl);?>
"><label for="new_group_name"><?php echo smarty_function__T(array('string'=>"Name:"),$_smarty_tpl);?>
</label><input type="text" name="new_group_name" id="new_group_name" required/></div>');
            _el.appendTo('body').dialog({
                modal: true,
                hide: 'fold',
                buttons: {
                    "<?php echo smarty_function__T(array('string'=>"Create",'escape'=>"js"),$_smarty_tpl);?>
": function() {
                        var _name = $('#new_group_name').val();
                        if ( _name != '' ) {
                            //check uniqueness
                            $.ajax({
                                url: 'ajax_unique_group.php',
                                type: "POST",
                                data: {
                                    ajax: true,
                                    gname: _name
                                },
                                <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                                success: function(res){
                                    var _res = jQuery.parseJSON(res);
                                    if ( _res.success == false ) {
                                        alert('<?php echo smarty_function__T(array('string'=>"The group name you have requested already exits in the database."),$_smarty_tpl);?>
');
                                    } else {
                                        $(location).attr('href', _href + '&group_name=' + _name);
                                    }
                                },
                                error: function() {
                                    alert("<?php echo smarty_function__T(array('string'=>"An error occured checking name uniqueness :(",'escape'=>"js"),$_smarty_tpl);?>
");
                                }
                            });
                        } else {
                            alert('<?php echo smarty_function__T(array('string'=>"Pleade provide a group name",'escape'=>"js"),$_smarty_tpl);?>
');
                        }
                    }
                },
                close: function(event, ui){
                    _el.remove();
                }
            });
            return false;
        });

        
        var _btnuser_mapping = function(){
            $('#btnusers_small, #btnmanagers_small').click(function(){
                _mode = ($(this).attr('id') == 'btnusers_small') ? 'members' : 'managers';
                var _persons = $('input[name="' + _mode + '[]"]').map(function() {
                    return $(this).val();
                }).get();
                $.ajax({
                    url: 'ajax_members.php',
                    type: "POST",
                    data: {
                        ajax: true,
                        multiple: true,
                        from: 'groups',
                        gid: $('#id_group').val(),
                        mode: _mode,
                        members: _persons
                    },
                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                    success: function(res){
                        _members_dialog(res, _mode);
                    },
                    error: function() {
                        alert("<?php echo smarty_function__T(array('string'=>"An error occured displaying members interface :(",'escape'=>"js"),$_smarty_tpl);?>
");
                    }
                });
                return false;
            });
        }
        _btnuser_mapping();

        var _members_dialog = function(res, mode){
            var _title = '<?php echo smarty_function__T(array('string'=>"Group members selection",'escape'=>"js"),$_smarty_tpl);?>
';
            if ( mode == 'managers' ) {
                _title = '<?php echo smarty_function__T(array('string'=>"Group managers selection",'escape'=>"js"),$_smarty_tpl);?>
';
            }
            var _el = $('<div id="members_list" title="' + _title  + '"> </div>');
            _el.appendTo('body').dialog({
                modal: true,
                hide: 'fold',
                width: '80%',
                height: 550,
                close: function(event, ui){
                    _el.remove();
                }
            });
            _members_ajax_mapper(res, $('#group_id').val(), mode);

        }

        var _members_ajax_mapper = function(res, gid, mode){
            $('#members_list').append(res);
            $('#selected_members ul').css(
                'max-height',
                $('#members_list').innerHeight() - $('#btnvalid').outerHeight() - $('#selected_members header').outerHeight() - 65 // -65 to fix display; do not know why
            );
            $('#btnvalid').button().click(function(){
                //store entities in the original page so they can be saved
                var _container;
                if ( mode == 'managers' ) {
                    _container = $('#group_managers');
                } else {
                    _container = $('#group_members');
                }
                var _persons = new Array();
                $('li[id^="member_"]').each(function(){
                    _persons[_persons.length] = this.id.substring(7, this.id.length);
                });
                $('#members_list').dialog("close");

                $.ajax({
                    url: 'ajax_group_members.php',
                    type: "POST",
                    data: {
                        persons: _persons,
                        person_mode: mode
                    },
                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                    success: function(res){
                        _container.find('table.listing').remove();
                        _container.children('div').append(res);
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
            $('#members_list #listing tbody a').click(function(){
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
                var gid = $('#the_id').val();
                var _members = new Array();
                $('li[id^="member_"]').each(function(){
                    _members[_members.length] = this.id.substring(7, this.id.length);
                });

                $.ajax({
                    url: 'ajax_members.php',
                    type: "POST",
                    data: {
                        ajax: true,
                        from: 'groups',
                        gid: gid,
                        members: _members,
                        page: _page,
                        mode: _mode
                    },
                    <?php echo $_smarty_tpl->getSubTemplate ("js_loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
,
                    success: function(res){
                        $('#members_list').empty();
                        _members_ajax_mapper(res, gid, _mode);
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
<?php }} ?>