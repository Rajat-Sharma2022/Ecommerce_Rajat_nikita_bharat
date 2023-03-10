<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplyTargetGroupsFromSegmentsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'CustomerManagementFrameworkBundle\Targeting\ActionHandler\ApplyTargetGroupsFromSegments' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Targeting\ActionHandler\ApplyTargetGroupsFromSegments
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProviderDependentInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Targeting/ActionHandler/ApplyTargetGroupsFromSegments.php';

        $a = ($container->privates['Pimcore\\Targeting\\ConditionMatcher'] ?? $container->getConditionMatcherService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'];
        }
        $b = ($container->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $container->getCookieStorageService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'];
        }
        $c = ($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'] ?? $container->load('getSegmentTrackerService'));

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'];
        }
        $d = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'];
        }
        $e = ($container->privates['Pimcore\\Targeting\\DataLoader'] ?? $container->getDataLoaderService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'];
        }

        return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\ActionHandler\\ApplyTargetGroupsFromSegments'] = new \CustomerManagementFrameworkBundle\Targeting\ActionHandler\ApplyTargetGroupsFromSegments($a, $b, ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()), $c, $d, $e);
    }
}
