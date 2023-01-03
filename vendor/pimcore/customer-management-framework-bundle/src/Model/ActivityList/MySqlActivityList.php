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

namespace CustomerManagementFrameworkBundle\Model\ActivityList;

use CustomerManagementFrameworkBundle\Model\ActivityList\DefaultMariaDbActivityList\MySqlDao;

class MySqlActivityList extends DefaultMariaDbActivityList
{
    public function __construct()
    {
        parent::__construct();
        $this->dao = new MySqlDao($this);
    }
}
