<?php 
$viewdefs['Contacts']['base']['filter']['basic']['filters'][]=array(
    'id' => 'filterContactsByTitle',
    'name' => 'LBL_FILTER_BY_TITLE',
    'filter_definition' => array(
        array(
            'title' => array(
                '$in' => array(
                    'VP Sales',
                ),
            ),
        ),
    ),
    'editable' => false,
    'is_template'=> false,

);
