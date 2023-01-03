<?php

/**
 * Fields Summary:
 * - availabilityPieces [numeric]
 * - availabilityType [select]
 * - condition [select]
 * - priceInEUR [numeric]
 * - milage [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class SaleInformation extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "SaleInformation";
protected $availabilityPieces;
protected $availabilityType;
protected $condition;
protected $priceInEUR;
protected $milage;


/**
* SaleInformation constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get availabilityPieces - Availability Pieces
* @return float|null
*/
public function getAvailabilityPieces(): ?float
{
	$data = $this->availabilityPieces;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("availabilityPieces")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("availabilityPieces");
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
* Set availabilityPieces - Availability Pieces
* @param float|null $availabilityPieces
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation
*/
public function setAvailabilityPieces (?float $availabilityPieces)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("availabilityPieces");
	$this->availabilityPieces = $fd->preSetData($this, $availabilityPieces);
	return $this;
}

/**
* Get availabilityType - Availability Type
* @return string|null
*/
public function getAvailabilityType(): ?string
{
	$data = $this->availabilityType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("availabilityType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("availabilityType");
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
* Set availabilityType - Availability Type
* @param string|null $availabilityType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation
*/
public function setAvailabilityType (?string $availabilityType)
{
	$this->availabilityType = $availabilityType;

	return $this;
}

/**
* Get condition - Condition
* @return string|null
*/
public function getCondition(): ?string
{
	$data = $this->condition;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("condition")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("condition");
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
* Set condition - Condition
* @param string|null $condition
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation
*/
public function setCondition (?string $condition)
{
	$this->condition = $condition;

	return $this;
}

/**
* Get priceInEUR - Price in EUR
* @return string|null
*/
public function getPriceInEUR(): ?string
{
	$data = $this->priceInEUR;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("priceInEUR")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("priceInEUR");
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
* Set priceInEUR - Price in EUR
* @param string|null $priceInEUR
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation
*/
public function setPriceInEUR (?string $priceInEUR)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("priceInEUR");
	$this->priceInEUR = $fd->preSetData($this, $priceInEUR);
	return $this;
}

/**
* Get milage - Milage
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getMilage(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->milage;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("milage")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("milage");
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
* Set milage - Milage
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $milage
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation
*/
public function setMilage (?\Pimcore\Model\DataObject\Data\QuantityValue $milage)
{
	$this->milage = $milage;

	return $this;
}

}

