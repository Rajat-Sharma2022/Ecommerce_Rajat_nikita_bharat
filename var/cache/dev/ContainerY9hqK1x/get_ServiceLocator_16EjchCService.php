<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_16EjchCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.16EjchC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.16EjchC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'queue' => ['privates', '.errored..service_locator.16EjchC.CustomerManagementFrameworkBundle\\Newsletter\\Queue\\NewsletterQueueInterface', NULL, 'Cannot autowire service ".service_locator.16EjchC": it references interface "CustomerManagementFrameworkBundle\\Newsletter\\Queue\\NewsletterQueueInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'queue' => 'CustomerManagementFrameworkBundle\\Newsletter\\Queue\\NewsletterQueueInterface',
        ]);
    }
}
