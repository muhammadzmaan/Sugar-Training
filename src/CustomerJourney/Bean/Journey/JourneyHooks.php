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

namespace Sugarcrm\Sugarcrm\CustomerJourney\Bean\Journey;

use Sugarcrm\Sugarcrm\CustomerJourney\LogicHooks\GeneralHooks;
use Sugarcrm\Sugarcrm\CustomerJourney\Bean\RSA\CheckAndPerformRSA as CheckAndPerformRSA;

class JourneyHooks
{

    /**
     * All after_save logic hooks is inside this function.
     *
     * @param \SugarBean $bean The bean that was changed
     * @param string $event
     * @param array $arguments
     */
    public function afterSave($bean, $event, $arguments)
    {
        $this->unsetJourneyTemplateID($bean);

        $this->checkStatusUpdate($bean, $event, $arguments);

        if (!empty($bean->is_cancelled)) {
            $bean->cancel();
        }

        if (!empty($bean->is_deleted)) {
            $bean->mark_deleted($bean->id);
        }
    }

    /**
     * Unset Journey template ID (dri_workflow_template_id) from parent bean after Journey has been added so Journey
     * does not keep adding as it should only be added only once.
     * Bug Fix: CJ-91
     *
     * @param \SugarBean $bean The bean that was changed
     */
    private function unsetJourneyTemplateID($bean)
    {
        $parent = $bean->getParent();
        $parent_name = $parent->getTableName();

        $qb = \DBManagerFactory::getConnection()->createQueryBuilder();
        $qb->update($parent_name)
            ->set('dri_workflow_template_id', $qb->expr()->literal(''))
            ->where($qb->expr()->eq('id', $qb->expr()->literal($parent->id)));
        $qb->execute();
    }

    /**
     * Perform the RSA logic against the Journey
     *
     * @param \SugarBean $journey
     * @param string $event
     * @param array $arguments
     */
    private function checkStatusUpdate(\SugarBean $journey, $event, array $arguments)
    {
        if (array_key_exists('isUpdate', $arguments) && !$arguments['isUpdate']) {
            return;
        }

        $stateAfterValue = GeneralHooks::getBeanValueFromArgs($arguments, 'state', 'after');

        if ($stateAfterValue == \DRI_Workflow::STATE_COMPLETED) {
            CheckAndPerformRSA::checkRelatedSugarAction($journey);
        }
    }
}
