<?php

namespace Symfony\Config\PimcoreEcommerceFramework\CheckoutManager;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'PaymentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'CommitOrderProcessorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'StepsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TenantsConfig 
{
    private $factoryId;
    private $factoryOptions;
    private $payment;
    private $commitOrderProcessor;
    private $steps;
    private $_usedProperties = [];

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\CheckoutManager\\CheckoutManagerFactory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factoryId($value): self
    {
        $this->_usedProperties['factoryId'] = true;
        $this->factoryId = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factoryOptions($value = array (
    )): self
    {
        $this->_usedProperties['factoryOptions'] = true;
        $this->factoryOptions = $value;

        return $this;
    }

    public function payment(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\PaymentConfig
    {
        if (null === $this->payment) {
            $this->_usedProperties['payment'] = true;
            $this->payment = new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\PaymentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "payment()" has already been initialized. You cannot pass values the second time you call payment().');
        }

        return $this->payment;
    }

    public function commitOrderProcessor(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\CommitOrderProcessorConfig
    {
        if (null === $this->commitOrderProcessor) {
            $this->_usedProperties['commitOrderProcessor'] = true;
            $this->commitOrderProcessor = new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\CommitOrderProcessorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "commitOrderProcessor()" has already been initialized. You cannot pass values the second time you call commitOrderProcessor().');
        }

        return $this->commitOrderProcessor;
    }

    public function steps(string $name, array $value = []): \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\StepsConfig
    {
        if (!isset($this->steps[$name])) {
            $this->_usedProperties['steps'] = true;
            $this->steps[$name] = new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\StepsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "steps()" has already been initialized. You cannot pass values the second time you call steps().');
        }

        return $this->steps[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('factory_id', $value)) {
            $this->_usedProperties['factoryId'] = true;
            $this->factoryId = $value['factory_id'];
            unset($value['factory_id']);
        }

        if (array_key_exists('factory_options', $value)) {
            $this->_usedProperties['factoryOptions'] = true;
            $this->factoryOptions = $value['factory_options'];
            unset($value['factory_options']);
        }

        if (array_key_exists('payment', $value)) {
            $this->_usedProperties['payment'] = true;
            $this->payment = new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\PaymentConfig($value['payment']);
            unset($value['payment']);
        }

        if (array_key_exists('commit_order_processor', $value)) {
            $this->_usedProperties['commitOrderProcessor'] = true;
            $this->commitOrderProcessor = new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\CommitOrderProcessorConfig($value['commit_order_processor']);
            unset($value['commit_order_processor']);
        }

        if (array_key_exists('steps', $value)) {
            $this->_usedProperties['steps'] = true;
            $this->steps = array_map(function ($v) { return new \Symfony\Config\PimcoreEcommerceFramework\CheckoutManager\TenantsConfig\StepsConfig($v); }, $value['steps']);
            unset($value['steps']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['factoryId'])) {
            $output['factory_id'] = $this->factoryId;
        }
        if (isset($this->_usedProperties['factoryOptions'])) {
            $output['factory_options'] = $this->factoryOptions;
        }
        if (isset($this->_usedProperties['payment'])) {
            $output['payment'] = $this->payment->toArray();
        }
        if (isset($this->_usedProperties['commitOrderProcessor'])) {
            $output['commit_order_processor'] = $this->commitOrderProcessor->toArray();
        }
        if (isset($this->_usedProperties['steps'])) {
            $output['steps'] = array_map(function ($v) { return $v->toArray(); }, $this->steps);
        }

        return $output;
    }

}
