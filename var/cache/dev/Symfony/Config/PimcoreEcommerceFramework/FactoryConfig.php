<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FactoryConfig 
{
    private $factoryId;
    private $strictTenants;
    private $_usedProperties = [];

    /**
     * Service Id of factory implementation
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\Factory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factoryId($value): self
    {
        $this->_usedProperties['factoryId'] = true;
        $this->factoryId = $value;

        return $this;
    }

    /**
     * If true the factory will not fall back to the default tenant if a tenant is passed but not existing
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function strictTenants($value): self
    {
        $this->_usedProperties['strictTenants'] = true;
        $this->strictTenants = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('factory_id', $value)) {
            $this->_usedProperties['factoryId'] = true;
            $this->factoryId = $value['factory_id'];
            unset($value['factory_id']);
        }

        if (array_key_exists('strict_tenants', $value)) {
            $this->_usedProperties['strictTenants'] = true;
            $this->strictTenants = $value['strict_tenants'];
            unset($value['strict_tenants']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['factoryId'])) {
            $output['factory_id'] = $this->factoryId;
        }
        if (isset($this->_usedProperties['strictTenants'])) {
            $output['strict_tenants'] = $this->strictTenants;
        }

        return $output;
    }

}
