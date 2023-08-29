<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/customer_journey_parent.php

// created: 2023-08-15 11:27:30
VardefManager::createVardef('Cases', 'Case', [
                                'customer_journey_parent',
                        ]);
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_case_reason_c.php

 // created: 2023-08-17 11:58:54
$dictionary['Case']['fields']['case_reason_c']['labelValue']='Case Reason';
$dictionary['Case']['fields']['case_reason_c']['enforced']='';
$dictionary['Case']['fields']['case_reason_c']['dependency']='';
$dictionary['Case']['fields']['case_reason_c']['required_formula']='';
$dictionary['Case']['fields']['case_reason_c']['readonly_formula']='';
$dictionary['Case']['fields']['case_reason_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_case_reason_detail_c.php

 // created: 2023-08-17 11:59:06
$dictionary['Case']['fields']['case_reason_detail_c']['labelValue']='Case Reason Detail';
$dictionary['Case']['fields']['case_reason_detail_c']['enforced']='';
$dictionary['Case']['fields']['case_reason_detail_c']['dependency']='';
$dictionary['Case']['fields']['case_reason_detail_c']['required_formula']='';
$dictionary['Case']['fields']['case_reason_detail_c']['readonly_formula']='';
$dictionary['Case']['fields']['case_reason_detail_c']['visibility_grid']=array (
  'trigger' => 'case_reason_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'r_software' => 
    array (
      0 => '',
      1 => 'rd_Installation',
      2 => 'rd_errormessage',
      3 => 'rd_bug',
      4 => 'rd_enhancement',
      5 => 'rd_mediarequest',
      6 => 'rd_systemrequirements',
    ),
    'r_Feature' => 
    array (
      0 => '',
      1 => 'rd_errormessage',
      2 => 'rd_functionality',
      3 => 'rd_enhancement',
      4 => 'rd_bug',
    ),
    'r_usability' => 
    array (
      0 => '',
      1 => 'rd_errormessage',
      2 => 'rd_functionality',
      3 => 'rd_enhancement',
      4 => 'rd_bug',
    ),
    'r_license' => 
    array (
      0 => '',
      1 => 'rd_renewlicense',
      2 => 'rd_invalidlicense',
      3 => 'rd_expiredlicense',
      4 => 'rd_mediarequest',
    ),
    'r_other' => 
    array (
      0 => '',
      1 => 'rd_Other',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_contact_id_c.php

 // created: 2023-08-25 10:27:24

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_related_contact_c.php

 // created: 2023-08-25 10:27:24
$dictionary['Case']['fields']['related_contact_c']['labelValue']='Related Contact';
$dictionary['Case']['fields']['related_contact_c']['dependency']='';
$dictionary['Case']['fields']['related_contact_c']['required_formula']='';
$dictionary['Case']['fields']['related_contact_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/cases_accounts_one_Cases.php


$dictionary["Case"]["fields"]["cases_accounts_oto"] = array (
  'name' => 'cases_accounts_oto',
  'type' => 'link',
  'relationship' => 'cases_accounts_one',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cases_accounts_oneaccounts_idb',
);
$dictionary["Case"]["fields"]["cases_accounts_oto_name"] = array (
  'name' => 'cases_accounts_oto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'cases_accounts_oneaccounts_idb',
  'link' => 'cases_accounts_oto',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["cases_accounts_oneaccounts_idb"] = array (
  'name' => 'cases_accounts_oneaccounts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_ACCOUNTS_OTO_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'cases_accounts_oneaccounts_idb',
  'link' => 'cases_accounts_oto',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/cases_accounts_onemany_Cases.php


$dictionary["Case"]["fields"]["accounts_contacts_om"] = array (
  'name' => 'accounts_contacts_om',
  'type' => 'link',
  'relationship' => 'cases_accounts_onemany',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CASES_ACCOUNTS_OM_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cases_accounts_onemanycases_ida',
  'link-type' => 'many',
  'side' => 'left',
);
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/cases_bugs_mtm_Cases.php


$dictionary["Case"]["fields"]["cases_bugs_mtm"] = array (
  'name' => 'cases_bugs_mtm',
  'type' => 'link',
  'relationship' => 'cases_bugs_mtm',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_CASES_BUGS_MTM_FROM_BUGS_TITLE',
  'id_name' => 'cases_bugs_mtmbugs_idb',
);

?>
