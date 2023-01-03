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

namespace CustomerManagementFrameworkBundle\Model\Objectbrick;

use CustomerManagementFrameworkBundle\Model\OAuth\OAuth2TokenInterface;
use Pimcore\Model\DataObject\Objectbrick\Data\AbstractData;

abstract class AbstractOAuth2Token extends AbstractData implements OAuth2TokenInterface
{
    /**
     * @return array
     */
    public function getSecureProperties()
    {
        return [
            'accessToken',
            'refreshToken',
        ];
    }
}
