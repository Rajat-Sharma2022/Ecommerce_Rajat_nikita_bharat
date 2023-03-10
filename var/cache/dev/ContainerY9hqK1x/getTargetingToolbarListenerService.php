<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTargetingToolbarListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'CustomerManagementFrameworkBundle\Targeting\EventListener\TargetingToolbarListener' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Targeting\EventListener\TargetingToolbarListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Targeting/EventListener/TargetingToolbarListener.php';

        $a = ($container->privates['CustomerManagementFrameworkBundle\\Targeting\\SegmentTracker'] ?? $container->load('getSegmentTrackerService'));

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Targeting\\EventListener\\TargetingToolbarListener'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\EventListener\\TargetingToolbarListener'];
        }

        return $container->privates['CustomerManagementFrameworkBundle\\Targeting\\EventListener\\TargetingToolbarListener'] = new \CustomerManagementFrameworkBundle\Targeting\EventListener\TargetingToolbarListener(($container->privates['Pimcore\\Targeting\\VisitorInfoStorage'] ?? ($container->privates['Pimcore\\Targeting\\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage())), $a, ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()));
    }
}
