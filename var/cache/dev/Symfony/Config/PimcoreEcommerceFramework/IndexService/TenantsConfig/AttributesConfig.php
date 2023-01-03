<?php

namespace Symfony\Config\PimcoreEcommerceFramework\IndexService\TenantsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AttributesConfig 
{
    private $name;
    private $fieldName;
    private $type;
    private $locale;
    private $filterGroup;
    private $options;
    private $getterId;
    private $getterOptions;
    private $interpreterId;
    private $interpreterOptions;
    private $hideInFieldlistDatatype;
    private $placeholders;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * Defines object attribute field name, can be omitted if the same like name of index attribute
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldName($value): self
    {
        $this->_usedProperties['fieldName'] = true;
        $this->fieldName = $value;

        return $this;
    }

    /**
     * Type of index attribute (database column or elastic search data type)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * Locale for localized fields, can be omitted if not necessary
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): self
    {
        $this->_usedProperties['locale'] = true;
        $this->locale = $value;

        return $this;
    }

    /**
     * Defines filter group for filter definition in filter service
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterGroup($value): self
    {
        $this->_usedProperties['filterGroup'] = true;
        $this->filterGroup = $value;

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

    /**
     * Service id of getter for this field
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function getterId($value): self
    {
        $this->_usedProperties['getterId'] = true;
        $this->getterId = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function getterOptions($value = array (
    )): self
    {
        $this->_usedProperties['getterOptions'] = true;
        $this->getterOptions = $value;

        return $this;
    }

    /**
     * Service id of interpreter for this field
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function interpreterId($value): self
    {
        $this->_usedProperties['interpreterId'] = true;
        $this->interpreterId = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function interpreterOptions($value = array (
    )): self
    {
        $this->_usedProperties['interpreterOptions'] = true;
        $this->interpreterOptions = $value;

        return $this;
    }

    /**
     * Hides field in field list selection data type of filter service - default to false
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function hideInFieldlistDatatype($value): self
    {
        $this->_usedProperties['hideInFieldlistDatatype'] = true;
        $this->hideInFieldlistDatatype = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function placeholders($value): self
    {
        $this->_usedProperties['placeholders'] = true;
        $this->placeholders = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('field_name', $value)) {
            $this->_usedProperties['fieldName'] = true;
            $this->fieldName = $value['field_name'];
            unset($value['field_name']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('locale', $value)) {
            $this->_usedProperties['locale'] = true;
            $this->locale = $value['locale'];
            unset($value['locale']);
        }

        if (array_key_exists('filter_group', $value)) {
            $this->_usedProperties['filterGroup'] = true;
            $this->filterGroup = $value['filter_group'];
            unset($value['filter_group']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if (array_key_exists('getter_id', $value)) {
            $this->_usedProperties['getterId'] = true;
            $this->getterId = $value['getter_id'];
            unset($value['getter_id']);
        }

        if (array_key_exists('getter_options', $value)) {
            $this->_usedProperties['getterOptions'] = true;
            $this->getterOptions = $value['getter_options'];
            unset($value['getter_options']);
        }

        if (array_key_exists('interpreter_id', $value)) {
            $this->_usedProperties['interpreterId'] = true;
            $this->interpreterId = $value['interpreter_id'];
            unset($value['interpreter_id']);
        }

        if (array_key_exists('interpreter_options', $value)) {
            $this->_usedProperties['interpreterOptions'] = true;
            $this->interpreterOptions = $value['interpreter_options'];
            unset($value['interpreter_options']);
        }

        if (array_key_exists('hide_in_fieldlist_datatype', $value)) {
            $this->_usedProperties['hideInFieldlistDatatype'] = true;
            $this->hideInFieldlistDatatype = $value['hide_in_fieldlist_datatype'];
            unset($value['hide_in_fieldlist_datatype']);
        }

        if (array_key_exists('placeholders', $value)) {
            $this->_usedProperties['placeholders'] = true;
            $this->placeholders = $value['placeholders'];
            unset($value['placeholders']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['fieldName'])) {
            $output['field_name'] = $this->fieldName;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['locale'])) {
            $output['locale'] = $this->locale;
        }
        if (isset($this->_usedProperties['filterGroup'])) {
            $output['filter_group'] = $this->filterGroup;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
        if (isset($this->_usedProperties['getterId'])) {
            $output['getter_id'] = $this->getterId;
        }
        if (isset($this->_usedProperties['getterOptions'])) {
            $output['getter_options'] = $this->getterOptions;
        }
        if (isset($this->_usedProperties['interpreterId'])) {
            $output['interpreter_id'] = $this->interpreterId;
        }
        if (isset($this->_usedProperties['interpreterOptions'])) {
            $output['interpreter_options'] = $this->interpreterOptions;
        }
        if (isset($this->_usedProperties['hideInFieldlistDatatype'])) {
            $output['hide_in_fieldlist_datatype'] = $this->hideInFieldlistDatatype;
        }
        if (isset($this->_usedProperties['placeholders'])) {
            $output['placeholders'] = $this->placeholders;
        }

        return $output;
    }

}
