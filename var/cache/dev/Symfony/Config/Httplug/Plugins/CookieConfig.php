<?php

namespace Symfony\Config\Httplug\Plugins;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CookieConfig 
{
    private $enabled;
    private $cookieJar;
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
     * This must be a service id to a service implementing Http\Message\CookieJar
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookieJar($value): self
    {
        $this->_usedProperties['cookieJar'] = true;
        $this->cookieJar = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('cookie_jar', $value)) {
            $this->_usedProperties['cookieJar'] = true;
            $this->cookieJar = $value['cookie_jar'];
            unset($value['cookie_jar']);
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
        if (isset($this->_usedProperties['cookieJar'])) {
            $output['cookie_jar'] = $this->cookieJar;
        }

        return $output;
    }

}
