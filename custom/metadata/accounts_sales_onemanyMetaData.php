<?php

$dictionary["accounts_sales_onemany"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_sales_onemany' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'sl_Sales',
      'rhs_table' => 'sl_sales',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
);
