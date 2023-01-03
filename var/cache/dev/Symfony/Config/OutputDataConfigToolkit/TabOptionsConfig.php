<?php

namespace Symfony\Config\OutputDataConfigToolkit;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TabOptionsConfig 
{
    private $orderByName;
    private $defaultClasses;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function orderByName($value): self
    {
        $this->_usedProperties['orderByName'] = true;
        $this->orderByName = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function defaultClasses($value): self
    {
        $this->_usedProperties['defaultClasses'] = true;
        $this->defaultClasses = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('order_by_name', $value)) {
            $this->_usedProperties['orderByName'] = true;
            $this->orderByName = $value['order_by_name'];
            unset($value['order_by_name']);
        }

        if (array_key_exists('default_classes', $value)) {
            $this->_usedProperties['defaultClasses'] = true;
            $this->defaultClasses = $value['default_classes'];
            unset($value['default_classes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['orderByName'])) {
            $output['order_by_name'] = $this->orderByName;
        }
        if (isset($this->_usedProperties['defaultClasses'])) {
            $output['default_classes'] = $this->defaultClasses;
        }

        return $output;
    }

}
