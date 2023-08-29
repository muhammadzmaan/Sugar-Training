<?php
// created: 2023-08-16 12:09:05
$dictionary["contacts_quotes_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_quotes_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_quotes_1_c',
      'join_key_lhs' => 'contacts_quotes_1contacts_ida',
      'join_key_rhs' => 'contacts_quotes_1quotes_idb',
    ),
  ),
  'table' => 'contacts_quotes_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'contacts_quotes_1contacts_ida' => 
    array (
      'name' => 'contacts_quotes_1contacts_ida',
      'type' => 'id',
    ),
    'contacts_quotes_1quotes_idb' => 
    array (
      'name' => 'contacts_quotes_1quotes_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_contacts_quotes_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_contacts_quotes_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_quotes_1contacts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_contacts_quotes_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_quotes_1quotes_idb',
        1 => 'deleted',
      ),
    ),
  ),
);