<?php

namespace Symfony\Config\Httplug\Plugins;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ErrorConfig 
{
    private $enabled;
    private $onlyServerException;
    private $_usedProperties = [];

    /**
     * @default false
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
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function onlyServerException($value): self
    {
        $this->_usedProperties['onlyServerException'] = true;
        $this->onlyServerException = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('only_server_exception', $value)) {
            $this->_usedProperties['onlyServerException'] = true;
            $this->onlyServerException = $value['only_server_exception'];
            unset($value['only_server_exception']);
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
        if (isset($this->_usedProperties['onlyServerException'])) {
            $output['only_server_exception'] = $this->onlyServerException;
        }

        return $output;
    }

}
