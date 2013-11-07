<?php /* Smarty version Smarty-3.1.14, created on 2013-10-23 23:56:50
         compiled from "/home/simon/www/osgeo-fr/galette/galette/templates/default/charts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10724787452684622f04809-90211577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa824283374edc077f7fa25ed8adfaf0155302fa' => 
    array (
      0 => '/home/simon/www/osgeo-fr/galette/galette/templates/default/charts.tpl',
      1 => 1382170110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10724787452684622f04809-90211577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5268462306e6e6_73352977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5268462306e6e6_73352977')) {function content_5268462306e6e6_73352977($_smarty_tpl) {?><?php if (!is_callable('smarty_function__T')) include '/home/simon/www/osgeo-fr/galette/galette/includes/../includes/smarty_plugins/function._T.php';
?>        <div id="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::MEMBERS_STATUS_PIE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
        </div>
        <div id="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::MEMBERS_STATEDUE_PIE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
        </div>
        <div id="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::CONTRIBS_TYPES_PIE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
        </div>
        <div id="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::COMPANIES_OR_NOT;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
        </div>
        <div id="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::CONTRIBS_ALLTIME;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
        </div>
        <script type="text/javascript">
            $(function(){
                var _members_status_pie = jQuery.jqplot ('<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::MEMBERS_STATUS_PIE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', [<?php echo $_smarty_tpl->tpl_vars['charts']->value['MembersStatusPie'];?>
],
                    {
                        title: '<?php echo smarty_function__T(array('string'=>"Members by status",'escape'=>"js"),$_smarty_tpl);?>
',
                        seriesDefaults: {
                            renderer: jQuery.jqplot.PieRenderer,
                            rendererOptions: {
                                showDataLabels: true
                            }
                        },
                        legend: { show:true }
                    }
                );

                var _members_statedue_pie = jQuery.jqplot ('<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::MEMBERS_STATEDUE_PIE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', [<?php echo $_smarty_tpl->tpl_vars['charts']->value['MembersStateDuePie'];?>
],
                    {
                        title: '<?php echo smarty_function__T(array('string'=>"Members by state of dues",'escape'=>"js"),$_smarty_tpl);?>
',
                        seriesDefaults: {
                            renderer: jQuery.jqplot.PieRenderer,
                            rendererOptions: {
                                showDataLabels: true
                            }
                        },
                        legend: { show:true }
                    }
                );

                var _contribs_types_pie = jQuery.jqplot ('<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::CONTRIBS_TYPES_PIE;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', [<?php echo $_smarty_tpl->tpl_vars['charts']->value['ContribsTypesPie'];?>
],
                    {
                        title: '<?php echo smarty_function__T(array('string'=>"Contributions types repartition",'escape'=>"js"),$_smarty_tpl);?>
',
                        seriesDefaults: {
                            renderer: jQuery.jqplot.PieRenderer,
                            rendererOptions: {
                                showDataLabels: true
                            }
                        },
                        legend: { show:true }
                    }
                );

                var _companies_individuals = jQuery.jqplot ('<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::COMPANIES_OR_NOT;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', [<?php echo $_smarty_tpl->tpl_vars['charts']->value['CompaniesOrNot'];?>
],
                    {
                        title: '<?php echo smarty_function__T(array('string'=>"Individuals and Companies",'escape'=>"js"),$_smarty_tpl);?>
',
                        seriesDefaults: {
                            renderer: jQuery.jqplot.PieRenderer,
                            rendererOptions: {
                                showDataLabels: true
                            }
                        },
                        legend: { show:true }
                    }
                );

                var _contribs_alltime = jQuery.jqplot ('<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo \Galette\IO\Charts::CONTRIBS_ALLTIME;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', [<?php echo $_smarty_tpl->tpl_vars['charts']->value['ContribsAllTime'];?>
],
                    {
                        title: '<?php echo smarty_function__T(array('string'=>"Contributions over time",'escape'=>"js"),$_smarty_tpl);?>
',
                        seriesDefaults: {
                            renderer:$.jqplot.BarRenderer,
                            renderOptions:{
                                barDirection: 'vertical',
                                highlightMouseDown: true
                            },
                            pointLabels: {
                                show: true,
                                formatString: "%#.2f"
                            },
                        },
                        axes:{
                            xaxis:{
                                renderer: $.jqplot.CategoryAxisRenderer
                            }
                        }
                    }
                );
            });
        </script>
<?php }} ?>