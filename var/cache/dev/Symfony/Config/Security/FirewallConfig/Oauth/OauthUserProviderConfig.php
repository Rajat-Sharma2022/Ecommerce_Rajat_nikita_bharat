<?php

namespace Symfony\Config\Security\FirewallConfig\Oauth;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OauthUserProvider'.\DIRECTORY_SEPARATOR.'OrmConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OauthUserProvider'.\DIRECTORY_SEPARATOR.'FosubConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class OauthUserProviderConfig 
{
    private $orm;
    private $service;
    private $oauth;
    private $fosub;
    private $_usedProperties = [];

    public function orm(array $value = []): \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProvider\OrmConfig
    {
        if (null === $this->orm) {
            $this->_usedProperties['orm'] = true;
            $this->orm = new \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProvider\OrmConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orm()" has already been initialized. You cannot pass values the second time you call orm().');
        }

        return $this->orm;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function oauth($value): self
    {
        $this->_usedProperties['oauth'] = true;
        $this->oauth = $value;

        return $this;
    }

    public function fosub(array $value = []): \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProvider\FosubConfig
    {
        if (null === $this->fosub) {
            $this->_usedProperties['fosub'] = true;
            $this->fosub = new \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProvider\FosubConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fosub()" has already been initialized. You cannot pass values the second time you call fosub().');
        }

        return $this->fosub;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('orm', $value)) {
            $this->_usedProperties['orm'] = true;
            $this->orm = new \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProvider\OrmConfig($value['orm']);
            unset($value['orm']);
        }

        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }

        if (array_key_exists('oauth', $value)) {
            $this->_usedProperties['oauth'] = true;
            $this->oauth = $value['oauth'];
            unset($value['oauth']);
        }

        if (array_key_exists('fosub', $value)) {
            $this->_usedProperties['fosub'] = true;
            $this->fosub = new \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProvider\FosubConfig($value['fosub']);
            unset($value['fosub']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['orm'])) {
            $output['orm'] = $this->orm->toArray();
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['oauth'])) {
            $output['oauth'] = $this->oauth;
        }
        if (isset($this->_usedProperties['fosub'])) {
            $output['fosub'] = $this->fosub->toArray();
        }

        return $output;
    }

}
