<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RedirectConfig 
{
    private $enabled;
    private $preserveHeader;
    private $useDefaultForMultiple;
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
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function preserveHeader($value): self
    {
        $this->_usedProperties['preserveHeader'] = true;
        $this->preserveHeader = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function useDefaultForMultiple($value): self
    {
        $this->_usedProperties['useDefaultForMultiple'] = true;
        $this->useDefaultForMultiple = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('preserve_header', $value)) {
            $this->_usedProperties['preserveHeader'] = true;
            $this->preserveHeader = $value['preserve_header'];
            unset($value['preserve_header']);
        }

        if (array_key_exists('use_default_for_multiple', $value)) {
            $this->_usedProperties['useDefaultForMultiple'] = true;
            $this->useDefaultForMultiple = $value['use_default_for_multiple'];
            unset($value['use_default_for_multiple']);
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
        if (isset($this->_usedProperties['preserveHeader'])) {
            $output['preserve_header'] = $this->preserveHeader;
        }
        if (isset($this->_usedProperties['useDefaultForMultiple'])) {
            $output['use_default_for_multiple'] = $this->useDefaultForMultiple;
        }

        return $output;
    }

}
