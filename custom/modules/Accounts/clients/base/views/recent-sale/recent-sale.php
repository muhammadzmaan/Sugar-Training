<?php
$viewdefs['Accounts']['base']['view']['recent-sale'] = array(
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
                1 => array(
                    'name' => 'amount',
                    'label' => 'LBL_AMOUNT',
                    'type' => 'Currency',
                ),
                2 => 'date_entered',
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
                    'name' => 'amount',
                    'label' => 'LBL_AMOUNT',
                    'type' => 'Currency',
                    'cellSpan' => '6',
                    'labelSpan' => '2',
                    'span' => '4',
                    'dismiss_label' => false,
                ),
                2=> array(
                    'name' => 'date_entered',
                    'label' => 'LBL_DATE_ENTERED',
                    'type' => 'datetimecombo',
                    'cellSpan' => '6',
                    'labelSpan' => '2',
                    'span' => '4',
                    'dismiss_label' => false,
                ),
            ),
        ),

    ),
);
