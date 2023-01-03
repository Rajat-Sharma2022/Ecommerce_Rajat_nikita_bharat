<?php

namespace Symfony\Config\PimcoreEcommerceFramework\PricingManager;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TenantsConfig'.\DIRECTORY_SEPARATOR.'PricingManagerOptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TenantsConfig 
{
    private $enabled;
    private $pricingManagerId;
    private $pricingManagerOptions;
    private $_usedProperties = [];

    /**
     * @default true
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
     * Service id of pricing manager
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\PricingManager\\PricingManager'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pricingManagerId($value): self
    {
        $this->_usedProperties['pricingManagerId'] = true;
        $this->pricingManagerId = $value;

        return $this;
    }

    public function pricingManagerOptions(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig\PricingManagerOptionsConfig
    {
        if (null === $this->pricingManagerOptions) {
            $this->_usedProperties['pricingManagerOptions'] = true;
            $this->pricingManagerOptions = new \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig\PricingManagerOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pricingManagerOptions()" has already been initialized. You cannot pass values the second time you call pricingManagerOptions().');
        }

        return $this->pricingManagerOptions;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('pricing_manager_id', $value)) {
            $this->_usedProperties['pricingManagerId'] = true;
            $this->pricingManagerId = $value['pricing_manager_id'];
            unset($value['pricing_manager_id']);
        }

        if (array_key_exists('pricing_manager_options', $value)) {
            $this->_usedProperties['pricingManagerOptions'] = true;
            $this->pricingManagerOptions = new \Symfony\Config\PimcoreEcommerceFramework\PricingManager\TenantsConfig\PricingManagerOptionsConfig($value['pricing_manager_options']);
            unset($value['pricing_manager_options']);
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
        if (isset($this->_usedProperties['pricingManagerId'])) {
            $output['pricing_manager_id'] = $this->pricingManagerId;
        }
        if (isset($this->_usedProperties['pricingManagerOptions'])) {
            $output['pricing_manager_options'] = $this->pricingManagerOptions->toArray();
        }

        return $output;
    }

}
