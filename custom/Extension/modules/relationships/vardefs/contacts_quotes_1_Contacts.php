<?php
// created: 2023-08-16 12:09:05
$dictionary["Contact"]["fields"]["contacts_quotes_1"] = array (
  'name' => 'contacts_quotes_1',
  'type' => 'link',
  'relationship' => 'contacts_quotes_1',
  'source' => 'non-db',
  'module' => 'Quotes',
  'bean_name' => 'Quote',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE',
  'id_name' => 'contacts_quotes_1quotes_idb',
);
$dictionary["Contact"]["fields"]["contacts_quotes_1_name"] = array (
  'name' => 'contacts_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'contacts_quotes_1quotes_idb',
  'link' => 'contacts_quotes_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["contacts_quotes_1quotes_idb"] = array (
  'name' => 'contacts_quotes_1quotes_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE_ID',
  'id_name' => 'contacts_quotes_1quotes_idb',
  'link' => 'contacts_quotes_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
