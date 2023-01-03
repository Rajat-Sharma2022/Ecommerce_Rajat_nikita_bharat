<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_EventListener_ObjectMergerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.event_listener.object_merger' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Event\CustomerMergerEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Event/CustomerMergerEventListener.php';

        return $container->services['cmf.event_listener.object_merger'] = new \CustomerManagementFrameworkBundle\Event\CustomerMergerEventListener(($container->services['CustomerManagementFrameworkBundle\\CustomerSaveManager\\CustomerSaveManagerInterface'] ?? $container->getCustomerSaveManagerInterfaceService()));
    }
}
