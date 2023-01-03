<?php

namespace Symfony\Config\PimcoreEcommerceFramework\FilterService;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'FilterTypesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TenantsConfig 
{
    private $enabled;
    private $serviceId;
    private $filterTypes;
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
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\FilterService\\FilterService'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serviceId($value): self
    {
        $this->_usedProperties['serviceId'] = true;
        $this->serviceId = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\PimcoreEcommerceFramework\FilterService\TenantsConfig\FilterTypesConfig|$this
     */
    public function filterTypes(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['filterTypes'] = true;
            $this->filterTypes[$name] = $value;

            return $this;
        }

        if (!isset($this->filterTypes[$name]) || !$this->filterTypes[$name] instanceof \Symfony\Config\PimcoreEcommerceFramework\FilterService\TenantsConfig\FilterTypesConfig) {
            $this->_usedProperties['filterTypes'] = true;
            $this->filterTypes[$name] = new \Symfony\Config\PimcoreEcommerceFramework\FilterService\TenantsConfig\FilterTypesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "filterTypes()" has already been initialized. You cannot pass values the second time you call filterTypes().');
        }

        return $this->filterTypes[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('service_id', $value)) {
            $this->_usedProperties['serviceId'] = true;
            $this->serviceId = $value['service_id'];
            unset($value['service_id']);
        }

        if (array_key_exists('filter_types', $value)) {
            $this->_usedProperties['filterTypes'] = true;
            $this->filterTypes = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\PimcoreEcommerceFramework\FilterService\TenantsConfig\FilterTypesConfig($v) : $v; }, $value['filter_types']);
            unset($value['filter_types']);
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
        if (isset($this->_usedProperties['serviceId'])) {
            $output['service_id'] = $this->serviceId;
        }
        if (isset($this->_usedProperties['filterTypes'])) {
            $output['filter_types'] = array_map(function ($v) { return $v instanceof \Symfony\Config\PimcoreEcommerceFramework\FilterService\TenantsConfig\FilterTypesConfig ? $v->toArray() : $v; }, $this->filterTypes);
        }

        return $output;
    }

}
