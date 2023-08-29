<?php
// created: 2023-08-28 11:40:19
$viewdefs['Accounts']['base']['view']['subpanel-for-cases-cases_accounts_onemany'] = array (
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
          'default' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_CITY',
          'enabled' => true,
          'name' => 'billing_address_city',
        ),
        2 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          'enabled' => true,
          'name' => 'billing_address_country',
        ),
        3 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'name' => 'phone_office',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);