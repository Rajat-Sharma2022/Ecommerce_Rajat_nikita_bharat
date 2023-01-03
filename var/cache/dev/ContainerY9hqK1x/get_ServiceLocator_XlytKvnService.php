<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XlytKvnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xlytKvn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xlytKvn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cache' => ['services', 'Pimcore\\Cache\\Core\\CoreCacheHandler', 'getCoreCacheHandlerService', false],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'filesystem' => ['services', '.container.private.filesystem', 'get_Container_Private_FilesystemService', true],
            'kernel' => ['services', 'kernel', 'getKernelService', false],
            'symfonyCacheClearer' => ['services', 'Pimcore\\Cache\\Symfony\\CacheClearer', 'getCacheClearer2Service', true],
        ], [
            'cache' => 'Pimcore\\Cache\\Core\\CoreCacheHandler',
            'eventDispatcher' => '?',
            'filesystem' => '?',
            'kernel' => '?',
            'symfonyCacheClearer' => 'Pimcore\\Cache\\Symfony\\CacheClearer',
        ]);
    }
}
