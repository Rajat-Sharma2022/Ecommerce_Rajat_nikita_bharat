<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace CustomerManagementFrameworkBundle\GDPR\Consent;

use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use Pimcore\Model\DataObject\Data\Consent;

class ConsentChecker implements ConsentCheckerInterface
{
    public function hasProfilingConsent(CustomerInterface $customer): bool
    {
        $consent = $customer->getProfilingConsent() instanceof Consent ? $customer->getProfilingConsent()->getConsent() : $customer->getProfilingConsent();

        return (bool) $consent;
    }
}
