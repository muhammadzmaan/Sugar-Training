<?php
// created: 2023-08-16 11:22:24
$viewdefs['Contacts']['base']['view']['subpanel-for-accounts-contacts'] = array (
  'type' => 'subpanel-list',
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'primary_address_city',
          'label' => 'LBL_LIST_CITY',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'primary_address_state',
          'label' => 'LBL_LIST_STATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'empid_c',
          'label' => 'LBL_EMPID',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'empname_c',
          'label' => 'LBL_EMPNAME',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'joindate_c',
          'label' => 'LBL_JOINDATE',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'conrelate_c',
          'label' => 'LBL_CONRELATE',
          'enabled' => true,
          'readonly' => false,
          'id' => 'ACCOUNT_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'acctype_c',
          'label' => 'LBL_ACCTYPE',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'intcustom_c',
          'label' => 'LBL_INTCUSTOM_C',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'customname_c',
          'label' => 'LBL_CUSTOMNAME_C',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'datetimecustom_c',
          'label' => 'LBL_DATETIMECUSTOM_C',
          'enabled' => true,
          'default' => true,
        ),
        13 => 
        array (
          'name' => 'dropdowncustom_c',
          'label' => 'LBL_DROPDOWNCUSTOM_C',
          'enabled' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'relatecustom_c',
          'label' => 'LBL_RELATECUSTOM_C',
          'enabled' => true,
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
      ),
    ),
  ),
);