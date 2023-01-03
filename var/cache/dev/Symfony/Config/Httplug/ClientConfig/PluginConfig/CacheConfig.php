<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'ConfigConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CacheConfig 
{
    private $enabled;
    private $cachePool;
    private $streamFactory;
    private $config;
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
     * This must be a service id to a service implementing Psr\Cache\CacheItemPoolInterface
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cachePool($value): self
    {
        $this->_usedProperties['cachePool'] = true;
        $this->cachePool = $value;

        return $this;
    }

    /**
     * This must be a service id to a service implementing Http\Message\StreamFactory
     * @default 'httplug.stream_factory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function streamFactory($value): self
    {
        $this->_usedProperties['streamFactory'] = true;
        $this->streamFactory = $value;

        return $this;
    }

    public function config(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\Cache\ConfigConfig
    {
        if (null === $this->config) {
            $this->_usedProperties['config'] = true;
            $this->config = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\Cache\ConfigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "config()" has already been initialized. You cannot pass values the second time you call config().');
        }

        return $this->config;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('cache_pool', $value)) {
            $this->_usedProperties['cachePool'] = true;
            $this->cachePool = $value['cache_pool'];
            unset($value['cache_pool']);
        }

        if (array_key_exists('stream_factory', $value)) {
            $this->_usedProperties['streamFactory'] = true;
            $this->streamFactory = $value['stream_factory'];
            unset($value['stream_factory']);
        }

        if (array_key_exists('config', $value)) {
            $this->_usedProperties['config'] = true;
            $this->config = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\Cache\ConfigConfig($value['config']);
            unset($value['config']);
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
        if (isset($this->_usedProperties['cachePool'])) {
            $output['cache_pool'] = $this->cachePool;
        }
        if (isset($this->_usedProperties['streamFactory'])) {
            $output['stream_factory'] = $this->streamFactory;
        }
        if (isset($this->_usedProperties['config'])) {
            $output['config'] = $this->config->toArray();
        }

        return $output;
    }

}
