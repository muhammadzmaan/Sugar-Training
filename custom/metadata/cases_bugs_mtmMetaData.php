<?php
$dictionary["cases_bugs_mtm"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cases_bugs_mtm' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Bugs',
      'rhs_table' => 'bugs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cases_bugs_mtm_c',
      'join_key_lhs' => 'cases_bugs_mtmcases_ida',
      'join_key_rhs' => 'cases_bugs_mtmbugs_idb',
    ),
  ),
  'table' => 'cases_bugs_mtm_c',
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
    'cases_bugs_mtmcases_ida' => 
    array (
      'name' => 'cases_bugs_mtmcases_ida',
      'type' => 'id',
    ),
    'cases_bugs_mtmbugs_idb' => 
    array (
      'name' => 'cases_bugs_mtmbugs_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cases_bugs_mtm_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cases_bugs_mtm_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_bugs_mtmcases_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cases_bugs_mtm_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_bugs_mtmbugs_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cases_bugs_mtm_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cases_bugs_mtmcases_ida',
        1 => 'cases_bugs_mtmbugs_idb',
      ),
    ),
  ),
);