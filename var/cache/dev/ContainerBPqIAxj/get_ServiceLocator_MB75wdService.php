<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MB75wdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M_B75wd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M_B75wd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'factory' => ['services', 'pimcore_ecommerce.factory', 'getPimcoreEcommerce_FactoryService', true],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'translator' => ['services', 'Symfony\\Contracts\\Translation\\TranslatorInterface', 'getTranslatorInterfaceService', false],
        ], [
            'factory' => '?',
            'logger' => '?',
            'translator' => '?',
        ]);
    }
}
