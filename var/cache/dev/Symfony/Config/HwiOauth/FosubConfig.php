<?php

namespace Symfony\Config\HwiOauth;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FosubConfig 
{
    private $usernameIterations;
    private $properties;
    private $_usedProperties = [];

    /**
     * @default 5
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function usernameIterations($value): self
    {
        $this->_usedProperties['usernameIterations'] = true;
        $this->usernameIterations = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function properties(string $name, $value): self
    {
        $this->_usedProperties['properties'] = true;
        $this->properties[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('username_iterations', $value)) {
            $this->_usedProperties['usernameIterations'] = true;
            $this->usernameIterations = $value['username_iterations'];
            unset($value['username_iterations']);
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
        if (isset($this->_usedProperties['usernameIterations'])) {
            $output['username_iterations'] = $this->usernameIterations;
        }
        if (isset($this->_usedProperties['properties'])) {
            $output['properties'] = $this->properties;
        }

        return $output;
    }

}
