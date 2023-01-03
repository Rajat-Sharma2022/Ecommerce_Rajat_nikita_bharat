<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\SegmentManager;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SegmentFolderConfig 
{
    private $manual;
    private $calculated;
    private $_usedProperties = [];

    /**
     * parent folder of manual segments + segment groups
     * @default '/segments/manual'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function manual($value): self
    {
        $this->_usedProperties['manual'] = true;
        $this->manual = $value;

        return $this;
    }

    /**
     * parent folder of calculated segments + segment groups
     * @default '/segments/calculated'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function calculated($value): self
    {
        $this->_usedProperties['calculated'] = true;
        $this->calculated = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('manual', $value)) {
            $this->_usedProperties['manual'] = true;
            $this->manual = $value['manual'];
            unset($value['manual']);
        }

        if (array_key_exists('calculated', $value)) {
            $this->_usedProperties['calculated'] = true;
            $this->calculated = $value['calculated'];
            unset($value['calculated']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['manual'])) {
            $output['manual'] = $this->manual;
        }
        if (isset($this->_usedProperties['calculated'])) {
            $output['calculated'] = $this->calculated;
        }

        return $output;
    }

}
