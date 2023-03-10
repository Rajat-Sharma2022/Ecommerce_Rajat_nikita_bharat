<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAbsoluteURLProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Sitemaps\Processors\AbsoluteURLProcessor' shared autowired service.
     *
     * @return \App\Sitemaps\Processors\AbsoluteURLProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Sitemap/Element/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sitemaps/Processors/AbsoluteURLProcessor.php';

        return $container->privates['App\\Sitemaps\\Processors\\AbsoluteURLProcessor'] = new \App\Sitemaps\Processors\AbsoluteURLProcessor(($container->privates['Pimcore\\Sitemap\\UrlGenerator'] ?? $container->load('getUrlGeneratorService')));
    }
}
