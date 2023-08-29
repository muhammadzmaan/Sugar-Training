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

use Sugarcrm\Sugarcrm\Entitlements\Subscription;
use Sugarcrm\Sugarcrm\Entitlements\SubscriptionManager;

class SugarUpgradePostCJScript extends UpgradeScript
{
    public function run()
    {
        if (version_compare($this->from_version, '12.3.0', '<') &&
            version_compare($this->to_version, '12.3.0', '>=')
        ) {
            if ($this->shouldCreateTemplates()) {
                $this->installDefaultTemplates();
            }
            $this->updateConfig();
            $this->retainSugarAutomateUsers();
            $this->addRelationshipandScheduler();
            $this->addCJModulesInNavbar();
        }
    }

    /**
     * Determines if we need to create OOTB templates
     *
     * @return bool true if the upgrader should run
     */
    protected function shouldCreateTemplates()
    {
        $this->log('Determines if it should Install CJ OOTB Templates');

        // check if templates already exists
        $templates = require \SugarAutoLoader::existingCustomOne('install/CustomerJourney/data/all.php');

        // create sugarquery to get OOTB templates and see if they all are not deleted
        $query = new SugarQuery();
        $query->select()->setCountQuery();
        $query->from(\BeanFactory::newBean('DRI_Workflow_Templates'));
        $query->where()->in('id', $templates)
            ->equals('deleted', 0);
        $result = $query->execute();
        $count = $result[0]['record_count'];

        // if count is zero then create these OOTB templates, count will be zero when either there is no template
        // or all are deleted.
        return !$count;
    }

    /**
     * Creates Customer Journey OOTB templates
     */
    protected function installDefaultTemplates()
    {
        // OOTB Templates
        $this->log('Installing CJ OOTB Templates');
        require 'install/CustomerJourney/CreateDefaultTemplates.php';
    }

    /**
     * Create Customer Journey Relationships and Scheduler
     */
    protected function addRelationshipandScheduler()
    {
        $this->log('Creating Customer Journey relationships');
        // Create default relationships for Sugar Automate
        require_once 'modules/DRI_Workflows/clients/base/api/DRI_WorkflowsApi.php';

        $driWorkflowsApi = new DRI_WorkflowsApi();
        $api = new RestService();
        $driWorkflowsApi->createModuleRelationships($api, ['repair' => true]);

        // Sync database
        $this->log('Syncing database');
        require 'install/CustomerJourney/SyncDatabase.php';

        // OOTB Scheduler
        $this->log('Creating Customer Journey scheduler');
        require 'install/CustomerJourney/CreateDefaultScheduler.php';
    }

    /**
     * Add Customer Journey modules in navbar
     */
    protected function addCJModulesInNavbar()
    {
        $this->log('Add Customer Journey modules in navbar');

        $enabledCJTabs = $this->getConfigValues('enabledCJTabs');

        if (empty($enabledCJTabs)) {
            $enabledCJTabs = [
                'DRI_Workflows' => 'DRI_Workflows',
                'DRI_SubWorkflows' => 'DRI_SubWorkflows',
            ];
        }

        $tabController = new TabController();
        $currentTabs = $tabController->get_system_tabs();
        $currentTabs = array_merge($currentTabs, $enabledCJTabs);

        $tabController->set_system_tabs($currentTabs);
    }

