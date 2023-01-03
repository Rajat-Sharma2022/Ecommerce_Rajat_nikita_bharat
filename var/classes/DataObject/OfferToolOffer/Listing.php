<?php

namespace Pimcore\Model\DataObject\OfferToolOffer;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\OfferToolOffer|false current()
 * @method DataObject\OfferToolOffer[] load()
 * @method DataObject\OfferToolOffer[] getData()
 * @method DataObject\OfferToolOffer[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "EF_OTO";
protected $className = "OfferToolOffer";


/**
* Filter by offernumber (Offernumber)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOffernumber ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("offernumber")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by dateCreated (CreationDate)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDateCreated ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("dateCreated")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by dateValidUntil (Valid Until)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDateValidUntil ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("dateValidUntil")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by totalPriceBeforeDiscount (Total Price Before Discount)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByTotalPriceBeforeDiscount ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("totalPriceBeforeDiscount")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by totalPrice (TotalPrice)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByTotalPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("totalPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by discountType (Discount Type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDiscountType ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("discountType")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by discount (Discount)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDiscount ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("discount")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by cartId (Cart Id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCartId ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("cartId")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by items (Items)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByItems ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("items")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customItems (Custom Items)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomItems ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customItems")->addListingFilter($this, $data, $operator);
	return $this;
}



}
