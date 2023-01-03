<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticationLoginListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\AuthenticationLoginListener' shared autowired service.
     *
     * @return \App\EventListener\AuthenticationLoginListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/AuthenticationLoginListener.php';

        $a = ($container->services['CustomerManagementFrameworkBundle\\ActivityManager\\DefaultActivityManager'] ?? $container->load('getDefaultActivityManagerService'));

        if (isset($container->privates['App\\EventListener\\AuthenticationLoginListener'])) {
            return $container->privates['App\\EventListener\\AuthenticationLoginListener'];
        }
        $b = ($container->services['pimcore_ecommerce.factory'] ?? $container->load('getPimcoreEcommerce_FactoryService'));

        if (isset($container->privates['App\\EventListener\\AuthenticationLoginListener'])) {
            return $container->privates['App\\EventListener\\AuthenticationLoginListener'];
        }

        $container->privates['App\\EventListener\\AuthenticationLoginListener'] = $instance = new \App\EventListener\AuthenticationLoginListener(($container->services['pimcore_ecommerce.environment'] ?? $container->getPimcoreEcommerce_EnvironmentService()), $a, $b);

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
