<?php

/**
 * Fields Summary:
 * - field [indexFieldSelectionCombo]
 * - weight [numeric]
 */

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

class SimilarityField extends DataObject\Fieldcollection\Data\AbstractData
{
protected $type = "SimilarityField";
protected $field;
protected $weight;


/**
* Get field - Field
* @return string|null
*/
public function getField(): ?string
{
	$data = $this->field;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set field - Field
* @param string|null $field
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\SimilarityField
*/
public function setField(?string $field)
{
	$this->field = $field;

	return $this;
}

/**
* Get weight - Weight
* @return float|null
*/
public function getWeight(): ?float
{
	$data = $this->weight;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set weight - Weight
* @param float|null $weight
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\SimilarityField
*/
public function setWeight(?float $weight)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("weight");
	$this->weight = $fd->preSetData($this, $weight);
	return $this;
}

}

