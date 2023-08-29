<?php
// created: 2023-08-16 11:22:24
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Contacts',
    'width' => 10,
    'default' => true,
  ),
  'primary_address_city' => 
  array (
    'name' => 'primary_address_city',
    'vname' => 'LBL_LIST_CITY',
    'width' => 10,
    'default' => true,
  ),
  'primary_address_state' => 
  array (
    'name' => 'primary_address_state',
    'vname' => 'LBL_LIST_STATE',
    'width' => 10,
    'default' => true,
  ),
  'email' => 
  array (
    'name' => 'email',
    'vname' => 'LBL_LIST_EMAIL',
    'widget_class' => 'SubPanelEmailLink',
    'width' => 10,
    'sortable' => false,
    'default' => true,
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_LIST_PHONE',
    'width' => 10,
    'default' => true,
  ),
  'empid_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'int',
    'vname' => 'LBL_EMPID',
    'width' => 10,
    'default' => true,
  ),
  'empname_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'varchar',
    'vname' => 'LBL_EMPNAME',
    'width' => 10,
    'default' => true,
  ),
  'joindate_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'datetimecombo',
    'vname' => 'LBL_JOINDATE',
    'width' => 10,
    'default' => true,
  ),
  'conrelate_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_CONRELATE',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id_c',
  ),
  'acctype_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_ACCTYPE',
    'width' => 10,
  ),
  'intcustom_c' => 
  array (
    'type' => 'int',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_INTCUSTOM_C',
    'width' => 10,
  ),
  'customname_c' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_CUSTOMNAME_C',
    'width' => 10,
  ),
  'datetimecustom_c' => 
  array (
    'type' => 'datetime',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_DATETIMECUSTOM_C',
    'width' => 10,
  ),
  'dropdowncustom_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_DROPDOWNCUSTOM_C',
    'width' => 10,
  ),
  'relatecustom_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_RELATECUSTOM_C',
    'id' => '',
    'link' => true,
    'width' => 10,
    'default' => true,
  ),
  'first_name' => 
  array (
    'name' => 'first_name',
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);