<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreElementRemovalListenerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\Event\PimcoreElementRemovalListenerInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Event\PimcoreElementRemovalListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Event/PimcoreElementRemovalListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Event/PimcoreElementRemovalListener.php';

        $a = ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\SegmentAssigner\\SegmentAssignerInterface'] ?? $container->load('getSegmentAssignerInterfaceService'));

        if (isset($container->services['CustomerManagementFrameworkBundle\\Event\\PimcoreElementRemovalListenerInterface'])) {
            return $container->services['CustomerManagementFrameworkBundle\\Event\\PimcoreElementRemovalListenerInterface'];
        }

        return $container->services['CustomerManagementFrameworkBundle\\Event\\PimcoreElementRemovalListenerInterface'] = new \CustomerManagementFrameworkBundle\Event\PimcoreElementRemovalListener($a, ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\TypeMapper\\TypeMapperInterface'] ?? ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\TypeMapper\\TypeMapperInterface'] = new \CustomerManagementFrameworkBundle\SegmentAssignment\TypeMapper\TypeMapper())));
    }
}
