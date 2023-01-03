<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'CustomerDuplicatesServices'.\DIRECTORY_SEPARATOR.'DuplicatesViewConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'CustomerDuplicatesServices'.\DIRECTORY_SEPARATOR.'DuplicatesIndexConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomerDuplicatesServicesConfig 
{
    private $duplicateCheckFields;
    private $duplicateCheckTrimmedFields;
    private $duplicatesView;
    private $duplicatesIndex;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<array|ParamConfigurator> $value
     * @return $this
     */
    public function duplicateCheckFields($value): self
    {
        $this->_usedProperties['duplicateCheckFields'] = true;
        $this->duplicateCheckFields = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function duplicateCheckTrimmedFields($value): self
    {
        $this->_usedProperties['duplicateCheckTrimmedFields'] = true;
        $this->duplicateCheckTrimmedFields = $value;

        return $this;
    }

    public function duplicatesView(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesViewConfig
    {
        if (null === $this->duplicatesView) {
            $this->_usedProperties['duplicatesView'] = true;
            $this->duplicatesView = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesViewConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "duplicatesView()" has already been initialized. You cannot pass values the second time you call duplicatesView().');
        }

        return $this->duplicatesView;
    }

    public function duplicatesIndex(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesIndexConfig
    {
        if (null === $this->duplicatesIndex) {
            $this->_usedProperties['duplicatesIndex'] = true;
            $this->duplicatesIndex = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesIndexConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "duplicatesIndex()" has already been initialized. You cannot pass values the second time you call duplicatesIndex().');
        }

        return $this->duplicatesIndex;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('duplicateCheckFields', $value)) {
            $this->_usedProperties['duplicateCheckFields'] = true;
            $this->duplicateCheckFields = $value['duplicateCheckFields'];
            unset($value['duplicateCheckFields']);
        }

        if (array_key_exists('duplicateCheckTrimmedFields', $value)) {
            $this->_usedProperties['duplicateCheckTrimmedFields'] = true;
            $this->duplicateCheckTrimmedFields = $value['duplicateCheckTrimmedFields'];
            unset($value['duplicateCheckTrimmedFields']);
        }

        if (array_key_exists('duplicates_view', $value)) {
            $this->_usedProperties['duplicatesView'] = true;
            $this->duplicatesView = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesViewConfig($value['duplicates_view']);
            unset($value['duplicates_view']);
        }

        if (array_key_exists('duplicates_index', $value)) {
            $this->_usedProperties['duplicatesIndex'] = true;
            $this->duplicatesIndex = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices\DuplicatesIndexConfig($value['duplicates_index']);
            unset($value['duplicates_index']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['duplicateCheckFields'])) {
            $output['duplicateCheckFields'] = $this->duplicateCheckFields;
        }
        if (isset($this->_usedProperties['duplicateCheckTrimmedFields'])) {
            $output['duplicateCheckTrimmedFields'] = $this->duplicateCheckTrimmedFields;
        }
        if (isset($this->_usedProperties['duplicatesView'])) {
            $output['duplicates_view'] = $this->duplicatesView->toArray();
        }
        if (isset($this->_usedProperties['duplicatesIndex'])) {
            $output['duplicates_index'] = $this->duplicatesIndex->toArray();
        }

        return $output;
    }

}
