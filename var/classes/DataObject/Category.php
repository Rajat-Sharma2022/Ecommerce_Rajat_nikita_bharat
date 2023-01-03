<?php

/**
 * Inheritance: yes
 * Variants: no
 *
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- name [input]
 * -- productNamePart [input]
 * - filterDefinition [manyToOneRelation]
 * - cars [reverseObjectRelation]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Category\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Category\Listing|\Pimcore\Model\DataObject\Category|null getByLocalizedfields($field, $value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Category\Listing|\Pimcore\Model\DataObject\Category|null getByName($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Category\Listing|\Pimcore\Model\DataObject\Category|null getByProductNamePart($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Category\Listing|\Pimcore\Model\DataObject\Category|null getByFilterDefinition($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Category\Listing|\Pimcore\Model\DataObject\Category|null getByCars($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Category extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractCategory
{
protected $o_classId = "CA";
protected $o_className = "Category";
protected $localizedfields;
protected $filterDefinition;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Category
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - Texts
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("localizedfields")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("localizedfields");
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
* Get name - Name
* @return string|null
*/
public function getName($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
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
* Get productNamePart - Product Name Part
* @return string|null
*/
public function getProductNamePart($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("productNamePart", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productNamePart");
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
* Set localizedfields - Texts
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return \Pimcore\Model\DataObject\Category
*/
public function setLocalizedfields(?\Pimcore\Model\DataObject\Localizedfield $localizedfields)
{
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getLocalizedfields();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$this->markFieldDirty("localizedfields", true);
	$this->localizedfields = $localizedfields;

	return $this;
}

/**
* Set name - Name
* @param string|null $name
* @return \Pimcore\Model\DataObject\Category
*/
public function setName (?string $name, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language, !$isEqual);

	return $this;
}

/**
* Set productNamePart - Product Name Part
* @param string|null $productNamePart
* @return \Pimcore\Model\DataObject\Category
*/
public function setProductNamePart (?string $productNamePart, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("productNamePart", $productNamePart, $language, !$isEqual);

	return $this;
}

/**
* Get filterDefinition - Filter Definition
* @return \Pimcore\Model\DataObject\FilterDefinition|null
*/
public function getFilterDefinition(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("filterDefinition");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("filterDefinition")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("filterDefinition")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("filterDefinition");
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
* Set filterDefinition - Filter Definition
* @param \Pimcore\Model\DataObject\FilterDefinition|null $filterDefinition
* @return \Pimcore\Model\DataObject\Category
*/
public function setFilterDefinition(?\Pimcore\Model\Element\AbstractElement $filterDefinition)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("filterDefinition");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getFilterDefinition();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $filterDefinition);
	if (!$isEqual) {
		$this->markFieldDirty("filterDefinition", true);
	}
	$this->filterDefinition = $fd->preSetData($this, $filterDefinition);
	return $this;
}

/**
* Get cars - Cars
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getCars(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("cars");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("cars")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

}

