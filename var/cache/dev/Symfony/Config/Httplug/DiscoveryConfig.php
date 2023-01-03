<?php

namespace Symfony\Config\Httplug;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DiscoveryConfig 
{
    private $client;
    private $asyncClient;
    private $_usedProperties = [];

    /**
     * Set to "auto" to see auto discovered client in the web profiler. If provided a service id for a client then this client will be found by auto discovery.
     * @default 'auto'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function client($value): self
    {
        $this->_usedProperties['client'] = true;
        $this->client = $value;

        return $this;
    }

    /**
     * Set to "auto" to see auto discovered client in the web profiler. If provided a service id for a client then this client will be found by auto discovery.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function asyncClient($value): self
    {
        $this->_usedProperties['asyncClient'] = true;
        $this->asyncClient = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }

        if (array_key_exists('async_client', $value)) {
            $this->_usedProperties['asyncClient'] = true;
            $this->asyncClient = $value['async_client'];
            unset($value['async_client']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client;
        }
        if (isset($this->_usedProperties['asyncClient'])) {
            $output['async_client'] = $this->asyncClient;
        }

        return $output;
    }

}
