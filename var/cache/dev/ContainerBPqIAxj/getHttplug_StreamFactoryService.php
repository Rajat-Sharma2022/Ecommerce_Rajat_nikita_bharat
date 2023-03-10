<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_StreamFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'httplug.stream_factory' shared service.
     *
     * @return \Http\Message\StreamFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-http/message-factory/src/StreamFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/ClassDiscovery.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-http/discovery/src/StreamFactoryDiscovery.php';

        return $container->services['httplug.stream_factory'] = \Http\Discovery\StreamFactoryDiscovery::find();
    }
}
