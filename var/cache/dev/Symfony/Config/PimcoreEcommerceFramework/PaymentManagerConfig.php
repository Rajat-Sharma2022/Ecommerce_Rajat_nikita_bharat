<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PaymentManager'.\DIRECTORY_SEPARATOR.'ProvidersConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PaymentManagerConfig 
{
    private $paymentManagerId;
    private $providers;
    private $_usedProperties = [];

    /**
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PaymentManager\\PaymentManager'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paymentManagerId($value): self
    {
        $this->_usedProperties['paymentManagerId'] = true;
        $this->paymentManagerId = $value;

        return $this;
    }

    public function providers(string $name, array $value = []): \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig
    {
        if (!isset($this->providers[$name])) {
            $this->_usedProperties['providers'] = true;
            $this->providers[$name] = new \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "providers()" has already been initialized. You cannot pass values the second time you call providers().');
        }

        return $this->providers[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('payment_manager_id', $value)) {
            $this->_usedProperties['paymentManagerId'] = true;
            $this->paymentManagerId = $value['payment_manager_id'];
            unset($value['payment_manager_id']);
        }

        if (array_key_exists('providers', $value)) {
            $this->_usedProperties['providers'] = true;
            $this->providers = array_map(function ($v) { return new \Symfony\Config\PimcoreEcommerceFramework\PaymentManager\ProvidersConfig($v); }, $value['providers']);
            unset($value['providers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['paymentManagerId'])) {
            $output['payment_manager_id'] = $this->paymentManagerId;
        }
        if (isset($this->_usedProperties['providers'])) {
            $output['providers'] = array_map(function ($v) { return $v->toArray(); }, $this->providers);
        }

        return $output;
    }

}
