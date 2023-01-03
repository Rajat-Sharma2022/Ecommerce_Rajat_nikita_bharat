<?php

namespace Symfony\Config\PimcoreEcommerceFramework\IndexService;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'AttributesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TenantsConfig 
{
    private $enabled;
    private $configId;
    private $configOptions;
    private $workerId;
    private $placeholders;
    private $searchAttributes;
    private $attributes;
    private $_usedProperties = [];

    /**
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
     * Service id of config implementation
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\Config\\DefaultMysql'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configId($value): self
    {
        $this->_usedProperties['configId'] = true;
        $this->configId = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configOptions($value = array (
    )): self
    {
        $this->_usedProperties['configOptions'] = true;
        $this->configOptions = $value;

        return $this;
    }

    /**
     * Worker id of worker implementation. Can be omitted, then default worker id of configured config is used.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function workerId($value): self
    {
        $this->_usedProperties['workerId'] = true;
        $this->workerId = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function placeholders($value): self
    {
        $this->_usedProperties['placeholders'] = true;
        $this->placeholders = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function searchAttributes($value): self
    {
        $this->_usedProperties['searchAttributes'] = true;
        $this->searchAttributes = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig\AttributesConfig|$this
     */
    public function attributes(string $name, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes[$name] = $value;

            return $this;
        }

        if (!isset($this->attributes[$name]) || !$this->attributes[$name] instanceof \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig\AttributesConfig) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes[$name] = new \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig\AttributesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "attributes()" has already been initialized. You cannot pass values the second time you call attributes().');
        }

        return $this->attributes[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('config_id', $value)) {
            $this->_usedProperties['configId'] = true;
            $this->configId = $value['config_id'];
            unset($value['config_id']);
        }

        if (array_key_exists('config_options', $value)) {
            $this->_usedProperties['configOptions'] = true;
            $this->configOptions = $value['config_options'];
            unset($value['config_options']);
        }

        if (array_key_exists('worker_id', $value)) {
            $this->_usedProperties['workerId'] = true;
            $this->workerId = $value['worker_id'];
            unset($value['worker_id']);
        }

        if (array_key_exists('placeholders', $value)) {
            $this->_usedProperties['placeholders'] = true;
            $this->placeholders = $value['placeholders'];
            unset($value['placeholders']);
        }

        if (array_key_exists('search_attributes', $value)) {
            $this->_usedProperties['searchAttributes'] = true;
            $this->searchAttributes = $value['search_attributes'];
            unset($value['search_attributes']);
        }

        if (array_key_exists('attributes', $value)) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig\AttributesConfig($v) : $v; }, $value['attributes']);
            unset($value['attributes']);
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
        if (isset($this->_usedProperties['configId'])) {
            $output['config_id'] = $this->configId;
        }
        if (isset($this->_usedProperties['configOptions'])) {
            $output['config_options'] = $this->configOptions;
        }
        if (isset($this->_usedProperties['workerId'])) {
            $output['worker_id'] = $this->workerId;
        }
        if (isset($this->_usedProperties['placeholders'])) {
            $output['placeholders'] = $this->placeholders;
        }
        if (isset($this->_usedProperties['searchAttributes'])) {
            $output['search_attributes'] = $this->searchAttributes;
        }
        if (isset($this->_usedProperties['attributes'])) {
            $output['attributes'] = array_map(function ($v) { return $v instanceof \Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig\AttributesConfig ? $v->toArray() : $v; }, $this->attributes);
        }

        return $output;
    }

}
