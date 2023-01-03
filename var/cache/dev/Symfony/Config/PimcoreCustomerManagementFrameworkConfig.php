<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'OauthClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'GeneralConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'EncryptionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'CustomerSaveManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'CustomerProviderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'CustomerSaveValidatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'SegmentManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'CustomerListConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'CustomerDuplicatesServicesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'NewsletterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'ActivityUrlTrackerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'SegmentAssignmentClassesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreCustomerManagementFramework'.\DIRECTORY_SEPARATOR.'GdprDataProviderConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreCustomerManagementFrameworkConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $oauthClient;
    private $general;
    private $encryption;
    private $customerSaveManager;
    private $customerProvider;
    private $customerSaveValidator;
    private $segmentManager;
    private $customerList;
    private $customerDuplicatesServices;
    private $newsletter;
    private $activityUrlTracker;
    private $segmentAssignmentClasses;
    private $gdprDataProvider;
    private $_usedProperties = [];

    /**
     * @return \Symfony\Config\PimcoreCustomerManagementFramework\OauthClientConfig|$this
     */
    public function oauthClient($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['oauthClient'] = true;
            $this->oauthClient = $value;

            return $this;
        }

        if (!$this->oauthClient instanceof \Symfony\Config\PimcoreCustomerManagementFramework\OauthClientConfig) {
            $this->_usedProperties['oauthClient'] = true;
            $this->oauthClient = new \Symfony\Config\PimcoreCustomerManagementFramework\OauthClientConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "oauthClient()" has already been initialized. You cannot pass values the second time you call oauthClient().');
        }

        return $this->oauthClient;
    }

    public function general(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\GeneralConfig
    {
        if (null === $this->general) {
            $this->_usedProperties['general'] = true;
            $this->general = new \Symfony\Config\PimcoreCustomerManagementFramework\GeneralConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "general()" has already been initialized. You cannot pass values the second time you call general().');
        }

        return $this->general;
    }

    public function encryption(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\EncryptionConfig
    {
        if (null === $this->encryption) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\PimcoreCustomerManagementFramework\EncryptionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "encryption()" has already been initialized. You cannot pass values the second time you call encryption().');
        }

        return $this->encryption;
    }

    public function customerSaveManager(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerSaveManagerConfig
    {
        if (null === $this->customerSaveManager) {
            $this->_usedProperties['customerSaveManager'] = true;
            $this->customerSaveManager = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerSaveManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customerSaveManager()" has already been initialized. You cannot pass values the second time you call customerSaveManager().');
        }

        return $this->customerSaveManager;
    }

    public function customerProvider(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerProviderConfig
    {
        if (null === $this->customerProvider) {
            $this->_usedProperties['customerProvider'] = true;
            $this->customerProvider = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerProviderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customerProvider()" has already been initialized. You cannot pass values the second time you call customerProvider().');
        }

        return $this->customerProvider;
    }

    public function customerSaveValidator(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerSaveValidatorConfig
    {
        if (null === $this->customerSaveValidator) {
            $this->_usedProperties['customerSaveValidator'] = true;
            $this->customerSaveValidator = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerSaveValidatorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customerSaveValidator()" has already been initialized. You cannot pass values the second time you call customerSaveValidator().');
        }

        return $this->customerSaveValidator;
    }

    public function segmentManager(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\SegmentManagerConfig
    {
        if (null === $this->segmentManager) {
            $this->_usedProperties['segmentManager'] = true;
            $this->segmentManager = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "segmentManager()" has already been initialized. You cannot pass values the second time you call segmentManager().');
        }

        return $this->segmentManager;
    }

    public function customerList(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerListConfig
    {
        if (null === $this->customerList) {
            $this->_usedProperties['customerList'] = true;
            $this->customerList = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerListConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customerList()" has already been initialized. You cannot pass values the second time you call customerList().');
        }

        return $this->customerList;
    }

    public function customerDuplicatesServices(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServicesConfig
    {
        if (null === $this->customerDuplicatesServices) {
            $this->_usedProperties['customerDuplicatesServices'] = true;
            $this->customerDuplicatesServices = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServicesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customerDuplicatesServices()" has already been initialized. You cannot pass values the second time you call customerDuplicatesServices().');
        }

        return $this->customerDuplicatesServices;
    }

    public function newsletter(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\NewsletterConfig
    {
        if (null === $this->newsletter) {
            $this->_usedProperties['newsletter'] = true;
            $this->newsletter = new \Symfony\Config\PimcoreCustomerManagementFramework\NewsletterConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "newsletter()" has already been initialized. You cannot pass values the second time you call newsletter().');
        }

        return $this->newsletter;
    }

    public function activityUrlTracker(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\ActivityUrlTrackerConfig
    {
        if (null === $this->activityUrlTracker) {
            $this->_usedProperties['activityUrlTracker'] = true;
            $this->activityUrlTracker = new \Symfony\Config\PimcoreCustomerManagementFramework\ActivityUrlTrackerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "activityUrlTracker()" has already been initialized. You cannot pass values the second time you call activityUrlTracker().');
        }

        return $this->activityUrlTracker;
    }

    public function segmentAssignmentClasses(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClassesConfig
    {
        if (null === $this->segmentAssignmentClasses) {
            $this->_usedProperties['segmentAssignmentClasses'] = true;
            $this->segmentAssignmentClasses = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "segmentAssignmentClasses()" has already been initialized. You cannot pass values the second time you call segmentAssignmentClasses().');
        }

        return $this->segmentAssignmentClasses;
    }

    public function gdprDataProvider(array $value = []): \Symfony\Config\PimcoreCustomerManagementFramework\GdprDataProviderConfig
    {
        if (null === $this->gdprDataProvider) {
            $this->_usedProperties['gdprDataProvider'] = true;
            $this->gdprDataProvider = new \Symfony\Config\PimcoreCustomerManagementFramework\GdprDataProviderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gdprDataProvider()" has already been initialized. You cannot pass values the second time you call gdprDataProvider().');
        }

        return $this->gdprDataProvider;
    }

    public function getExtensionAlias(): string
    {
        return 'pimcore_customer_management_framework';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('oauth_client', $value)) {
            $this->_usedProperties['oauthClient'] = true;
            $this->oauthClient = \is_array($value['oauth_client']) ? new \Symfony\Config\PimcoreCustomerManagementFramework\OauthClientConfig($value['oauth_client']) : $value['oauth_client'];
            unset($value['oauth_client']);
        }

        if (array_key_exists('general', $value)) {
            $this->_usedProperties['general'] = true;
            $this->general = new \Symfony\Config\PimcoreCustomerManagementFramework\GeneralConfig($value['general']);
            unset($value['general']);
        }

        if (array_key_exists('encryption', $value)) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\PimcoreCustomerManagementFramework\EncryptionConfig($value['encryption']);
            unset($value['encryption']);
        }

        if (array_key_exists('customer_save_manager', $value)) {
            $this->_usedProperties['customerSaveManager'] = true;
            $this->customerSaveManager = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerSaveManagerConfig($value['customer_save_manager']);
            unset($value['customer_save_manager']);
        }

        if (array_key_exists('customer_provider', $value)) {
            $this->_usedProperties['customerProvider'] = true;
            $this->customerProvider = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerProviderConfig($value['customer_provider']);
            unset($value['customer_provider']);
        }

        if (array_key_exists('customer_save_validator', $value)) {
            $this->_usedProperties['customerSaveValidator'] = true;
            $this->customerSaveValidator = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerSaveValidatorConfig($value['customer_save_validator']);
            unset($value['customer_save_validator']);
        }

        if (array_key_exists('segment_manager', $value)) {
            $this->_usedProperties['segmentManager'] = true;
            $this->segmentManager = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentManagerConfig($value['segment_manager']);
            unset($value['segment_manager']);
        }

        if (array_key_exists('customer_list', $value)) {
            $this->_usedProperties['customerList'] = true;
            $this->customerList = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerListConfig($value['customer_list']);
            unset($value['customer_list']);
        }

        if (array_key_exists('customer_duplicates_services', $value)) {
            $this->_usedProperties['customerDuplicatesServices'] = true;
            $this->customerDuplicatesServices = new \Symfony\Config\PimcoreCustomerManagementFramework\CustomerDuplicatesServicesConfig($value['customer_duplicates_services']);
            unset($value['customer_duplicates_services']);
        }

        if (array_key_exists('newsletter', $value)) {
            $this->_usedProperties['newsletter'] = true;
            $this->newsletter = new \Symfony\Config\PimcoreCustomerManagementFramework\NewsletterConfig($value['newsletter']);
            unset($value['newsletter']);
        }

        if (array_key_exists('activity_url_tracker', $value)) {
            $this->_usedProperties['activityUrlTracker'] = true;
            $this->activityUrlTracker = new \Symfony\Config\PimcoreCustomerManagementFramework\ActivityUrlTrackerConfig($value['activity_url_tracker']);
            unset($value['activity_url_tracker']);
        }

        if (array_key_exists('segment_assignment_classes', $value)) {
            $this->_usedProperties['segmentAssignmentClasses'] = true;
            $this->segmentAssignmentClasses = new \Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClassesConfig($value['segment_assignment_classes']);
            unset($value['segment_assignment_classes']);
        }

        if (array_key_exists('gdprDataProvider', $value)) {
            $this->_usedProperties['gdprDataProvider'] = true;
            $this->gdprDataProvider = new \Symfony\Config\PimcoreCustomerManagementFramework\GdprDataProviderConfig($value['gdprDataProvider']);
            unset($value['gdprDataProvider']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['oauthClient'])) {
            $output['oauth_client'] = $this->oauthClient instanceof \Symfony\Config\PimcoreCustomerManagementFramework\OauthClientConfig ? $this->oauthClient->toArray() : $this->oauthClient;
        }
        if (isset($this->_usedProperties['general'])) {
            $output['general'] = $this->general->toArray();
        }
        if (isset($this->_usedProperties['encryption'])) {
            $output['encryption'] = $this->encryption->toArray();
        }
        if (isset($this->_usedProperties['customerSaveManager'])) {
            $output['customer_save_manager'] = $this->customerSaveManager->toArray();
        }
        if (isset($this->_usedProperties['customerProvider'])) {
            $output['customer_provider'] = $this->customerProvider->toArray();
        }
        if (isset($this->_usedProperties['customerSaveValidator'])) {
            $output['customer_save_validator'] = $this->customerSaveValidator->toArray();
        }
        if (isset($this->_usedProperties['segmentManager'])) {
            $output['segment_manager'] = $this->segmentManager->toArray();
        }
        if (isset($this->_usedProperties['customerList'])) {
            $output['customer_list'] = $this->customerList->toArray();
        }
        if (isset($this->_usedProperties['customerDuplicatesServices'])) {
            $output['customer_duplicates_services'] = $this->customerDuplicatesServices->toArray();
        }
        if (isset($this->_usedProperties['newsletter'])) {
            $output['newsletter'] = $this->newsletter->toArray();
        }
        if (isset($this->_usedProperties['activityUrlTracker'])) {
            $output['activity_url_tracker'] = $this->activityUrlTracker->toArray();
        }
        if (isset($this->_usedProperties['segmentAssignmentClasses'])) {
            $output['segment_assignment_classes'] = $this->segmentAssignmentClasses->toArray();
        }
        if (isset($this->_usedProperties['gdprDataProvider'])) {
            $output['gdprDataProvider'] = $this->gdprDataProvider->toArray();
        }

        return $output;
    }

}
