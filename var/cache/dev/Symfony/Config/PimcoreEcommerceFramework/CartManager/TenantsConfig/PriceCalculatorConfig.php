<?php

namespace Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PriceCalculator'.\DIRECTORY_SEPARATOR.'ModificatorsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PriceCalculatorConfig 
{
    private $factoryId;
    private $factoryOptions;
    private $modificators;
    private $_usedProperties = [];

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartPriceCalculatorFactory'
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
     * 'class' defines a class name of the price calculator, which the factory instantiates. If you wish to replace or extend price calculation routine shipped with e-commerce framework provide your custom class name here.
     * @default array (
      'class' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartPriceCalculator',
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factoryOptions($value = array (
      'class' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartPriceCalculator',
    )): self
    {
        $this->_usedProperties['factoryOptions'] = true;
        $this->factoryOptions = $value;

        return $this;
    }

    public function modificators(string $name, array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\PriceCalculator\ModificatorsConfig
    {
        if (!isset($this->modificators[$name])) {
            $this->_usedProperties['modificators'] = true;
            $this->modificators[$name] = new \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\PriceCalculator\ModificatorsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "modificators()" has already been initialized. You cannot pass values the second time you call modificators().');
        }

        return $this->modificators[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('factory_id', $value)) {
            $this->_usedProperties['factoryId'] = true;
            $this->factoryId = $value['factory_id'];
            unset($value['factory_id']);
        }

        if (array_key_exists('factory_options', $value)) {
            $this->_usedProperties['factoryOptions'] = true;
            $this->factoryOptions = $value['factory_options'];
            unset($value['factory_options']);
        }

        if (array_key_exists('modificators', $value)) {
            $this->_usedProperties['modificators'] = true;
            $this->modificators = array_map(function ($v) { return new \Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig\PriceCalculator\ModificatorsConfig($v); }, $value['modificators']);
            unset($value['modificators']);
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
        if (isset($this->_usedProperties['factoryOptions'])) {
            $output['factory_options'] = $this->factoryOptions;
        }
        if (isset($this->_usedProperties['modificators'])) {
            $output['modificators'] = array_map(function ($v) { return $v->toArray(); }, $this->modificators);
        }

        return $output;
    }

}
