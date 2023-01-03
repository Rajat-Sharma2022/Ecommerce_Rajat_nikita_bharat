<?php

namespace Pimcore\Model\DataObject\OfferToolOfferItem;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\OfferToolOfferItem|false current()
 * @method DataObject\OfferToolOfferItem[] load()
 * @method DataObject\OfferToolOfferItem[] getData()
 * @method DataObject\OfferToolOfferItem[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "EF_OTOI";
protected $className = "OfferToolOfferItem";


/**
* Filter by product (Produkt)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProduct ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("product")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by productNumber (Produktnummer)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductNumber ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("productNumber")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by productName (Produktname)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("productName")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by amount (Amount)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByAmount ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("amount")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by originalTotalPrice (Original Total Price)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOriginalTotalPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("originalTotalPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by DiscountType (Discount Type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDiscountType ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("DiscountType")->addListingFilter($this, $data, $operator);
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
* Filter by finalTotalPrice (Preis)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFinalTotalPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("finalTotalPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by subItems (Subitems)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySubItems ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("subItems")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by comment (Comment)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByComment ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("comment")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by cartItemKey (CartItemKey)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCartItemKey ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("cartItemKey")->addListingFilter($this, $data, $operator);
	return $this;
}



}
