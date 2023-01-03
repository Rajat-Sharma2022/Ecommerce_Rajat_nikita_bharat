<?php

namespace Pimcore\Model\DataObject\OnlineShopOrderItem;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\OnlineShopOrderItem|false current()
 * @method DataObject\OnlineShopOrderItem[] load()
 * @method DataObject\OnlineShopOrderItem[] getData()
 * @method DataObject\OnlineShopOrderItem[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "EF_OSOI";
protected $className = "OnlineShopOrderItem";


/**
* Filter by orderState (Order Item State)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOrderState ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("orderState")->addListingFilter($this, $data, $operator);
	return $this;
}

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
* Filter by totalNetPrice (NetPrice)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByTotalNetPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("totalNetPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by totalPrice (Price)
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



}
