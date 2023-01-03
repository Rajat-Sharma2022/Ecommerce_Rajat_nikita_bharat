<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'MenuConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreConfig 
{
    private $menu;
    private $_usedProperties = [];

    public function menu(array $value = []): \Symfony\Config\PimcoreEcommerceFramework\Pimcore\MenuConfig
    {
        if (null === $this->menu) {
            $this->_usedProperties['menu'] = true;
            $this->menu = new \Symfony\Config\PimcoreEcommerceFramework\Pimcore\MenuConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "menu()" has already been initialized. You cannot pass values the second time you call menu().');
        }

        return $this->menu;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('menu', $value)) {
            $this->_usedProperties['menu'] = true;
            $this->menu = new \Symfony\Config\PimcoreEcommerceFramework\Pimcore\MenuConfig($value['menu']);
            unset($value['menu']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['menu'])) {
            $output['menu'] = $this->menu->toArray();
        }

        return $output;
    }

}
