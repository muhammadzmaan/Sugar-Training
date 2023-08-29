<?php
// created: 2023-08-15 16:00:44
$dictionary["Account"]["fields"]["contacts_accounts_1"] = array (
  'name' => 'contacts_accounts_1',
  'type' => 'link',
  'relationship' => 'contacts_accounts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["contacts_accounts_1_name"] = array (
  'name' => 'contacts_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link' => 'contacts_accounts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["contacts_accounts_1contacts_ida"] = array (
  'name' => 'contacts_accounts_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link' => 'contacts_accounts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
