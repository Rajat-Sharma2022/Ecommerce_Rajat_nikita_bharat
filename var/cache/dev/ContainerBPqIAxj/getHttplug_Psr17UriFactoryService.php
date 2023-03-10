<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_Psr17UriFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'httplug.psr17_uri_factory' shared service.
     *
     * @return \Psr\Http\Message\UriFactoryInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UriFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/ClassDiscovery.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/Psr17FactoryDiscovery.php';

        return $container->services['httplug.psr17_uri_factory'] = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory();
    }
}
