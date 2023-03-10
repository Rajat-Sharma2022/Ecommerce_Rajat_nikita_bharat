<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_Rest_DeletionsHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.rest.deletions_handler' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\RESTApi\DeletionsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/HandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/AbstractHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/RESTApi/DeletionsHandler.php';

        return $container->services['cmf.rest.deletions_handler'] = new \CustomerManagementFrameworkBundle\RESTApi\DeletionsHandler(($container->services['Knp\\Component\\Pager\\PaginatorInterface'] ?? $container->getPaginatorInterfaceService()));
    }
}
