<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomerSaveManagerConfig 
{
    private $enableAutomaticObjectNamingScheme;
    private $_usedProperties = [];

    /**
     * If enabled the automatic object naming scheme will be applied on each customer save. See: customer_provider -> namingScheme option
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableAutomaticObjectNamingScheme($value): self
    {
        $this->_usedProperties['enableAutomaticObjectNamingScheme'] = true;
        $this->enableAutomaticObjectNamingScheme = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enableAutomaticObjectNamingScheme', $value)) {
            $this->_usedProperties['enableAutomaticObjectNamingScheme'] = true;
            $this->enableAutomaticObjectNamingScheme = $value['enableAutomaticObjectNamingScheme'];
            unset($value['enableAutomaticObjectNamingScheme']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableAutomaticObjectNamingScheme'])) {
            $output['enableAutomaticObjectNamingScheme'] = $this->enableAutomaticObjectNamingScheme;
        }

        return $output;
    }

}
