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
namespace Sugarcrm\Sugarcrm\Security\Subject;

use Sugarcrm\Sugarcrm\Security\Subject;

/**
 * EmailAddressConfirmationLink subject
 */
final class EmailAddressConfirmationLink implements Subject
{
    /**
     * @test
     * @covers ::jsonSerialize
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return [
            '_type' => 'email-address-confirmation-link',
        ];
    }
}
