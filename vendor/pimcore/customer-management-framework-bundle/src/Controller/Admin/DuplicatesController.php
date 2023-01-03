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

namespace CustomerManagementFrameworkBundle\Controller\Admin;

use CustomerManagementFrameworkBundle\Controller\Admin;
use CustomerManagementFrameworkBundle\CustomerList\SearchHelper;
use CustomerManagementFrameworkBundle\DuplicatesIndex\DuplicatesIndexInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/duplicates")
 */
class DuplicatesController extends Admin
{
    public function init()
    {
        \Pimcore\Model\DataObject\AbstractObject::setHideUnpublished(true);
    }

    /**
     * @param Request $request
     * @param DuplicatesIndexInterface $duplicatesIndex
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     * @Route("/list")
     */
    public function listAction(Request $request, DuplicatesIndexInterface $duplicatesIndex)
    {
        // fetch all filters
        $filters = $request->get('filter', []);
        // check if filters exist
        $customerList = null;
        if (!empty($filters)) {
            // build customer listing
            $customerList = $this->getSearchHelper()->getCustomerProvider()->getList();
            $customerList
                ->setOrderKey('o_id')
                ->setOrder('ASC');

            /** @noinspection PhpUnhandledExceptionInspection */
            $this->getSearchHelper()->addListingFilters($customerList, $filters, $this->getAdminUser());
        }

        $paginator = $duplicatesIndex->getPotentialDuplicates(
            $request->get('page', 1),
            50,
            $request->get('declined'),
            $customerList
        );

        return $this->render(
            '@PimcoreCustomerManagementFramework/admin/duplicates/list.html.twig',
            [
                'paginator' => $paginator,
                'paginationVariables' => $paginator->getPaginationData(),
                'duplicates' => $paginator->getItems(),
                'duplicatesView' => \Pimcore::getContainer()->get('cmf.customer_duplicates_view'),
                'searchBarFields' => $this->getSearchHelper()->getConfiguredSearchBarFields(),
                'filters' => $filters,
            ]
        );
    }

    /**
     * @param Request $request
     * @Route("/decline/{id}")
     *
     * @return JsonResponse
     */
    public function declineAction(Request $request)
    {
        try {
            \Pimcore::getContainer()->get('cmf.customer_duplicates_index')->declinePotentialDuplicate(
                $request->get('id')
            );

            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'msg' => $e->getMessage()]);
        }
    }

    /**
     * @return SearchHelper
     */
    protected function getSearchHelper()
    {
        return \Pimcore::getContainer()->get(SearchHelper::class);
    }
}
