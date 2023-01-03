<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\CustomerList;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FilterPropertiesConfig 
{
    private $equals;
    private $search;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function equals($value): self
    {
        $this->_usedProperties['equals'] = true;
        $this->equals = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<array|ParamConfigurator> $value
     * @return $this
     */
    public function search($value): self
    {
        $this->_usedProperties['search'] = true;
        $this->search = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('equals', $value)) {
            $this->_usedProperties['equals'] = true;
            $this->equals = $value['equals'];
            unset($value['equals']);
        }

        if (array_key_exists('search', $value)) {
            $this->_usedProperties['search'] = true;
            $this->search = $value['search'];
            unset($value['search']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['equals'])) {
            $output['equals'] = $this->equals;
        }
        if (isset($this->_usedProperties['search'])) {
            $output['search'] = $this->search;
        }

        return $output;
    }

}
