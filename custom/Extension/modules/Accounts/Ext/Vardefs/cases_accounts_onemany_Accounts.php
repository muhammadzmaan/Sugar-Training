<?php

$dictionary["Account"]["fields"]["cases_accounts_om"] = array (
  'name' => 'cases_accounts_om',
  'type' => 'link',
  'relationship' => 'cases_accounts_onemany',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_CASES_TITLE',
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["cases_accounts_om_name"] = array (
  'name' => 'cases_accounts_om_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link' => 'cases_accounts_om',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["cases_accounts_onemanycases_ida"] = array (
  'name' => 'cases_accounts_onemanycases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_CASES_TITLE_ID',
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link' => 'cases_accounts_om',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
