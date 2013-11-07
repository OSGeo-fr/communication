<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:51:41
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/editer_intitule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1804150668526844ed66a618-51420068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c23ec4c2d77f1e30fcea9802912215ee2c2358c6' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/editer_intitule.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804150668526844ed66a618-51420068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'fields' => 0,
    'name' => 0,
    'entry' => 0,
    'field' => 0,
    'non_staff_priority' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526844ed732b64_48942281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526844ed732b64_48942281')) {function content_526844ed732b64_48942281($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?><?php if (isset($_smarty_tpl->tpl_vars['name'])) {$_smarty_tpl->tpl_vars['name'] = clone $_smarty_tpl->tpl_vars['name'];
$_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['name']; $_smarty_tpl->tpl_vars['name']->nocache = null; $_smarty_tpl->tpl_vars['name']->scope = 0;
} else $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['name'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['id'])) {$_smarty_tpl->tpl_vars['id'] = clone $_smarty_tpl->tpl_vars['id'];
$_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['id']; $_smarty_tpl->tpl_vars['id']->nocache = null; $_smarty_tpl->tpl_vars['id']->scope = 0;
} else $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['id'], null, 0);?>
<form action="gestion_intitules.php" method="post" enctype="multipart/form-data">
    <div class="bigtable">
    <fieldset class="cssform" id="general">
        <p>
            <label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['name'];?>
" class="bline"><?php echo smarty_function__T(array('string'=>"Name:"),$_smarty_tpl);?>
</label>
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->{$_smarty_tpl->tpl_vars['name']->value};?>
" />
        </p>
        <p>
            <label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'];?>
" class="bline">
<?php if ($_smarty_tpl->tpl_vars['class']->value=='Status'){?>
                <?php echo smarty_function__T(array('string'=>"Priority:"),$_smarty_tpl);?>

<?php }elseif($_smarty_tpl->tpl_vars['class']->value=='ContributionsTypes'){?>
                <?php echo smarty_function__T(array('string'=>"Extends membership?"),$_smarty_tpl);?>

<?php }?>
            </label>
<?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['class']->value=='Status'){?>
            <input type="text" size="4" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->{$_smarty_tpl->tpl_vars['field']->value};?>
" />
            <span class="exemple"><?php echo smarty_function__T(array('string'=>"Note: members with a status priority lower than %priority are staff members.",'pattern'=>"/%priority/",'replace'=>$_smarty_tpl->tpl_vars['non_staff_priority']->value),$_smarty_tpl);?>
</span>
<?php }elseif($_smarty_tpl->tpl_vars['class']->value=='ContributionsTypes'){?>
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['class']->value]['field'];?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['entry']->value->{$_smarty_tpl->tpl_vars['field']->value}==1){?> checked="checked"<?php }?> />
<?php }?>
        </p>
    </fieldset>

    <input type="hidden" name="mod" id="mod" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value->{$_smarty_tpl->tpl_vars['id']->value};?>
"/>
    <input type="hidden" name="class" value="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" />

    <div class="button-container">
        <input type="submit" value="<?php echo smarty_function__T(array('string'=>"Save"),$_smarty_tpl);?>
" />
    </div>
    </div>
</form> 
<?php }} ?>