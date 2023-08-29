<?php
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