<?php

$dictionary["Account"]["fields"]["cases_accounts_oto"] = array (
  'name' => 'cases_accounts_oto',
  'type' => 'link',
  'relationship' => 'cases_accounts_one',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_CASES_TITLE',
  'id_name' => 'cases_accounts_onecases_ida',
);
$dictionary["Account"]["fields"]["cases_accounts_oto_name"] = array (
  'name' => 'cases_accounts_oto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_accounts_onecases_ida',
  'link' => 'cases_accounts_oto',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["cases_accounts_onecases_ida"] = array (
  'name' => 'cases_accounts_onecases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_CASES_TITLE_ID',
  'id_name' => 'cases_accounts_onecases_ida',
  'link' => 'cases_accounts_oto',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
