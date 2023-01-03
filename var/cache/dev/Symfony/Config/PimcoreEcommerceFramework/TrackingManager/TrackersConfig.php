<?php

namespace Symfony\Config\PimcoreEcommerceFramework\TrackingManager;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TrackersConfig'.\DIRECTORY_SEPARATOR.'TenantsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TrackersConfig 
{
    private $enabled;
    private $id;
    private $options;
    private $itemBuilderId;
    private $tenants;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Service id for tracker
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value = array (
    )): self
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    /**
     * Service id for item builder for tracker
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tracking\\TrackingItemBuilder'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function itemBuilderId($value): self
    {
        $this->_usedProperties['itemBuilderId'] = true;
        $this->itemBuilderId = $value;

        return $this;
    }

    public function tenants(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\TrackingManager\TrackersConfig\TenantsConfig
    {
        if (null === $this->tenants) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants = new \Symfony\Config\PimcoreEcommerceFramework\TrackingManager\TrackersConfig\TenantsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tenants()" has already been initialized. You cannot pass values the second time you call tenants().');
        }

        return $this->tenants;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if (array_key_exists('item_builder_id', $value)) {
            $this->_usedProperties['itemBuilderId'] = true;
            $this->itemBuilderId = $value['item_builder_id'];
            unset($value['item_builder_id']);
        }

        if (array_key_exists('tenants', $value)) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants = new \Symfony\Config\PimcoreEcommerceFramework\TrackingManager\TrackersConfig\TenantsConfig($value['tenants']);
            unset($value['tenants']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
        if (isset($this->_usedProperties['itemBuilderId'])) {
            $output['item_builder_id'] = $this->itemBuilderId;
        }
        if (isset($this->_usedProperties['tenants'])) {
            $output['tenants'] = $this->tenants->toArray();
        }

        return $output;
    }

}
