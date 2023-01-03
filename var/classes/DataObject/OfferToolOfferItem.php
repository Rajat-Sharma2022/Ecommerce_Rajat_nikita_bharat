<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - product [manyToOneRelation]
 * - productNumber [input]
 * - productName [input]
 * - amount [numeric]
 * - originalTotalPrice [numeric]
 * - DiscountType [select]
 * - discount [numeric]
 * - finalTotalPrice [numeric]
 * - subItems [manyToManyObjectRelation]
 * - comment [textarea]
 * - cartItemKey [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByProduct($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByProductNumber($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByProductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByAmount($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByOriginalTotalPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByDiscountType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByDiscount($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByFinalTotalPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getBySubItems($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByComment($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing|\Pimcore\Model\DataObject\OfferToolOfferItem|null getByCartItemKey($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class OfferToolOfferItem extends \Pimcore\Bundle\EcommerceFrameworkBundle\OfferTool\AbstractOfferItem
{
protected $o_classId = "EF_OTOI";
protected $o_className = "OfferToolOfferItem";
protected $product;
protected $productNumber;
protected $productName;
protected $amount;
protected $originalTotalPrice;
protected $DiscountType;
protected $discount;
protected $finalTotalPrice;
protected $subItems;
protected $comment;
protected $cartItemKey;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get product - Produkt
* @return \Pimcore\Model\DataObject\AbstractObject|null
*/
public function getProduct(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("product")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set product - Produkt
* @param \Pimcore\Model\DataObject\AbstractObject|null $product
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setProduct(?\Pimcore\Model\Element\AbstractElement $product)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("product");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getProduct();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $product);
	if (!$isEqual) {
		$this->markFieldDirty("product", true);
	}
	$this->product = $fd->preSetData($this, $product);
	return $this;
}

/**
* Get productNumber - Produktnummer
* @return string|null
*/
public function getProductNumber(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productNumber");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productNumber;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productNumber - Produktnummer
* @param string|null $productNumber
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setProductNumber(?string $productNumber)
{
	$this->productNumber = $productNumber;

	return $this;
}

/**
* Get productName - Produktname
* @return string|null
*/
public function getProductName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productName - Produktname
* @param string|null $productName
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setProductName(?string $productName)
{
	$this->productName = $productName;

	return $this;
}

/**
* Get amount - Amount
* @return float|null
*/
public function getAmount(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("amount");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->amount;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set amount - Amount
* @param float|null $amount
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setAmount(?float $amount)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("amount");
	$this->amount = $fd->preSetData($this, $amount);
	return $this;
}

/**
* Get originalTotalPrice - Original Total Price
* @return string|null
*/
public function getOriginalTotalPrice(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("originalTotalPrice");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->originalTotalPrice;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set originalTotalPrice - Original Total Price
* @param string|null $originalTotalPrice
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setOriginalTotalPrice(?string $originalTotalPrice)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("originalTotalPrice");
	$this->originalTotalPrice = $fd->preSetData($this, $originalTotalPrice);
	return $this;
}

/**
* Get DiscountType - Discount Type
* @return string|null
*/
public function getDiscountType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("DiscountType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->DiscountType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set DiscountType - Discount Type
* @param string|null $DiscountType
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setDiscountType(?string $DiscountType)
{
	$this->DiscountType = $DiscountType;

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
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setDiscount(?string $discount)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("discount");
	$this->discount = $fd->preSetData($this, $discount);
	return $this;
}

/**
* Get finalTotalPrice - Preis
* @return string|null
*/
public function getFinalTotalPrice(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("finalTotalPrice");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->finalTotalPrice;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set finalTotalPrice - Preis
* @param string|null $finalTotalPrice
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setFinalTotalPrice(?string $finalTotalPrice)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("finalTotalPrice");
	$this->finalTotalPrice = $fd->preSetData($this, $finalTotalPrice);
	return $this;
}

/**
* Get subItems - Subitems
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem[]
*/
public function getSubItems(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("subItems");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("subItems")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set subItems - Subitems
* @param \Pimcore\Model\DataObject\OnlineShopOrderItem[] $subItems
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setSubItems(?array $subItems)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("subItems");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getSubItems();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $subItems);
	if (!$isEqual) {
		$this->markFieldDirty("subItems", true);
	}
	$this->subItems = $fd->preSetData($this, $subItems);
	return $this;
}

/**
* Get comment - Comment
* @return string|null
*/
public function getComment(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("comment");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->comment;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set comment - Comment
* @param string|null $comment
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setComment(?string $comment)
{
	$this->comment = $comment;

	return $this;
}

/**
* Get cartItemKey - CartItemKey
* @return string|null
*/
public function getCartItemKey(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("cartItemKey");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->cartItemKey;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set cartItemKey - CartItemKey
* @param string|null $cartItemKey
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setCartItemKey(?string $cartItemKey)
{
	$this->cartItemKey = $cartItemKey;

	return $this;
}

}

