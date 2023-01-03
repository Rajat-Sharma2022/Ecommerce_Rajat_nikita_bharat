<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_SegmentManager_SegmentMergerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.segment_manager.segment_merger' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\SegmentManager\SegmentMerger\DefaultSegmentMerger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentManager/SegmentMerger/SegmentMergerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentManager/SegmentMerger/DefaultSegmentMerger.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentManager/SegmentMerger/DefaultSegmentMerger/MetadataFiller.php';

        return $container->services['cmf.segment_manager.segment_merger'] = new \CustomerManagementFrameworkBundle\SegmentManager\SegmentMerger\DefaultSegmentMerger(($container->services['CustomerManagementFrameworkBundle\\CustomerSaveManager\\CustomerSaveManagerInterface'] ?? $container->getCustomerSaveManagerInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentManagerInterface'] ?? $container->getSegmentManagerInterfaceService()), ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentMerger\\DefaultSegmentMerger\\MetadataFiller'] ?? ($container->services['CustomerManagementFrameworkBundle\\SegmentManager\\SegmentMerger\\DefaultSegmentMerger\\MetadataFiller'] = new \CustomerManagementFrameworkBundle\SegmentManager\SegmentMerger\DefaultSegmentMerger\MetadataFiller())));
    }
}