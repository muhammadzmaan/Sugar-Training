<?php
$dictionary["sl_Sales"]["fields"]["accounts_sales_om_name"] = array (
    'name' => 'accounts_sales_om_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNT_SALES_OM_FROM_SALES_TITLE',
    'save' => true,
    'id_name' => 'account_id',
    'join_name' => 'accounts',
    'link' => 'accounts_sales_om',
    'table' => 'accounts',
    'module' => 'Accounts',
    'rname' => 'name',
);
$dictionary['sl_Sales']['fields']['accounts_sales_om'] = array(
    'name'          => 'accounts_sales_om',
    'type'          => 'link',
    'relationship'  => 'accounts_sales_onemany',
    'module'        => 'Accounts',
    'bean_name'     => 'Account',
    'source'        => 'non-db',
    'vname'         => 'LBL_ACCOUNTS_SALES_OM',
);
$dictionary['sl_Sales']['fields']['account_id'] = array(
    'name'              => 'account_id',
    'rname'             => 'id',
    'vname'             => 'LBL_ACCOUNTID',
    'type'              => 'id',
    'table'             => 'accounts',
    'isnull'            => 'true',
    'module'            => 'Accounts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);



