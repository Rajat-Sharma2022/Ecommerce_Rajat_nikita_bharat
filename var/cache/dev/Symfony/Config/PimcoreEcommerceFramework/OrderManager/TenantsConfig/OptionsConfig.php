<?php

namespace Symfony\Config\PimcoreEcommerceFramework\OrderManager\TenantsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $customerClass;
    private $orderClass;
    private $orderItemClass;
    private $listClass;
    private $listItemClass;
    private $parentOrderFolder;
    private $_usedProperties = [];

    /**
     * Pimcore object class for customers
     * @default '\\Pimcore\\Model\\DataObject\\Customer'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customerClass($value): self
    {
        $this->_usedProperties['customerClass'] = true;
        $this->customerClass = $value;

        return $this;
    }

    /**
     * Pimcore object class for orders
     * @default '\\Pimcore\\Model\\DataObject\\OnlineShopOrder'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function orderClass($value): self
    {
        $this->_usedProperties['orderClass'] = true;
        $this->orderClass = $value;

        return $this;
    }

    /**
     * Pimcore object class for order items
     * @default '\\Pimcore\\Model\\DataObject\\OnlineShopOrderItem'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function orderItemClass($value): self
    {
        $this->_usedProperties['orderItemClass'] = true;
        $this->orderItemClass = $value;

        return $this;
    }

    /**
     * Class for order listing
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\OrderManager\\Order\\Listing'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function listClass($value): self
    {
        $this->_usedProperties['listClass'] = true;
        $this->listClass = $value;

        return $this;
    }

    /**
     * Class for order item listing
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\OrderManager\\Order\\Listing\\Item'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function listItemClass($value): self
    {
        $this->_usedProperties['listItemClass'] = true;
        $this->listItemClass = $value;

        return $this;
    }

    /**
     * Default parent folder for new orders
     * @default '/order/%%Y/%%m/%%d'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parentOrderFolder($value): self
    {
        $this->_usedProperties['parentOrderFolder'] = true;
        $this->parentOrderFolder = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('customer_class', $value)) {
            $this->_usedProperties['customerClass'] = true;
            $this->customerClass = $value['customer_class'];
            unset($value['customer_class']);
        }

        if (array_key_exists('order_class', $value)) {
            $this->_usedProperties['orderClass'] = true;
            $this->orderClass = $value['order_class'];
            unset($value['order_class']);
        }

        if (array_key_exists('order_item_class', $value)) {
            $this->_usedProperties['orderItemClass'] = true;
            $this->orderItemClass = $value['order_item_class'];
            unset($value['order_item_class']);
        }

        if (array_key_exists('list_class', $value)) {
            $this->_usedProperties['listClass'] = true;
            $this->listClass = $value['list_class'];
            unset($value['list_class']);
        }

        if (array_key_exists('list_item_class', $value)) {
            $this->_usedProperties['listItemClass'] = true;
            $this->listItemClass = $value['list_item_class'];
            unset($value['list_item_class']);
        }

        if (array_key_exists('parent_order_folder', $value)) {
            $this->_usedProperties['parentOrderFolder'] = true;
            $this->parentOrderFolder = $value['parent_order_folder'];
            unset($value['parent_order_folder']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['customerClass'])) {
            $output['customer_class'] = $this->customerClass;
        }
        if (isset($this->_usedProperties['orderClass'])) {
            $output['order_class'] = $this->orderClass;
        }
        if (isset($this->_usedProperties['orderItemClass'])) {
            $output['order_item_class'] = $this->orderItemClass;
        }
        if (isset($this->_usedProperties['listClass'])) {
            $output['list_class'] = $this->listClass;
        }
        if (isset($this->_usedProperties['listItemClass'])) {
            $output['list_item_class'] = $this->listItemClass;
        }
        if (isset($this->_usedProperties['parentOrderFolder'])) {
            $output['parent_order_folder'] = $this->parentOrderFolder;
        }

        return $output;
    }

}
