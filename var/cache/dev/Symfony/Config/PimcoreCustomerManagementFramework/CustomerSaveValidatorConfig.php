<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomerSaveValidatorConfig 
{
    private $checkForDuplicates;
    private $requiredFields;
    private $_usedProperties = [];

    /**
     * If enabled an exception will be thrown when saving a customer object if duplicate customers exist.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function checkForDuplicates($value): self
    {
        $this->_usedProperties['checkForDuplicates'] = true;
        $this->checkForDuplicates = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<array|ParamConfigurator> $value
     * @return $this
     */
    public function requiredFields($value): self
    {
        $this->_usedProperties['requiredFields'] = true;
        $this->requiredFields = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('checkForDuplicates', $value)) {
            $this->_usedProperties['checkForDuplicates'] = true;
            $this->checkForDuplicates = $value['checkForDuplicates'];
            unset($value['checkForDuplicates']);
        }

        if (array_key_exists('requiredFields', $value)) {
            $this->_usedProperties['requiredFields'] = true;
            $this->requiredFields = $value['requiredFields'];
            unset($value['requiredFields']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['checkForDuplicates'])) {
            $output['checkForDuplicates'] = $this->checkForDuplicates;
        }
        if (isset($this->_usedProperties['requiredFields'])) {
            $output['requiredFields'] = $this->requiredFields;
        }

        return $output;
    }

}
