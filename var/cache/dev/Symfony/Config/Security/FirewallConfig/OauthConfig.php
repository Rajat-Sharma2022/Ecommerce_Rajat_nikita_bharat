<?php

namespace Symfony\Config\Security\FirewallConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Oauth'.\DIRECTORY_SEPARATOR.'OauthUserProviderConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OauthConfig 
{
    private $provider;
    private $rememberMe;
    private $successHandler;
    private $failureHandler;
    private $checkPath;
    private $useForward;
    private $requirePreviousSession;
    private $loginPath;
    private $alwaysUseDefaultTargetPath;
    private $defaultTargetPath;
    private $targetPathParameter;
    private $useReferer;
    private $failurePath;
    private $failureForward;
    private $failurePathParameter;
    private $oauthUserProvider;
    private $resourceOwners;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): self
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function rememberMe($value): self
    {
        $this->_usedProperties['rememberMe'] = true;
        $this->rememberMe = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function successHandler($value): self
    {
        $this->_usedProperties['successHandler'] = true;
        $this->successHandler = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failureHandler($value): self
    {
        $this->_usedProperties['failureHandler'] = true;
        $this->failureHandler = $value;

        return $this;
    }

    /**
     * @default '/login_check'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function checkPath($value): self
    {
        $this->_usedProperties['checkPath'] = true;
        $this->checkPath = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useForward($value): self
    {
        $this->_usedProperties['useForward'] = true;
        $this->useForward = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function requirePreviousSession($value): self
    {
        $this->_usedProperties['requirePreviousSession'] = true;
        $this->requirePreviousSession = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loginPath($value): self
    {
        $this->_usedProperties['loginPath'] = true;
        $this->loginPath = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function alwaysUseDefaultTargetPath($value): self
    {
        $this->_usedProperties['alwaysUseDefaultTargetPath'] = true;
        $this->alwaysUseDefaultTargetPath = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTargetPath($value): self
    {
        $this->_usedProperties['defaultTargetPath'] = true;
        $this->defaultTargetPath = $value;

        return $this;
    }

    /**
     * @default '_target_path'
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failurePath($value): self
    {
        $this->_usedProperties['failurePath'] = true;
        $this->failurePath = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function failureForward($value): self
    {
        $this->_usedProperties['failureForward'] = true;
        $this->failureForward = $value;

        return $this;
    }

    /**
     * @default '_failure_path'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failurePathParameter($value): self
    {
        $this->_usedProperties['failurePathParameter'] = true;
        $this->failurePathParameter = $value;

        return $this;
    }

    public function oauthUserProvider(array $value = []): \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProviderConfig
    {
        if (null === $this->oauthUserProvider) {
            $this->_usedProperties['oauthUserProvider'] = true;
            $this->oauthUserProvider = new \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProviderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "oauthUserProvider()" has already been initialized. You cannot pass values the second time you call oauthUserProvider().');
        }

        return $this->oauthUserProvider;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function resourceOwners(string $name, $value): self
    {
        $this->_usedProperties['resourceOwners'] = true;
        $this->resourceOwners[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('provider', $value)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $value['provider'];
            unset($value['provider']);
        }

        if (array_key_exists('remember_me', $value)) {
            $this->_usedProperties['rememberMe'] = true;
            $this->rememberMe = $value['remember_me'];
            unset($value['remember_me']);
        }

        if (array_key_exists('success_handler', $value)) {
            $this->_usedProperties['successHandler'] = true;
            $this->successHandler = $value['success_handler'];
            unset($value['success_handler']);
        }

        if (array_key_exists('failure_handler', $value)) {
            $this->_usedProperties['failureHandler'] = true;
            $this->failureHandler = $value['failure_handler'];
            unset($value['failure_handler']);
        }

        if (array_key_exists('check_path', $value)) {
            $this->_usedProperties['checkPath'] = true;
            $this->checkPath = $value['check_path'];
            unset($value['check_path']);
        }

        if (array_key_exists('use_forward', $value)) {
            $this->_usedProperties['useForward'] = true;
            $this->useForward = $value['use_forward'];
            unset($value['use_forward']);
        }

        if (array_key_exists('require_previous_session', $value)) {
            $this->_usedProperties['requirePreviousSession'] = true;
            $this->requirePreviousSession = $value['require_previous_session'];
            unset($value['require_previous_session']);
        }

        if (array_key_exists('login_path', $value)) {
            $this->_usedProperties['loginPath'] = true;
            $this->loginPath = $value['login_path'];
            unset($value['login_path']);
        }

        if (array_key_exists('always_use_default_target_path', $value)) {
            $this->_usedProperties['alwaysUseDefaultTargetPath'] = true;
            $this->alwaysUseDefaultTargetPath = $value['always_use_default_target_path'];
            unset($value['always_use_default_target_path']);
        }

        if (array_key_exists('default_target_path', $value)) {
            $this->_usedProperties['defaultTargetPath'] = true;
            $this->defaultTargetPath = $value['default_target_path'];
            unset($value['default_target_path']);
        }

        if (array_key_exists('target_path_parameter', $value)) {
            $this->_usedProperties['targetPathParameter'] = true;
            $this->targetPathParameter = $value['target_path_parameter'];
            unset($value['target_path_parameter']);
        }

        if (array_key_exists('use_referer', $value)) {
            $this->_usedProperties['useReferer'] = true;
            $this->useReferer = $value['use_referer'];
            unset($value['use_referer']);
        }

        if (array_key_exists('failure_path', $value)) {
            $this->_usedProperties['failurePath'] = true;
            $this->failurePath = $value['failure_path'];
            unset($value['failure_path']);
        }

        if (array_key_exists('failure_forward', $value)) {
            $this->_usedProperties['failureForward'] = true;
            $this->failureForward = $value['failure_forward'];
            unset($value['failure_forward']);
        }

        if (array_key_exists('failure_path_parameter', $value)) {
            $this->_usedProperties['failurePathParameter'] = true;
            $this->failurePathParameter = $value['failure_path_parameter'];
            unset($value['failure_path_parameter']);
        }

        if (array_key_exists('oauth_user_provider', $value)) {
            $this->_usedProperties['oauthUserProvider'] = true;
            $this->oauthUserProvider = new \Symfony\Config\Security\FirewallConfig\Oauth\OauthUserProviderConfig($value['oauth_user_provider']);
            unset($value['oauth_user_provider']);
        }

        if (array_key_exists('resource_owners', $value)) {
            $this->_usedProperties['resourceOwners'] = true;
            $this->resourceOwners = $value['resource_owners'];
            unset($value['resource_owners']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['rememberMe'])) {
            $output['remember_me'] = $this->rememberMe;
        }
        if (isset($this->_usedProperties['successHandler'])) {
            $output['success_handler'] = $this->successHandler;
        }
        if (isset($this->_usedProperties['failureHandler'])) {
            $output['failure_handler'] = $this->failureHandler;
        }
        if (isset($this->_usedProperties['checkPath'])) {
            $output['check_path'] = $this->checkPath;
        }
        if (isset($this->_usedProperties['useForward'])) {
            $output['use_forward'] = $this->useForward;
        }
        if (isset($this->_usedProperties['requirePreviousSession'])) {
            $output['require_previous_session'] = $this->requirePreviousSession;
        }
        if (isset($this->_usedProperties['loginPath'])) {
            $output['login_path'] = $this->loginPath;
        }
        if (isset($this->_usedProperties['alwaysUseDefaultTargetPath'])) {
            $output['always_use_default_target_path'] = $this->alwaysUseDefaultTargetPath;
        }
        if (isset($this->_usedProperties['defaultTargetPath'])) {
            $output['default_target_path'] = $this->defaultTargetPath;
        }
        if (isset($this->_usedProperties['targetPathParameter'])) {
            $output['target_path_parameter'] = $this->targetPathParameter;
        }
        if (isset($this->_usedProperties['useReferer'])) {
            $output['use_referer'] = $this->useReferer;
        }
        if (isset($this->_usedProperties['failurePath'])) {
            $output['failure_path'] = $this->failurePath;
        }
        if (isset($this->_usedProperties['failureForward'])) {
            $output['failure_forward'] = $this->failureForward;
        }
        if (isset($this->_usedProperties['failurePathParameter'])) {
            $output['failure_path_parameter'] = $this->failurePathParameter;
        }
        if (isset($this->_usedProperties['oauthUserProvider'])) {
            $output['oauth_user_provider'] = $this->oauthUserProvider->toArray();
        }
        if (isset($this->_usedProperties['resourceOwners'])) {
            $output['resource_owners'] = $this->resourceOwners;
        }

        return $output;
    }

}
