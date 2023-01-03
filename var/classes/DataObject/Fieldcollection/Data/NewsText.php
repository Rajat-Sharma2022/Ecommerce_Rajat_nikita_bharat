<?php

/**
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- text [wysiwyg]
 */

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

class NewsText extends DataObject\Fieldcollection\Data\AbstractData
{
protected $type = "NewsText";
protected $localizedfields;


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
* Get text - Text
* @return string|null
*/
public function getText($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("text", $language);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsText
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
* Set text - Text
* @param string|null $text
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsText
*/
public function setText (?string $text, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("text", $text, $language, !$isEqual);

	return $this;
}

}

