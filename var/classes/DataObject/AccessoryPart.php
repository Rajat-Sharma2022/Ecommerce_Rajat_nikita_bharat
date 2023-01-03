<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- generatedName [calculatedValue]
 * -- nameAddition [input]
 * - manufacturer [manyToOneRelation]
 * - series [manyToOneRelation]
 * - mainCategory [manyToOneRelation]
 * - compatibleTo [manyToManyObjectRelation]
 * - technicalAttributes [classificationstore]
 * - image [hotspotimage]
 * - additionalCategories [manyToManyObjectRelation]
 * - erpNumber [input]
 * - categoryCode [input]
 * - owner [input]
 * - saleInformation [objectbricks]
 * - urlSlug [urlSlug]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByLocalizedfields($field, $value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByGeneratedName($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByNameAddition($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByManufacturer($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getBySeries($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByMainCategory($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByCompatibleTo($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByAdditionalCategories($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByErpNumber($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByCategoryCode($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByOwner($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AccessoryPart\Listing|\Pimcore\Model\DataObject\AccessoryPart|null getByUrlSlug($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class AccessoryPart extends \App\Model\Product\AbstractProduct
{
protected $o_classId = "AP";
protected $o_className = "AccessoryPart";
protected $localizedfields;
protected $manufacturer;
protected $series;
protected $mainCategory;
protected $compatibleTo;
protected $technicalAttributes;
protected $image;
protected $additionalCategories;
protected $erpNumber;
protected $categoryCode;
protected $owner;
protected $saleInformation;
protected $urlSlug;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield|null
*/
public function getLocalizedfields(): ?\Pimcore\Model\DataObject\Localizedfield
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("localizedfields");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get generatedName - Fullname
* @return \Pimcore\Model\DataObject\Data\CalculatedValue|null
*/
public function getGeneratedName($language = null)
{
	if (!$language) {
		try {
			$locale = \Pimcore::getContainer()->get("pimcore.locale")->getLocale();
			if (\Pimcore\Tool::isValidLanguage($locale)) {
				$language = (string) $locale;
			} else {
				throw new \Exception("Not supported language");
			}
		} catch (\Exception $e) {
			$language = \Pimcore\Tool::getDefaultLanguage();
		}
	}
	$object = $this;
	$fieldDefinition = $this->getClass()->getFieldDefinition("localizedfields")->getFieldDefinition("generatedName");
	$data = new \Pimcore\Model\DataObject\Data\CalculatedValue('generatedName');
	$data->setContextualData("localizedfield", "localizedfields", null, $language, null, null, $fieldDefinition);
	$data = \Pimcore\Model\DataObject\Service::getCalculatedFieldValue($object, $data);
	return $data;
}

/**
* Get nameAddition - Name Addition
* @return string|null
*/
public function getNameAddition($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("nameAddition", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("nameAddition");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setLocalizedfields(?\Pimcore\Model\DataObject\Localizedfield $localizedfields)
{
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getLocalizedfields();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$this->markFieldDirty("localizedfields", true);
	$this->localizedfields = $localizedfields;

	return $this;
}

/**
* Set generatedName - Fullname
* @param \Pimcore\Model\DataObject\Data\CalculatedValue|null $generatedName
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setGeneratedName($generatedName, $language = null)
{
	return $this;
}

/**
* Set nameAddition - Name Addition
* @param string|null $nameAddition
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setNameAddition (?string $nameAddition, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("nameAddition", $nameAddition, $language, !$isEqual);

	return $this;
}

/**
* Get manufacturer - Manufacturer
* @return \Pimcore\Model\DataObject\Manufacturer|null
*/
public function getManufacturer(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacturer");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("manufacturer")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set manufacturer - Manufacturer
* @param \Pimcore\Model\DataObject\Manufacturer|null $manufacturer
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setManufacturer(?\Pimcore\Model\Element\AbstractElement $manufacturer)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("manufacturer");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getManufacturer();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $manufacturer);
	if (!$isEqual) {
		$this->markFieldDirty("manufacturer", true);
	}
	$this->manufacturer = $fd->preSetData($this, $manufacturer);
	return $this;
}

/**
* Get series - Series
* @return \Pimcore\Model\DataObject\Car|null
*/
public function getSeries(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("series");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("series")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set series - Series
* @param \Pimcore\Model\DataObject\Car|null $series
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setSeries(?\Pimcore\Model\Element\AbstractElement $series)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("series");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getSeries();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $series);
	if (!$isEqual) {
		$this->markFieldDirty("series", true);
	}
	$this->series = $fd->preSetData($this, $series);
	return $this;
}

/**
* Get mainCategory - Main Category
* @return \Pimcore\Model\DataObject\Category|null
*/
public function getMainCategory(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("mainCategory");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("mainCategory")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set mainCategory - Main Category
* @param \Pimcore\Model\DataObject\Category|null $mainCategory
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setMainCategory(?\Pimcore\Model\Element\AbstractElement $mainCategory)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("mainCategory");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getMainCategory();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $mainCategory);
	if (!$isEqual) {
		$this->markFieldDirty("mainCategory", true);
	}
	$this->mainCategory = $fd->preSetData($this, $mainCategory);
	return $this;
}

/**
* Get compatibleTo - Compatible To
* @return \Pimcore\Model\DataObject\Car[]
*/
public function getCompatibleTo(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("compatibleTo");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("compatibleTo")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set compatibleTo - Compatible To
* @param \Pimcore\Model\DataObject\Car[] $compatibleTo
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setCompatibleTo(?array $compatibleTo)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("compatibleTo");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCompatibleTo();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $compatibleTo);
	if (!$isEqual) {
		$this->markFieldDirty("compatibleTo", true);
	}
	$this->compatibleTo = $fd->preSetData($this, $compatibleTo);
	return $this;
}

/**
* Get technicalAttributes - Technical Attributes
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getTechnicalAttributes(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("technicalAttributes");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("technicalAttributes")->preGetData($this);

	return $data;
}

/**
* Set technicalAttributes - Technical Attributes
* @param \Pimcore\Model\DataObject\Classificationstore|null $technicalAttributes
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setTechnicalAttributes(?\Pimcore\Model\DataObject\Classificationstore $technicalAttributes)
{
	$this->technicalAttributes = $technicalAttributes;

	return $this;
}

/**
* Get image - image
* @return \Pimcore\Model\DataObject\Data\Hotspotimage|null
*/
public function getImage(): ?\Pimcore\Model\DataObject\Data\Hotspotimage
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("image");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set image - image
* @param \Pimcore\Model\DataObject\Data\Hotspotimage|null $image
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setImage(?\Pimcore\Model\DataObject\Data\Hotspotimage $image)
{
	$this->image = $image;

	return $this;
}

/**
* Get additionalCategories - Additional Categories
* @return \Pimcore\Model\DataObject\Category[]
*/
public function getAdditionalCategories(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("additionalCategories");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("additionalCategories")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set additionalCategories - Additional Categories
* @param \Pimcore\Model\DataObject\Category[] $additionalCategories
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setAdditionalCategories(?array $additionalCategories)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("additionalCategories");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getAdditionalCategories();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $additionalCategories);
	if (!$isEqual) {
		$this->markFieldDirty("additionalCategories", true);
	}
	$this->additionalCategories = $fd->preSetData($this, $additionalCategories);
	return $this;
}

/**
* Get erpNumber - ERP Number
* @return string|null
*/
public function getErpNumber(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("erpNumber");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->erpNumber;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set erpNumber - ERP Number
* @param string|null $erpNumber
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setErpNumber(?string $erpNumber)
{
	$this->erpNumber = $erpNumber;

	return $this;
}

/**
* Get categoryCode - Category Code
* @return string|null
*/
public function getCategoryCode(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("categoryCode");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->categoryCode;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set categoryCode - Category Code
* @param string|null $categoryCode
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setCategoryCode(?string $categoryCode)
{
	$this->categoryCode = $categoryCode;

	return $this;
}

/**
* Get owner - Owner
* @return string|null
*/
public function getOwner(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("owner");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->owner;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set owner - Owner
* @param string|null $owner
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setOwner(?string $owner)
{
	$this->owner = $owner;

	return $this;
}

/**
* @return \Pimcore\Model\DataObject\AccessoryPart\SaleInformation
*/
public function getSaleInformation(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->saleInformation;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\AccessoryPart\\SaleInformation")) {
			$data = new \Pimcore\Model\DataObject\AccessoryPart\SaleInformation($this, "saleInformation");
			$this->saleInformation = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("saleInformation");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set saleInformation - 
* @param \Pimcore\Model\DataObject\Objectbrick|null $saleInformation
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setSaleInformation(?\Pimcore\Model\DataObject\Objectbrick $saleInformation)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("saleInformation");
	$this->saleInformation = $fd->preSetData($this, $saleInformation);
	return $this;
}

/**
* Get urlSlug - UrlSlug
* @return \Pimcore\Model\DataObject\Data\UrlSlug[]
*/
public function getUrlSlug(): ?array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("urlSlug");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("urlSlug")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set urlSlug - UrlSlug
* @param \Pimcore\Model\DataObject\Data\UrlSlug[] $urlSlug
* @return \Pimcore\Model\DataObject\AccessoryPart
*/
public function setUrlSlug(?array $urlSlug)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\UrlSlug $fd */
	$fd = $this->getClass()->getFieldDefinition("urlSlug");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getUrlSlug();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $urlSlug);
	if (!$isEqual) {
		$this->markFieldDirty("urlSlug", true);
	}
	$this->urlSlug = $fd->preSetData($this, $urlSlug);
	return $this;
}

}

