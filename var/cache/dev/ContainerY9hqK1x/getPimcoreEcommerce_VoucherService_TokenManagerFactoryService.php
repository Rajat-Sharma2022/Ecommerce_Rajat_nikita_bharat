<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreEcommerce_VoucherService_TokenManagerFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore_ecommerce.voucher_service.token_manager_factory' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\VoucherService\TokenManager\TokenManagerFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/VoucherService/TokenManager/TokenManagerFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/VoucherService/TokenManager/TokenManagerFactory.php';

        return $container->services['pimcore_ecommerce.voucher_service.token_manager_factory'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\VoucherService\TokenManager\TokenManagerFactory($container->parameters['pimcore_ecommerce.voucher_service.token_manager.mapping']);
    }
}