<?php

$dictionary["documents_contacts_oto"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'tasks_contacts_onemany' => 
    array (
      'lhs_module' => 'Documents',
      'lhs_table' => 'documents',
      'lhs_key' => 'contact_id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'document_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
);
