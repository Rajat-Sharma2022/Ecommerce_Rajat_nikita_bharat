<?php

namespace Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PricingManagerOptionsConfig 
{
    private $ruleClass;
    private $priceInfoClass;
    private $environmentClass;
    private $_usedProperties = [];

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Rule'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ruleClass($value): self
    {
        $this->_usedProperties['ruleClass'] = true;
        $this->ruleClass = $value;

        return $this;
    }

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\PriceInfo'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function priceInfoClass($value): self
    {
        $this->_usedProperties['priceInfoClass'] = true;
        $this->priceInfoClass = $value;

        return $this;
    }

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\Environment'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function environmentClass($value): self
    {
        $this->_usedProperties['environmentClass'] = true;
        $this->environmentClass = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('rule_class', $value)) {
            $this->_usedProperties['ruleClass'] = true;
            $this->ruleClass = $value['rule_class'];
            unset($value['rule_class']);
        }

        if (array_key_exists('price_info_class', $value)) {
            $this->_usedProperties['priceInfoClass'] = true;
            $this->priceInfoClass = $value['price_info_class'];
            unset($value['price_info_class']);
        }

        if (array_key_exists('environment_class', $value)) {
            $this->_usedProperties['environmentClass'] = true;
            $this->environmentClass = $value['environment_class'];
            unset($value['environment_class']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['ruleClass'])) {
            $output['rule_class'] = $this->ruleClass;
        }
        if (isset($this->_usedProperties['priceInfoClass'])) {
            $output['price_info_class'] = $this->priceInfoClass;
        }
        if (isset($this->_usedProperties['environmentClass'])) {
            $output['environment_class'] = $this->environmentClass;
        }

        return $output;
    }

}
