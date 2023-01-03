<?php

namespace Symfony\Config\PimcoreEcommerceFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TrackingManager'.\DIRECTORY_SEPARATOR.'TrackersConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TrackingManagerConfig 
{
    private $trackingManagerId;
    private $trackers;
    private $_usedProperties = [];

    /**
     * Service id of tracking manager
     * @default 'Pimcore\\Bundle\\EcommerceFrameworkBundle\\Tracking\\TrackingManager'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function trackingManagerId($value): self
    {
        $this->_usedProperties['trackingManagerId'] = true;
        $this->trackingManagerId = $value;

        return $this;
    }

    public function trackers(string $name, array $value = []): \Symfony\Config\PimcoreEcommerceFramework\TrackingManager\TrackersConfig
    {
        if (!isset($this->trackers[$name])) {
            $this->_usedProperties['trackers'] = true;
            $this->trackers[$name] = new \Symfony\Config\PimcoreEcommerceFramework\TrackingManager\TrackersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "trackers()" has already been initialized. You cannot pass values the second time you call trackers().');
        }

        return $this->trackers[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('tracking_manager_id', $value)) {
            $this->_usedProperties['trackingManagerId'] = true;
            $this->trackingManagerId = $value['tracking_manager_id'];
            unset($value['tracking_manager_id']);
        }

        if (array_key_exists('trackers', $value)) {
            $this->_usedProperties['trackers'] = true;
            $this->trackers = array_map(function ($v) { return new \Symfony\Config\PimcoreEcommerceFramework\TrackingManager\TrackersConfig($v); }, $value['trackers']);
            unset($value['trackers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['trackingManagerId'])) {
            $output['tracking_manager_id'] = $this->trackingManagerId;
        }
        if (isset($this->_usedProperties['trackers'])) {
            $output['trackers'] = array_map(function ($v) { return $v->toArray(); }, $this->trackers);
        }

        return $output;
    }

}
