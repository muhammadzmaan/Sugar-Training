<?php

$dictionary["Case"]["fields"]["cases_accounts_oto"] = array (
  'name' => 'cases_accounts_oto',
  'type' => 'link',
  'relationship' => 'cases_accounts_one',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cases_accounts_oneaccounts_idb',
);
$dictionary["Case"]["fields"]["cases_accounts_oto_name"] = array (
  'name' => 'cases_accounts_oto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'cases_accounts_oneaccounts_idb',
  'link' => 'cases_accounts_oto',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["cases_accounts_oneaccounts_idb"] = array (
  'name' => 'cases_accounts_oneaccounts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'cases_accounts_oneaccounts_idb',
  'link' => 'cases_accounts_oto',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
