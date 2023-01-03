<?php

namespace Symfony\Config\PimcoreEcommerceFramework\FilterService\TenantsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FilterTypesConfig 
{
    private $filterTypeId;
    private $template;
    private $options;
    private $_usedProperties = [];

    /**
     * Service id for filter type implementation
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterTypeId($value): self
    {
        $this->_usedProperties['filterTypeId'] = true;
        $this->filterTypeId = $value;

        return $this;
    }

    /**
     * Default template for filter, can be overwritten in filter definition
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): self
    {
        $this->_usedProperties['template'] = true;
        $this->template = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value = array (
    )): self
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('filter_type_id', $value)) {
            $this->_usedProperties['filterTypeId'] = true;
            $this->filterTypeId = $value['filter_type_id'];
            unset($value['filter_type_id']);
        }

        if (array_key_exists('template', $value)) {
            $this->_usedProperties['template'] = true;
            $this->template = $value['template'];
            unset($value['template']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['filterTypeId'])) {
            $output['filter_type_id'] = $this->filterTypeId;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }

        return $output;
    }

}
