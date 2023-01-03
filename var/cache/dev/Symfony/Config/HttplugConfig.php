<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Httplug'.\DIRECTORY_SEPARATOR.'ClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Httplug'.\DIRECTORY_SEPARATOR.'PluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Httplug'.\DIRECTORY_SEPARATOR.'MainAliasConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Httplug'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Httplug'.\DIRECTORY_SEPARATOR.'ProfilingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Httplug'.\DIRECTORY_SEPARATOR.'DiscoveryConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttplugConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $clients;
    private $plugins;
    private $defaultClientAutowiring;
    private $mainAlias;
    private $classes;
    private $profiling;
    private $discovery;
    private $_usedProperties = [];

    public function client(string $name, array $value = []): \Symfony\Config\Httplug\ClientConfig
    {
        if (!isset($this->clients[$name])) {
            $this->_usedProperties['clients'] = true;
            $this->clients[$name] = new \Symfony\Config\Httplug\ClientConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "client()" has already been initialized. You cannot pass values the second time you call client().');
        }

        return $this->clients[$name];
    }

    public function plugins(array $value = []): \Symfony\Config\Httplug\PluginsConfig
    {
        if (null === $this->plugins) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins = new \Symfony\Config\Httplug\PluginsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "plugins()" has already been initialized. You cannot pass values the second time you call plugins().');
        }

        return $this->plugins;
    }

    /**
     * Set to false to not autowire HttpClient and HttpAsyncClient.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function defaultClientAutowiring($value): self
    {
        $this->_usedProperties['defaultClientAutowiring'] = true;
        $this->defaultClientAutowiring = $value;

        return $this;
    }

    public function mainAlias(array $value = []): \Symfony\Config\Httplug\MainAliasConfig
    {
        if (null === $this->mainAlias) {
            $this->_usedProperties['mainAlias'] = true;
            $this->mainAlias = new \Symfony\Config\Httplug\MainAliasConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mainAlias()" has already been initialized. You cannot pass values the second time you call mainAlias().');
        }

        return $this->mainAlias;
    }

    public function classes(array $value = []): \Symfony\Config\Httplug\ClassesConfig
    {
        if (null === $this->classes) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\Httplug\ClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }

        return $this->classes;
    }

    public function profiling(array $value = []): \Symfony\Config\Httplug\ProfilingConfig
    {
        if (null === $this->profiling) {
            $this->_usedProperties['profiling'] = true;
            $this->profiling = new \Symfony\Config\Httplug\ProfilingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "profiling()" has already been initialized. You cannot pass values the second time you call profiling().');
        }

        return $this->profiling;
    }

    public function discovery(array $value = []): \Symfony\Config\Httplug\DiscoveryConfig
    {
        if (null === $this->discovery) {
            $this->_usedProperties['discovery'] = true;
            $this->discovery = new \Symfony\Config\Httplug\DiscoveryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "discovery()" has already been initialized. You cannot pass values the second time you call discovery().');
        }

        return $this->discovery;
    }

    public function getExtensionAlias(): string
    {
        return 'httplug';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('clients', $value)) {
            $this->_usedProperties['clients'] = true;
            $this->clients = array_map(function ($v) { return new \Symfony\Config\Httplug\ClientConfig($v); }, $value['clients']);
            unset($value['clients']);
        }

        if (array_key_exists('plugins', $value)) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins = new \Symfony\Config\Httplug\PluginsConfig($value['plugins']);
            unset($value['plugins']);
        }

        if (array_key_exists('default_client_autowiring', $value)) {
            $this->_usedProperties['defaultClientAutowiring'] = true;
            $this->defaultClientAutowiring = $value['default_client_autowiring'];
            unset($value['default_client_autowiring']);
        }

        if (array_key_exists('main_alias', $value)) {
            $this->_usedProperties['mainAlias'] = true;
            $this->mainAlias = new \Symfony\Config\Httplug\MainAliasConfig($value['main_alias']);
            unset($value['main_alias']);
        }

        if (array_key_exists('classes', $value)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\Httplug\ClassesConfig($value['classes']);
            unset($value['classes']);
        }

        if (array_key_exists('profiling', $value)) {
            $this->_usedProperties['profiling'] = true;
            $this->profiling = new \Symfony\Config\Httplug\ProfilingConfig($value['profiling']);
            unset($value['profiling']);
        }

        if (array_key_exists('discovery', $value)) {
            $this->_usedProperties['discovery'] = true;
            $this->discovery = new \Symfony\Config\Httplug\DiscoveryConfig($value['discovery']);
            unset($value['discovery']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['clients'])) {
            $output['clients'] = array_map(function ($v) { return $v->toArray(); }, $this->clients);
        }
        if (isset($this->_usedProperties['plugins'])) {
            $output['plugins'] = $this->plugins->toArray();
        }
        if (isset($this->_usedProperties['defaultClientAutowiring'])) {
            $output['default_client_autowiring'] = $this->defaultClientAutowiring;
        }
        if (isset($this->_usedProperties['mainAlias'])) {
            $output['main_alias'] = $this->mainAlias->toArray();
        }
        if (isset($this->_usedProperties['classes'])) {
            $output['classes'] = $this->classes->toArray();
        }
        if (isset($this->_usedProperties['profiling'])) {
            $output['profiling'] = $this->profiling->toArray();
        }
        if (isset($this->_usedProperties['discovery'])) {
            $output['discovery'] = $this->discovery->toArray();
        }

        return $output;
    }

}
