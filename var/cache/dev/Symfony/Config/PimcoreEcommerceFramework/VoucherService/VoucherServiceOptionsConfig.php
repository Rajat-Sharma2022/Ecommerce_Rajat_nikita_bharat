<?php

namespace Symfony\Config\PimcoreEcommerceFramework\VoucherService;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VoucherServiceOptionsConfig 
{
    private $reservationMinutesThreshold;
    private $statisticsDaysThreshold;
    private $_usedProperties = [];

    /**
     * Reservations older than x MINUTES get removed by maintenance task
     * @default 5
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function reservationMinutesThreshold($value): self
    {
        $this->_usedProperties['reservationMinutesThreshold'] = true;
        $this->reservationMinutesThreshold = $value;

        return $this;
    }

    /**
     * Statistics older than x DAYS get removed by maintenance task
     * @default 30
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function statisticsDaysThreshold($value): self
    {
        $this->_usedProperties['statisticsDaysThreshold'] = true;
        $this->statisticsDaysThreshold = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('reservation_minutes_threshold', $value)) {
            $this->_usedProperties['reservationMinutesThreshold'] = true;
            $this->reservationMinutesThreshold = $value['reservation_minutes_threshold'];
            unset($value['reservation_minutes_threshold']);
        }

        if (array_key_exists('statistics_days_threshold', $value)) {
            $this->_usedProperties['statisticsDaysThreshold'] = true;
            $this->statisticsDaysThreshold = $value['statistics_days_threshold'];
            unset($value['statistics_days_threshold']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['reservationMinutesThreshold'])) {
            $output['reservation_minutes_threshold'] = $this->reservationMinutesThreshold;
        }
        if (isset($this->_usedProperties['statisticsDaysThreshold'])) {
            $output['statistics_days_threshold'] = $this->statisticsDaysThreshold;
        }

        return $output;
    }

}
