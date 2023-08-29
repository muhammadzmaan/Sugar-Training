<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['base']['view']['sidebar-nav-flyout-module-menu'] = array(
    'modules' => array(
        'Accounts' => array(
            'custom-link' => array(
                'label' => 'My All',
                'route' => 'http://localhost/sugarcrm/SugarEnt-Full-13.0.0/#Accounts',
                'icon' => 'fa-star',
            ),
        ),
    ),
);
