<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_DefaultPriceSystemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'app.default_price_system' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\AttributePriceSystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PriceSystem/PriceSystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PriceSystem/AbstractPriceSystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PriceSystem/CachingPriceSystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PriceSystem/CachingPriceSystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PriceSystem/AttributePriceSystem.php';

        return $container->privates['app.default_price_system'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\AttributePriceSystem(($container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\PricingManagerLocatorInterface'] ?? $container->load('getPricingManagerLocatorInterfaceService')), ($container->services['pimcore_ecommerce.environment'] ?? $container->getPimcoreEcommerce_EnvironmentService()), ['attribute_name' => 'price']);
    }
}
