<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/customer_journey_parent.php

// created: 2023-08-15 11:27:30
VardefManager::createVardef('Contacts', 'Contact', [
                                'customer_journey_parent',
                        ]);
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_joindate_c.php

 // created: 2023-08-15 11:58:08
$dictionary['Contact']['fields']['joindate_c']['labelValue']='joindate';
$dictionary['Contact']['fields']['joindate_c']['enforced']='';
$dictionary['Contact']['fields']['joindate_c']['dependency']='';
$dictionary['Contact']['fields']['joindate_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_conrelate_c.php

 // created: 2023-08-15 11:59:54
$dictionary['Contact']['fields']['conrelate_c']['labelValue']='conrelate';
$dictionary['Contact']['fields']['conrelate_c']['dependency']='';
$dictionary['Contact']['fields']['conrelate_c']['required_formula']='';
$dictionary['Contact']['fields']['conrelate_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_account_id_c.php

 // created: 2023-08-15 11:59:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_acctype_c.php

 // created: 2023-08-15 12:02:28
$dictionary['Contact']['fields']['acctype_c']['labelValue']='acctype';
$dictionary['Contact']['fields']['acctype_c']['enforced']='';
$dictionary['Contact']['fields']['acctype_c']['dependency']='';
$dictionary['Contact']['fields']['acctype_c']['required_formula']='';
$dictionary['Contact']['fields']['acctype_c']['readonly_formula']='';
$dictionary['Contact']['fields']['acctype_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_empname_c.php

 // created: 2023-08-15 11:56:13
$dictionary['Contact']['fields']['empname_c']['labelValue']='empname';
$dictionary['Contact']['fields']['empname_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['empname_c']['enforced']='';
$dictionary['Contact']['fields']['empname_c']['dependency']='';
$dictionary['Contact']['fields']['empname_c']['required_formula']='';
$dictionary['Contact']['fields']['empname_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_empid_c.php

 // created: 2023-08-15 11:55:33
$dictionary['Contact']['fields']['empid_c']['labelValue']='empid';
$dictionary['Contact']['fields']['empid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['empid_c']['enforced']='false';
$dictionary['Contact']['fields']['empid_c']['dependency']='';
$dictionary['Contact']['fields']['empid_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_accounts_1_Contacts.php

// created: 2023-08-15 16:00:44
$dictionary["Contact"]["fields"]["contacts_accounts_1"] = array (
  'name' => 'contacts_accounts_1',
  'type' => 'link',
  'relationship' => 'contacts_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CONTACTS_ACCOUNTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_accounts_1contacts_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/intcustomfield.php


$dictionary['Contact']['fields']['intcustom_c']['name'] = 'intcustom_c';
$dictionary['Contact']['fields']['intcustom_c']['vname'] = 'LBL_INTCUSTOM_C';
$dictionary['Contact']['fields']['intcustom_c']['label'] = 'LBL_INTCUSTOM_C';
$dictionary['Contact']['fields']['intcustom_c']['type'] = 'int';
$dictionary['Contact']['fields']['intcustom_c']['studio'] = 'visible';
$dictionary['Contact']['fields']['intcustom_c']['len'] = '255';
$dictionary['Contact']['fields']['intcustom_c']['default'] = '0';
$dictionary['Contact']['fields']['intcustom_c']['required'] = false;
$dictionary['Contact']['fields']['intcustom_c']['importable'] = 'true';
$dictionary['Contact']['fields']['intcustom_c']['duplicate_merge'] = 'disabled';
$dictionary['Contact']['fields']['intcustom_c']['audited'] = false;
$dictionary['Contact']['fields']['intcustom_c']['comments'] = '';
$dictionary['Contact']['fields']['intcustom_c']['help'] = '';

$dictionary['Contact']['fields']['intcustom_c']['source'] = 'custom_fields';
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/datetimecustomfield.php


$dictionary['Contact']['fields']['datetimecustom_c']['name'] = 'datetimecustom_c';
$dictionary['Contact']['fields']['datetimecustom_c']['vname'] = 'LBL_DATETIMECUSTOM_C';
$dictionary['Contact']['fields']['datetimecustom_c']['label'] = 'LBL_DATETIMECUSTOM_C';
$dictionary['Contact']['fields']['datetimecustom_c']['type'] = 'datetime';
$dictionary['Contact']['fields']['datetimecustom_c']['studio'] = 'visible';
$dictionary['Contact']['fields']['datetimecustom_c']['default'] = '2023-08-10 09:00:00';
$dictionary['Contact']['fields']['datetimecustom_c']['required'] = false;
$dictionary['Contact']['fields']['datetimecustom_c']['importable'] = 'true';
$dictionary['Contact']['fields']['datetimecustom_c']['duplicate_merge'] = 'disabled';
$dictionary['Contact']['fields']['datetimecustom_c']['audited'] = false;
$dictionary['Contact']['fields']['datetimecustom_c']['calculated'] = false;
$dictionary['Contact']['fields']['datetimecustom_c']['enforced'] = false;
$dictionary['Contact']['fields']['datetimecustom_c']['comments'] = '';
$dictionary['Contact']['fields']['datetimecustom_c']['help'] = '';

$dictionary['Contact']['fields']['datetimecustom_c']['source'] = 'custom_fields';
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/dropdowncustomfield.php


$dictionary['Contact']['fields']['dropdowncustom_c']['name'] = 'dropdowncustom_c';
$dictionary['Contact']['fields']['dropdowncustom_c']['vname'] = 'LBL_DROPDOWNCUSTOM_C';
$dictionary['Contact']['fields']['dropdowncustom_c']['label'] = 'LBL_DROPDOWNCUSTOM_C';
$dictionary['Contact']['fields']['dropdowncustom_c']['type'] = 'enum';
$dictionary['Contact']['fields']['dropdowncustom_c']['studio'] = 'visible';
$dictionary['Contact']['fields']['dropdowncustom_c']['options'] = array(
    'option1' => 'My Option 1',
    'option2' => 'My Option 2',
    'option3' => 'My Option 3',
    'option4' => 'My Option 4',
);
$dictionary['Contact']['fields']['dropdowncustom_c']['default'] = 'option1';
$dictionary['Contact']['fields']['dropdowncustom_c']['required'] = false;
$dictionary['Contact']['fields']['dropdowncustom_c']['importable'] = 'true';
$dictionary['Contact']['fields']['dropdowncustom_c']['duplicate_merge'] = 'disabled';
$dictionary['Contact']['fields']['dropdowncustom_c']['audited'] = false;
$dictionary['Contact']['fields']['dropdowncustom_c']['calculated'] = false;
$dictionary['Contact']['fields']['dropdowncustom_c']['enforced'] = false;
$dictionary['Contact']['fields']['dropdowncustom_c']['comments'] = '';
$dictionary['Contact']['fields']['dropdowncustom_c']['help'] = '';

$dictionary['Contact']['fields']['dropdowncustom_c']['source'] = 'custom_fields';
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/accounts_contacts_1_Contacts.php

// created: 2023-08-16 11:35:17
$dictionary["Contact"]["fields"]["accounts_contacts_1"] = array (
  'name' => 'accounts_contacts_1',
  'type' => 'link',
  'relationship' => 'accounts_contacts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'accounts_contacts_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Contact"]["fields"]["accounts_contacts_1_name"] = array (
  'name' => 'accounts_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_contacts_1accounts_ida',
  'link' => 'accounts_contacts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["accounts_contacts_1accounts_ida"] = array (
  'name' => 'accounts_contacts_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_1_FROM_CONTACTS_TITLE_ID',
  'id_name' => 'accounts_contacts_1accounts_ida',
  'link' => 'accounts_contacts_1',
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
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_opportunities_1_Contacts.php

// created: 2023-08-16 12:05:20
$dictionary["Contact"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'contacts_opportunities_1opportunities_idb',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_quotes_1_Contacts.php

// created: 2023-08-16 12:09:05
$dictionary["Contact"]["fields"]["contacts_quotes_1"] = array (
  'name' => 'contacts_quotes_1',
  'type' => 'link',
  'relationship' => 'contacts_quotes_1',
  'source' => 'non-db',
  'module' => 'Quotes',
  'bean_name' => 'Quote',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE',
  'id_name' => 'contacts_quotes_1quotes_idb',
);
$dictionary["Contact"]["fields"]["contacts_quotes_1_name"] = array (
  'name' => 'contacts_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'contacts_quotes_1quotes_idb',
  'link' => 'contacts_quotes_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["contacts_quotes_1quotes_idb"] = array (
  'name' => 'contacts_quotes_1quotes_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QUOTES_1_FROM_QUOTES_TITLE_ID',
  'id_name' => 'contacts_quotes_1quotes_idb',
  'link' => 'contacts_quotes_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/relatecustomfield.php


$dictionary['Contact']['fields']['relatecustom_c']['name'] = 'relatecustom_c';
$dictionary['Contact']['fields']['relatecustom_c']['vname'] = 'LBL_RELATECUSTOM_C';
$dictionary['Contact']['fields']['relatecustom_c']['label'] = 'LBL_RELATECUSTOM_C';
$dictionary['Contact']['fields']['relatecustom_c']['type'] = 'relate';
$dictionary['Contact']['fields']['relatecustom_c']['module'] = 'Accounts';
$dictionary['Contact']['fields']['relatecustom_c']['id_name'] = 'account_id';
$dictionary['Contact']['fields']['relatecustom_c']['studio'] = 'visible';
$dictionary['Contact']['fields']['relatecustom_c']['required'] = true;
$dictionary['Contact']['fields']['relatecustom_c']['importable'] = 'true';
$dictionary['Contact']['fields']['relatecustom_c']['duplicate_merge'] = 'disabled';
$dictionary['Contact']['fields']['relatecustom_c']['audited'] = false;
$dictionary['Contact']['fields']['relatecustom_c']['calculated'] = false;
$dictionary['Contact']['fields']['relatecustom_c']['enforced'] = false;
$dictionary['Contact']['fields']['relatecustom_c']['comments'] = '';
$dictionary['Contact']['fields']['relatecustom_c']['help'] = '';

$dictionary['Contact']['fields']['relatecustom_c']['source'] = 'non-db';
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/customfields.php


$dictionary['Contact']['fields']['customname_c']['name'] = 'customname_c';
$dictionary['Contact']['fields']['customname_c']['vname'] = 'LBL_CUSTOMNAME_C';
$dictionary['Contact']['fields']['customname_c']['type'] = 'varchar';
$dictionary['Contact']['fields']['customname_c']['studio'] = 'visible';
$dictionary['Contact']['fields']['customname_c']['len'] = '255';
$dictionary['Contact']['fields']['customname_c']['required'] = false;
$dictionary['Contact']['fields']['customname_c']['importable'] = 'true';
$dictionary['Contact']['fields']['customname_c']['duplicate_merge'] = 'disabled';
$dictionary['Contact']['fields']['customname_c']['audited'] = false;
$dictionary['Contact']['fields']['customname_c']['calculated'] = false;
$dictionary['Contact']['fields']['customname_c']['enforced'] = false;
$dictionary['Contact']['fields']['customname_c']['comments'] = '';
$dictionary['Contact']['fields']['customname_c']['help'] = '';

$dictionary['Contact']['fields']['customname_c']['source'] = 'custom_fields';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_date_of_birth_c.php

 // created: 2023-08-17 12:12:44
$dictionary['Contact']['fields']['date_of_birth_c']['labelValue']='date of birth';
$dictionary['Contact']['fields']['date_of_birth_c']['enforced']='';
$dictionary['Contact']['fields']['date_of_birth_c']['dependency']='';
$dictionary['Contact']['fields']['date_of_birth_c']['required_formula']='';
$dictionary['Contact']['fields']['date_of_birth_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_age_c.php

 // created: 2023-08-17 12:16:02
$dictionary['Contact']['fields']['age_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['age_c']['labelValue']='Age';
$dictionary['Contact']['fields']['age_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['age_c']['calculated']='true';
$dictionary['Contact']['fields']['age_c']['formula']='floor(divide(abs(daysUntil($date_of_birth_c)),365.242))';
$dictionary['Contact']['fields']['age_c']['enforced']='true';
$dictionary['Contact']['fields']['age_c']['dependency']='';
$dictionary['Contact']['fields']['age_c']['required_formula']='';
$dictionary['Contact']['fields']['age_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Contact']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Contact']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Contact']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Contact']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Contact']['fields']['denorm_account_name']['len'] = 255;
$dictionary['Contact']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['Contact']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['required'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Contact']['fields']['denorm_account_name']['merge_filter'] = 'selected';
$dictionary['Contact']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Contact']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_have_car_c.php

 // created: 2023-08-18 15:53:08
$dictionary['Contact']['fields']['have_car_c']['labelValue']='Have a Car';
$dictionary['Contact']['fields']['have_car_c']['enforced']='';
$dictionary['Contact']['fields']['have_car_c']['dependency']='';
$dictionary['Contact']['fields']['have_car_c']['required_formula']='';
$dictionary['Contact']['fields']['have_car_c']['readonly_formula']='';
$dictionary['Contact']['fields']['have_car_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_car_maker_c.php

 // created: 2023-08-18 15:55:53
$dictionary['Contact']['fields']['car_maker_c']['labelValue']='Car Maker';
$dictionary['Contact']['fields']['car_maker_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['car_maker_c']['enforced']='';
$dictionary['Contact']['fields']['car_maker_c']['dependency']='equal($have_car_c,"Yes")';
$dictionary['Contact']['fields']['car_maker_c']['required_formula']='';
$dictionary['Contact']['fields']['car_maker_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_my_highglight_field_c.php

 // created: 2023-08-22 12:13:43
$dictionary['Contact']['fields']['my_highglight_field_c']['labelValue']='My Highglight Field';
$dictionary['Contact']['fields']['my_highglight_field_c']['enforced']='';
$dictionary['Contact']['fields']['my_highglight_field_c']['dependency']='';
$dictionary['Contact']['fields']['my_highglight_field_c']['required_formula']='';
$dictionary['Contact']['fields']['my_highglight_field_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/customtypefield.php


$dictionary['Contact']['fields']['customtypefield_c']['name'] = 'customtypefield_c';
$dictionary['Contact']['fields']['customtypefield_c']['vname'] = 'LBL_CUSTOMTYPEFIELD_C';
$dictionary['Contact']['fields']['customtypefield_c']['type'] = 'Customtextfield';
$dictionary['Contact']['fields']['customtypefield_c']['studio'] = 'visible';
$dictionary['Contact']['fields']['customtypefield_c']['len'] = '255';
$dictionary['Contact']['fields']['customtypefield_c']['required'] = false;
$dictionary['Contact']['fields']['customtypefield_c']['importable'] = 'true';
$dictionary['Contact']['fields']['customtypefield_c']['duplicate_merge'] = 'disabled';
$dictionary['Contact']['fields']['customtypefield_c']['audited'] = false;
$dictionary['Contact']['fields']['customtypefield_c']['calculated'] = false;
$dictionary['Contact']['fields']['customtypefield_c']['enforced'] = false;
$dictionary['Contact']['fields']['customtypefield_c']['comments'] = '';
$dictionary['Contact']['fields']['customtypefield_c']['help'] = '';

$dictionary['Contact']['fields']['customtypefield_c']['dbType'] = 'varchar';
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacttitlefield.php

$dictionary['Contact']['fields']['title']['type'] = 'Customtextfield';
$dictionary['Contact']['fields']['title']['dbType'] = 'varchar';
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/tasks_contacts_onemany_Contacts.php

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




?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/documents_contacts_one_Contacts.php

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




?>
