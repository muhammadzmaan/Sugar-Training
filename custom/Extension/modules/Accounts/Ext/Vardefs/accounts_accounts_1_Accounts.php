<?php
// created: 2023-08-16 11:34:03
$dictionary["Account"]["fields"]["accounts_accounts_1"] = array (
  'name' => 'accounts_accounts_1',
  'type' => 'link',
  'relationship' => 'accounts_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_L_TITLE',
  'id_name' => 'accounts_accounts_1accounts_idb',
  'link-type' => 'many',
  'side' => 'left',
);
$dictionary["Account"]["fields"]["accounts_accounts_1_right"] = array (
  'name' => 'accounts_accounts_1_right',
  'type' => 'link',
  'relationship' => 'accounts_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_R_TITLE',
  'id_name' => 'accounts_accounts_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["accounts_accounts_1_name"] = array (
  'name' => 'accounts_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_L_TITLE',
  'save' => true,
  'id_name' => 'accounts_accounts_1accounts_ida',
  'link' => 'accounts_accounts_1_right',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["accounts_accounts_1accounts_ida"] = array (
  'name' => 'accounts_accounts_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_R_TITLE_ID',
  'id_name' => 'accounts_accounts_1accounts_ida',
  'link' => 'accounts_accounts_1_right',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
