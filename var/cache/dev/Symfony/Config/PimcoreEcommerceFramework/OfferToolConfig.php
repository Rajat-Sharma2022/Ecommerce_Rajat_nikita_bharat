<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OfferTool'.\DIRECTORY_SEPARATOR.'OrderStorageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OfferToolConfig 
{
    private $serviceId;
    private $orderStorage;
    private $_usedProperties = [];

    /**
     * Service id for offer tool service
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\OfferTool\\DefaultService'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serviceId($value): self
    {
        $this->_usedProperties['serviceId'] = true;
        $this->serviceId = $value;

        return $this;
    }

    public function orderStorage(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\OfferTool\OrderStorageConfig
    {
        if (null === $this->orderStorage) {
            $this->_usedProperties['orderStorage'] = true;
            $this->orderStorage = new \Symfony\Config\PimcoreEcommerceFramework\OfferTool\OrderStorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orderStorage()" has already been initialized. You cannot pass values the second time you call orderStorage().');
        }

        return $this->orderStorage;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('service_id', $value)) {
            $this->_usedProperties['serviceId'] = true;
            $this->serviceId = $value['service_id'];
            unset($value['service_id']);
        }

        if (array_key_exists('order_storage', $value)) {
            $this->_usedProperties['orderStorage'] = true;
            $this->orderStorage = new \Symfony\Config\PimcoreEcommerceFramework\OfferTool\OrderStorageConfig($value['order_storage']);
            unset($value['order_storage']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['serviceId'])) {
            $output['service_id'] = $this->serviceId;
        }
        if (isset($this->_usedProperties['orderStorage'])) {
            $output['order_storage'] = $this->orderStorage->toArray();
        }

        return $output;
    }

}
