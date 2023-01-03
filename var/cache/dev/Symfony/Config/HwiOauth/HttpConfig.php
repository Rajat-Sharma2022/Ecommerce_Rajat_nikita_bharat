<?php

namespace Symfony\Config\HwiOauth;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttpConfig 
{
    private $client;
    private $messageFactory;
    private $_usedProperties = [];

    /**
     * @default 'httplug.client.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function client($value): self
    {
        $this->_usedProperties['client'] = true;
        $this->client = $value;

        return $this;
    }

    /**
     * @default 'httplug.message_factory.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messageFactory($value): self
    {
        $this->_usedProperties['messageFactory'] = true;
        $this->messageFactory = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }

        if (array_key_exists('message_factory', $value)) {
            $this->_usedProperties['messageFactory'] = true;
            $this->messageFactory = $value['message_factory'];
            unset($value['message_factory']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client;
        }
        if (isset($this->_usedProperties['messageFactory'])) {
            $output['message_factory'] = $this->messageFactory;
        }

        return $output;
    }

}
