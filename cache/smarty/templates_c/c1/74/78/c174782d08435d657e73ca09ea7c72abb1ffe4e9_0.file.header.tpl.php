<?php
/* Smarty version 4.3.0, created on 2023-08-29 17:11:39
  from '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/themes/RacerX/tpls/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64ede07b7e2973_23377393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c174782d08435d657e73ca09ea7c72abb1ffe4e9' => 
    array (
      0 => '/var/www/html/sugarcrm/SugarEnt-Full-13.0.0/themes/RacerX/tpls/header.tpl',
      1 => 1678960698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/RacerX/tpls/_head.tpl' => 1,
  ),
),false)) {
function content_64ede07b7e2973_23377393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:themes/RacerX/tpls/_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('theme_template'=>true), 0, false);
?>
<body class="yui-skin-sam sugar-<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['appearance']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
-theme">
    <a name="top"></a>
    <div style="position:fixed;top:0;left:0;width:1px;height:1px;z-index:21;"></div>
    <div class="clear"></div>

<div id="main">
    <div id="content">
        <?php if ($_smarty_tpl->tpl_vars['use_table_container']->value) {?>
        <table style="width:100%" id="contentTable"><tr><td>
        <?php }
}
}
