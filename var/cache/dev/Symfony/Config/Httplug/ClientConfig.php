<?php

namespace Symfony\Config\Httplug;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ClientConfig'.\DIRECTORY_SEPARATOR.'PluginConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ClientConfig 
{
    private $factory;
    private $service;
    private $public;
    private $flexibleClient;
    private $httpMethodsClient;
    private $batchClient;
    private $config;
    private $plugins;
    private $_usedProperties = [];

    /**
     * The service id of a factory to use when creating the adapter.
     * @default 'httplug.factory.auto'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factory($value): self
    {
        $this->_usedProperties['factory'] = true;
        $this->factory = $value;

        return $this;
    }

    /**
     * The service id of the client to use.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;

        return $this;
    }

    /**
     * Set to true if you really cannot use dependency injection and need to make the client service public.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function public($value): self
    {
        $this->_usedProperties['public'] = true;
        $this->public = $value;

        return $this;
    }

    /**
     * Set to true to get the client wrapped in a FlexibleHttpClient which emulates async or sync behavior.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function flexibleClient($value): self
    {
        $this->_usedProperties['flexibleClient'] = true;
        $this->flexibleClient = $value;

        return $this;
    }

    /**
     * Set to true to get the client wrapped in a HttpMethodsClient which emulates provides functions for HTTP verbs.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function httpMethodsClient($value): self
    {
        $this->_usedProperties['httpMethodsClient'] = true;
        $this->httpMethodsClient = $value;

        return $this;
    }

    /**
     * Set to true to get the client wrapped in a BatchClient which allows you to send multiple request at the same time.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function batchClient($value): self
    {
        $this->_usedProperties['batchClient'] = true;
        $this->batchClient = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function config($value = array (
    )): self
    {
        $this->_usedProperties['config'] = true;
        $this->config = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\Httplug\ClientConfig\PluginConfig|$this
     */
    public function plugin($value = [])
    {
        $this->_usedProperties['plugins'] = true;
        if (!\is_array($value)) {
            $this->plugins[] = $value;

            return $this;
        }

        return $this->plugins[] = new \Symfony\Config\Httplug\ClientConfig\PluginConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('factory', $value)) {
            $this->_usedProperties['factory'] = true;
            $this->factory = $value['factory'];
            unset($value['factory']);
        }

        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }

        if (array_key_exists('public', $value)) {
            $this->_usedProperties['public'] = true;
            $this->public = $value['public'];
            unset($value['public']);
        }

        if (array_key_exists('flexible_client', $value)) {
            $this->_usedProperties['flexibleClient'] = true;
            $this->flexibleClient = $value['flexible_client'];
            unset($value['flexible_client']);
        }

        if (array_key_exists('http_methods_client', $value)) {
            $this->_usedProperties['httpMethodsClient'] = true;
            $this->httpMethodsClient = $value['http_methods_client'];
            unset($value['http_methods_client']);
        }

        if (array_key_exists('batch_client', $value)) {
            $this->_usedProperties['batchClient'] = true;
            $this->batchClient = $value['batch_client'];
            unset($value['batch_client']);
        }

        if (array_key_exists('config', $value)) {
            $this->_usedProperties['config'] = true;
            $this->config = $value['config'];
            unset($value['config']);
        }

        if (array_key_exists('plugins', $value)) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Httplug\ClientConfig\PluginConfig($v) : $v; }, $value['plugins']);
            unset($value['plugins']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['factory'])) {
            $output['factory'] = $this->factory;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['public'])) {
            $output['public'] = $this->public;
        }
        if (isset($this->_usedProperties['flexibleClient'])) {
            $output['flexible_client'] = $this->flexibleClient;
        }
        if (isset($this->_usedProperties['httpMethodsClient'])) {
            $output['http_methods_client'] = $this->httpMethodsClient;
        }
        if (isset($this->_usedProperties['batchClient'])) {
            $output['batch_client'] = $this->batchClient;
        }
        if (isset($this->_usedProperties['config'])) {
            $output['config'] = $this->config;
        }
        if (isset($this->_usedProperties['plugins'])) {
            $output['plugins'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Httplug\ClientConfig\PluginConfig ? $v->toArray() : $v; }, $this->plugins);
        }

        return $output;
    }

}
