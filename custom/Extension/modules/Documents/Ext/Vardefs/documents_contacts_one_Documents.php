<?php
$dictionary["Document"]["fields"]["documents_contacts_oto_name"] = array (
    'name' => 'document_contacts_oto_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_DOCUMENTS_CONTACTS_OTO_FROM_CONTACTS_TITLE',
    'save' => true,
    'id_name' => 'contact_id',
    'join_name' => 'contacts',
    'link' => 'documents_contacts_oto',
    'table' => 'contacts',
    'module' => 'Contacts',
    'rname' => 'name',
);
$dictionary['Document']['fields']['documents_contacts_oto'] = array(
    'name'          => 'documents_contacts_oto',
    'type'          => 'link',
    'relationship'  => 'documents_contacts_oto',
    'module'        => 'Contacts',
    'bean_name'     => 'Contact',
    'source'        => 'non-db',
    'vname'         => 'LBL_TASK_CONTACT_OTO',
);
$dictionary['Document']['fields']['contact_id'] = array(
    'name'              => 'contact_id',
    'rname'             => 'id',
    'vname'             => 'LBL_CONTACTID',
    'type'              => 'id',
    'table'             => 'contacts',
    'isnull'            => 'true',
    'module'            => 'Contacts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );



