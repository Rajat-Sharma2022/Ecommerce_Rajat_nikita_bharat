<?php

namespace Symfony\Config\PimcoreEcommerceFramework\VoucherService;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TokenManagersConfig 
{
    private $factoryId;
    private $mapping;
    private $_usedProperties = [];

    /**
     * Service id of token manager factory
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\VoucherService\\TokenManager\\TokenManagerFactory'
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
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mapping(string $name, $value): self
    {
        $this->_usedProperties['mapping'] = true;
        $this->mapping[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('factory_id', $value)) {
            $this->_usedProperties['factoryId'] = true;
            $this->factoryId = $value['factory_id'];
            unset($value['factory_id']);
        }

        if (array_key_exists('mapping', $value)) {
            $this->_usedProperties['mapping'] = true;
            $this->mapping = $value['mapping'];
            unset($value['mapping']);
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
        if (isset($this->_usedProperties['mapping'])) {
            $output['mapping'] = $this->mapping;
        }

        return $output;
    }

}
