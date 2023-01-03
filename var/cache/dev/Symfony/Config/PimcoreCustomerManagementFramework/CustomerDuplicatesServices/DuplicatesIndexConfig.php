<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DuplicatesIndex'.\DIRECTORY_SEPARATOR.'DuplicateCheckFieldsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DuplicatesIndexConfig 
{
    private $enableDuplicatesIndex;
    private $duplicateCheckFields;
    private $dataTransformers;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableDuplicatesIndex($value): self
    {
        $this->_usedProperties['enableDuplicatesIndex'] = true;
        $this->enableDuplicatesIndex = $value;

        return $this;
    }

    public function duplicateCheckFields(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesIndex\DuplicateCheckFieldsConfig
    {
        $this->_usedProperties['duplicateCheckFields'] = true;

        return $this->duplicateCheckFields[] = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesIndex\DuplicateCheckFieldsConfig($value);
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function dataTransformers($value): self
    {
        $this->_usedProperties['dataTransformers'] = true;
        $this->dataTransformers = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enableDuplicatesIndex', $value)) {
            $this->_usedProperties['enableDuplicatesIndex'] = true;
            $this->enableDuplicatesIndex = $value['enableDuplicatesIndex'];
            unset($value['enableDuplicatesIndex']);
        }

        if (array_key_exists('duplicateCheckFields', $value)) {
            $this->_usedProperties['duplicateCheckFields'] = true;
            $this->duplicateCheckFields = array_map(function ($v) { return new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesIndex\DuplicateCheckFieldsConfig($v); }, $value['duplicateCheckFields']);
            unset($value['duplicateCheckFields']);
        }

        if (array_key_exists('dataTransformers', $value)) {
            $this->_usedProperties['dataTransformers'] = true;
            $this->dataTransformers = $value['dataTransformers'];
            unset($value['dataTransformers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableDuplicatesIndex'])) {
            $output['enableDuplicatesIndex'] = $this->enableDuplicatesIndex;
        }
        if (isset($this->_usedProperties['duplicateCheckFields'])) {
            $output['duplicateCheckFields'] = array_map(function ($v) { return $v->toArray(); }, $this->duplicateCheckFields);
        }
        if (isset($this->_usedProperties['dataTransformers'])) {
            $output['dataTransformers'] = $this->dataTransformers;
        }

        return $output;
    }

}
