<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerMergerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\CustomerMerger\CustomerMergerInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\CustomerMerger\DefaultCustomerMerger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerMerger/CustomerMergerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerMerger/DefaultCustomerMerger.php';

        return $container->services['CustomerManagementFrameworkBundle\\CustomerMerger\\CustomerMergerInterface'] = new \CustomerManagementFrameworkBundle\CustomerMerger\DefaultCustomerMerger(($container->services['CustomerManagementFrameworkBundle\\CustomerSaveManager\\CustomerSaveManagerInterface'] ?? $container->getCustomerSaveManagerInterfaceService()));
    }
}
