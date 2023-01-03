<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'GdprDataProvider'.\DIRECTORY_SEPARATOR.'CustomerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GdprDataProviderConfig 
{
    private $customer;
    private $_usedProperties = [];

    public function customer(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\GdprDataProvider\CustomerConfig
    {
        if (null === $this->customer) {
            $this->_usedProperties['customer'] = true;
            $this->customer = new \Symfony\Config\PimcoreCustomerManagementFramework\GdprDataProvider\CustomerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customer()" has already been initialized. You cannot pass values the second time you call customer().');
        }

        return $this->customer;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('customer', $value)) {
            $this->_usedProperties['customer'] = true;
            $this->customer = new \Symfony\Config\PimcoreCustomerManagementFramework\GdprDataProvider\CustomerConfig($value['customer']);
            unset($value['customer']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['customer'])) {
            $output['customer'] = $this->customer->toArray();
        }

        return $output;
    }

}
