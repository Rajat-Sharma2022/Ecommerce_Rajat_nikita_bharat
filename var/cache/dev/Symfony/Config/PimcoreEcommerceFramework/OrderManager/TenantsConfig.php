<?php

namespace Symfony\Config\PimcoreEcommerceFramework\OrderManager;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'OrderAgentConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TenantsConfig 
{
    private $orderManagerId;
    private $options;
    private $orderAgent;
    private $_usedProperties = [];

    /**
     * Service id for order manager implementation
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\OrderManager\\V7\\OrderManager'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function orderManagerId($value): self
    {
        $this->_usedProperties['orderManagerId'] = true;
        $this->orderManagerId = $value;

        return $this;
    }

    public function options(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\OrderManager\TenantsConfig\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\PimcoreEcommerceFramework\OrderManager\TenantsConfig\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    public function orderAgent(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\OrderManager\TenantsConfig\OrderAgentConfig
    {
        if (null === $this->orderAgent) {
            $this->_usedProperties['orderAgent'] = true;
            $this->orderAgent = new \Symfony\Config\PimcoreEcommerceFramework\OrderManager\TenantsConfig\OrderAgentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "orderAgent()" has already been initialized. You cannot pass values the second time you call orderAgent().');
        }

        return $this->orderAgent;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('order_manager_id', $value)) {
            $this->_usedProperties['orderManagerId'] = true;
            $this->orderManagerId = $value['order_manager_id'];
            unset($value['order_manager_id']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\PimcoreEcommerceFramework\OrderManager\TenantsConfig\OptionsConfig($value['options']);
            unset($value['options']);
        }

        if (array_key_exists('order_agent', $value)) {
            $this->_usedProperties['orderAgent'] = true;
            $this->orderAgent = new \Symfony\Config\PimcoreEcommerceFramework\OrderManager\TenantsConfig\OrderAgentConfig($value['order_agent']);
            unset($value['order_agent']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['orderManagerId'])) {
            $output['order_manager_id'] = $this->orderManagerId;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }
        if (isset($this->_usedProperties['orderAgent'])) {
            $output['order_agent'] = $this->orderAgent->toArray();
        }

        return $output;
    }

}
