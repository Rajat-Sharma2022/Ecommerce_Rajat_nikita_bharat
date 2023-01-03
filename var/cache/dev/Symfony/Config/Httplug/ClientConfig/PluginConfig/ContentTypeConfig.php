<?php

namespace Symfony\Config\Httplug\ClientConfig\PluginConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ContentTypeConfig 
{
    private $enabled;
    private $skipDetection;
    private $sizeLimit;
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
     * Whether to skip detection when request body is larger than size_limit
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function skipDetection($value): self
    {
        $this->_usedProperties['skipDetection'] = true;
        $this->skipDetection = $value;

        return $this;
    }

    /**
     * Skip content type detection if request body is larger than size_limit bytes
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sizeLimit($value): self
    {
        $this->_usedProperties['sizeLimit'] = true;
        $this->sizeLimit = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('skip_detection', $value)) {
            $this->_usedProperties['skipDetection'] = true;
            $this->skipDetection = $value['skip_detection'];
            unset($value['skip_detection']);
        }

        if (array_key_exists('size_limit', $value)) {
            $this->_usedProperties['sizeLimit'] = true;
            $this->sizeLimit = $value['size_limit'];
            unset($value['size_limit']);
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
        if (isset($this->_usedProperties['skipDetection'])) {
            $output['skip_detection'] = $this->skipDetection;
        }
        if (isset($this->_usedProperties['sizeLimit'])) {
            $output['size_limit'] = $this->sizeLimit;
        }

        return $output;
    }

}
