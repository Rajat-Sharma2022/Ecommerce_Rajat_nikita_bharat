<?php

namespace Symfony\Config\PimcoreEcommerceFramework\PaymentManager;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProvidersConfig'.\DIRECTORY_SEPARATOR.'ProfilesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProvidersConfig 
{
    private $name;
    private $providerId;
    private $profile;
    private $profiles;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * Service id of payment provider implementation
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function providerId($value): self
    {
        $this->_usedProperties['providerId'] = true;
        $this->providerId = $value;

        return $this;
    }

    /**
     * Currently active profile
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function profile($value): self
    {
        $this->_usedProperties['profile'] = true;
        $this->profile = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig\ProfilesConfig|$this
     */
    public function profiles(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['profiles'] = true;
            $this->profiles[$name] = $value;

            return $this;
        }

        if (!isset($this->profiles[$name]) || !$this->profiles[$name] instanceof \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig\ProfilesConfig) {
            $this->_usedProperties['profiles'] = true;
            $this->profiles[$name] = new \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig\ProfilesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "profiles()" has already been initialized. You cannot pass values the second time you call profiles().');
        }

        return $this->profiles[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('provider_id', $value)) {
            $this->_usedProperties['providerId'] = true;
            $this->providerId = $value['provider_id'];
            unset($value['provider_id']);
        }

        if (array_key_exists('profile', $value)) {
            $this->_usedProperties['profile'] = true;
            $this->profile = $value['profile'];
            unset($value['profile']);
        }

        if (array_key_exists('profiles', $value)) {
            $this->_usedProperties['profiles'] = true;
            $this->profiles = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig\ProfilesConfig($v) : $v; }, $value['profiles']);
            unset($value['profiles']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['providerId'])) {
            $output['provider_id'] = $this->providerId;
        }
        if (isset($this->_usedProperties['profile'])) {
            $output['profile'] = $this->profile;
        }
        if (isset($this->_usedProperties['profiles'])) {
            $output['profiles'] = array_map(function ($v) { return $v instanceof \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig\ProfilesConfig ? $v->toArray() : $v; }, $this->profiles);
        }

        return $output;
    }

}
