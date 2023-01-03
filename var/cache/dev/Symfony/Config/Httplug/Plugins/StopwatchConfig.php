<?php

namespace Symfony\Config\Httplug\Plugins;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StopwatchConfig 
{
    private $enabled;
    private $stopwatch;
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
     * This must be a service id to a service extending Symfony\Component\Stopwatch\Stopwatch
     * @default 'debug.stopwatch'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function stopwatch($value): self
    {
        $this->_usedProperties['stopwatch'] = true;
        $this->stopwatch = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('stopwatch', $value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = $value['stopwatch'];
            unset($value['stopwatch']);
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
        if (isset($this->_usedProperties['stopwatch'])) {
            $output['stopwatch'] = $this->stopwatch;
        }

        return $output;
    }

}
