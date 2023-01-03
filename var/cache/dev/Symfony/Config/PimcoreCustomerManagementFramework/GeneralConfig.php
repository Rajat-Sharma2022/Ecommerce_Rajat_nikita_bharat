<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GeneralConfig 
{
    private $customerPimcoreClass;
    private $mailBlackListFile;
    private $_usedProperties = [];

    /**
     * @default 'Customer'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customerPimcoreClass($value): self
    {
        $this->_usedProperties['customerPimcoreClass'] = true;
        $this->customerPimcoreClass = $value;

        return $this;
    }

    /**
     * @default '/var/www/html/EcommerceProject/ecom/var/config/cmf/mail-blacklist.txt'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mailBlackListFile($value): self
    {
        $this->_usedProperties['mailBlackListFile'] = true;
        $this->mailBlackListFile = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('customerPimcoreClass', $value)) {
            $this->_usedProperties['customerPimcoreClass'] = true;
            $this->customerPimcoreClass = $value['customerPimcoreClass'];
            unset($value['customerPimcoreClass']);
        }

        if (array_key_exists('mailBlackListFile', $value)) {
            $this->_usedProperties['mailBlackListFile'] = true;
            $this->mailBlackListFile = $value['mailBlackListFile'];
            unset($value['mailBlackListFile']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['customerPimcoreClass'])) {
            $output['customerPimcoreClass'] = $this->customerPimcoreClass;
        }
        if (isset($this->_usedProperties['mailBlackListFile'])) {
            $output['mailBlackListFile'] = $this->mailBlackListFile;
        }

        return $output;
    }

}
