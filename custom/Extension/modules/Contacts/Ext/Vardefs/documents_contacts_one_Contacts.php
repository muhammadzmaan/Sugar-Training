<?php
$dictionary["Contact"]["fields"]["documents_contacts_oto_name"] = array (
    'name' => 'documents_contacts_oto_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_DOCUMENTS_CONTACTS_OM_FROM_DOCUMENT_TITLE',
    'save' => true,
    'id_name' => 'document_id',
    'join_name' => 'documents',
    'link' => 'documents_contacts_oto',
    'table' => 'documents',
    'module' => 'Documents',
    'rname' => 'name',
);
$dictionary['Contact']['fields']['documents_contacts_oto'] = array(
    'name'          => 'documents_contacts_oto',
    'type'          => 'link',
    'relationship'  => 'documents_contacts_oto',
    'module'        => 'Documents',
    'bean_name'     => 'Document',
    'source'        => 'non-db',
    'vname'         => 'LBL_DOCUMENT_CONTACT_OTO',
);
$dictionary['Contact']['fields']['document_id'] = array(
    'name'              => 'document_id',
    'rname'             => 'id',
    'vname'             => 'LBL_DOCUMENTID',
    'type'              => 'id',
    'table'             => 'documents',
    'isnull'            => 'true',
    'module'            => 'Documents',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);



