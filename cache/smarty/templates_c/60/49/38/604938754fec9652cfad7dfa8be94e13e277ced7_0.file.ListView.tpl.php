<?php
/* Smarty version 4.3.0, created on 2023-08-29 17:11:39
  from '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarFields/Fields/Fullname/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64ede07bb3c551_20243458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '604938754fec9652cfad7dfa8be94e13e277ced7' => 
    array (
      0 => '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarFields/Fields/Fullname/ListView.tpl',
      1 => 1678960698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ede07bb3c551_20243458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarSmarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value,'escape'=>"html"),$_smarty_tpl);?>

<?php }
}
