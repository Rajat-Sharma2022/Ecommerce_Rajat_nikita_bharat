<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_Document_Newsletter_Factory_SegmentAddressSourceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.document.newsletter.factory.segmentAddressSource' shared autowired service.
     *
     * @return \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Document/Newsletter/AddressSourceAdapterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Document/Newsletter/DefaultAddressSourceAdapterFactory.php';

        return $container->services['cmf.document.newsletter.factory.segmentAddressSource'] = new \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory('CustomerManagementFrameworkBundle\\Newsletter\\AddressSource\\SegmentAddressSource');
    }
}
