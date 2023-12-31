<?php
$viewdefs['Contacts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
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
                'name' => 'title',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'customtypefield_c',
                'label' => 'LBL_CUSTOMTYPEFIELD_C',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'phone_mobile',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              6 => 
              array (
                'name' => 'phone_work',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'phone_other',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              8 => 
              array (
                'name' => 'assistant_phone',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              9 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              12 => 
              array (
                'name' => 'empid_c',
                'label' => 'LBL_EMPID',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'empname_c',
                'label' => 'LBL_EMPNAME',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              14 => 
              array (
                'name' => 'joindate_c',
                'label' => 'LBL_JOINDATE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              15 => 
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
              16 => 
              array (
                'name' => 'acctype_c',
                'label' => 'LBL_ACCTYPE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              17 => 
              array (
                'name' => 'customname_c',
                'label' => 'LBL_CUSTOMNAME_C',
                'enabled' => true,
                'default' => true,
              ),
              18 => 
              array (
                'name' => 'intcustom_c',
                'label' => 'LBL_INTCUSTOM_C',
                'enabled' => true,
                'default' => true,
              ),
              19 => 
              array (
                'name' => 'datetimecustom_c',
                'label' => 'LBL_DATETIMECUSTOM_C',
                'enabled' => true,
                'default' => true,
              ),
              20 => 
              array (
                'name' => 'dropdowncustom_c',
                'label' => 'LBL_DROPDOWNCUSTOM_C',
                'enabled' => true,
                'default' => true,
              ),
              21 => 
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
      ),
    ),
  ),
);
