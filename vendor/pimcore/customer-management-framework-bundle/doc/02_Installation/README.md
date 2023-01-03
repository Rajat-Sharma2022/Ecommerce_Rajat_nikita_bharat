# Installation and First Configuration

This section describes the installation of the Customer Management Framework and the first steps of configuration.

> Please note that Customer Management Framework requires MariaDB as database. It will not work with default MySQL. MariaDB is used to save [activities](./09_Activities/README.md) with the MariaDB Dynamic Columns feature: https://mariadb.com/kb/en/library/dynamic-columns/

## Installation

1) Add dependency for CMF to your `composer.json` and run `composer update`. Alternatively, in Pimcore directory, run `composer require pimcore/customer-management-framework-bundle`.
```json
    ...
    "require": {
        ...
        "pimcore/customer-management-framework-bundle": "^3",
        ...
   }
   ... 
```

2) Open Pimcore Admin UI, navigate to `Tools` > `Bundles` and activate and install 
`PimcoreCustomerManagementFrameworkBundle` and `ObjectMergerBundle`. 

![Extension Manager](./img/install.jpg)

The installer does following tasks:
* Install several data object classes.
* Create additional tables for activities, deletions, segment building, actions, triggers, rules, duplicates and
  newsletter system export.   
* Add additional permissions.

After successful installation and reload of Pimcore Admin UI an additional customer management menu should be available. 


## Configure Customer Class

The CMF installation does not create a data object class for customers. That is because the framework does not limit you
on specific classes or class structures when it comes to customers. The only requirement is that the customer class 
has to be 'prepared' to be used in CMF context. 

Following options to prepare the customer class are available:
 
* For all basic CMF functionality: The customer class needs to extend the 
  [`CustomerManagementFrameworkBundle\Model\AbstractCustomer`](https://github.com/pimcore/customer-data-framework/blob/master/src/Model/AbstractCustomer.php) 
  class. In addition to that, following data attributes need to be available in the customer class:
  * `active`: checkbox
  * `gender`: gender field
  * `firstname`: firstname field
  * `lastname`: lastname field
  * `street`: input field
  * `zip`: input field
  * `city`: input field
  * `countryCode`: country selection
  * `customerLanguage`: language selection
  * `email`: email field
  * `phone`: input field
  * `manualSegments`: objects relation to `CustomerSegments` or objects with metadata to `CustomerSegments` with 
     `created_timestamp` and `application_counter` as numeric meta fields
  * `calculatedSegments`: objects relation to `CustomerSegments` or objects with metadata to `CustomerSegments` with 
     `created_timestamp` and `application_counter` as numeric meta fields
  * `idEncoded`: input field
  * `profilingConsent`: consent (optional)
  
As starting point this [class definition](https://github.com/pimcore/customer-data-framework/blob/master/install/class_source/optional/class_Customer_export.json) can be used.

Note that the class doesn't need to contain the attributes as field definitions. You can also just add the fields to your specific class implementation interface by adding getters. You **must** also enable the _Generate Type Declarations_ options on the `Customer` class for the attributes to be compatible with the `Interface`.
  

  Example
  ```php
  class AppBundleCustomer extends Pimcore\Model\DataObject\Customer  {

      /** Implementation for firstname **/
      public function getFirstname()
      {
            return $this->getCustomerAddress()->getFirstname() ;
      }

      ...

  }
  ```
 
 
* When using customer objects as users for Symfony security: In this case the customer class needs to extend the 
  [`CustomerManagementFrameworkBundle\Model\AbstractCustomer\DefaultAbstractUserawareCustomer`](https://github.com/pimcore/customer-data-framework/blob/master/src/Model/AbstractCustomer/DefaultAbstractUserawareCustomer.php) 
  class and also need to have one additional data attribute:
  * `password`: password field

  Note: When extending the customer class from `DefaultAbstractUserawareCustomer` then either Customer class adds the required attributes for 
 getters/setters defined in the ['CustomerManagementFrameworkBundle\Model\CustomerInterface'](https://github.com/pimcore/customer-data-framework/blob/master/src/Model/CustomerInterface.php)
    or Use a [Trait](https://gist.github.com/dvesh3/ee88f6a7b75ea65f9f1db981b682e7cd), that implements these getters/setters, in Pimcore class.
 
* When using the provided [SSO functionality](./Single_Sign_On.md): In this case the customer class additionally needs
  to implement the [`CustomerManagementFrameworkBundle\Model\SsoAwareCustomerInterface`](https://github.com/pimcore/customer-data-framework/blob/master/src/Model/SsoAwareCustomerInterface.php)
  interface and also need to have one additional data attribute:   
  * `ssoIdentities`: objects relation to `SsoIdentity`
 
 
* Minimal Requirements (not suggested): If you want to be complete independent from any base classes, you just need to 
  make sure the customer class somehow implements the interface `CustomerManagementFrameworkBundle\Model\CustomerInterface`

> It is recommended to use `Customer` as name for the customer class. But it is also possible to use any other name. 
> In this case, the configuration `general.customerPimcoreClass` for the customer class name has to be adapted. For details
> see [Configuration chapter](./03_Configuration.md). 
      
Of course your customer class can have additional attributes as needed.
   

## Configuration

The CMF ships with an default configuration for basic functionality. To start up, no additional configuration should be 
needed. To activate additional or customize existing functionality, please have a look at the 
[configuration chapter](03_Configuration.md).  

#### Configure Symfony firewall
To configure the symfony firewall for the webservices, add following line to your firewalls configuration
in the `security.yml` of your app after the `pimcore_admin` firewall.

```yml 
security:
    firewalls:
        pimcore_admin: 
            # ...
        cmf_webservice: '%customer_management_framework.firewall_settings%'
```
Of course, it is also possible to customize the firewall settings for the webservices by defining your custom settings instead
of using the provided parameter. But, this is not recommended and might break in future versions of the customer 
management framework (because the customer management framework does changes at the firewall configuration)!

## Setting Up necessary cron jobs
There are several cron jobs needed by the CMF. These need to be configured and setup based on the solution requirements. 
See [CronJob Docs](./04_Cronjobs.md) for details. 


## (Optional) Prerequisites for SSO

If SSO functionality of CMF should be integrated, please follow the steps for [Integration of Single Sign On](./18_Single_Sign_On.md). 

