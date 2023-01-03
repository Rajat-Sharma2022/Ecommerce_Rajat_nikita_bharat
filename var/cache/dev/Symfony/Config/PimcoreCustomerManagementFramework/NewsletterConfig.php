<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Newsletter'.\DIRECTORY_SEPARATOR.'MailchimpConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NewsletterConfig 
{
    private $newsletterSyncEnabled;
    private $newsletterQueueImmediateAsyncExecutionEnabled;
    private $mailchimp;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function newsletterSyncEnabled($value): self
    {
        $this->_usedProperties['newsletterSyncEnabled'] = true;
        $this->newsletterSyncEnabled = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function newsletterQueueImmediateAsyncExecutionEnabled($value): self
    {
        $this->_usedProperties['newsletterQueueImmediateAsyncExecutionEnabled'] = true;
        $this->newsletterQueueImmediateAsyncExecutionEnabled = $value;

        return $this;
    }

    public function mailchimp(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\Newsletter\MailchimpConfig
    {
        if (null === $this->mailchimp) {
            $this->_usedProperties['mailchimp'] = true;
            $this->mailchimp = new \Symfony\Config\PimcoreCustomerManagementFramework\Newsletter\MailchimpConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mailchimp()" has already been initialized. You cannot pass values the second time you call mailchimp().');
        }

        return $this->mailchimp;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('newsletterSyncEnabled', $value)) {
            $this->_usedProperties['newsletterSyncEnabled'] = true;
            $this->newsletterSyncEnabled = $value['newsletterSyncEnabled'];
            unset($value['newsletterSyncEnabled']);
        }

        if (array_key_exists('newsletterQueueImmediateAsyncExecutionEnabled', $value)) {
            $this->_usedProperties['newsletterQueueImmediateAsyncExecutionEnabled'] = true;
            $this->newsletterQueueImmediateAsyncExecutionEnabled = $value['newsletterQueueImmediateAsyncExecutionEnabled'];
            unset($value['newsletterQueueImmediateAsyncExecutionEnabled']);
        }

        if (array_key_exists('mailchimp', $value)) {
            $this->_usedProperties['mailchimp'] = true;
            $this->mailchimp = new \Symfony\Config\PimcoreCustomerManagementFramework\Newsletter\MailchimpConfig($value['mailchimp']);
            unset($value['mailchimp']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['newsletterSyncEnabled'])) {
            $output['newsletterSyncEnabled'] = $this->newsletterSyncEnabled;
        }
        if (isset($this->_usedProperties['newsletterQueueImmediateAsyncExecutionEnabled'])) {
            $output['newsletterQueueImmediateAsyncExecutionEnabled'] = $this->newsletterQueueImmediateAsyncExecutionEnabled;
        }
        if (isset($this->_usedProperties['mailchimp'])) {
            $output['mailchimp'] = $this->mailchimp->toArray();
        }

        return $output;
    }

}
