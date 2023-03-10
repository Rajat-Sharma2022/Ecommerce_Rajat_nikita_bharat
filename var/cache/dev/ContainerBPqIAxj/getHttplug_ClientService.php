<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_ClientService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'httplug.client' shared service.
     *
     * @return \Http\Client\HttpClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/httplug/src/HttpClient.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/ClassDiscovery.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/HttpClientDiscovery.php';

        return $container->services['httplug.client'] = \Http\Discovery\HttpClientDiscovery::find();
    }
}
