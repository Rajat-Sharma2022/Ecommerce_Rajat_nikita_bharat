<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EQJuTZQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eQJuTZQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eQJuTZQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'importDataExtractor' => ['privates', 'Pimcore\\Translation\\ImportDataExtractor\\ImportDataExtractorInterface', 'getImportDataExtractorInterfaceService', true],
        ], [
            'importDataExtractor' => 'Pimcore\\Translation\\ImportDataExtractor\\ImportDataExtractorInterface',
        ]);
    }
}