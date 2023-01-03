<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PricingManager'.\DIRECTORY_SEPARATOR.'TenantsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PricingManagerConfig 
{
    private $conditions;
    private $actions;
    private $tenants;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function conditions(string $name, $value): self
    {
        $this->_usedProperties['conditions'] = true;
        $this->conditions[$name] = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function actions(string $name, $value): self
    {
        $this->_usedProperties['actions'] = true;
        $this->actions[$name] = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig|$this
     */
    public function tenants(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants[$name] = $value;

            return $this;
        }

        if (!isset($this->tenants[$name]) || !$this->tenants[$name] instanceof \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants[$name] = new \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tenants()" has already been initialized. You cannot pass values the second time you call tenants().');
        }

        return $this->tenants[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('conditions', $value)) {
            $this->_usedProperties['conditions'] = true;
            $this->conditions = $value['conditions'];
            unset($value['conditions']);
        }

        if (array_key_exists('actions', $value)) {
            $this->_usedProperties['actions'] = true;
            $this->actions = $value['actions'];
            unset($value['actions']);
        }

        if (array_key_exists('tenants', $value)) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig($v) : $v; }, $value['tenants']);
            unset($value['tenants']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['conditions'])) {
            $output['conditions'] = $this->conditions;
        }
        if (isset($this->_usedProperties['actions'])) {
            $output['actions'] = $this->actions;
        }
        if (isset($this->_usedProperties['tenants'])) {
            $output['tenants'] = array_map(function ($v) { return $v instanceof \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig ? $v->toArray() : $v; }, $this->tenants);
        }

        return $output;
    }

}
