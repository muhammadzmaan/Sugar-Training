<?php
/* Smarty version 4.3.0, created on 2023-08-29 17:11:39
  from '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/modules/ACLRoles/EditViewBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64ede07ba30519_05396968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425b04402e6f3de95355a395065447d854e457f9' => 
    array (
      0 => '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/modules/ACLRoles/EditViewBody.tpl',
      1 => 1678960692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ACLRoles/EditAllBody.tpl' => 1,
  ),
),false)) {
function content_64ede07ba30519_05396968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ACLRoles/ACLRoles.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_VIEW_DIRECTIONS'];?>
</b>
<table width='100%'><tr>
<td valign='top'>
<TABLE class='edit view' border='0' cellpadding=0 cellspacing = 1  >
<tr> <td colspan="2" scope="row"><a href='javascript:void(0);' onclick='aclviewer.view("<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
", "All");'><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALL'];?>
</b></a></td></tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES2']->value, 'TYPES', false, 'CATEGORY_NAME');
$_smarty_tpl->tpl_vars['TYPES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value => $_smarty_tpl->tpl_vars['TYPES']->value) {
$_smarty_tpl->tpl_vars['TYPES']->do_else = false;
if ($_smarty_tpl->tpl_vars['CATEGORY_NAME']->value != 'Users') {?>
<TR>
<td nowrap width='1%' scope="row"><a href='javascript:void(0);' onclick='aclviewer.view("<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
", "<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
");'><b><?php echo $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value];?>
</b></a></td>
</TR>
<?php }?>
	<?php
}
if ($_smarty_tpl->tpl_vars['TYPES']->do_else) {
?>

         <tr> <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_MODULES_AVAILABLE'];?>
</td></tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</TABLE>
</td>
<td width= '100%'  valign='top'>
<div id='category_data'>
<?php $_smarty_tpl->_subTemplateRender('file:modules/ACLRoles/EditAllBody.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</td></tr>
</table>


<?php }
}
