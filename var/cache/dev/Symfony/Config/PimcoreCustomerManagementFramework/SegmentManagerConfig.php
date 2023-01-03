<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SegmentManager'.\DIRECTORY_SEPARATOR.'SegmentFolderConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SegmentManagerConfig 
{
    private $segmentFolder;
    private $_usedProperties = [];

    public function segmentFolder(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\SegmentManager\SegmentFolderConfig
    {
        if (null === $this->segmentFolder) {
            $this->_usedProperties['segmentFolder'] = true;
            $this->segmentFolder = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentManager\SegmentFolderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "segmentFolder()" has already been initialized. You cannot pass values the second time you call segmentFolder().');
        }

        return $this->segmentFolder;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('segmentFolder', $value)) {
            $this->_usedProperties['segmentFolder'] = true;
            $this->segmentFolder = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentManager\SegmentFolderConfig($value['segmentFolder']);
            unset($value['segmentFolder']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['segmentFolder'])) {
            $output['segmentFolder'] = $this->segmentFolder->toArray();
        }

        return $output;
    }

}
