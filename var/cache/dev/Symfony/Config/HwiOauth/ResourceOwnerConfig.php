<?php

namespace Symfony\Config\HwiOauth;

use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResourceOwnerConfig 
{
    private $baseUrl;
    private $accessTokenUrl;
    private $authorizationUrl;
    private $requestTokenUrl;
    private $revokeTokenUrl;
    private $infosUrl;
    private $clientId;
    private $clientSecret;
    private $realm;
    private $scope;
    private $userResponseClass;
    private $service;
    private $class;
    private $type;
    private $useAuthorizationToGetToken;
    private $paths;
    private $options;
    private $_usedProperties = [];
    private $_extraKeys;

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseUrl($value): self
    {
        $this->_usedProperties['baseUrl'] = true;
        $this->baseUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessTokenUrl($value): self
    {
        $this->_usedProperties['accessTokenUrl'] = true;
        $this->accessTokenUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authorizationUrl($value): self
    {
        $this->_usedProperties['authorizationUrl'] = true;
        $this->authorizationUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestTokenUrl($value): self
    {
        $this->_usedProperties['requestTokenUrl'] = true;
        $this->requestTokenUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function revokeTokenUrl($value): self
    {
        $this->_usedProperties['revokeTokenUrl'] = true;
        $this->revokeTokenUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function infosUrl($value): self
    {
        $this->_usedProperties['infosUrl'] = true;
        $this->infosUrl = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientId($value): self
    {
        $this->_usedProperties['clientId'] = true;
        $this->clientId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientSecret($value): self
    {
        $this->_usedProperties['clientSecret'] = true;
        $this->clientSecret = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function realm($value): self
    {
        $this->_usedProperties['realm'] = true;
        $this->realm = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function scope($value): self
    {
        $this->_usedProperties['scope'] = true;
        $this->scope = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userResponseClass($value): self
    {
        $this->_usedProperties['userResponseClass'] = true;
        $this->userResponseClass = $value;

        return $this;
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
    public function class($value): self
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function useAuthorizationToGetToken($value): self
    {
        $this->_usedProperties['useAuthorizationToGetToken'] = true;
        $this->useAuthorizationToGetToken = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paths(string $name, $value): self
    {
        $this->_usedProperties['paths'] = true;
        $this->paths[$name] = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options(string $name, $value): self
    {
        $this->_usedProperties['options'] = true;
        $this->options[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('base_url', $value)) {
            $this->_usedProperties['baseUrl'] = true;
            $this->baseUrl = $value['base_url'];
            unset($value['base_url']);
        }

        if (array_key_exists('access_token_url', $value)) {
            $this->_usedProperties['accessTokenUrl'] = true;
            $this->accessTokenUrl = $value['access_token_url'];
            unset($value['access_token_url']);
        }

        if (array_key_exists('authorization_url', $value)) {
            $this->_usedProperties['authorizationUrl'] = true;
            $this->authorizationUrl = $value['authorization_url'];
            unset($value['authorization_url']);
        }

        if (array_key_exists('request_token_url', $value)) {
            $this->_usedProperties['requestTokenUrl'] = true;
            $this->requestTokenUrl = $value['request_token_url'];
            unset($value['request_token_url']);
        }

        if (array_key_exists('revoke_token_url', $value)) {
            $this->_usedProperties['revokeTokenUrl'] = true;
            $this->revokeTokenUrl = $value['revoke_token_url'];
            unset($value['revoke_token_url']);
        }

        if (array_key_exists('infos_url', $value)) {
            $this->_usedProperties['infosUrl'] = true;
            $this->infosUrl = $value['infos_url'];
            unset($value['infos_url']);
        }

        if (array_key_exists('client_id', $value)) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = $value['client_id'];
            unset($value['client_id']);
        }

        if (array_key_exists('client_secret', $value)) {
            $this->_usedProperties['clientSecret'] = true;
            $this->clientSecret = $value['client_secret'];
            unset($value['client_secret']);
        }

        if (array_key_exists('realm', $value)) {
            $this->_usedProperties['realm'] = true;
            $this->realm = $value['realm'];
            unset($value['realm']);
        }

        if (array_key_exists('scope', $value)) {
            $this->_usedProperties['scope'] = true;
            $this->scope = $value['scope'];
            unset($value['scope']);
        }

        if (array_key_exists('user_response_class', $value)) {
            $this->_usedProperties['userResponseClass'] = true;
            $this->userResponseClass = $value['user_response_class'];
            unset($value['user_response_class']);
        }

        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }

        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = $value['class'];
            unset($value['class']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('use_authorization_to_get_token', $value)) {
            $this->_usedProperties['useAuthorizationToGetToken'] = true;
            $this->useAuthorizationToGetToken = $value['use_authorization_to_get_token'];
            unset($value['use_authorization_to_get_token']);
        }

        if (array_key_exists('paths', $value)) {
            $this->_usedProperties['paths'] = true;
            $this->paths = $value['paths'];
            unset($value['paths']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        $this->_extraKeys = $value;

    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['baseUrl'])) {
            $output['base_url'] = $this->baseUrl;
        }
        if (isset($this->_usedProperties['accessTokenUrl'])) {
            $output['access_token_url'] = $this->accessTokenUrl;
        }
        if (isset($this->_usedProperties['authorizationUrl'])) {
            $output['authorization_url'] = $this->authorizationUrl;
        }
        if (isset($this->_usedProperties['requestTokenUrl'])) {
            $output['request_token_url'] = $this->requestTokenUrl;
        }
        if (isset($this->_usedProperties['revokeTokenUrl'])) {
            $output['revoke_token_url'] = $this->revokeTokenUrl;
        }
        if (isset($this->_usedProperties['infosUrl'])) {
            $output['infos_url'] = $this->infosUrl;
        }
        if (isset($this->_usedProperties['clientId'])) {
            $output['client_id'] = $this->clientId;
        }
        if (isset($this->_usedProperties['clientSecret'])) {
            $output['client_secret'] = $this->clientSecret;
        }
        if (isset($this->_usedProperties['realm'])) {
            $output['realm'] = $this->realm;
        }
        if (isset($this->_usedProperties['scope'])) {
            $output['scope'] = $this->scope;
        }
        if (isset($this->_usedProperties['userResponseClass'])) {
            $output['user_response_class'] = $this->userResponseClass;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['useAuthorizationToGetToken'])) {
            $output['use_authorization_to_get_token'] = $this->useAuthorizationToGetToken;
        }
        if (isset($this->_usedProperties['paths'])) {
            $output['paths'] = $this->paths;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }

        return $output + $this->_extraKeys;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function set(string $key, $value): self
    {
        $this->_extraKeys[$key] = $value;

        return $this;
    }

}
