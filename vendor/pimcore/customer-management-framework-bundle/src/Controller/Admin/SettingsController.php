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

use CustomerManagementFrameworkBundle\Security\Guard\WebserviceAuthenticator;
use Pimcore\Bundle\AdminBundle\Controller\AdminController;
use Pimcore\Bundle\AdminBundle\Security\CsrfProtectionHandler;
use Pimcore\Model\Tool\SettingsStore;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends AdminController
{
    /**
     * @param Request $request
     * @param CsrfProtectionHandler $csrfProtectionHandler
     *
     * @return \Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse
     *
     * @Route("/settings/webservice-users", name="_pimcore_customermanagementframework_backend_settings_webservice_users", methods={"GET","POST"})
     */
    public function userManagementAction(Request $request, CsrfProtectionHandler $csrfProtectionHandler)
    {
        $this->isAllowed();

        $settingsStore = SettingsStore::get(WebserviceAuthenticator::SETTINGS_STORE_KEY, WebserviceAuthenticator::SETTINGS_STORE_SCOPE);
        $apiKeys = $settingsStore ? json_decode($settingsStore->getData(), true) : [];

        if ($request->get('data')) {
            if ($request->get('xaction') == 'update') {
                $csrfProtectionHandler->checkCsrfToken($request);
                $data = $this->decodeJson($request->get('data'));

                $apiKeys[$data['id']] = $data['apiKey'];
                SettingsStore::set(WebserviceAuthenticator::SETTINGS_STORE_KEY, json_encode($apiKeys), 'string', WebserviceAuthenticator::SETTINGS_STORE_SCOPE);

                return $this->adminJson(['data' => [], 'success' => true]);
            }
        } else {
            $userListing = new \Pimcore\Model\User\Listing();
            $userListing->setLimit($request->get('limit'));
            $userListing->setOffset($request->get('start'));
            $sortingSettings = \Pimcore\Bundle\AdminBundle\Helper\QueryParams::extractSortingSettings(array_merge($request->request->all(), $request->query->all()));
            if ($sortingSettings['orderKey']) {
                $userListing->setOrderKey($sortingSettings['orderKey']);
                $userListing->setOrder($sortingSettings['order']);
            }

            if ($request->get('filter')) {
                $filter = '%' . $request->get('filter') . '%';
                $userListing->addConditionParam('(`name` LIKE ? OR firstname LIKE ? OR lastname LIKE ? OR email LIKE ?)',
                    [$filter, $filter, $filter, $filter]
                );
            }

            $userListing->addConditionParam('active = ?', 1);
            $userListing->addConditionParam('type = ?', 'user');
            $userListing->load();

            $users = [];
            foreach ($userListing->getUsers() as $user) {
                $users[] = [
                    'id' => $user->getId(),
                    'name' => $user->getName(),
                    'firstname' => $user->getFirstname(),
                    'lastname' => $user->getLastname(),
                    'email' => $user->getEmail(),
                    'apiKey' => $apiKeys[$user->getId()] ?? '',
                    'image' => '/admin/user/get-image?id=' . $user->getId()
                ];
            }

            return $this->adminJson(['data' => $users, 'success' => true, 'total' => $userListing->getTotalCount()]);
        }

        return $this->adminJson(['success' => false]);
    }

    protected function isAllowed()
    {
        $user = $this->getAdminUser();

        if (!$user->isAdmin()) {
            throw $this->createAccessDeniedHttpException();
        }
    }
}
