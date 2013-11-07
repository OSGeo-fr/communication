<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:46:40
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/edit_dynamic_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203556220526843c0ccbb93-16611905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c793dd1f0ed9a9985244b2729e54721c3c97314' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/edit_dynamic_fields.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1203556220526843c0ccbb93-16611905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_fields' => 0,
    'field' => 0,
    'login' => 0,
    'data' => 0,
    'count' => 0,
    'loops' => 0,
    'disabled' => 0,
    'selectdata' => 0,
    'template_subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526843c11345f4_79397068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526843c11345f4_79397068')) {function content_526843c11345f4_79397068($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
if (!is_callable('smarty_function_html_options')) include '/home/simon/www/osgeo-fr/galette/galette/includes/Smarty-3.1.14/plugins/function.html_options.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['dynamic_fields']->value)){?>
<fieldset class="cssform">
    <legend class="ui-state-active ui-corner-top"><?php echo smarty_function__T(array('string'=>"Additionnal fields:"),$_smarty_tpl);?>
</legend>
    <div>
<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dynamic_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_perm']!=1||$_smarty_tpl->tpl_vars['login']->value->isAdmin()||$_smarty_tpl->tpl_vars['login']->value->isStaff()){?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==0){?>
        <div class="separator"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
    <?php }else{ ?>
        <p<?php if ($_smarty_tpl->tpl_vars['field']->value['config_field_repeat']==0||$_smarty_tpl->tpl_vars['field']->value['config_field_repeat']>1){?> class="repetable"<?php }?>>
            <label class="bline libelle" for="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_1_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_repeat'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
    
    <?php if (isset($_smarty_tpl->tpl_vars["count"])) {$_smarty_tpl->tpl_vars["count"] = clone $_smarty_tpl->tpl_vars["count"];
$_smarty_tpl->tpl_vars["count"]->value = $_smarty_tpl->tpl_vars['field']->value['config_field_repeat']; $_smarty_tpl->tpl_vars["count"]->nocache = null; $_smarty_tpl->tpl_vars["count"]->scope = 0;
} else $_smarty_tpl->tpl_vars["count"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['config_field_repeat'], null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])&&count($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])>$_smarty_tpl->tpl_vars['field']->value['config_field_repeat']){?>
        <?php if (isset($_smarty_tpl->tpl_vars["loops"])) {$_smarty_tpl->tpl_vars["loops"] = clone $_smarty_tpl->tpl_vars["loops"];
$_smarty_tpl->tpl_vars["loops"]->value = count($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])+2; $_smarty_tpl->tpl_vars["loops"]->nocache = null; $_smarty_tpl->tpl_vars["loops"]->scope = 0;
} else $_smarty_tpl->tpl_vars["loops"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])+2, null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['field']->value['config_field_repeat']==0||$_smarty_tpl->tpl_vars['field']->value['config_field_repeat']>1){?>
        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])&&count($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])>=2){?>
            <?php if (isset($_smarty_tpl->tpl_vars["loops"])) {$_smarty_tpl->tpl_vars["loops"] = clone $_smarty_tpl->tpl_vars["loops"];
$_smarty_tpl->tpl_vars["loops"]->value = $_smarty_tpl->tpl_vars['count']->value+1; $_smarty_tpl->tpl_vars["loops"]->nocache = null; $_smarty_tpl->tpl_vars["loops"]->scope = 0;
} else $_smarty_tpl->tpl_vars["loops"] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
        <?php }else{ ?>
            <?php if (isset($_smarty_tpl->tpl_vars["loops"])) {$_smarty_tpl->tpl_vars["loops"] = clone $_smarty_tpl->tpl_vars["loops"];
$_smarty_tpl->tpl_vars["loops"]->value = "3"; $_smarty_tpl->tpl_vars["loops"]->nocache = null; $_smarty_tpl->tpl_vars["loops"]->scope = 0;
} else $_smarty_tpl->tpl_vars["loops"] = new Smarty_variable("3", null, 0);?>
        <?php }?>
    <?php }else{ ?>
        <?php if (isset($_smarty_tpl->tpl_vars["loops"])) {$_smarty_tpl->tpl_vars["loops"] = clone $_smarty_tpl->tpl_vars["loops"];
$_smarty_tpl->tpl_vars["loops"]->value = "2"; $_smarty_tpl->tpl_vars["loops"]->nocache = null; $_smarty_tpl->tpl_vars["loops"]->scope = 0;
} else $_smarty_tpl->tpl_vars["loops"] = new Smarty_variable("2", null, 0);?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['name'] = "fieldLoop";
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['loops']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total']);
?>
        <!-- Create line break for each entry exept the first one -->
        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']>1){?><br/><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==1){?>
            <textarea name="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
" id="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"
                cols="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_width']>0){?><?php echo $_smarty_tpl->tpl_vars['field']->value['field_width'];?>
<?php }else{ ?>61<?php }?>"
                rows="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_height']>0){?><?php echo $_smarty_tpl->tpl_vars['field']->value['field_height'];?>
<?php }else{ ?>6<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']];?>
<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_required']==1){?> required<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fieldLoop']['index']])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']==2){?>
            <input type="text" name="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
" id="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_width']>0){?>size="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_width'];?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_size']>0){?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['field_size'];?>
"<?php }?>
                value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fieldLoop']['index']])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']];?>
<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_required']==1){?> required<?php }?>
            />
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']==3){?>
            <select name="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
