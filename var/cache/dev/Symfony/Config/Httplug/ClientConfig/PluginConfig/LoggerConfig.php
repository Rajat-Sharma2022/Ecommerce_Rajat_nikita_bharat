<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LoggerConfig 
{
    private $enabled;
    private $logger;
    private $formatter;
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
     * This must be a service id to a service implementing Psr\Log\LoggerInterface
     * @default 'logger'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logger($value): self
    {
        $this->_usedProperties['logger'] = true;
        $this->logger = $value;

        return $this;
    }

    /**
     * This must be a service id to a service implementing Http\Message\Formatter
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formatter($value): self
    {
        $this->_usedProperties['formatter'] = true;
        $this->formatter = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value['logger'];
            unset($value['logger']);
        }

        if (array_key_exists('formatter', $value)) {
            $this->_usedProperties['formatter'] = true;
            $this->formatter = $value['formatter'];
            unset($value['formatter']);
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
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger;
        }
        if (isset($this->_usedProperties['formatter'])) {
            $output['formatter'] = $this->formatter;
        }

        return $output;
    }

}
