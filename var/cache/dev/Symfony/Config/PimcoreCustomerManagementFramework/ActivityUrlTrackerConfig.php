<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ActivityUrlTrackerConfig 
{
    private $enabled;
    private $linkCmfcPlaceholder;
    private $_usedProperties = [];

    /**
     * @default true
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
     * used for automatic link generation of LinkActivityDefinition data objects
     * @default '*|ID_ENCODED|*'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function linkCmfcPlaceholder($value): self
    {
        $this->_usedProperties['linkCmfcPlaceholder'] = true;
        $this->linkCmfcPlaceholder = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('linkCmfcPlaceholder', $value)) {
            $this->_usedProperties['linkCmfcPlaceholder'] = true;
            $this->linkCmfcPlaceholder = $value['linkCmfcPlaceholder'];
            unset($value['linkCmfcPlaceholder']);
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
        if (isset($this->_usedProperties['linkCmfcPlaceholder'])) {
            $output['linkCmfcPlaceholder'] = $this->linkCmfcPlaceholder;
        }

        return $output;
    }

}
