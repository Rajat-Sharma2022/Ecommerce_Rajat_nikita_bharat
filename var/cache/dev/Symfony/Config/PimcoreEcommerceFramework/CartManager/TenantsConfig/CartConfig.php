<?php

namespace Symfony\Config\PimcoreEcommerceFramework\CartManager\TenantsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CartConfig 
{
    private $factoryId;
    private $factoryOptions;
    private $_usedProperties = [];

    /**
     * Service id of cart factory and configuration array
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\CartFactory'
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
     * @default array (
      'cart_class_name' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\Cart',
      'guest_cart_class_name' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\SessionCart',
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factoryOptions($value = array (
      'cart_class_name' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\Cart',
      'guest_cart_class_name' => 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CartManager\\SessionCart',
    )): self
    {
        $this->_usedProperties['factoryOptions'] = true;
        $this->factoryOptions = $value;

        return $this;
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

        return $output;
    }

}
