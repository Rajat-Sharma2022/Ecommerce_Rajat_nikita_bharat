<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig\Vcr;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NamingStrategyOptionsConfig 
{
    private $hashHeaders;
    private $hashBodyMethods;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function hashHeaders($value): self
    {
        $this->_usedProperties['hashHeaders'] = true;
        $this->hashHeaders = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function hashBodyMethods($value): self
    {
        $this->_usedProperties['hashBodyMethods'] = true;
        $this->hashBodyMethods = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('hash_headers', $value)) {
            $this->_usedProperties['hashHeaders'] = true;
            $this->hashHeaders = $value['hash_headers'];
            unset($value['hash_headers']);
        }

        if (array_key_exists('hash_body_methods', $value)) {
            $this->_usedProperties['hashBodyMethods'] = true;
            $this->hashBodyMethods = $value['hash_body_methods'];
            unset($value['hash_body_methods']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['hashHeaders'])) {
            $output['hash_headers'] = $this->hashHeaders;
        }
        if (isset($this->_usedProperties['hashBodyMethods'])) {
            $output['hash_body_methods'] = $this->hashBodyMethods;
        }

        return $output;
    }

}
