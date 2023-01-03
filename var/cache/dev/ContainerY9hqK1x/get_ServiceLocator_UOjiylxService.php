<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UOjiylxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uOjiylx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uOjiylx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formatter' => ['services', 'Pimcore\\Localization\\IntlFormatter', 'getIntlFormatterService', false],
            'paginator' => ['services', 'Knp\\Component\\Pager\\PaginatorInterface', 'getPaginatorInterfaceService', false],
        ], [
            'formatter' => 'Pimcore\\Localization\\IntlFormatter',
            'paginator' => 'Knp\\Component\\Pager\\PaginatorInterface',
        ]);
    }
}
