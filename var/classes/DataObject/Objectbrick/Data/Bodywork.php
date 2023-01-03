<?php

/**
 * Fields Summary:
 * - numberOfDoors [numeric]
 * - numberOfSeats [numeric]
 * - cargoCapacity [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Bodywork extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Bodywork";
protected $numberOfDoors;
protected $numberOfSeats;
protected $cargoCapacity;


/**
* Bodywork constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get numberOfDoors - Number Of Doors
* @return int|null
*/
public function getNumberOfDoors(): ?int
{
	$data = $this->numberOfDoors;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("numberOfDoors")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("numberOfDoors");
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
* Set numberOfDoors - Number Of Doors
* @param int|null $numberOfDoors
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bodywork
*/
public function setNumberOfDoors (?int $numberOfDoors)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("numberOfDoors");
	$this->numberOfDoors = $fd->preSetData($this, $numberOfDoors);
	return $this;
}

/**
* Get numberOfSeats - Number Of Seats
* @return int|null
*/
public function getNumberOfSeats(): ?int
{
	$data = $this->numberOfSeats;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("numberOfSeats")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("numberOfSeats");
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
* Set numberOfSeats - Number Of Seats
* @param int|null $numberOfSeats
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bodywork
*/
public function setNumberOfSeats (?int $numberOfSeats)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("numberOfSeats");
	$this->numberOfSeats = $fd->preSetData($this, $numberOfSeats);
	return $this;
}

/**
* Get cargoCapacity - Cargo Capacity
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getCargoCapacity(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->cargoCapacity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("cargoCapacity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("cargoCapacity");
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
* Set cargoCapacity - Cargo Capacity
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $cargoCapacity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bodywork
*/
public function setCargoCapacity (?\Pimcore\Model\DataObject\Data\QuantityValue $cargoCapacity)
{
	$this->cargoCapacity = $cargoCapacity;

	return $this;
}

}

