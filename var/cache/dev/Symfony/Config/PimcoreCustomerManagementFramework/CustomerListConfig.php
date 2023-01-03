<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'CustomerList'.\DIRECTORY_SEPARATOR.'ExportersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'CustomerList'.\DIRECTORY_SEPARATOR.'FilterPropertiesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomerListConfig 
{
    private $exporters;
    private $filterProperties;
    private $_usedProperties = [];

    public function exporters(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerList\ExportersConfig
    {
        $this->_usedProperties['exporters'] = true;

        return $this->exporters[] = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerList\ExportersConfig($value);
    }

    public function filterProperties(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerList\FilterPropertiesConfig
    {
        if (null === $this->filterProperties) {
            $this->_usedProperties['filterProperties'] = true;
            $this->filterProperties = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerList\FilterPropertiesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "filterProperties()" has already been initialized. You cannot pass values the second time you call filterProperties().');
        }

        return $this->filterProperties;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('exporters', $value)) {
            $this->_usedProperties['exporters'] = true;
            $this->exporters = array_map(function ($v) { return new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerList\ExportersConfig($v); }, $value['exporters']);
            unset($value['exporters']);
        }

        if (array_key_exists('filter_properties', $value)) {
            $this->_usedProperties['filterProperties'] = true;
            $this->filterProperties = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerList\FilterPropertiesConfig($value['filter_properties']);
            unset($value['filter_properties']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['exporters'])) {
            $output['exporters'] = array_map(function ($v) { return $v->toArray(); }, $this->exporters);
        }
        if (isset($this->_usedProperties['filterProperties'])) {
            $output['filter_properties'] = $this->filterProperties->toArray();
        }

        return $output;
    }

}