" id="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['field_required']==1){?> required<?php }?>>
                <!-- If no option is present, page is not XHTML compliant -->
                <?php if (count($_smarty_tpl->tpl_vars['field']->value['choices'])==0){?><option value=""></option><?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fieldLoop']['index']])){?>
                    <?php if (isset($_smarty_tpl->tpl_vars["selectdata"])) {$_smarty_tpl->tpl_vars["selectdata"] = clone $_smarty_tpl->tpl_vars["selectdata"];
$_smarty_tpl->tpl_vars["selectdata"]->value = $_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']]; $_smarty_tpl->tpl_vars["selectdata"]->nocache = null; $_smarty_tpl->tpl_vars["selectdata"]->scope = 0;
} else $_smarty_tpl->tpl_vars["selectdata"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']], null, 0);?>
                <?php }else{ ?>
                    <?php if (isset($_smarty_tpl->tpl_vars["selectdata"])) {$_smarty_tpl->tpl_vars["selectdata"] = clone $_smarty_tpl->tpl_vars["selectdata"];
$_smarty_tpl->tpl_vars["selectdata"]->value = null; $_smarty_tpl->tpl_vars["selectdata"]->nocache = null; $_smarty_tpl->tpl_vars["selectdata"]->scope = 0;
} else $_smarty_tpl->tpl_vars["selectdata"] = new Smarty_variable(null, null, 0);?>
                <?php }?>
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['field']->value['choices'],'selected'=>$_smarty_tpl->tpl_vars['selectdata']->value),$_smarty_tpl);?>

            </select>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']==4){?>
            <input type="text" name="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
" id="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" maxlength="10"
                value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fieldLoop']['index']])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']];?>
<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_required']==1){?> required<?php }?>
            />
            <span class="exemple"><?php echo smarty_function__T(array('string'=>"(yyyy-mm-dd format)"),$_smarty_tpl);?>
</span>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['field_type']==5){?>
            <input type="checkbox" name="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
" id="info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" value="1"
            <?php if ($_smarty_tpl->tpl_vars['data']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']][$_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index']]==1){?> checked="checked"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']])){?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value['dyn'][$_smarty_tpl->tpl_vars['field']->value['field_id']];?>
<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_required']==1){?> required<?php }?>
            />
        <?php }?>
    <?php endfor; endif; ?>
        </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']!=0){?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['config_field_repeat']==0){?>
        <p class="exemple"><?php echo smarty_function__T(array('string'=>"Enter as many occurences you want."),$_smarty_tpl);?>
</p>
        <?php }elseif($_smarty_tpl->tpl_vars['field']->value['config_field_repeat']>1){?>
        <p class="exemple"><?php echo smarty_function__T(array('string'=>"Enter up to %count occurences.",'pattern'=>"/%count/",'replace'=>$_smarty_tpl->tpl_vars['field']->value['field_repeat']),$_smarty_tpl);?>
</p>
        <?php }?>
    <?php }?>
<?php }?>
<?php } ?>
    </div>
</fieldset>
<script type="text/javascript">
    var _addLnk = function(){
        return $('<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/icon-add.png" alt="<?php echo smarty_function__T(array('string'=>"New occurence"),$_smarty_tpl);?>
"/></a>');
    };

    var _lnkEvent = function(_a, _input, _parent) {
        var _vals = _input[0].id.split(/_/);
        var _total = _vals[_vals.length-1]; //max number of occurences
        var _current = _vals[_vals.length-2]; //current occurrence

       _a.click(function(e) {
            var _new = _input.clone();

            var _id = '';

            for ( var i = 0 ; i < _vals.length -2 ; i++ ) {
                _id += _vals[i] + '_';
            }

            _current = Number(_current) + 1;
            _new.attr('id', _id + _current + '_' + _total);
            _new.attr('name', _id + _current);
            _new.val('');
            _a.remove();
            _parent.append('<br/>');
            _parent.append(_new);
            _new.focus();
            if( _total === '0' || _current < _total ) {
                var _b = _addLnk();
                _lnkEvent(_b, _new, _parent);
                _parent.append(_b);
            }
            return false;
        });
    }

    $(function(){
        $('.repetable').each(function(){
            var _total;
            var _current;
            var _parent = $(this);

            var _input = $(this).find('input:last');
            if ( _input.length > 0 ) {
                while ( $(this).find('input').length > 1 && _input.val() == '' ) {
                    _input.prev('br').remove();
                    _input.remove();
                    _input = $(this).find('input:last')
                }
                var _vals = _input[0].id.split(/_/);
                var _total = _vals[_vals.length-1]; //max number of occurences
                var _current = _vals[_vals.length-2]; //current occurrence

                if ( _total === '0' || _current < _total ) {
                    var _a = _addLnk();
                    $(this).append(_a);
                    _lnkEvent(_a, _input, _parent);
                }
            }
        });
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dynamic_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==4){?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['name'] = "fieldLoop";
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['loops']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["fieldLoop"]['total']);
?>
        $('#info_field_<?php echo $_smarty_tpl->tpl_vars['field']->value['field_id'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fieldLoop']['index'];?>
_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
').datepicker({
            changeMonth: true,
            changeYear: true,
            showOn: 'button',
            buttonImage: '<?php echo $_smarty_tpl->tpl_vars['template_subdir']->value;?>
images/calendar.png',
            buttonImageOnly: true
        });
                <?php endfor; endif; ?>
            <?php }?>
        <?php } ?>
    });
</script>
<?php }?>
<?php }} ?>