<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\Controller\Rest\Mailchimp\WebhookController' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Controller\Rest\Mailchimp\WebhookController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/DoubleAuthenticationControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Controller/Rest/AbstractRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Controller/Rest/Mailchimp/WebhookController.php';

        $container->services['CustomerManagementFrameworkBundle\\Controller\\Rest\\Mailchimp\\WebhookController'] = $instance = new \CustomerManagementFrameworkBundle\Controller\Rest\Mailchimp\WebhookController();

        $instance->setContainer(($container->privates['.service_locator.oafe0zm'] ?? $container->load('get_ServiceLocator_Oafe0zmService'))->withContext('CustomerManagementFrameworkBundle\\Controller\\Rest\\Mailchimp\\WebhookController', $container));

        return $instance;
    }
}
