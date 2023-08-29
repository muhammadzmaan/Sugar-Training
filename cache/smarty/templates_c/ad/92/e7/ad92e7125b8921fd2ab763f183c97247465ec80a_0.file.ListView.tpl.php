<?php
/* Smarty version 4.3.0, created on 2023-08-29 17:11:39
  from '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarFields/Fields/Phone/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64ede07bb51844_51378250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad92e7125b8921fd2ab763f183c97247465ec80a' => 
    array (
      0 => '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarFields/Fields/Phone/ListView.tpl',
      1 => 1678960698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ede07bb51844_51378250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarSmarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarSmarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}
