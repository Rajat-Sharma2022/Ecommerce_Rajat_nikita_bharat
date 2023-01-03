<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EnvironmentConfig 
{
    private $environmentId;
    private $options;
    private $_usedProperties = [];

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\SessionEnvironment'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function environmentId($value): self
    {
        $this->_usedProperties['environmentId'] = true;
        $this->environmentId = $value;

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

    public function __construct(array $value = [])
    {
        if (array_key_exists('environment_id', $value)) {
            $this->_usedProperties['environmentId'] = true;
            $this->environmentId = $value['environment_id'];
            unset($value['environment_id']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['environmentId'])) {
            $output['environment_id'] = $this->environmentId;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }

        return $output;
    }

}
