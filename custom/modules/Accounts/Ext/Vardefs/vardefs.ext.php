<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/customer_journey_parent.php

// created: 2023-08-15 11:27:30
VardefManager::createVardef('Accounts', 'Account', [
                                'customer_journey_parent',
                        ]);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/rli_link_workflow.php

$dictionary['Account']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/contacts_accounts_1_Accounts.php

// created: 2023-08-15 16:00:44
$dictionary["Account"]["fields"]["contacts_accounts_1"] = array (
  'name' => 'contacts_accounts_1',
  'type' => 'link',
  'relationship' => 'contacts_accounts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["contacts_accounts_1_name"] = array (
  'name' => 'contacts_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link' => 'contacts_accounts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["contacts_accounts_1contacts_ida"] = array (
  'name' => 'contacts_accounts_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link' => 'contacts_accounts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_accounts_1_Accounts.php

// created: 2023-08-16 11:34:03
$dictionary["Account"]["fields"]["accounts_accounts_1"] = array (
  'name' => 'accounts_accounts_1',
  'type' => 'link',
  'relationship' => 'accounts_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_L_TITLE',
  'id_name' => 'accounts_accounts_1accounts_idb',
  'link-type' => 'many',
  'side' => 'left',
);
$dictionary["Account"]["fields"]["accounts_accounts_1_right"] = array (
  'name' => 'accounts_accounts_1_right',
  'type' => 'link',
  'relationship' => 'accounts_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_R_TITLE',
  'id_name' => 'accounts_accounts_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["accounts_accounts_1_name"] = array (
  'name' => 'accounts_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_L_TITLE',
  'save' => true,
  'id_name' => 'accounts_accounts_1accounts_ida',
  'link' => 'accounts_accounts_1_right',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["accounts_accounts_1accounts_ida"] = array (
  'name' => 'accounts_accounts_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ACCOUNTS_1_FROM_ACCOUNTS_R_TITLE_ID',
  'id_name' => 'accounts_accounts_1accounts_ida',
  'link' => 'accounts_accounts_1_right',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_contacts_1_Accounts.php

// created: 2023-08-16 11:35:17
$dictionary["Account"]["fields"]["accounts_contacts_1"] = array (
  'name' => 'accounts_contacts_1',
  'type' => 'link',
  'relationship' => 'accounts_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_contacts_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/cases_accounts_one_Accounts.php


$dictionary["Account"]["fields"]["cases_accounts_oto"] = array (
  'name' => 'cases_accounts_oto',
  'type' => 'link',
  'relationship' => 'cases_accounts_one',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_CASES_TITLE',
  'id_name' => 'cases_accounts_onecases_ida',
);
$dictionary["Account"]["fields"]["cases_accounts_oto_name"] = array (
  'name' => 'cases_accounts_oto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_accounts_onecases_ida',
  'link' => 'cases_accounts_oto',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["cases_accounts_onecases_ida"] = array (
  'name' => 'cases_accounts_onecases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_CASES_TITLE_ID',
  'id_name' => 'cases_accounts_onecases_ida',
  'link' => 'cases_accounts_oto',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/cases_accounts_onemany_Accounts.php


$dictionary["Account"]["fields"]["cases_accounts_om"] = array (
  'name' => 'cases_accounts_om',
  'type' => 'link',
  'relationship' => 'cases_accounts_onemany',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_CASES_TITLE',
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["cases_accounts_om_name"] = array (
  'name' => 'cases_accounts_om_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link' => 'cases_accounts_om',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["cases_accounts_onemanycases_ida"] = array (
  'name' => 'cases_accounts_onemanycases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_CASES_TITLE_ID',
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link' => 'cases_accounts_om',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/custom_dropdown.php

$dictionary['Account']['fields']['custom_dropdown_c']['name'] = 'custom_dropdown_c';
$dictionary['Account']['fields']['custom_dropdown_c']['vname'] = 'LBL_CUSTOM_DROPDOWN_C';
$dictionary['Contact']['fields']['custom_dropdown_c']['label'] = 'LBL_CUSTOM_DROPDOWN_C';
$dictionary['Account']['fields']['custom_dropdown_c']['type'] = 'Customdropdownfield';
$dictionary['Account']['fields']['custom_dropdown_c']['studio'] = 'visible';
$dictionary['Account']['fields']['custom_dropdown_c']['len'] = 100;
$dictionary['Account']['fields']['custom_dropdown_c']['required'] = false;
$dictionary['Account']['fields']['custom_dropdown_c']['options'] = 'custom_dropdown_list';
$dictionary['Account']['fields']['custom_dropdown_c']['duplicate_merge'] = 'disabled';
$dictionary['Account']['fields']['custom_dropdown_c']['audited'] = false;
$dictionary['Account']['fields']['custom_dropdown_c']['calculated'] = false;
$dictionary['Account']['fields']['custom_dropdown_c']['enforced'] = false;
$dictionary['Account']['fields']['custom_dropdown_c']['comments'] = '';
$dictionary['Account']['fields']['custom_dropdown_c']['help'] = '';
$dictionary['Account']['fields']['custom_dropdown_c']['dbType'] = 'varchar';


?>
