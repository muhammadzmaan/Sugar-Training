<?php

$viewdefs['Contacts']['base']['view']['open-tasks-contact'] = array(
    'dashlets' => array(
        array(
            'label' => 'LBL_OPEN_TASKS_CONTACT',
            'description' => 'LBL_OPEN_TASKS_CONTACT_DESCRIPTION',
            'config' => array(
                'limit' => 5,
                'auto_refresh' => 0,
            ),
            'preview' => array(
                'limit' => 5,
                'auto_refresh' => 0
            ),
           
        ),
    ),
);