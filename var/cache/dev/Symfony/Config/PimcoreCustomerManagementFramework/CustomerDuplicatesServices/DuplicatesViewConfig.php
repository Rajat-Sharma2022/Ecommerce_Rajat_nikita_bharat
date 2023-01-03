<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServices;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DuplicatesViewConfig 
{
    private $enabled;
    private $listFields;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<array|ParamConfigurator> $value
     * @return $this
     */
    public function listFields($value): self
    {
        $this->_usedProperties['listFields'] = true;
        $this->listFields = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('listFields', $value)) {
            $this->_usedProperties['listFields'] = true;
            $this->listFields = $value['listFields'];
            unset($value['listFields']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['listFields'])) {
            $output['listFields'] = $this->listFields;
        }

        return $output;
    }

}
