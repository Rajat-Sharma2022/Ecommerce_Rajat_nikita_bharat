<?php

/**
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- title [input]
 * - relatedCars [manyToManyObjectRelation]
 */

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

class NewsCars extends DataObject\Fieldcollection\Data\AbstractData
{
protected $type = "NewsCars";
protected $localizedfields;
protected $relatedCars;


/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield|null
*/
public function getLocalizedfields(): ?\Pimcore\Model\DataObject\Localizedfield
{
	$container = $this;
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields $fd */
	$fd = $this->getDefinition()->getFieldDefinition("localizedfields");
	$data = $fd->preGetData($container);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get title - Title
* @return string|null
*/
public function getTitle($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("title", $language);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsCars
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
* Set title - Title
* @param string|null $title
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsCars
*/
public function setTitle (?string $title, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("title", $title, $language, !$isEqual);

	return $this;
}

/**
* Get relatedCars - Related Cars
* @return \Pimcore\Model\DataObject\Car[]
*/
public function getRelatedCars(): array
{
	$container = $this;
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getDefinition()->getFieldDefinition("relatedCars");
	$data = $fd->preGetData($container);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set relatedCars - Related Cars
* @param \Pimcore\Model\DataObject\Car[] $relatedCars
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsCars
*/
public function setRelatedCars(?array $relatedCars)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getDefinition()->getFieldDefinition("relatedCars");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getRelatedCars();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $relatedCars);
	if (!$isEqual) {
		$this->markFieldDirty("relatedCars", true);
	}
	$this->relatedCars = $fd->preSetData($this, $relatedCars);
	return $this;
}

}

