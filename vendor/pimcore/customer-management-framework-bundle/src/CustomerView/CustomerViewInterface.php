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

namespace CustomerManagementFrameworkBundle\CustomerView;

use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use CustomerManagementFrameworkBundle\Translate\TranslatorInterface;
use CustomerManagementFrameworkBundle\View\Formatter\ViewFormatterInterface;

interface CustomerViewInterface extends TranslatorInterface
{
    /**
     * @return ViewFormatterInterface
     */
    public function getViewFormatter();

    /**
     * @param CustomerInterface $customer
     *
     * @return string|null
     */
    public function getOverviewTemplate(CustomerInterface $customer);

    /**
     * @return string
     */
    public function getOverviewWrapperTemplate();

    /**
     * @return string
     */
    public function getFilterWrapperTemplate();

    /**
     * @return string
     */
    public function getFieldsFilterTemplate();

    /**
     * @return string
     */
    public function getSegmentsFilterTemplate();

    /**
     * Determines if customer has a detail view or if pimcore object should be openend directly
     *
     * @param CustomerInterface $customer
     *
     * @return bool
     */
    public function hasDetailView(CustomerInterface $customer);

    /**
     * @param CustomerInterface $customer
     *
     * @return string|null
     */
    public function getDetailviewTemplate(CustomerInterface $customer);

    /**
     * @param CustomerInterface $customer
     *
     * @return array
     */
    public function getDetailviewData(CustomerInterface $customer);
}
