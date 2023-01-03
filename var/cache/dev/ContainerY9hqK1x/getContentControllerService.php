<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ContentController' shared autowired service.
     *
     * @return \App\Controller\ContentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ContentController.php';

        $container->services['App\\Controller\\ContentController'] = $instance = new \App\Controller\ContentController();

        $instance->setContainer(($container->privates['.service_locator.Z3eEsyj'] ?? $container->load('get_ServiceLocator_Z3eEsyjService'))->withContext('App\\Controller\\ContentController', $container));

        return $instance;
    }
}