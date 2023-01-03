<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1ZX6Rj7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1ZX6Rj7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1ZX6Rj7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'customerView' => ['services', 'CustomerManagementFrameworkBundle\\CustomerView\\CustomerViewInterface', 'getCustomerViewInterfaceService', false],
        ], [
            'customerView' => 'CustomerManagementFrameworkBundle\\CustomerView\\CustomerViewInterface',
        ]);
    }
}