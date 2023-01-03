<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomerProviderConfig 
{
    private $parentPath;
    private $archiveDir;
    private $namingScheme;
    private $newCustomersTempDir;
    private $_usedProperties = [];

    /**
     * parent folder for active customers
     * @default '/customers'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parentPath($value): self
    {
        $this->_usedProperties['parentPath'] = true;
        $this->parentPath = $value;

        return $this;
    }

    /**
     * parent folder for customers which are unpublished and inactive
     * @default '/customers/_archive'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function archiveDir($value): self
    {
        $this->_usedProperties['archiveDir'] = true;
        $this->archiveDir = $value;

        return $this;
    }

    /**
     * If a naming scheme is configured customer objects will be automatically renamend and moved to the configured folder structure as soon as the naming scheme gets applied.
     * @example {countryCode}/{zip}/{firstname}-{lastname}
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namingScheme($value): self
    {
        $this->_usedProperties['namingScheme'] = true;
        $this->namingScheme = $value;

        return $this;
    }

    /**
     * parent folder for customers which are created via the "new customer" button in the customer list view
     * @default '/customers/_temp'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function newCustomersTempDir($value): self
    {
        $this->_usedProperties['newCustomersTempDir'] = true;
        $this->newCustomersTempDir = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('parentPath', $value)) {
            $this->_usedProperties['parentPath'] = true;
            $this->parentPath = $value['parentPath'];
            unset($value['parentPath']);
        }

        if (array_key_exists('archiveDir', $value)) {
            $this->_usedProperties['archiveDir'] = true;
            $this->archiveDir = $value['archiveDir'];
            unset($value['archiveDir']);
        }

        if (array_key_exists('namingScheme', $value)) {
            $this->_usedProperties['namingScheme'] = true;
            $this->namingScheme = $value['namingScheme'];
            unset($value['namingScheme']);
        }

        if (array_key_exists('newCustomersTempDir', $value)) {
            $this->_usedProperties['newCustomersTempDir'] = true;
            $this->newCustomersTempDir = $value['newCustomersTempDir'];
            unset($value['newCustomersTempDir']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['parentPath'])) {
            $output['parentPath'] = $this->parentPath;
        }
        if (isset($this->_usedProperties['archiveDir'])) {
            $output['archiveDir'] = $this->archiveDir;
        }
        if (isset($this->_usedProperties['namingScheme'])) {
            $output['namingScheme'] = $this->namingScheme;
        }
        if (isset($this->_usedProperties['newCustomersTempDir'])) {
            $output['newCustomersTempDir'] = $this->newCustomersTempDir;
        }

        return $output;
    }

}
