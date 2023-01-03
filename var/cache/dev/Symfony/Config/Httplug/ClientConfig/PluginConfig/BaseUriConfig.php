<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BaseUriConfig 
{
    private $enabled;
    private $uri;
    private $replace;
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
     * Base Uri including protocol, optionally the port number and prepend path, e.g. https://api.local:8000/api
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uri($value): self
    {
        $this->_usedProperties['uri'] = true;
        $this->uri = $value;

        return $this;
    }

    /**
     * Whether to replace the host if request already specifies one
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function replace($value): self
    {
        $this->_usedProperties['replace'] = true;
        $this->replace = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('uri', $value)) {
            $this->_usedProperties['uri'] = true;
            $this->uri = $value['uri'];
            unset($value['uri']);
        }

        if (array_key_exists('replace', $value)) {
            $this->_usedProperties['replace'] = true;
            $this->replace = $value['replace'];
            unset($value['replace']);
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
        if (isset($this->_usedProperties['uri'])) {
            $output['uri'] = $this->uri;
        }
        if (isset($this->_usedProperties['replace'])) {
            $output['replace'] = $this->replace;
        }

        return $output;
    }

}
