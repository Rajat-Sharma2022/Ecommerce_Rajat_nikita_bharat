<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreEcommerce_CheckoutManager_Default_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore_ecommerce.checkout_manager.default.factory' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\CheckoutManagerFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/CheckoutManager/CheckoutManagerFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/CheckoutManager/CheckoutManagerFactory.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['pimcore_ecommerce.checkout_manager.default.factory'])) {
            return $container->privates['pimcore_ecommerce.checkout_manager.default.factory'];
        }
        $b = ($container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\OrderManager\\OrderManagerLocatorInterface'] ?? $container->load('getOrderManagerLocatorInterfaceService'));

        if (isset($container->privates['pimcore_ecommerce.checkout_manager.default.factory'])) {
            return $container->privates['pimcore_ecommerce.checkout_manager.default.factory'];
        }
        $c = ($container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\CommitOrderProcessorLocatorInterface'] ?? $container->load('getCommitOrderProcessorLocatorInterfaceService'));

        if (isset($container->privates['pimcore_ecommerce.checkout_manager.default.factory'])) {
            return $container->privates['pimcore_ecommerce.checkout_manager.default.factory'];
        }

        return $container->privates['pimcore_ecommerce.checkout_manager.default.factory'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\CheckoutManagerFactory(($container->services['pimcore_ecommerce.environment'] ?? $container->getPimcoreEcommerce_EnvironmentService()), $b, $c, ['deliveryaddress' => ['class' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\DeliveryAddress', 'options' => []], 'confirm' => ['class' => '\\App\\Ecommerce\\CheckoutManager\\Confirm', 'options' => []]], ($container->privates['pimcore_ecommerce.payment_manager.provider.paypal'] ?? $container->load('getPimcoreEcommerce_PaymentManager_Provider_PaypalService')), [], new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\V7\\HandlePendingPayments\\CancelPaymentOrRecreateOrderStrategy' => ['privates', 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\V7\\HandlePendingPayments\\CancelPaymentOrRecreateOrderStrategy', 'getCancelPaymentOrRecreateOrderStrategyService', true],
        ], [
            'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\V7\\HandlePendingPayments\\CancelPaymentOrRecreateOrderStrategy' => '?',
        ]), $a);
    }
}
