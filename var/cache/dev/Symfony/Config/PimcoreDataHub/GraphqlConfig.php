<?php

namespace Symfony\Config\PimcoreDataHub;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GraphqlConfig 
{
    private $notAllowedPolicy;
    private $outputCacheEnabled;
    private $outputCacheLifetime;
    private $_usedProperties = [];

    /**
     * throw exception = 1, return null = 2
     * @default 2
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function notAllowedPolicy($value): self
    {
        $this->_usedProperties['notAllowedPolicy'] = true;
        $this->notAllowedPolicy = $value;

        return $this;
    }

    /**
     * enables output cache for graphql responses. It is disabled by default
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function outputCacheEnabled($value): self
    {
        $this->_usedProperties['outputCacheEnabled'] = true;
        $this->outputCacheEnabled = $value;

        return $this;
    }

    /**
     * output cache in seconds. Default is 30 seconds
     * @default 30
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function outputCacheLifetime($value): self
    {
        $this->_usedProperties['outputCacheLifetime'] = true;
        $this->outputCacheLifetime = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('not_allowed_policy', $value)) {
            $this->_usedProperties['notAllowedPolicy'] = true;
            $this->notAllowedPolicy = $value['not_allowed_policy'];
            unset($value['not_allowed_policy']);
        }

        if (array_key_exists('output_cache_enabled', $value)) {
            $this->_usedProperties['outputCacheEnabled'] = true;
            $this->outputCacheEnabled = $value['output_cache_enabled'];
            unset($value['output_cache_enabled']);
        }

        if (array_key_exists('output_cache_lifetime', $value)) {
            $this->_usedProperties['outputCacheLifetime'] = true;
            $this->outputCacheLifetime = $value['output_cache_lifetime'];
            unset($value['output_cache_lifetime']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['notAllowedPolicy'])) {
            $output['not_allowed_policy'] = $this->notAllowedPolicy;
        }
        if (isset($this->_usedProperties['outputCacheEnabled'])) {
            $output['output_cache_enabled'] = $this->outputCacheEnabled;
        }
        if (isset($this->_usedProperties['outputCacheLifetime'])) {
            $output['output_cache_lifetime'] = $this->outputCacheLifetime;
        }

        return $output;
    }

}
