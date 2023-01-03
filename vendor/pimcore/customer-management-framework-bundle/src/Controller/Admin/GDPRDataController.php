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

use CustomerManagementFrameworkBundle\GDPR\DataProvider\Customers;
use Pimcore\Model\DataObject\AbstractObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DataObjectController
 *
 * @Route("/gdpr-data")
 */
class GDPRDataController extends \Pimcore\Bundle\AdminBundle\Controller\AdminController
{
    /**
     * @param Request $request
     * @param Customers $service
     *
     * @return \Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse
     *
     * @Route("/search-data-objects", name="_pimcore_customermanagementframework_gdprdata_searchdataobjects", methods={"GET"})
     */
    public function searchDataObjectsAction(Request $request, Customers $service)
    {
        $allParams = array_merge($request->request->all(), $request->query->all());

        $result = $service->searchData(
            intval($allParams['id']),
            strip_tags($allParams['firstname']),
            strip_tags($allParams['lastname']),
            strip_tags($allParams['email']),
            intval($allParams['start']),
            intval($allParams['limit']),
            $allParams['sort'] ?? null
        );

        return $this->adminJson($result);
    }

    /**
     * @param Request $request
     * @param Customers $service
     *
     * @return \Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse
     *
     * @Route("/export", name="_pimcore_customermanagementframework_gdprdata_export", methods={"GET"})
     */
    public function exportDataObjectAction(Request $request, Customers $service)
    {
        $object = AbstractObject::getById($request->get('id'));
        $exportResult = $service->doExportData($object);
        $jsonResponse = $this->adminJson($exportResult);
        $jsonResponse->headers->set('Content-Disposition', 'attachment; filename="export-data-object-' . $object->getId() . '.json"');

        return $jsonResponse;
    }
}
