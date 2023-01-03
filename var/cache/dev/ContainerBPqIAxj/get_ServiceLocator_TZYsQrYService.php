<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TZYsQrYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TZYsQrY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TZYsQrY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.cmf_webservice' => ['privates', 'security.event_dispatcher.cmf_webservice', 'getSecurity_EventDispatcher_CmfWebserviceService', true],
            'security.event_dispatcher.demo_frontend' => ['privates', 'security.event_dispatcher.demo_frontend', 'getSecurity_EventDispatcher_DemoFrontendService', false],
            'security.event_dispatcher.pimcore_admin' => ['privates', 'security.event_dispatcher.pimcore_admin', 'getSecurity_EventDispatcher_PimcoreAdminService', true],
            'security.event_dispatcher.pimcore_admin_webdav' => ['privates', 'security.event_dispatcher.pimcore_admin_webdav', 'getSecurity_EventDispatcher_PimcoreAdminWebdavService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.cmf_webservice' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.demo_frontend' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.pimcore_admin' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.pimcore_admin_webdav' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}