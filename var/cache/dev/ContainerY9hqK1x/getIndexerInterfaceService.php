<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\SegmentAssignment\Indexer\IndexerInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\SegmentAssignment\Indexer\Indexer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentAssignment/Indexer/IndexerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentAssignment/Indexer/Indexer.php';

        return $container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\Indexer\\IndexerInterface'] = new \CustomerManagementFrameworkBundle\SegmentAssignment\Indexer\Indexer('plugin_cmf_segment_assignment', 'plugin_cmf_segment_assignment_index', 'plugin_cmf_segment_assignment_queue', ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\StoredFunctions\\StoredFunctionsInterface'] ?? ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\StoredFunctions\\StoredFunctionsInterface'] = new \CustomerManagementFrameworkBundle\SegmentAssignment\StoredFunctions\DefaultStoredFunctions())), ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\QueueBuilder\\QueueBuilderInterface'] ?? $container->load('getQueueBuilderInterfaceService')));
    }
}
