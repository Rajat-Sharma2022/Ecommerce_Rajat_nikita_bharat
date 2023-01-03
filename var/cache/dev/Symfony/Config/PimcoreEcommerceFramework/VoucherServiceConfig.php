<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'VoucherService'.\DIRECTORY_SEPARATOR.'VoucherServiceOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'VoucherService'.\DIRECTORY_SEPARATOR.'TokenManagersConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VoucherServiceConfig 
{
    private $voucherServiceId;
    private $voucherServiceOptions;
    private $tokenManagers;
    private $_usedProperties = [];

    /**
     * Service id of voucher service implementation
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\VoucherService\\DefaultService'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function voucherServiceId($value): self
    {
        $this->_usedProperties['voucherServiceId'] = true;
        $this->voucherServiceId = $value;

        return $this;
    }

    public function voucherServiceOptions(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\VoucherService\VoucherServiceOptionsConfig
    {
        if (null === $this->voucherServiceOptions) {
            $this->_usedProperties['voucherServiceOptions'] = true;
            $this->voucherServiceOptions = new \Symfony\Config\PimcoreEcommerceFramework\VoucherService\VoucherServiceOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "voucherServiceOptions()" has already been initialized. You cannot pass values the second time you call voucherServiceOptions().');
        }

        return $this->voucherServiceOptions;
    }

    public function tokenManagers(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\VoucherService\TokenManagersConfig
    {
        if (null === $this->tokenManagers) {
            $this->_usedProperties['tokenManagers'] = true;
            $this->tokenManagers = new \Symfony\Config\PimcoreEcommerceFramework\VoucherService\TokenManagersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tokenManagers()" has already been initialized. You cannot pass values the second time you call tokenManagers().');
        }

        return $this->tokenManagers;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('voucher_service_id', $value)) {
            $this->_usedProperties['voucherServiceId'] = true;
            $this->voucherServiceId = $value['voucher_service_id'];
            unset($value['voucher_service_id']);
        }

        if (array_key_exists('voucher_service_options', $value)) {
            $this->_usedProperties['voucherServiceOptions'] = true;
            $this->voucherServiceOptions = new \Symfony\Config\PimcoreEcommerceFramework\VoucherService\VoucherServiceOptionsConfig($value['voucher_service_options']);
            unset($value['voucher_service_options']);
        }

        if (array_key_exists('token_managers', $value)) {
            $this->_usedProperties['tokenManagers'] = true;
            $this->tokenManagers = new \Symfony\Config\PimcoreEcommerceFramework\VoucherService\TokenManagersConfig($value['token_managers']);
            unset($value['token_managers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['voucherServiceId'])) {
            $output['voucher_service_id'] = $this->voucherServiceId;
        }
        if (isset($this->_usedProperties['voucherServiceOptions'])) {
            $output['voucher_service_options'] = $this->voucherServiceOptions->toArray();
        }
        if (isset($this->_usedProperties['tokenManagers'])) {
            $output['token_managers'] = $this->tokenManagers->toArray();
        }

        return $output;
    }

}
