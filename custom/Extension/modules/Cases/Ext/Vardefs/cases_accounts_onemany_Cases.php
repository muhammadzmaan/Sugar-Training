<?php

$dictionary["Case"]["fields"]["accounts_contacts_om"] = array (
  'name' => 'accounts_contacts_om',
  'type' => 'link',
  'relationship' => 'cases_accounts_onemany',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link-type' => 'many',
  'side' => 'left',
);