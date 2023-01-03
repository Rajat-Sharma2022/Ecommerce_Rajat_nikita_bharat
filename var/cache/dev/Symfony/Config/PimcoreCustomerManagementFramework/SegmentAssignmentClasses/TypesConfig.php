<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Types'.\DIRECTORY_SEPARATOR.'DocumentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Types'.\DIRECTORY_SEPARATOR.'AssetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Types'.\DIRECTORY_SEPARATOR.'ObjectConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TypesConfig 
{
    private $document;
    private $asset;
    private $object;
    private $_usedProperties = [];

    public function document(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\DocumentConfig
    {
        if (null === $this->document) {
            $this->_usedProperties['document'] = true;
            $this->document = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\DocumentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "document()" has already been initialized. You cannot pass values the second time you call document().');
        }

        return $this->document;
    }

    public function asset(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\AssetConfig
    {
        if (null === $this->asset) {
            $this->_usedProperties['asset'] = true;
            $this->asset = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\AssetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "asset()" has already been initialized. You cannot pass values the second time you call asset().');
        }

        return $this->asset;
    }

    public function object(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\ObjectConfig
    {
        if (null === $this->object) {
            $this->_usedProperties['object'] = true;
            $this->object = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\ObjectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "object()" has already been initialized. You cannot pass values the second time you call object().');
        }

        return $this->object;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('document', $value)) {
            $this->_usedProperties['document'] = true;
            $this->document = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\DocumentConfig($value['document']);
            unset($value['document']);
        }

        if (array_key_exists('asset', $value)) {
            $this->_usedProperties['asset'] = true;
            $this->asset = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\AssetConfig($value['asset']);
            unset($value['asset']);
        }

        if (array_key_exists('object', $value)) {
            $this->_usedProperties['object'] = true;
            $this->object = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types\ObjectConfig($value['object']);
            unset($value['object']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['document'])) {
            $output['document'] = $this->document->toArray();
        }
        if (isset($this->_usedProperties['asset'])) {
            $output['asset'] = $this->asset->toArray();
        }
        if (isset($this->_usedProperties['object'])) {
            $output['object'] = $this->object->toArray();
        }

        return $output;
    }

}
