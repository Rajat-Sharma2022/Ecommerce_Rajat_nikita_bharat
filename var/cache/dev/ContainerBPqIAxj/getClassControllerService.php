<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClassControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'OutputDataConfigToolkitBundle\Controller\ClassController' shared autowired service.
     *
     * @return \OutputDataConfigToolkitBundle\Controller\ClassController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/DoubleAuthenticationControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/output-data-config-toolkit-bundle/src/Controller/ClassController.php';

        $container->services['OutputDataConfigToolkitBundle\\Controller\\ClassController'] = $instance = new \OutputDataConfigToolkitBundle\Controller\ClassController();

        $instance->setClassificationDisplayMode('none');
        $instance->setContainer(($container->privates['.service_locator.oafe0zm'] ?? $container->load('get_ServiceLocator_Oafe0zmService'))->withContext('OutputDataConfigToolkitBundle\\Controller\\ClassController', $container));

        return $instance;
    }
}
