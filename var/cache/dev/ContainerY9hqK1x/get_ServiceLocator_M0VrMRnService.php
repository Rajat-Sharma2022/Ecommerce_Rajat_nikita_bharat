<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M0VrMRnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M0VrMRn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M0VrMRn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'newsLinkGenerator' => ['services', 'App\\Website\\LinkGenerator\\NewsLinkGenerator', 'getNewsLinkGeneratorService', false],
        ], [
            'newsLinkGenerator' => 'App\\Website\\LinkGenerator\\NewsLinkGenerator',
        ]);
    }
}
