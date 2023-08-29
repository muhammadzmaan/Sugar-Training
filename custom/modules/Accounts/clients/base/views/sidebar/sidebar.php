<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_menu[] = array(
    'label' => 'Custom Button',
    'acl_action' => 'view',
    'route' => '#',  // Replace '#' with the URL or route you want to open on button click
    'icon' => 'fa-flag',  // Replace 'fa-flag' with the desired Font Awesome icon class
);