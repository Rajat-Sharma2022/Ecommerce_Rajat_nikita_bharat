<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentTrackerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'CustomerManagementFrameworkBundle\Targeting\SegmentTracker' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Targeting\SegmentTracker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Targeting/SegmentTracker.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'];
        }
        $b = ($container->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $container->getCookieStorageService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'];
        }
        $c = ($container->privates['Pimcore\\Targeting\\DataLoader'] ?? $container->getDataLoaderService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'];
        }
        $d = ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'];
        }

        return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'] = new \CustomerManagementFrameworkBundle\Targeting\SegmentTracker($b, $c, $d, $a);
    }
}
