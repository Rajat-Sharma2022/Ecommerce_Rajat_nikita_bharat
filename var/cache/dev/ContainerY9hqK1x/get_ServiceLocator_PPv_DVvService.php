<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PPv_DVvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PPv.dVv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PPv.dVv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'service' => ['privates', 'CustomerManagementFrameworkBundle\\GDPR\\DataProvider\\Customers', 'getCustomersService', true],
        ], [
            'service' => 'CustomerManagementFrameworkBundle\\GDPR\\DataProvider\\Customers',
        ]);
    }
}
