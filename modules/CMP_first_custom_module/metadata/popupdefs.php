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
$module_name = 'CMP_first_custom_module';
$object_name = 'CMP_first_custom_module';
$_module_name = 'cmp_first_custom_module';
$popupMeta = array('moduleMain' => $module_name,
						'varName' => $object_name,
						'orderBy' => $_module_name . '.first_name, '. $_module_name . '.last_name',
						'whereClauses' => 
							array('first_name' => $_module_name . '.first_name', 
									'last_name' => $_module_name . '.last_name',
									),
						'searchInputs' =>
							array('first_name', 'last_name'),
						);
