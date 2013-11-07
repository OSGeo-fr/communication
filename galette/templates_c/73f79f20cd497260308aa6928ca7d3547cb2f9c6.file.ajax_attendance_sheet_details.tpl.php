<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 22:35:02
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/ajax_attendance_sheet_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133252661952702a06bab009-52954026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f79f20cd497260308aa6928ca7d3547cb2f9c6' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/ajax_attendance_sheet_details.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133252661952702a06bab009-52954026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selection' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52702a06c3b754_36207111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52702a06c3b754_36207111')) {function content_52702a06c3b754_36207111($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>    <form action="attendance_sheet.php" id="sheet_details_form" method="POST">
        <fieldset class="cssform">
            <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Some details about your attendance sheet..."),$_smarty_tpl);?>
 - <span><?php echo smarty_function__T(array('string'=>"%s attendees",'pattern'=>"/%s/",'replace'=>count($_smarty_tpl->tpl_vars['selection']->value)),$_smarty_tpl);?>
</span></legend>
            <p>
                <label for="sheet_type" class="bline"><?php echo smarty_function__T(array('string'=>"Sheet type"),$_smarty_tpl);?>
</label>
                <input type="text" name="sheet_type" id="sheet_type" value="<?php echo smarty_function__T(array('string'=>"Attendance sheet"),$_smarty_tpl);?>
" required/>
            </p>
            <p>
                <label for="sheet_title" class="bline"><?php echo smarty_function__T(array('string'=>"Title"),$_smarty_tpl);?>
</label>
                <input type="text" name="sheet_title" id="sheet_title"/>
            </p>
            <p>
                <label for="sheet_sub_title" class="bline"><?php echo smarty_function__T(array('string'=>"Subtitle"),$_smarty_tpl);?>
</label>
                <input type="text" name="sheet_sub_title" id="sheet_sub_title"/>
            </p>
            <p>
                <label for="sheet_date" class="bline"><?php echo smarty_function__T(array('string'=>"Date"),$_smarty_tpl);?>
</label>
                <input type="text" name="sheet_date" id="sheet_date"/>
                <span class="exemple"><?php echo smarty_function__T(array('string'=>"(yyyy-mm-dd format)"),$_smarty_tpl);?>
</span>
            </p>
            <p>
                <label for="sheet_photos" class="bline"><?php echo smarty_function__T(array('string'=>"With photos?"),$_smarty_tpl);?>
</label>
                <input type="checkbox" name="sheet_photos" id="sheet_photos" value="1"/>
            </p>
        </fieldset>
    </form><?php }} ?>