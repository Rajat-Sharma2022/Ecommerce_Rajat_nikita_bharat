<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_PotentialDuplicateItemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.potential_duplicate_item' autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Model\CustomerDuplicates\PotentialDuplicateItem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Model/CustomerDuplicates/PotentialDuplicateItemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Model/CustomerDuplicates/PotentialDuplicateItem.php';

        $container->factories['cmf.potential_duplicate_item'] = function () use ($container) {
            return new \CustomerManagementFrameworkBundle\Model\CustomerDuplicates\PotentialDuplicateItem();
        };

        return $container->factories['cmf.potential_duplicate_item']();
    }
}
