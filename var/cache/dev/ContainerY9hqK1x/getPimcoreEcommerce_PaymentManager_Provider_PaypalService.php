<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreEcommerce_PaymentManager_Provider_PaypalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore_ecommerce.payment_manager.provider.paypal' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\PayPalSmartPaymentButton
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PaymentManager/V7/Payment/PaymentInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/PaymentManager/Payment/AbstractPayment.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/payment-provider-paypal-smart-payment-button/src/PaymentManager/Payment/PayPalSmartPaymentButton.php';

        $container->privates['pimcore_ecommerce.payment_manager.provider.paypal'] = $instance = new \Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\PayPalSmartPaymentButton(['client_id' => $container->getEnv('paypal_client_id'), 'client_secret' => $container->getEnv('paypal_secret_id'), 'capture_strategy' => 'automatic', 'mode' => 'sandbox', 'shipping_preference' => 'NO_SHIPPING', 'user_action' => 'PAY_NOW'], ($container->services['pimcore_ecommerce.environment'] ?? $container->getPimcoreEcommerce_EnvironmentService()));

        $instance->setConfigurationKey('paypal');

        return $instance;
    }
}
