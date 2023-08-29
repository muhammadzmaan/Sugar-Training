<?php

$dictionary["cases_accounts_onemany"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cases_accounts_onemany' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cases_accounts_onemany_c',
      'join_key_lhs' => 'cases_accounts_onemanycases_ida',
      'join_key_rhs' => 'cases_accounts_onemanyaccounts_idb',
    ),
  ),
  'table' => 'cases_accounts_onemany_c',
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
    'cases_accounts_onemanycases_ida' => 
    array (
      'name' => 'cases_accounts_onemanycases_ida',
      'type' => 'id',
    ),
    'cases_accounts_onemanyaccounts_idb' => 
    array (
      'name' => 'cases_accounts_onemanyaccounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cases_accounts_onemany_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cases_accounts_onemany_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_accounts_onemanycases_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cases_accounts_onemany_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_accounts_onemanyaccounts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cases_accounts_onemany_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cases_accounts_onemanyaccounts_idb',
      ),
    ),
  ),
);