    /**
     * Update Customer Journey enabled modules and display settings in sugar config
     */
    protected function updateConfig()
    {
        $this->log('Updating Config values');

        $configurator = new Configurator();
        $configurator->loadConfig();

        $cjBackup = $this->getConfigValues('customer_journey');

        if (empty($cjBackup)) {
            return;
        }

        $enabledModules = $cjBackup['enabled_modules'];
        $displaySettings = $cjBackup['recordview_display_settings'];

        if (!isset($enabledModules) && isset($displaySettings)) {
            $enabledModules = array_keys($displaySettings);
            $cjBackup['enabled_modules'] = implode(',', $enabledModules);
        } elseif (!isset($displaySettings) && isset($enabledModules)) {
            $cjBackup['recordview_display_settings'] = [];
            $enabledModules = explode(',', $enabledModules);

            foreach ($enabledModules as $module) {
                $cjBackup['recordview_display_settings'][$module] = 'panel_bottom';
            }
        } else {
            $enabledModules = explode(',', $enabledModules);
            $displaySettings = array_keys($displaySettings);

            if (array_diff($enabledModules, $displaySettings) || array_diff($displaySettings, $enabledModules)) {
                $allModules = array_unique(array_merge($enabledModules, $displaySettings));
                $cjBackup['enabled_modules'] = implode(',', $allModules);

                foreach ($allModules as $module) {
                    if (!isset($cjBackup['recordview_display_settings'][$module])) {
                        $cjBackup['recordview_display_settings'][$module] = 'panel_bottom';
                    }
                }
            }
        }

        foreach ($cjBackup['recordview_display_settings'] as $module => $setting) {
            if ($setting === 'tab') {
                $cjBackup['recordview_display_settings'][$module] = 'tab_last';
            } elseif ($setting === 'panel') {
                $cjBackup['recordview_display_settings'][$module] = 'panel_bottom';
            }
        }

        $configurator->config['customer_journey'] = $cjBackup;
        $configurator->saveConfig();

        $this->log('Config updated successfully');
    }

    /**
     * Get data from config table specifed by the name field
     *
     * @param String $name
     * @return Array
     */
    protected function getConfigValues($name)
    {
        global $db;

        $this->log("Getting Config values for $name");

        $qb = $db->getConnection()->createQueryBuilder();
        $qb->select(['name', 'value']);
        $qb->from('config');
        $qb->where($qb->expr()->eq('category', $qb->createPositionalParameter('cjBackup')))
            ->andWhere($qb->expr()->eq('name', $qb->createPositionalParameter($name)));
        $result = $qb->execute();
        $row = $result->fetchAssociative();

        if (empty($row['value'])) {
            return [];
        }

        $response = [];

        try {
            $response = json_decode($row['value'], true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $response = [];
            }
        } catch (\JsonException $exception) {
            $this->log('Json decode error msg: '. $exception->getMessage());
        }

        return $response;
    }

    /**
     * Enable Automate License type for users which had Customer Journey enabled for them
     */
    protected function retainSugarAutomateUsers()
    {
        $this->log('Retaining Sugar Automate Users if any');

        $hasAccessField = isset($GLOBALS['dictionary']) && isset($GLOBALS['dictionary']['User']) &&
                isset($GLOBALS['dictionary']['User']['fields']) &&
                isset($GLOBALS['dictionary']['User']['fields']['customer_journey_access']);

        if ($hasAccessField) {
            $automateKey = Subscription::SUGAR_AUTOMATE_KEY;
            $topLevelSubscriptions = array_keys(SubscriptionManager::instance()->getTopLevelSystemSubscriptionKeys());

            if (in_array($automateKey, $topLevelSubscriptions, true)) {
                // get all users for which customer_journey_access was enabled
                $query = new SugarQuery();
                $query->select('id');
                $query->from(\BeanFactory::newBean('Users'))
                    ->where()->equals('customer_journey_access', 1)
                    ->notContains('license_type', $automateKey);

                $users = $query->execute();

                // set AUTOMATE license key at the end of license type
                foreach ($users as $userId) {
                    try {
                        $user = \BeanFactory::retrieveBean('Users', $userId['id']);
                        // if user doesn't have AUTOMATE license then we add
                        // AUTOMATE in their license_type
                        if ($user && !$user->hasLicenses([$automateKey])) {
                            $licenseType = json_decode($user->license_type);

                            if (empty($licenseType)) {
                                $licenseType = [];
                                $allSupportedKeys = SubscriptionManager::instance()->getAllSupportedProducts();
                                $sortedSystemSubscriptions = array_intersect($allSupportedKeys, $topLevelSubscriptions);
                                $licenseType[] = array_shift($sortedSystemSubscriptions);
                            }

                            array_push($licenseType, $automateKey);

                            $user->license_type = json_encode($licenseType);
                            $user->save();
                        }
                    } catch (Exception $e) {
                        $this->log('User save error: ' . $e->getMessage());
                    }
                }
            }
        }
    }
}
