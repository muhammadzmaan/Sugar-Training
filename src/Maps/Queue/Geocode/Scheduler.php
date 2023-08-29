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

namespace Sugarcrm\Sugarcrm\Maps\Queue\Geocode;

use Sugarcrm\Sugarcrm\Maps\Engine\Geocode\Engine;
use Sugarcrm\Sugarcrm\Maps\Queue\Scheduler as BaseScheduler;

/**
 *
 * Persistent scheduler which is responsible to create subsequent jobs based
 * on what needs to be consumed from the database queue.
 *
 */
class Scheduler extends BaseScheduler
{
    public function __construct()
    {
        parent::__construct(Engine::class);
    }
}
