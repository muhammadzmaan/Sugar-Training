<?php
$dictionary["Contact"]["fields"]["tasks_contacts_om_name"] = array (
    'name' => 'tasks_contacts_om_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_TASKS_CONTACTS_OM_FROM_CONTACTS_TITLE',
    'save' => true,
    'id_name' => 'task_id',
    'join_name' => 'tasks',
    'link' => 'tasks_contacts_om',
    'table' => 'tasks',
    'module' => 'Tasks',
    'rname' => 'name',
);
$dictionary['Contact']['fields']['tasks_contacts_om'] = array(
    'name'          => 'tasks_contacts_om',
    'type'          => 'link',
    'relationship'  => 'tasks_contacts_onemany',
    'module'        => 'Tasks',
    'bean_name'     => 'Task',
    'source'        => 'non-db',
    'vname'         => 'LBL_TASK_CONTACT_OM',
);
$dictionary['Contact']['fields']['task_id'] = array(
    'name'              => 'task_id',
    'rname'             => 'id',
    'vname'             => 'LBL_TASKID',
    'type'              => 'id',
    'table'             => 'tasks',
    'isnull'            => 'true',
    'module'            => 'Tasks',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );



