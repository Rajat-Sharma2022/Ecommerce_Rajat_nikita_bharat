<?php

namespace Symfony\Config\PimcoreEcommerceFramework\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'PricingRulesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'OrderListConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MenuConfig 
{
    private $pricingRules;
    private $orderList;
    private $_usedProperties = [];

    public function pricingRules(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\Pimcore\Menu\PricingRulesConfig
    {
        if (null === $this->pricingRules) {
            $this->_usedProperties['pricingRules'] = true;
            $this->pricingRules = new \Symfony\Config\PimcoreEcommerceFramework\Pimcore\Menu\PricingRulesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pricingRules()" has already been initialized. You cannot pass values the second time you call pricingRules().');
        }

        return $this->pricingRules;
    }

    public function orderList(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\Pimcore\Menu\OrderListConfig
    {
        if (null === $this->orderList) {
            $this->_usedProperties['orderList'] = true;
            $this->orderList = new \Symfony\Config\PimcoreEcommerceFramework\Pimcore\Menu\OrderListConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orderList()" has already been initialized. You cannot pass values the second time you call orderList().');
        }

        return $this->orderList;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('pricing_rules', $value)) {
            $this->_usedProperties['pricingRules'] = true;
            $this->pricingRules = new \Symfony\Config\PimcoreEcommerceFramework\Pimcore\Menu\PricingRulesConfig($value['pricing_rules']);
            unset($value['pricing_rules']);
        }

        if (array_key_exists('order_list', $value)) {
            $this->_usedProperties['orderList'] = true;
            $this->orderList = new \Symfony\Config\PimcoreEcommerceFramework\Pimcore\Menu\OrderListConfig($value['order_list']);
            unset($value['order_list']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['pricingRules'])) {
            $output['pricing_rules'] = $this->pricingRules->toArray();
        }
        if (isset($this->_usedProperties['orderList'])) {
            $output['order_list'] = $this->orderList->toArray();
        }

        return $output;
    }

}
