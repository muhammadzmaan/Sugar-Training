<?php

$manifest = array(
    'acceptable_sugar_flavors' => array('CE', 'PRO', 'CORP', 'ENT', 'ULT'),
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(),
        'regex_matches' => array(
            0 => '6\\.5\\.(.*?)',
            1 => '7\\.8\\.(.*?)\\.(.*?)', 
            2 => '7\\.9\\.(.*?)\\.(.*?)', 
            3 => '7\\.10\\.(.*?)\\.(.*?)'
        ),
    'author' => 'SugarCRM',
    'description' => 'Installs a sample set of custom fields to the accounts module',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Example Custom Field Installer',
    'published_date' => '2015-05-11 20:45:04',
    'type' => 'module',
    'version' => '1.0.0',
));

$installdefs = array(
    'id' => 'package_zaman456',
    'language' => array(
        array(
            'from' => '<basepath>/Files/Language/Accounts/en_us.lang.php',
            'to_module' => 'Accounts',
            'language' => 'en_us'
        ),
    ),
    'copy' => array(
        array(
            'from' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/userupdatescheduler.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/userupdatescheduler.php',
        ),
    ),
    'custom_fields' => array(
        //Text
        array(
            'name' => 'text_field_example_c',
            'label' => 'LBL_TEXT_FIELD_EXAMPLE',
            'type' => 'varchar',
            'module' => 'Accounts',
            'help' => 'Text Field Help Text',
            'comment' => 'Text Field Comment Text',
            'default_value' => '',
            'max_size' => 255,
            'required' => false, 
            'reportable' => true, 
            'audited' => false, 
            'importable' => 'true', 
            'duplicate_merge' => false, 
        ),
    ),
    'logic_hooks' =>array(
        
        array(
            'module' => 'Accounts',
            'hook' => 'before_save',
            'description' => 'Hook - logic hook to create task',
            'file' => 'custom/modules/Accounts/bslogic.php',
            'class' => 'bslogic',
            'function' => 'bslogicmethod',
        ),
    ),
    
);

?>