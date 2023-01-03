<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSegmentAssignerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\SegmentAssignment\SegmentAssigner\SegmentAssignerInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\SegmentAssignment\SegmentAssigner\SegmentAssigner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentAssignment/SegmentAssigner/SegmentAssignerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/SegmentAssignment/SegmentAssigner/SegmentAssigner.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\SegmentAssigner\\SegmentAssignerInterface'])) {
            return $container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\SegmentAssigner\\SegmentAssignerInterface'];
        }

        return $container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\SegmentAssigner\\SegmentAssignerInterface'] = new \CustomerManagementFrameworkBundle\SegmentAssignment\SegmentAssigner\SegmentAssigner('plugin_cmf_segment_assignment', 'plugin_cmf_segment_assignment_queue', 'plugin_cmf_segment_assignment_index', $a, ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\TypeMapper\\TypeMapperInterface'] ?? ($container->services['CustomerManagementFrameworkBundle\\SegmentAssignment\\TypeMapper\\TypeMapperInterface'] = new \CustomerManagementFrameworkBundle\SegmentAssignment\TypeMapper\TypeMapper())));
    }
}
