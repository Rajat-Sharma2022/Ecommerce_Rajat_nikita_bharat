<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OutputDataConfigToolkit'.\DIRECTORY_SEPARATOR.'ClassificationStoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OutputDataConfigToolkit'.\DIRECTORY_SEPARATOR.'TabOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OutputDataConfigToolkitConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $classificationStore;
    private $tabOptions;
    private $_usedProperties = [];

    public function classificationStore(array $value = []): \Symfony\Config\OutputDataConfigToolkit\ClassificationStoreConfig
    {
        if (null === $this->classificationStore) {
            $this->_usedProperties['classificationStore'] = true;
            $this->classificationStore = new \Symfony\Config\OutputDataConfigToolkit\ClassificationStoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classificationStore()" has already been initialized. You cannot pass values the second time you call classificationStore().');
        }

        return $this->classificationStore;
    }

    public function tabOptions(array $value = []): \Symfony\Config\OutputDataConfigToolkit\TabOptionsConfig
    {
        if (null === $this->tabOptions) {
            $this->_usedProperties['tabOptions'] = true;
            $this->tabOptions = new \Symfony\Config\OutputDataConfigToolkit\TabOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tabOptions()" has already been initialized. You cannot pass values the second time you call tabOptions().');
        }

        return $this->tabOptions;
    }

    public function getExtensionAlias(): string
    {
        return 'output_data_config_toolkit';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('classification_store', $value)) {
            $this->_usedProperties['classificationStore'] = true;
            $this->classificationStore = new \Symfony\Config\OutputDataConfigToolkit\ClassificationStoreConfig($value['classification_store']);
            unset($value['classification_store']);
        }

        if (array_key_exists('tab_options', $value)) {
            $this->_usedProperties['tabOptions'] = true;
            $this->tabOptions = new \Symfony\Config\OutputDataConfigToolkit\TabOptionsConfig($value['tab_options']);
            unset($value['tab_options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['classificationStore'])) {
            $output['classification_store'] = $this->classificationStore->toArray();
        }
        if (isset($this->_usedProperties['tabOptions'])) {
            $output['tab_options'] = $this->tabOptions->toArray();
        }

        return $output;
    }

}
