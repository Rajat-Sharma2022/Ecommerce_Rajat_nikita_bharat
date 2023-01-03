<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Vcr'.\DIRECTORY_SEPARATOR.'NamingStrategyOptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VcrConfig 
{
    private $enabled;
    private $mode;
    private $recorder;
    private $namingStrategy;
    private $namingStrategyOptions;
    private $fixturesDirectory;
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
     * What should be the behavior of the plugin?
     * @default null
     * @param ParamConfigurator|'record'|'replay'|'replay_or_record' $value
     * @return $this
     */
    public function mode($value): self
    {
        $this->_usedProperties['mode'] = true;
        $this->mode = $value;

        return $this;
    }

    /**
     * Which recorder to use. Can be "in_memory", "filesystem" or the ID of your service implementing Http\Client\Plugin\Vcr\Recorder\RecorderInterface and Http\Client\Plugin\Vcr\Recorder\PlayerInterface. When using filesystem, specify "fixtures_directory" as well.
     * @default 'filesystem'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function recorder($value): self
    {
        $this->_usedProperties['recorder'] = true;
        $this->recorder = $value;

        return $this;
    }

    /**
     * Which naming strategy to use. Add the ID of your service implementing Http\Client\Plugin\Vcr\NamingStrategy\NamingStrategyInterface to override the default one.
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namingStrategy($value): self
    {
        $this->_usedProperties['namingStrategy'] = true;
        $this->namingStrategy = $value;

        return $this;
    }

    public function namingStrategyOptions(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\Vcr\NamingStrategyOptionsConfig
    {
        if (null === $this->namingStrategyOptions) {
            $this->_usedProperties['namingStrategyOptions'] = true;
            $this->namingStrategyOptions = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\Vcr\NamingStrategyOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "namingStrategyOptions()" has already been initialized. You cannot pass values the second time you call namingStrategyOptions().');
        }

        return $this->namingStrategyOptions;
    }

    /**
     * Where the responses will be stored and replay from when using the filesystem recorder. Should be accessible to your VCS.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fixturesDirectory($value): self
    {
        $this->_usedProperties['fixturesDirectory'] = true;
        $this->fixturesDirectory = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('mode', $value)) {
            $this->_usedProperties['mode'] = true;
            $this->mode = $value['mode'];
            unset($value['mode']);
        }

        if (array_key_exists('recorder', $value)) {
            $this->_usedProperties['recorder'] = true;
            $this->recorder = $value['recorder'];
            unset($value['recorder']);
        }

        if (array_key_exists('naming_strategy', $value)) {
            $this->_usedProperties['namingStrategy'] = true;
            $this->namingStrategy = $value['naming_strategy'];
            unset($value['naming_strategy']);
        }

        if (array_key_exists('naming_strategy_options', $value)) {
            $this->_usedProperties['namingStrategyOptions'] = true;
            $this->namingStrategyOptions = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\Vcr\NamingStrategyOptionsConfig($value['naming_strategy_options']);
            unset($value['naming_strategy_options']);
        }

        if (array_key_exists('fixtures_directory', $value)) {
            $this->_usedProperties['fixturesDirectory'] = true;
            $this->fixturesDirectory = $value['fixtures_directory'];
            unset($value['fixtures_directory']);
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
        if (isset($this->_usedProperties['mode'])) {
            $output['mode'] = $this->mode;
        }
        if (isset($this->_usedProperties['recorder'])) {
            $output['recorder'] = $this->recorder;
        }
        if (isset($this->_usedProperties['namingStrategy'])) {
            $output['naming_strategy'] = $this->namingStrategy;
        }
        if (isset($this->_usedProperties['namingStrategyOptions'])) {
            $output['naming_strategy_options'] = $this->namingStrategyOptions->toArray();
        }
        if (isset($this->_usedProperties['fixturesDirectory'])) {
            $output['fixtures_directory'] = $this->fixturesDirectory;
        }

        return $output;
    }

}
