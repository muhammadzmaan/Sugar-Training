<?php
// WARNING: The contents of this file are auto-generated.


// created: 2023-08-16 11:34:03
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_R_TITLE',
  'context' => 
  array (
    'link' => 'accounts_accounts_1',
  ),
);

// created: 2023-08-16 11:35:17
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][] = array (
  'layout' => 'subpanel',
  'label' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'context' => 
  array (
    'link' => 'accounts_contacts_1',
  ),
);

//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'contacts',
  'view' => 'subpanel-for-accounts-contacts',
);


//auto-generated file DO NOT EDIT
$viewdefs['Accounts']['base']['layout']['subpanels']['components'][]['override_subpanel_list_view'] = array (
  'link' => 'opportunities',
  'view' => 'subpanel-for-accounts-opportunities',
);
