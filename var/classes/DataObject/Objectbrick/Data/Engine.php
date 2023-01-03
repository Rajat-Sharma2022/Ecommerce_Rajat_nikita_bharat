<?php

/**
 * Fields Summary:
 * - cylinders [numeric]
 * - capacity [quantityValue]
 * - power [quantityValue]
 * - engineLocation [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Engine extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Engine";
protected $cylinders;
protected $capacity;
protected $power;
protected $engineLocation;


/**
* Engine constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get cylinders - Cylinders
* @return int|null
*/
public function getCylinders(): ?int
{
	$data = $this->cylinders;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("cylinders")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("cylinders");
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
* Set cylinders - Cylinders
* @param int|null $cylinders
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Engine
*/
public function setCylinders (?int $cylinders)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("cylinders");
	$this->cylinders = $fd->preSetData($this, $cylinders);
	return $this;
}

/**
* Get capacity - Capacity
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getCapacity(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->capacity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("capacity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("capacity");
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
* Set capacity - Capacity
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $capacity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Engine
*/
public function setCapacity (?\Pimcore\Model\DataObject\Data\QuantityValue $capacity)
{
	$this->capacity = $capacity;

	return $this;
}

/**
* Get power - Power
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getPower(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->power;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("power")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("power");
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
* Set power - Power
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $power
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Engine
*/
public function setPower (?\Pimcore\Model\DataObject\Data\QuantityValue $power)
{
	$this->power = $power;

	return $this;
}

/**
* Get engineLocation - Engine Location
* @return string|null
*/
public function getEngineLocation(): ?string
{
	$data = $this->engineLocation;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("engineLocation")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("engineLocation");
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
* Set engineLocation - Engine Location
* @param string|null $engineLocation
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Engine
*/
public function setEngineLocation (?string $engineLocation)
{
	$this->engineLocation = $engineLocation;

	return $this;
}

}

