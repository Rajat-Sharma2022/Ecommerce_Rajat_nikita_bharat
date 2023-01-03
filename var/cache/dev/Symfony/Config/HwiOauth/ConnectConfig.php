<?php

namespace Symfony\Config\HwiOauth;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConnectConfig 
{
    private $confirmation;
    private $accountConnector;
    private $registrationFormHandler;
    private $registrationForm;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function confirmation($value): self
    {
        $this->_usedProperties['confirmation'] = true;
        $this->confirmation = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accountConnector($value): self
    {
        $this->_usedProperties['accountConnector'] = true;
        $this->accountConnector = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function registrationFormHandler($value): self
    {
        $this->_usedProperties['registrationFormHandler'] = true;
        $this->registrationFormHandler = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function registrationForm($value): self
    {
        $this->_usedProperties['registrationForm'] = true;
        $this->registrationForm = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('confirmation', $value)) {
            $this->_usedProperties['confirmation'] = true;
            $this->confirmation = $value['confirmation'];
            unset($value['confirmation']);
        }

        if (array_key_exists('account_connector', $value)) {
            $this->_usedProperties['accountConnector'] = true;
            $this->accountConnector = $value['account_connector'];
            unset($value['account_connector']);
        }

        if (array_key_exists('registration_form_handler', $value)) {
            $this->_usedProperties['registrationFormHandler'] = true;
            $this->registrationFormHandler = $value['registration_form_handler'];
            unset($value['registration_form_handler']);
        }

        if (array_key_exists('registration_form', $value)) {
            $this->_usedProperties['registrationForm'] = true;
            $this->registrationForm = $value['registration_form'];
            unset($value['registration_form']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['confirmation'])) {
            $output['confirmation'] = $this->confirmation;
        }
        if (isset($this->_usedProperties['accountConnector'])) {
            $output['account_connector'] = $this->accountConnector;
        }
        if (isset($this->_usedProperties['registrationFormHandler'])) {
            $output['registration_form_handler'] = $this->registrationFormHandler;
        }
        if (isset($this->_usedProperties['registrationForm'])) {
            $output['registration_form'] = $this->registrationForm;
        }

        return $output;
    }

}
