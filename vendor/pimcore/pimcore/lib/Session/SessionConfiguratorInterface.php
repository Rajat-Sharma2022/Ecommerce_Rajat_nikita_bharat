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

namespace Pimcore\Session;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @deprecated and will be removed in Pimcore 11. Use EventListener on kernel.request to register session bags
 */
interface SessionConfiguratorInterface
{
    /**
     * Configure the session (e.g. register a bag)
     *
     * @param SessionInterface $session
     */
    public function configure(SessionInterface $session);
}
