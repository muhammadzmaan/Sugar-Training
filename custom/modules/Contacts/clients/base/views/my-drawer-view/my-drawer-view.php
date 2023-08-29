<?php
$viewdefs['Contacts']['base']['view']['my-drawer-view'] = array(
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
                0 => 'title',
                1 => 'phone_mobile',
            ),
            'grid' => array(
                0=> array(
                    'name' => 'title',
                    'label' => 'LBL_TITLE',
                    'type' => 'Customtextfield',
                    'cellSpan' => '6',
                    'labelSpan' => '2',
                    'span' => '4',
                    'dismiss_label' => false,
                ),
                1=> array(
                    'name' => 'phone_mobile',
                    'label' => 'LBL_MOBILE_PHONE',
                    'type' => 'phone',
                    'cellSpan' => '6',
                    'labelSpan' => '2',
                    'span' => '4',
                    'dismiss_label' => false,
                ),
            ),
        ),

    ),
);
// 'fields' => array(
//     0=> array(
//         'name' => 'title',
//         'label' => 'LBL_TITLE',
//         'type' => 'Customtextfield',
//         'cellSpan' => '6',
//         'labelSpan' => '2',
//         'span' => '4',
//         'dismiss_label' => false,
//         'labelsOnTop' => false,
//     ),
//     1=> array(
//         'name' => 'phone_mobile',
//         'label' => 'LBL_MOBILE_PHONE',
//         'type' => 'phone',
//         'cellSpan' => '6',
//         'labelSpan' => '2',
//         'span' => '4',
//         'dismiss_label' => false,
//         'labelsOnTop' => false,
//     ),
// ),