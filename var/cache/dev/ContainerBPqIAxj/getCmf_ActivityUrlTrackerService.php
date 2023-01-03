<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_ActivityUrlTrackerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.activity_url_tracker' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\ActivityUrlTracker\DefaultActivityUrlTracker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActivityUrlTracker/ActivityUrlTrackerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActivityUrlTracker/DefaultActivityUrlTracker.php';

        return $container->services['cmf.activity_url_tracker'] = new \CustomerManagementFrameworkBundle\ActivityUrlTracker\DefaultActivityUrlTracker(($container->services['CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface'] ?? $container->getCustomerProviderInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\ActivityManager\\DefaultActivityManager'] ?? $container->load('getDefaultActivityManagerService')));
    }
}
