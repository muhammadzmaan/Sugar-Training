<?php
$dictionary['Task']['fields']['tasks_contacts_om'] = array(
    'name' => 'tasks_contacts_om',
    'type' => 'link',
    'relationship' => 'tasks_contacts_onemany',
    'module' => 'Contacts',
    'bean_name' => 'Contact',
    'source' => 'non-db',
    'vname' => 'LBL_TASKS_CONTACTS_OM',
);