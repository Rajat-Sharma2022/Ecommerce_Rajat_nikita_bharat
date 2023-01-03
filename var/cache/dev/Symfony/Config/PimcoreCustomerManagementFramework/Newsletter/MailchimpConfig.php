<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\Newsletter;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MailchimpConfig 
{
    private $apiKey;
    private $cliUpdatesPimcoreUserName;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiKey($value): self
    {
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cliUpdatesPimcoreUserName($value): self
    {
        $this->_usedProperties['cliUpdatesPimcoreUserName'] = true;
        $this->cliUpdatesPimcoreUserName = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('apiKey', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['apiKey'];
            unset($value['apiKey']);
        }

        if (array_key_exists('cliUpdatesPimcoreUserName', $value)) {
            $this->_usedProperties['cliUpdatesPimcoreUserName'] = true;
            $this->cliUpdatesPimcoreUserName = $value['cliUpdatesPimcoreUserName'];
            unset($value['cliUpdatesPimcoreUserName']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apiKey'])) {
            $output['apiKey'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['cliUpdatesPimcoreUserName'])) {
            $output['cliUpdatesPimcoreUserName'] = $this->cliUpdatesPimcoreUserName;
        }

        return $output;
    }

}
