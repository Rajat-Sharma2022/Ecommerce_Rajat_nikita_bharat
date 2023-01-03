<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'PimcoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'FactoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'EnvironmentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'CartManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'OrderManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'PricingManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'PriceSystemsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'AvailabilitySystemsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'CheckoutManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'PaymentManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'IndexServiceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'FilterServiceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'VoucherServiceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'OfferToolConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreEcommerceFramework'.\DIRECTORY_SEPARATOR.'TrackingManagerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreEcommerceFrameworkConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $decimalScale;
    private $pimcore;
    private $factory;
    private $environment;
    private $cartManager;
    private $orderManager;
    private $pricingManager;
    private $priceSystems;
    private $availabilitySystems;
    private $checkoutManager;
    private $paymentManager;
    private $indexService;
    private $filterService;
    private $voucherService;
    private $offerTool;
    private $trackingManager;
    private $_usedProperties = [];

    /**
     * Default scale used for Decimal objects
     * @default 4
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function decimalScale($value): self
    {
        $this->_usedProperties['decimalScale'] = true;
        $this->decimalScale = $value;

        return $this;
    }

    public function pimcore(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\PimcoreConfig
    {
        if (null === $this->pimcore) {
            $this->_usedProperties['pimcore'] = true;
            $this->pimcore = new \Symfony\Config\PimcoreEcommerceFramework\PimcoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pimcore()" has already been initialized. You cannot pass values the second time you call pimcore().');
        }

        return $this->pimcore;
    }

    public function factory(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\FactoryConfig
    {
        if (null === $this->factory) {
            $this->_usedProperties['factory'] = true;
            $this->factory = new \Symfony\Config\PimcoreEcommerceFramework\FactoryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "factory()" has already been initialized. You cannot pass values the second time you call factory().');
        }

        return $this->factory;
    }

    public function environment(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\EnvironmentConfig
    {
        if (null === $this->environment) {
            $this->_usedProperties['environment'] = true;
            $this->environment = new \Symfony\Config\PimcoreEcommerceFramework\EnvironmentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "environment()" has already been initialized. You cannot pass values the second time you call environment().');
        }

        return $this->environment;
    }

    public function cartManager(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CartManagerConfig
    {
        if (null === $this->cartManager) {
            $this->_usedProperties['cartManager'] = true;
            $this->cartManager = new \Symfony\Config\PimcoreEcommerceFramework\CartManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cartManager()" has already been initialized. You cannot pass values the second time you call cartManager().');
        }

        return $this->cartManager;
    }

    public function orderManager(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\OrderManagerConfig
    {
        if (null === $this->orderManager) {
            $this->_usedProperties['orderManager'] = true;
            $this->orderManager = new \Symfony\Config\PimcoreEcommerceFramework\OrderManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orderManager()" has already been initialized. You cannot pass values the second time you call orderManager().');
        }

        return $this->orderManager;
    }

    public function pricingManager(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\PricingManagerConfig
    {
        if (null === $this->pricingManager) {
            $this->_usedProperties['pricingManager'] = true;
            $this->pricingManager = new \Symfony\Config\PimcoreEcommerceFramework\PricingManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pricingManager()" has already been initialized. You cannot pass values the second time you call pricingManager().');
        }

        return $this->pricingManager;
    }

    /**
     * @return \Symfony\Config\PimcoreEcommerceFramework\PriceSystemsConfig|$this
     */
    public function priceSystems(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['priceSystems'] = true;
            $this->priceSystems[$name] = $value;

            return $this;
        }

        if (!isset($this->priceSystems[$name]) || !$this->priceSystems[$name] instanceof \Symfony\Config\PimcoreEcommerceFramework\PriceSystemsConfig) {
            $this->_usedProperties['priceSystems'] = true;
            $this->priceSystems[$name] = new \Symfony\Config\PimcoreEcommerceFramework\PriceSystemsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "priceSystems()" has already been initialized. You cannot pass values the second time you call priceSystems().');
        }

        return $this->priceSystems[$name];
    }

    /**
     * @return \Symfony\Config\PimcoreEcommerceFramework\AvailabilitySystemsConfig|$this
     */
    public function availabilitySystems(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['availabilitySystems'] = true;
            $this->availabilitySystems[$name] = $value;

            return $this;
        }

        if (!isset($this->availabilitySystems[$name]) || !$this->availabilitySystems[$name] instanceof \Symfony\Config\PimcoreEcommerceFramework\AvailabilitySystemsConfig) {
            $this->_usedProperties['availabilitySystems'] = true;
            $this->availabilitySystems[$name] = new \Symfony\Config\PimcoreEcommerceFramework\AvailabilitySystemsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "availabilitySystems()" has already been initialized. You cannot pass values the second time you call availabilitySystems().');
        }

        return $this->availabilitySystems[$name];
    }

    public function checkoutManager(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CheckoutManagerConfig
    {
        if (null === $this->checkoutManager) {
            $this->_usedProperties['checkoutManager'] = true;
            $this->checkoutManager = new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "checkoutManager()" has already been initialized. You cannot pass values the second time you call checkoutManager().');
        }

        return $this->checkoutManager;
    }

    public function paymentManager(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\PaymentManagerConfig
    {
        if (null === $this->paymentManager) {
            $this->_usedProperties['paymentManager'] = true;
            $this->paymentManager = new \Symfony\Config\PimcoreEcommerceFramework\PaymentManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "paymentManager()" has already been initialized. You cannot pass values the second time you call paymentManager().');
        }

        return $this->paymentManager;
    }

    public function indexService(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\IndexServiceConfig
    {
        if (null === $this->indexService) {
            $this->_usedProperties['indexService'] = true;
            $this->indexService = new \Symfony\Config\PimcoreEcommerceFramework\IndexServiceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "indexService()" has already been initialized. You cannot pass values the second time you call indexService().');
        }

        return $this->indexService;
    }

    public function filterService(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\FilterServiceConfig
    {
        if (null === $this->filterService) {
            $this->_usedProperties['filterService'] = true;
            $this->filterService = new \Symfony\Config\PimcoreEcommerceFramework\FilterServiceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "filterService()" has already been initialized. You cannot pass values the second time you call filterService().');
        }

        return $this->filterService;
    }

    public function voucherService(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\VoucherServiceConfig
    {
        if (null === $this->voucherService) {
            $this->_usedProperties['voucherService'] = true;
            $this->voucherService = new \Symfony\Config\PimcoreEcommerceFramework\VoucherServiceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "voucherService()" has already been initialized. You cannot pass values the second time you call voucherService().');
        }

        return $this->voucherService;
    }

    public function offerTool(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\OfferToolConfig
    {
        if (null === $this->offerTool) {
            $this->_usedProperties['offerTool'] = true;
            $this->offerTool = new \Symfony\Config\PimcoreEcommerceFramework\OfferToolConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "offerTool()" has already been initialized. You cannot pass values the second time you call offerTool().');
        }

        return $this->offerTool;
    }

    public function trackingManager(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\TrackingManagerConfig
    {
        if (null === $this->trackingManager) {
            $this->_usedProperties['trackingManager'] = true;
            $this->trackingManager = new \Symfony\Config\PimcoreEcommerceFramework\TrackingManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "trackingManager()" has already been initialized. You cannot pass values the second time you call trackingManager().');
        }

        return $this->trackingManager;
    }

    public function getExtensionAlias(): string
    {
        return 'pimcore_ecommerce_framework';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('decimal_scale', $value)) {
            $this->_usedProperties['decimalScale'] = true;
            $this->decimalScale = $value['decimal_scale'];
            unset($value['decimal_scale']);
        }

        if (array_key_exists('pimcore', $value)) {
            $this->_usedProperties['pimcore'] = true;
            $this->pimcore = new \Symfony\Config\PimcoreEcommerceFramework\PimcoreConfig($value['pimcore']);
            unset($value['pimcore']);
        }

        if (array_key_exists('factory', $value)) {
            $this->_usedProperties['factory'] = true;
            $this->factory = new \Symfony\Config\PimcoreEcommerceFramework\FactoryConfig($value['factory']);
            unset($value['factory']);
        }

        if (array_key_exists('environment', $value)) {
            $this->_usedProperties['environment'] = true;
            $this->environment = new \Symfony\Config\PimcoreEcommerceFramework\EnvironmentConfig($value['environment']);
            unset($value['environment']);
        }

        if (array_key_exists('cart_manager', $value)) {
            $this->_usedProperties['cartManager'] = true;
            $this->cartManager = new \Symfony\Config\PimcoreEcommerceFramework\CartManagerConfig($value['cart_manager']);
            unset($value['cart_manager']);
        }

        if (array_key_exists('order_manager', $value)) {
            $this->_usedProperties['orderManager'] = true;
            $this->orderManager = new \Symfony\Config\PimcoreEcommerceFramework\OrderManagerConfig($value['order_manager']);
            unset($value['order_manager']);
        }

        if (array_key_exists('pricing_manager', $value)) {
            $this->_usedProperties['pricingManager'] = true;
            $this->pricingManager = new \Symfony\Config\PimcoreEcommerceFramework\PricingManagerConfig($value['pricing_manager']);
            unset($value['pricing_manager']);
        }

        if (array_key_exists('price_systems', $value)) {
            $this->_usedProperties['priceSystems'] = true;
            $this->priceSystems = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\PimcoreEcommerceFramework\PriceSystemsConfig($v) : $v; }, $value['price_systems']);
            unset($value['price_systems']);
        }

        if (array_key_exists('availability_systems', $value)) {
            $this->_usedProperties['availabilitySystems'] = true;
            $this->availabilitySystems = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\PimcoreEcommerceFramework\AvailabilitySystemsConfig($v) : $v; }, $value['availability_systems']);
            unset($value['availability_systems']);
        }

        if (array_key_exists('checkout_manager', $value)) {
            $this->_usedProperties['checkoutManager'] = true;
            $this->checkoutManager = new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManagerConfig($value['checkout_manager']);
            unset($value['checkout_manager']);
        }

        if (array_key_exists('payment_manager', $value)) {
            $this->_usedProperties['paymentManager'] = true;
            $this->paymentManager = new \Symfony\Config\PimcoreEcommerceFramework\PaymentManagerConfig($value['payment_manager']);
            unset($value['payment_manager']);
        }

        if (array_key_exists('index_service', $value)) {
            $this->_usedProperties['indexService'] = true;
            $this->indexService = new \Symfony\Config\PimcoreEcommerceFramework\IndexServiceConfig($value['index_service']);
            unset($value['index_service']);
        }

        if (array_key_exists('filter_service', $value)) {
            $this->_usedProperties['filterService'] = true;
            $this->filterService = new \Symfony\Config\PimcoreEcommerceFramework\FilterServiceConfig($value['filter_service']);
            unset($value['filter_service']);
        }

        if (array_key_exists('voucher_service', $value)) {
            $this->_usedProperties['voucherService'] = true;
            $this->voucherService = new \Symfony\Config\PimcoreEcommerceFramework\VoucherServiceConfig($value['voucher_service']);
            unset($value['voucher_service']);
        }

        if (array_key_exists('offer_tool', $value)) {
            $this->_usedProperties['offerTool'] = true;
            $this->offerTool = new \Symfony\Config\PimcoreEcommerceFramework\OfferToolConfig($value['offer_tool']);
            unset($value['offer_tool']);
        }

        if (array_key_exists('tracking_manager', $value)) {
            $this->_usedProperties['trackingManager'] = true;
            $this->trackingManager = new \Symfony\Config\PimcoreEcommerceFramework\TrackingManagerConfig($value['tracking_manager']);
            unset($value['tracking_manager']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['decimalScale'])) {
            $output['decimal_scale'] = $this->decimalScale;
        }
        if (isset($this->_usedProperties['pimcore'])) {
            $output['pimcore'] = $this->pimcore->toArray();
        }
        if (isset($this->_usedProperties['factory'])) {
            $output['factory'] = $this->factory->toArray();
        }
        if (isset($this->_usedProperties['environment'])) {
            $output['environment'] = $this->environment->toArray();
        }
        if (isset($this->_usedProperties['cartManager'])) {
            $output['cart_manager'] = $this->cartManager->toArray();
        }
        if (isset($this->_usedProperties['orderManager'])) {
            $output['order_manager'] = $this->orderManager->toArray();
        }
        if (isset($this->_usedProperties['pricingManager'])) {
            $output['pricing_manager'] = $this->pricingManager->toArray();
        }
        if (isset($this->_usedProperties['priceSystems'])) {
            $output['price_systems'] = array_map(function ($v) { return $v instanceof \Symfony\Config\PimcoreEcommerceFramework\PriceSystemsConfig ? $v->toArray() : $v; }, $this->priceSystems);
        }
        if (isset($this->_usedProperties['availabilitySystems'])) {
            $output['availability_systems'] = array_map(function ($v) { return $v instanceof \Symfony\Config\PimcoreEcommerceFramework\AvailabilitySystemsConfig ? $v->toArray() : $v; }, $this->availabilitySystems);
        }
        if (isset($this->_usedProperties['checkoutManager'])) {
            $output['checkout_manager'] = $this->checkoutManager->toArray();
        }
        if (isset($this->_usedProperties['paymentManager'])) {
            $output['payment_manager'] = $this->paymentManager->toArray();
        }
        if (isset($this->_usedProperties['indexService'])) {
            $output['index_service'] = $this->indexService->toArray();
        }
        if (isset($this->_usedProperties['filterService'])) {
            $output['filter_service'] = $this->filterService->toArray();
        }
        if (isset($this->_usedProperties['voucherService'])) {
            $output['voucher_service'] = $this->voucherService->toArray();
        }
        if (isset($this->_usedProperties['offerTool'])) {
            $output['offer_tool'] = $this->offerTool->toArray();
        }
        if (isset($this->_usedProperties['trackingManager'])) {
            $output['tracking_manager'] = $this->trackingManager->toArray();
        }

        return $output;
    }

}
