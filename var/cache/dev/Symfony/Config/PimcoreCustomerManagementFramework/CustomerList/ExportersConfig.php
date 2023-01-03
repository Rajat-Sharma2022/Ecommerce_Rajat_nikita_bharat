<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\CustomerList;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExportersConfig 
{
    private $name;
    private $icon;
    private $exporter;
    private $exportSegmentsAsColumns;
    private $properties;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function icon($value): self
    {
        $this->_usedProperties['icon'] = true;
        $this->icon = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exporter($value): self
    {
        $this->_usedProperties['exporter'] = true;
        $this->exporter = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function exportSegmentsAsColumns($value): self
    {
        $this->_usedProperties['exportSegmentsAsColumns'] = true;
        $this->exportSegmentsAsColumns = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function properties($value): self
    {
        $this->_usedProperties['properties'] = true;
        $this->properties = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('icon', $value)) {
            $this->_usedProperties['icon'] = true;
            $this->icon = $value['icon'];
            unset($value['icon']);
        }

        if (array_key_exists('exporter', $value)) {
            $this->_usedProperties['exporter'] = true;
            $this->exporter = $value['exporter'];
            unset($value['exporter']);
        }

        if (array_key_exists('exportSegmentsAsColumns', $value)) {
            $this->_usedProperties['exportSegmentsAsColumns'] = true;
            $this->exportSegmentsAsColumns = $value['exportSegmentsAsColumns'];
            unset($value['exportSegmentsAsColumns']);
        }

        if (array_key_exists('properties', $value)) {
            $this->_usedProperties['properties'] = true;
            $this->properties = $value['properties'];
            unset($value['properties']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['icon'])) {
            $output['icon'] = $this->icon;
        }
        if (isset($this->_usedProperties['exporter'])) {
            $output['exporter'] = $this->exporter;
        }
        if (isset($this->_usedProperties['exportSegmentsAsColumns'])) {
            $output['exportSegmentsAsColumns'] = $this->exportSegmentsAsColumns;
        }
        if (isset($this->_usedProperties['properties'])) {
            $output['properties'] = $this->properties;
        }

        return $output;
    }

}
