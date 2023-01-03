<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'IndexService'.\DIRECTORY_SEPARATOR.'TenantsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IndexServiceConfig 
{
    private $indexServiceId;
    private $defaultTenant;
    private $tenants;
    private $_usedProperties = [];

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\IndexService'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function indexServiceId($value): self
    {
        $this->_usedProperties['indexServiceId'] = true;
        $this->indexServiceId = $value;

        return $this;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTenant($value): self
    {
        $this->_usedProperties['defaultTenant'] = true;
        $this->defaultTenant = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig|$this
     */
    public function tenants(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants[$name] = $value;

            return $this;
        }

        if (!isset($this->tenants[$name]) || !$this->tenants[$name] instanceof \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants[$name] = new \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tenants()" has already been initialized. You cannot pass values the second time you call tenants().');
        }

        return $this->tenants[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('index_service_id', $value)) {
            $this->_usedProperties['indexServiceId'] = true;
            $this->indexServiceId = $value['index_service_id'];
            unset($value['index_service_id']);
        }

        if (array_key_exists('default_tenant', $value)) {
            $this->_usedProperties['defaultTenant'] = true;
            $this->defaultTenant = $value['default_tenant'];
            unset($value['default_tenant']);
        }

        if (array_key_exists('tenants', $value)) {
            $this->_usedProperties['tenants'] = true;
            $this->tenants = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig($v) : $v; }, $value['tenants']);
            unset($value['tenants']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['indexServiceId'])) {
            $output['index_service_id'] = $this->indexServiceId;
        }
        if (isset($this->_usedProperties['defaultTenant'])) {
            $output['default_tenant'] = $this->defaultTenant;
        }
        if (isset($this->_usedProperties['tenants'])) {
            $output['tenants'] = array_map(function ($v) { return $v instanceof \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig ? $v->toArray() : $v; }, $this->tenants);
        }

        return $output;
    }

}
