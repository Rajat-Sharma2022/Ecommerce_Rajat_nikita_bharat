<?php

/**
 * Fields Summary:
 * - configurationKey [input]
 * - auth_orderID [input]
 * - auth_payerID [input]
 * - auth_email_address [input]
 * - auth_given_name [input]
 * - auth_surname [input]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class PaymentProviderPayPalSmartButton extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "PaymentProviderPayPalSmartButton";
protected $configurationKey;
protected $auth_orderID;
protected $auth_payerID;
protected $auth_email_address;
protected $auth_given_name;
protected $auth_surname;


/**
* PaymentProviderPayPalSmartButton constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get configurationKey - Configuration Key
* @return string|null
*/
public function getConfigurationKey()
{
	$data = $this->configurationKey;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("configurationKey")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("configurationKey");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set configurationKey - Configuration Key
* @param string|null $configurationKey
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton
*/
public function setConfigurationKey ($configurationKey)
{
	$this->configurationKey = $configurationKey;

	return $this;
}

/**
* Get auth_orderID - OrderID
* @return string|null
*/
public function getAuth_orderID()
{
	$data = $this->auth_orderID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_orderID")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_orderID");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_orderID - OrderID
* @param string|null $auth_orderID
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton
*/
public function setAuth_orderID ($auth_orderID)
{
	$this->auth_orderID = $auth_orderID;

	return $this;
}

/**
* Get auth_payerID - PayerID
* @return string|null
*/
public function getAuth_payerID()
{
	$data = $this->auth_payerID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_payerID")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_payerID");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_payerID - PayerID
* @param string|null $auth_payerID
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton
*/
public function setAuth_payerID ($auth_payerID)
{
	$this->auth_payerID = $auth_payerID;

	return $this;
}

/**
* Get auth_email_address - Email Address
* @return string|null
*/
public function getAuth_email_address()
{
	$data = $this->auth_email_address;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_email_address")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_email_address");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_email_address - Email Address
* @param string|null $auth_email_address
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton
*/
public function setAuth_email_address ($auth_email_address)
{
	$this->auth_email_address = $auth_email_address;

	return $this;
}

/**
* Get auth_given_name - Given Name
* @return string|null
*/
public function getAuth_given_name()
{
	$data = $this->auth_given_name;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_given_name")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_given_name");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_given_name - Given Name
* @param string|null $auth_given_name
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton
*/
public function setAuth_given_name ($auth_given_name)
{
	$this->auth_given_name = $auth_given_name;

	return $this;
}

/**
* Get auth_surname - Surname
* @return string|null
*/
public function getAuth_surname()
{
	$data = $this->auth_surname;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_surname")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_surname");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_surname - Surname
* @param string|null $auth_surname
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton
*/
public function setAuth_surname ($auth_surname)
{
	$this->auth_surname = $auth_surname;

	return $this;
}

}

