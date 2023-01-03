<?php

namespace Symfony\Config\Httplug;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProfilingConfig 
{
    private $enabled;
    private $formatter;
    private $capturedBodyLength;
    private $_usedProperties = [];

    /**
     * Turn the toolbar on or off. Defaults to kernel debug mode.
     * @default true
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formatter($value): self
    {
        $this->_usedProperties['formatter'] = true;
        $this->formatter = $value;

        return $this;
    }

    /**
     * Limit long HTTP message bodies to x characters. If set to 0 we do not read the message body. If null the body will not be truncated. Only available with the default formatter (FullHttpMessageFormatter).
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function capturedBodyLength($value): self
    {
        $this->_usedProperties['capturedBodyLength'] = true;
        $this->capturedBodyLength = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('formatter', $value)) {
            $this->_usedProperties['formatter'] = true;
            $this->formatter = $value['formatter'];
            unset($value['formatter']);
        }

        if (array_key_exists('captured_body_length', $value)) {
            $this->_usedProperties['capturedBodyLength'] = true;
            $this->capturedBodyLength = $value['captured_body_length'];
            unset($value['captured_body_length']);
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
        if (isset($this->_usedProperties['formatter'])) {
            $output['formatter'] = $this->formatter;
        }
        if (isset($this->_usedProperties['capturedBodyLength'])) {
            $output['captured_body_length'] = $this->capturedBodyLength;
        }

        return $output;
    }

}
