<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/cases_accounts_onemany_Cases.php


$layout_defs["Cases"]["subpanel_setup"]['cases_accounts_onemany'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_ACCOUNTS_ONEMANY_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'cases_accounts_onemany',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/_overrideCase_subpanel_cases_accounts_onemany.php

//auto-generated file DO NOT EDIT
$layout_defs['Cases']['subpanel_setup']['cases_accounts_onemany']['override_subpanel_name'] = 'Case_subpanel_cases_accounts_onemany';

?>
