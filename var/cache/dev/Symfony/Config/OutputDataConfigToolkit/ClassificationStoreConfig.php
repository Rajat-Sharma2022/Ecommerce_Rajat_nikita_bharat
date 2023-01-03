<?php

namespace Symfony\Config\OutputDataConfigToolkit;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ClassificationStoreConfig 
{
    private $displayMode;
    private $_usedProperties = [];

    /**
     * possible values are [all, object, relevant, none]
     * @default 'relevant'
     * @param ParamConfigurator|'all'|'object'|'relevant'|'none' $value
     * @return $this
     */
    public function displayMode($value): self
    {
        $this->_usedProperties['displayMode'] = true;
        $this->displayMode = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('display_mode', $value)) {
            $this->_usedProperties['displayMode'] = true;
            $this->displayMode = $value['display_mode'];
            unset($value['display_mode']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['displayMode'])) {
            $output['display_mode'] = $this->displayMode;
        }

        return $output;
    }

}
