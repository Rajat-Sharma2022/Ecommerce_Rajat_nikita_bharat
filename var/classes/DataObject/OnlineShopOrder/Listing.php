<?php

namespace Pimcore\Model\DataObject\OnlineShopOrder;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\OnlineShopOrder|false current()
 * @method DataObject\OnlineShopOrder[] load()
 * @method DataObject\OnlineShopOrder[] getData()
 * @method DataObject\OnlineShopOrder[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "EF_OSO";
protected $className = "OnlineShopOrder";


/**
* Filter by ordernumber (Ordernumber)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOrdernumber ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ordernumber")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by orderState (OrderState)
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
* Filter by orderdate (Orderdate)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOrderdate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("orderdate")->addListingFilter($this, $data, $operator);
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
* Filter by customerOrderData (Customer Order Data)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerOrderData ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerOrderData")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by voucherTokens (Voucher Tokens)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByVoucherTokens ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("voucherTokens")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by giftItems (Gift Items)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByGiftItems ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("giftItems")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by subTotalNetPrice (SubTotalNetPrice)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySubTotalNetPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("subTotalNetPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by subTotalPrice (SubTotalPrice)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySubTotalPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("subTotalPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by totalNetPrice (TotalNetPrice)
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
* Filter by currency (Currency)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCurrency ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("currency")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by cartId (Cart ID)
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
* Filter by successorOrder (Successor Order)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySuccessorOrder ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("successorOrder")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by cartHash (Cart Hash)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCartHash ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("cartHash")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customer (Customer)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomer ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customer")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerFirstname (Firstname)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerFirstname ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerFirstname")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerLastname (Lastname)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerLastname ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerLastname")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerCompany (Company)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerCompany ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerCompany")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerStreet (Street)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerStreet ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerStreet")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerZip (Zip)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerZip ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerZip")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerCity (City)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerCity ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerCity")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerCountry (Country)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerCountry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerCountry")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by customerEmail (Email)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerEmail ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("customerEmail")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by deliveryFirstname (Firstname)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryFirstname ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("deliveryFirstname")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by deliveryLastname (Lastname)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryLastname ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("deliveryLastname")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by deliveryCompany (Company)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryCompany ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("deliveryCompany")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by deliveryStreet (Street)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryStreet ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("deliveryStreet")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by deliveryZip (Zip)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryZip ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("deliveryZip")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by deliveryCity (City)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryCity ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("deliveryCity")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by deliveryCountry (Country)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryCountry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("deliveryCountry")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by paymentReference (Payment Ref.)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPaymentReference ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("paymentReference")->addListingFilter($this, $data, $operator);
	return $this;
}



}
