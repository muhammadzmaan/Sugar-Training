<?php
// created: 2023-08-16 12:09:05
$dictionary["Quote"]["fields"]["contacts_quotes_1"] = array (
  'name' => 'contacts_quotes_1',
  'type' => 'link',
  'relationship' => 'contacts_quotes_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_quotes_1contacts_ida',
);
$dictionary["Quote"]["fields"]["contacts_quotes_1_name"] = array (
  'name' => 'contacts_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_quotes_1contacts_ida',
  'link' => 'contacts_quotes_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Quote"]["fields"]["contacts_quotes_1contacts_ida"] = array (
  'name' => 'contacts_quotes_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_CONTACTS_TITLE_ID',
  'id_name' => 'contacts_quotes_1contacts_ida',
  'link' => 'contacts_quotes_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
