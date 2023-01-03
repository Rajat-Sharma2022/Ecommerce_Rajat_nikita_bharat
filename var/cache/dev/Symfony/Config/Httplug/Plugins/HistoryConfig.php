<?php

namespace Symfony\Config\Httplug\Plugins;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HistoryConfig 
{
    private $enabled;
    private $journal;
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
     * This must be a service id to a service implementing Http\Client\Common\Plugin\Journal
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function journal($value): self
    {
        $this->_usedProperties['journal'] = true;
        $this->journal = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('journal', $value)) {
            $this->_usedProperties['journal'] = true;
            $this->journal = $value['journal'];
            unset($value['journal']);
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
        if (isset($this->_usedProperties['journal'])) {
            $output['journal'] = $this->journal;
        }

        return $output;
    }

}
