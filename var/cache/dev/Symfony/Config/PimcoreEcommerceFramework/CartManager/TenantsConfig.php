<?php

namespace Symfony\Config\PimcoreEcommerceFramework\CartManager;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'CartConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'PriceCalculatorConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TenantsConfig 
{
    private $cartManagerId;
    private $cart;
    private $priceCalculator;
    private $_usedProperties = [];

    /**
     * Service id of cart service
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\MultiCartManager'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cartManagerId($value): self
    {
        $this->_usedProperties['cartManagerId'] = true;
        $this->cartManagerId = $value;

        return $this;
    }

    public function cart(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\CartConfig
    {
        if (null === $this->cart) {
            $this->_usedProperties['cart'] = true;
            $this->cart = new \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\CartConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cart()" has already been initialized. You cannot pass values the second time you call cart().');
        }

        return $this->cart;
    }

    public function priceCalculator(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\PriceCalculatorConfig
    {
        if (null === $this->priceCalculator) {
            $this->_usedProperties['priceCalculator'] = true;
            $this->priceCalculator = new \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\PriceCalculatorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "priceCalculator()" has already been initialized. You cannot pass values the second time you call priceCalculator().');
        }

        return $this->priceCalculator;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cart_manager_id', $value)) {
            $this->_usedProperties['cartManagerId'] = true;
            $this->cartManagerId = $value['cart_manager_id'];
            unset($value['cart_manager_id']);
        }

        if (array_key_exists('cart', $value)) {
            $this->_usedProperties['cart'] = true;
            $this->cart = new \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\CartConfig($value['cart']);
            unset($value['cart']);
        }

        if (array_key_exists('price_calculator', $value)) {
            $this->_usedProperties['priceCalculator'] = true;
            $this->priceCalculator = new \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\PriceCalculatorConfig($value['price_calculator']);
            unset($value['price_calculator']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cartManagerId'])) {
            $output['cart_manager_id'] = $this->cartManagerId;
        }
        if (isset($this->_usedProperties['cart'])) {
            $output['cart'] = $this->cart->toArray();
        }
        if (isset($this->_usedProperties['priceCalculator'])) {
            $output['price_calculator'] = $this->priceCalculator->toArray();
        }

        return $output;
    }

}
