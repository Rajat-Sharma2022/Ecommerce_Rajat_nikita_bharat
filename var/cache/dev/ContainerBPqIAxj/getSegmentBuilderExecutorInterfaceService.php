<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentBuilderExecutorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\SegmentManager\SegmentBuilderExecutor\SegmentBuilderExecutorInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\SegmentManager\SegmentBuilderExecutor\DefaultSegmentBuilderExecutor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentManager/SegmentBuilderExecutor/SegmentBuilderExecutorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentManager/SegmentBuilderExecutor/DefaultSegmentBuilderExecutor.php';

        return $container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentBuilderExecutor\\SegmentBuilderExecutorInterface'] = new \CustomerManagementFrameworkBundle\SegmentManager\SegmentBuilderExecutor\DefaultSegmentBuilderExecutor(($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface'] ?? $container->getCustomerProviderInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\CustomerSaveManager\\CustomerSaveManagerInterface'] ?? $container->getCustomerSaveManagerInterfaceService()), ($container->services['Knp\\Component\\Pager\\PaginatorInterface'] ?? $container->getPaginatorInterfaceService()));
    }
}
