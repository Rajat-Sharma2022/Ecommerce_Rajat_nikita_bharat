<?php

namespace Symfony\Config\PimcoreEcommerceFramework\TrackingManager\TrackersConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TenantsConfig 
{
    private $assortment;
    private $checkout;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function assortment($value): self
    {
        $this->_usedProperties['assortment'] = true;
        $this->assortment = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function checkout($value): self
    {
        $this->_usedProperties['checkout'] = true;
        $this->checkout = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('assortment', $value)) {
            $this->_usedProperties['assortment'] = true;
            $this->assortment = $value['assortment'];
            unset($value['assortment']);
        }

        if (array_key_exists('checkout', $value)) {
            $this->_usedProperties['checkout'] = true;
            $this->checkout = $value['checkout'];
            unset($value['checkout']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['assortment'])) {
            $output['assortment'] = $this->assortment;
        }
        if (isset($this->_usedProperties['checkout'])) {
            $output['checkout'] = $this->checkout;
        }

        return $output;
    }

}
