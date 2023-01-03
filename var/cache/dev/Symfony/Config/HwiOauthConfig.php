<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HwiOauth'.\DIRECTORY_SEPARATOR.'HttpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HwiOauth'.\DIRECTORY_SEPARATOR.'ConnectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HwiOauth'.\DIRECTORY_SEPARATOR.'FosubConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HwiOauth'.\DIRECTORY_SEPARATOR.'ResourceOwnerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HwiOauthConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $firewallNames;
    private $targetPathParameter;
    private $targetPathDomainsWhitelist;
    private $useReferer;
    private $failedUseReferer;
    private $failedAuthPath;
    private $grantRule;
    private $http;
    private $connect;
    private $fosub;
    private $resourceOwners;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function firewallNames($value): self
    {
        $this->_usedProperties['firewallNames'] = true;
        $this->firewallNames = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function targetPathParameter($value): self
    {
        $this->_usedProperties['targetPathParameter'] = true;
        $this->targetPathParameter = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function targetPathDomainsWhitelist($value): self
    {
        $this->_usedProperties['targetPathDomainsWhitelist'] = true;
        $this->targetPathDomainsWhitelist = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useReferer($value): self
    {
        $this->_usedProperties['useReferer'] = true;
        $this->useReferer = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function failedUseReferer($value): self
    {
        $this->_usedProperties['failedUseReferer'] = true;
        $this->failedUseReferer = $value;

        return $this;
    }

    /**
     * @default 'hwi_oauth_connect'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failedAuthPath($value): self
    {
        $this->_usedProperties['failedAuthPath'] = true;
        $this->failedAuthPath = $value;

        return $this;
    }

    /**
     * @default 'IS_AUTHENTICATED_REMEMBERED'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function grantRule($value): self
    {
        $this->_usedProperties['grantRule'] = true;
        $this->grantRule = $value;

        return $this;
    }

    public function http(array $value = []): \Symfony\Config\HwiOauth\HttpConfig
    {
        if (null === $this->http) {
            $this->_usedProperties['http'] = true;
            $this->http = new \Symfony\Config\HwiOauth\HttpConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "http()" has already been initialized. You cannot pass values the second time you call http().');
        }

        return $this->http;
    }

    public function connect(array $value = []): \Symfony\Config\HwiOauth\ConnectConfig
    {
        if (null === $this->connect) {
            $this->_usedProperties['connect'] = true;
            $this->connect = new \Symfony\Config\HwiOauth\ConnectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "connect()" has already been initialized. You cannot pass values the second time you call connect().');
        }

        return $this->connect;
    }

    public function fosub(array $value = []): \Symfony\Config\HwiOauth\FosubConfig
    {
        if (null === $this->fosub) {
            $this->_usedProperties['fosub'] = true;
            $this->fosub = new \Symfony\Config\HwiOauth\FosubConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fosub()" has already been initialized. You cannot pass values the second time you call fosub().');
        }

        return $this->fosub;
    }

    public function resourceOwner(string $name, array $value = []): \Symfony\Config\HwiOauth\ResourceOwnerConfig
    {
        if (!isset($this->resourceOwners[$name])) {
            $this->_usedProperties['resourceOwners'] = true;
            $this->resourceOwners[$name] = new \Symfony\Config\HwiOauth\ResourceOwnerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resourceOwner()" has already been initialized. You cannot pass values the second time you call resourceOwner().');
        }

        return $this->resourceOwners[$name];
    }

    public function getExtensionAlias(): string
    {
        return 'hwi_oauth';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('firewall_names', $value)) {
            $this->_usedProperties['firewallNames'] = true;
            $this->firewallNames = $value['firewall_names'];
            unset($value['firewall_names']);
        }

        if (array_key_exists('target_path_parameter', $value)) {
            $this->_usedProperties['targetPathParameter'] = true;
            $this->targetPathParameter = $value['target_path_parameter'];
            unset($value['target_path_parameter']);
        }

        if (array_key_exists('target_path_domains_whitelist', $value)) {
            $this->_usedProperties['targetPathDomainsWhitelist'] = true;
            $this->targetPathDomainsWhitelist = $value['target_path_domains_whitelist'];
            unset($value['target_path_domains_whitelist']);
        }

        if (array_key_exists('use_referer', $value)) {
            $this->_usedProperties['useReferer'] = true;
            $this->useReferer = $value['use_referer'];
            unset($value['use_referer']);
        }

        if (array_key_exists('failed_use_referer', $value)) {
            $this->_usedProperties['failedUseReferer'] = true;
            $this->failedUseReferer = $value['failed_use_referer'];
            unset($value['failed_use_referer']);
        }

        if (array_key_exists('failed_auth_path', $value)) {
            $this->_usedProperties['failedAuthPath'] = true;
            $this->failedAuthPath = $value['failed_auth_path'];
            unset($value['failed_auth_path']);
        }

        if (array_key_exists('grant_rule', $value)) {
            $this->_usedProperties['grantRule'] = true;
            $this->grantRule = $value['grant_rule'];
            unset($value['grant_rule']);
        }

        if (array_key_exists('http', $value)) {
            $this->_usedProperties['http'] = true;
            $this->http = new \Symfony\Config\HwiOauth\HttpConfig($value['http']);
            unset($value['http']);
        }

        if (array_key_exists('connect', $value)) {
            $this->_usedProperties['connect'] = true;
            $this->connect = new \Symfony\Config\HwiOauth\ConnectConfig($value['connect']);
            unset($value['connect']);
        }

        if (array_key_exists('fosub', $value)) {
            $this->_usedProperties['fosub'] = true;
            $this->fosub = new \Symfony\Config\HwiOauth\FosubConfig($value['fosub']);
            unset($value['fosub']);
        }

        if (array_key_exists('resource_owners', $value)) {
            $this->_usedProperties['resourceOwners'] = true;
            $this->resourceOwners = array_map(function ($v) { return new \Symfony\Config\HwiOauth\ResourceOwnerConfig($v); }, $value['resource_owners']);
            unset($value['resource_owners']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['firewallNames'])) {
            $output['firewall_names'] = $this->firewallNames;
        }
        if (isset($this->_usedProperties['targetPathParameter'])) {
            $output['target_path_parameter'] = $this->targetPathParameter;
        }
        if (isset($this->_usedProperties['targetPathDomainsWhitelist'])) {
            $output['target_path_domains_whitelist'] = $this->targetPathDomainsWhitelist;
        }
        if (isset($this->_usedProperties['useReferer'])) {
            $output['use_referer'] = $this->useReferer;
        }
        if (isset($this->_usedProperties['failedUseReferer'])) {
            $output['failed_use_referer'] = $this->failedUseReferer;
        }
        if (isset($this->_usedProperties['failedAuthPath'])) {
            $output['failed_auth_path'] = $this->failedAuthPath;
        }
        if (isset($this->_usedProperties['grantRule'])) {
            $output['grant_rule'] = $this->grantRule;
        }
        if (isset($this->_usedProperties['http'])) {
            $output['http'] = $this->http->toArray();
        }
        if (isset($this->_usedProperties['connect'])) {
            $output['connect'] = $this->connect->toArray();
        }
        if (isset($this->_usedProperties['fosub'])) {
            $output['fosub'] = $this->fosub->toArray();
        }
        if (isset($this->_usedProperties['resourceOwners'])) {
            $output['resource_owners'] = array_map(function ($v) { return $v->toArray(); }, $this->resourceOwners);
        }

        return $output;
    }

}
