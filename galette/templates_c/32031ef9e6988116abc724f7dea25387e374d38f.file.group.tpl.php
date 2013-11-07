<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:43:40
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1125722065268430c3c3938-45164679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32031ef9e6988116abc724f7dea25387e374d38f' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/group.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1125722065268430c3c3938-45164679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'login' => 0,
    'pgroup' => 0,
    'groups' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268430c4b4039_95260121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268430c4b4039_95260121')) {function content_5268430c4b4039_95260121($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <form class="tabbed" action="gestion_groupes.php" method="post" enctype="multipart/form-data" id="group_form">
        <div id="group">
            <ul>
                <li><a href="#group_informations"><?php echo smarty_function__T(array('string'=>"Informations"),$_smarty_tpl);?>
</a></li>
                <li><a href="#group_managers"><?php echo smarty_function__T(array('string'=>"Managers"),$_smarty_tpl);?>
</a></li>
                <li><a href="#group_members"><?php echo smarty_function__T(array('string'=>"Members"),$_smarty_tpl);?>
</a></li>
            </ul>
            <fieldset class="cssform" id="group_informations">
                <legend ><?php echo smarty_function__T(array('string'=>"Informations"),$_smarty_tpl);?>
</legend>
                <div>
<?php if ($_smarty_tpl->tpl_vars['group']->value->getId()){?>
                    <p>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Creation date:"),$_smarty_tpl);?>
</span>
                        <span><?php echo $_smarty_tpl->tpl_vars['group']->value->getCreationDate();?>
</span>
                    </p>
<?php }?>
                    <p>
                        <label for="group_name" class="bline"><?php echo smarty_function__T(array('string'=>"Name:"),$_smarty_tpl);?>
</label>
                        <input type="text" name="group_name" id="group_name" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->getName();?>
" maxlength="20" required/>
                    </p>
<?php if ($_smarty_tpl->tpl_vars['group']->value->getParentGroup()){?>
    <?php if (isset($_smarty_tpl->tpl_vars['pgroup'])) {$_smarty_tpl->tpl_vars['pgroup'] = clone $_smarty_tpl->tpl_vars['pgroup'];
$_smarty_tpl->tpl_vars['pgroup']->value = $_smarty_tpl->tpl_vars['group']->value->getParentGroup(); $_smarty_tpl->tpl_vars['pgroup']->nocache = null; $_smarty_tpl->tpl_vars['pgroup']->scope = 0;
} else $_smarty_tpl->tpl_vars['pgroup'] = new Smarty_variable($_smarty_tpl->tpl_vars['group']->value->getParentGroup(), null, 0);?>
<?php }?>
                    <p>
<?php if (!$_smarty_tpl->tpl_vars['login']->value->isAdmin()&&!$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                        <span class="bline"><?php echo smarty_function__T(array('string'=>"Parent group:"),$_smarty_tpl);?>
</span>
                        <span><?php if (isset($_smarty_tpl->tpl_vars['pgroup']->value)){?><?php echo $_smarty_tpl->tpl_vars['pgroup']->value->getName();?>
<?php }?></span>
<?php }else{ ?>
                        <label for="parent_group" class="bline"><?php echo smarty_function__T(array('string'=>"Parent group:"),$_smarty_tpl);?>
</label>
                        <select name="parent_group" id="parent_group">
                            <option value=""><?php echo smarty_function__T(array('string'=>"None"),$_smarty_tpl);?>
</option>
<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value->getId();?>
"<?php if (isset($_smarty_tpl->tpl_vars['pgroup']->value)&&$_smarty_tpl->tpl_vars['pgroup']->value->getId()==$_smarty_tpl->tpl_vars['g']->value->getId()){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value->getName();?>
</option>
<?php } ?>
                        </select>
<?php }?>
                    </p>
                </div>
            </fieldset>
            <fieldset class="cssform" id="group_managers">
                <legend><?php echo smarty_function__T(array('string'=>"Managers"),$_smarty_tpl);?>
</legend>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
                        <?php echo $_smarty_tpl->getSubTemplate ("group_persons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('person_mode'=>"managers",'persons'=>$_smarty_tpl->tpl_vars['group']->value->getManagers()), 0);?>

                    <?php }?>
                </div>
           </fieldset>
            <fieldset class="cssform" id="group_members">
                <legend>
                    <?php echo smarty_function__T(array('string'=>"Members"),$_smarty_tpl);?>

               </legend>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['group']->value){?>
                        <?php echo $_smarty_tpl->getSubTemplate ("group_persons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('person_mode'=>"members",'persons'=>$_smarty_tpl->tpl_vars['group']->value->getMembers()), 0);?>

                    <?php }?>
                </div>
            </fieldset>
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
            <a href="#" class="button notext hidden" id="btnusers_small"><?php echo smarty_function__T(array('string'=>"Manage members"),$_smarty_tpl);?>
</a>
            <a href="#" class="button notext hidden" id="btnmanagers_small"><?php echo smarty_function__T(array('string'=>"Manage managers"),$_smarty_tpl);?>
</a>
<?php }?>
      </div>
        <div class="button-container">
            <input type="submit" name="valid" id="btnsave" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
"/>
            <input type="submit" name="delete" id="delete" value="<?php echo smarty_function__T(array('string'=>"Delete"),$_smarty_tpl);?>
"/>
            <input type="hidden" name="id_group" id="id_group" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->getId();?>
"/>
        </div>
        <p><?php echo smarty_function__T(array('string'=>"NB : The mandatory fields are in"),$_smarty_tpl);?>
 <span class="required"><?php echo smarty_function__T(array('string'=>"red"),$_smarty_tpl);?>
</span></p>
        </form>
<script type="text/javascript">
    $(function() {
        
        $('#group').tabs({
            activate: function(event, ui) {
<?php if ($_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
                var _id = ui.newPanel[0].id.substring(6);
                var _btnuid = '#btnusers_small';
                var _btnmid = '#btnmanagers_small';
                if ( _id == 'managers'  ) {
                    $(_btnmid).removeClass('hidden');
                    if ( !$(_btnuid).hasClass('hidden') ) {
                        $(_btnuid).addClass('hidden');
                    }
                } else if ( _id == 'members' ) {
                     $(_btnuid).removeClass('hidden');
                    if ( !$(_btnmid).hasClass('hidden') ) {
                        $(_btnmid).addClass('hidden');
                    }
               } else {
                    if ( !$(_btnuid).hasClass('hidden') ) {
                        $(_btnuid).addClass('hidden');
                    }
                    if ( !$(_btnmid).hasClass('hidden') ) {
                        $(_btnmid).addClass('hidden');
                    }
               }
<?php }?>
            }
        });
    });
</script>
<?php }} ?>