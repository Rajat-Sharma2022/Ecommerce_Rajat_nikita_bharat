<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckoutEventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\CheckoutEventListener' shared autowired service.
     *
     * @return \App\EventListener\CheckoutEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/CheckoutEventListener.php';

        $a = ($container->services['pimcore_ecommerce.factory'] ?? $container->load('getPimcoreEcommerce_FactoryService'));

        if (isset($container->privates['App\\EventListener\\CheckoutEventListener'])) {
            return $container->privates['App\\EventListener\\CheckoutEventListener'];
        }
        $b = ($container->services['CustomerManagementFrameworkBundle\\ActivityManager\\DefaultActivityManager'] ?? $container->load('getDefaultActivityManagerService'));

        if (isset($container->privates['App\\EventListener\\CheckoutEventListener'])) {
            return $container->privates['App\\EventListener\\CheckoutEventListener'];
        }

        return $container->privates['App\\EventListener\\CheckoutEventListener'] = new \App\EventListener\CheckoutEventListener($a, $b, ($container->services['Pimcore\\Localization\\LocaleServiceInterface'] ?? $container->getLocaleServiceInterfaceService()));
    }
}