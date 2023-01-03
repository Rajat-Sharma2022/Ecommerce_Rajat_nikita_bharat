<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\GdprDataProvider;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomerConfig 
{
    private $allowDelete;
    private $includedRelations;
    private $_usedProperties = [];

    /**
     * Allow delete of objects directly in preview grid.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowDelete($value): self
    {
        $this->_usedProperties['allowDelete'] = true;
        $this->allowDelete = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function includedRelations($value): self
    {
        $this->_usedProperties['includedRelations'] = true;
        $this->includedRelations = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allowDelete', $value)) {
            $this->_usedProperties['allowDelete'] = true;
            $this->allowDelete = $value['allowDelete'];
            unset($value['allowDelete']);
        }

        if (array_key_exists('includedRelations', $value)) {
            $this->_usedProperties['includedRelations'] = true;
            $this->includedRelations = $value['includedRelations'];
            unset($value['includedRelations']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowDelete'])) {
            $output['allowDelete'] = $this->allowDelete;
        }
        if (isset($this->_usedProperties['includedRelations'])) {
            $output['includedRelations'] = $this->includedRelations;
        }

        return $output;
    }

}
