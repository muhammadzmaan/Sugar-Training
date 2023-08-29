<?php
$viewdefs['Accounts']['base']['view']['custom-stuff'] = array(
    'panels' => array(
        0 => array(
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'labelsOnTop' => false,
            'labels' => true,
            'header' => false,
            'fields' => array(
                0 => 'name',
                1 => 'phone_office',
            ),
            'grid' => array(
                0=> array(
                    'name' => 'name',
                    'label' => 'LBL_NAME',
                    'type' => 'name',
                    'cellSpan' => '6',
                    'labelSpan' => '2',
                    'span' => '4',
                    'dismiss_label' => false,
                ),
                1=> array(
                    'name' => 'phone_office',
                    'label' => 'LBL_PHONE_OFFICE',
                    'type' => 'Phone',
                    'cellSpan' => '6',
                    'labelSpan' => '2',
                    'span' => '4',
                    'dismiss_label' => false,
                ),
            ),
        ),

    ),
);
