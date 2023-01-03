<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DecoderConfig 
{
    private $enabled;
    private $useContentEncoding;
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
    public function useContentEncoding($value): self
    {
        $this->_usedProperties['useContentEncoding'] = true;
        $this->useContentEncoding = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('use_content_encoding', $value)) {
            $this->_usedProperties['useContentEncoding'] = true;
            $this->useContentEncoding = $value['use_content_encoding'];
            unset($value['use_content_encoding']);
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
        if (isset($this->_usedProperties['useContentEncoding'])) {
            $output['use_content_encoding'] = $this->useContentEncoding;
        }

        return $output;
    }

}
