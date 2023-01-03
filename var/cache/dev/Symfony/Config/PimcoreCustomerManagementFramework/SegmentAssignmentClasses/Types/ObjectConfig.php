<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ObjectConfig 
{
    private $folder;
    private $object;
    private $variant;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function folder($value): self
    {
        $this->_usedProperties['folder'] = true;
        $this->folder = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<bool|ParamConfigurator> $value
     * @return $this
     */
    public function object($value): self
    {
        $this->_usedProperties['object'] = true;
        $this->object = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<bool|ParamConfigurator> $value
     * @return $this
     */
    public function variant($value): self
    {
        $this->_usedProperties['variant'] = true;
        $this->variant = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('folder', $value)) {
            $this->_usedProperties['folder'] = true;
            $this->folder = $value['folder'];
            unset($value['folder']);
        }

        if (array_key_exists('object', $value)) {
            $this->_usedProperties['object'] = true;
            $this->object = $value['object'];
            unset($value['object']);
        }

        if (array_key_exists('variant', $value)) {
            $this->_usedProperties['variant'] = true;
            $this->variant = $value['variant'];
            unset($value['variant']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['folder'])) {
            $output['folder'] = $this->folder;
        }
        if (isset($this->_usedProperties['object'])) {
            $output['object'] = $this->object;
        }
        if (isset($this->_usedProperties['variant'])) {
            $output['variant'] = $this->variant;
        }

        return $output;
    }

}
