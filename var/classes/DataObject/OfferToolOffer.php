<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - offernumber [input]
 * - dateCreated [datetime]
 * - dateValidUntil [date]
 * - totalPriceBeforeDiscount [numeric]
 * - totalPrice [numeric]
 * - discountType [select]
 * - discount [numeric]
 * - cartId [input]
 * - items [manyToManyObjectRelation]
 * - customItems [manyToManyObjectRelation]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByOffernumber($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByDateCreated($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByDateValidUntil($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByTotalPriceBeforeDiscount($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByTotalPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByDiscountType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByDiscount($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByCartId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByItems($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOffer\Listing|\Pimcore\Model\DataObject\OfferToolOffer|null getByCustomItems($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class OfferToolOffer extends \Pimcore\Bundle\EcommerceFrameworkBundle\OfferTool\AbstractOffer
{
protected $o_classId = "EF_OTO";
protected $o_className = "OfferToolOffer";
protected $offernumber;
protected $dateCreated;
protected $dateValidUntil;
protected $totalPriceBeforeDiscount;
protected $totalPrice;
protected $discountType;
protected $discount;
protected $cartId;
protected $items;
protected $customItems;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get offernumber - Offernumber
* @return string|null
*/
public function getOffernumber(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("offernumber");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->offernumber;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set offernumber - Offernumber
* @param string|null $offernumber
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setOffernumber(?string $offernumber)
{
	$this->offernumber = $offernumber;

	return $this;
}

/**
* Get dateCreated - CreationDate
* @return \Carbon\Carbon|null
*/
public function getDateCreated(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("dateCreated");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->dateCreated;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set dateCreated - CreationDate
* @param \Carbon\Carbon|null $dateCreated
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDateCreated(?\Carbon\Carbon $dateCreated)
{
	$this->dateCreated = $dateCreated;

	return $this;
}

/**
* Get dateValidUntil - Valid Until
* @return \Carbon\Carbon|null
*/
public function getDateValidUntil(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("dateValidUntil");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->dateValidUntil;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set dateValidUntil - Valid Until
* @param \Carbon\Carbon|null $dateValidUntil
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDateValidUntil(?\Carbon\Carbon $dateValidUntil)
{
	$this->dateValidUntil = $dateValidUntil;

	return $this;
}

/**
* Get totalPriceBeforeDiscount - Total Price Before Discount
* @return string|null
*/
public function getTotalPriceBeforeDiscount(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("totalPriceBeforeDiscount");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->totalPriceBeforeDiscount;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set totalPriceBeforeDiscount - Total Price Before Discount
* @param string|null $totalPriceBeforeDiscount
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setTotalPriceBeforeDiscount(?string $totalPriceBeforeDiscount)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("totalPriceBeforeDiscount");
	$this->totalPriceBeforeDiscount = $fd->preSetData($this, $totalPriceBeforeDiscount);
	return $this;
}

/**
* Get totalPrice - TotalPrice
* @return string|null
*/
public function getTotalPrice(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("totalPrice");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->totalPrice;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set totalPrice - TotalPrice
* @param string|null $totalPrice
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setTotalPrice(?string $totalPrice)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("totalPrice");
	$this->totalPrice = $fd->preSetData($this, $totalPrice);
	return $this;
}

/**
* Get discountType - Discount Type
* @return string|null
*/
public function getDiscountType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("discountType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->discountType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set discountType - Discount Type
* @param string|null $discountType
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDiscountType(?string $discountType)
{
	$this->discountType = $discountType;

	return $this;
}

/**
* Get discount - Discount
* @return string|null
*/
public function getDiscount(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("discount");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->discount;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set discount - Discount
* @param string|null $discount
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDiscount(?string $discount)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("discount");
	$this->discount = $fd->preSetData($this, $discount);
	return $this;
}

/**
* Get cartId - Cart Id
* @return string|null
*/
public function getCartId(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("cartId");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->cartId;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set cartId - Cart Id
* @param string|null $cartId
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setCartId(?string $cartId)
{
	$this->cartId = $cartId;

	return $this;
}

/**
* Get items - Items
* @return \Pimcore\Model\DataObject\OfferToolOfferItem[]
*/
public function getItems(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("items");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("items")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set items - Items
* @param \Pimcore\Model\DataObject\OfferToolOfferItem[] $items
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setItems(?array $items)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("items");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getItems();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $items);
	if (!$isEqual) {
		$this->markFieldDirty("items", true);
	}
	$this->items = $fd->preSetData($this, $items);
	return $this;
}

/**
* Get customItems - Custom Items
* @return \Pimcore\Model\DataObject\OfferToolOfferItem[]
*/
public function getCustomItems(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("customItems");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("customItems")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set customItems - Custom Items
* @param \Pimcore\Model\DataObject\OfferToolOfferItem[] $customItems
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setCustomItems(?array $customItems)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("customItems");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCustomItems();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $customItems);
	if (!$isEqual) {
		$this->markFieldDirty("customItems", true);
	}
	$this->customItems = $fd->preSetData($this, $customItems);
	return $this;
}

}

