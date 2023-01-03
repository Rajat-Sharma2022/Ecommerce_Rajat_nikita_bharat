<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - OSproductNumber [input]
 * - OSName [input]
 * - productGroup [select]
 * - price [numeric]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing|\Pimcore\Model\DataObject\OfferToolCustomProduct|null getByOSproductNumber($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing|\Pimcore\Model\DataObject\OfferToolCustomProduct|null getByOSName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing|\Pimcore\Model\DataObject\OfferToolCustomProduct|null getByProductGroup($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing|\Pimcore\Model\DataObject\OfferToolCustomProduct|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class OfferToolCustomProduct extends \Pimcore\Bundle\EcommerceFrameworkBundle\OfferTool\AbstractOfferToolProduct
{
protected $o_classId = "EF_OTCP";
protected $o_className = "OfferToolCustomProduct";
protected $OSproductNumber;
protected $OSName;
protected $productGroup;
protected $price;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get OSproductNumber - Product Number
* @return string|null
*/
public function getOSproductNumber(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("OSproductNumber");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->OSproductNumber;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set OSproductNumber - Product Number
* @param string|null $OSproductNumber
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setOSproductNumber(?string $OSproductNumber)
{
	$this->OSproductNumber = $OSproductNumber;

	return $this;
}

/**
* Get OSName - Product Name
* @return string|null
*/
public function getOSName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("OSName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->OSName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set OSName - Product Name
* @param string|null $OSName
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setOSName(?string $OSName)
{
	$this->OSName = $OSName;

	return $this;
}

/**
* Get productGroup - Product Group
* @return string|null
*/
public function getProductGroup(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productGroup");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productGroup;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productGroup - Product Group
* @param string|null $productGroup
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setProductGroup(?string $productGroup)
{
	$this->productGroup = $productGroup;

	return $this;
}

/**
* Get price - Price
* @return string|null
*/
public function getPrice(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("price");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set price - Price
* @param string|null $price
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setPrice(?string $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

}

