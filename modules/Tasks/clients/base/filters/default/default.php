<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$viewdefs['Tasks']['base']['filter']['default'] = array(
    'default_filter' => 'all_records',
    'fields' => array(
        'name' => array(),
        'contact_name' => array(),
        'parent_name' => array(),
        'status' => array(),
        'date_entered' => array(),
        'date_modified' => array(),
        'date_start' => array(),
        'date_due' => array(),
        'tag' => array(),
        'assigned_user_name' => array(),
        '$owner' => array(
            'predefined_filter' => true,
            'vname' => 'LBL_CURRENT_USER_FILTER',
        ),
        '$favorite' => array(
            'predefined_filter' => true,
            'vname' => 'LBL_FAVORITES_FILTER',
        ),
        'cj_activity_tpl_name' => [],
        'dri_subworkflow_template_name' => [],
        'dri_workflow_template_name' => [],
        'is_customer_journey_activity' => [],
        'customer_journey_type' => [],
    ),
);
