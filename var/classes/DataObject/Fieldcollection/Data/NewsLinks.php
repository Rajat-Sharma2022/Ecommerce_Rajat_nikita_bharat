<?php

/**
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- title [input]
 * - links [block]
 * -- link [link]
 */

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

class NewsLinks extends DataObject\Fieldcollection\Data\AbstractData
{
protected $type = "NewsLinks";
protected $localizedfields;
protected $links;


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
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsLinks
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
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsLinks
*/
public function setTitle (?string $title, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("title", $title, $language, !$isEqual);

	return $this;
}

/**
* Get links - Links
* @return \Pimcore\Model\DataObject\Data\BlockElement[][]
*/
public function getLinks(): ?array
{
	$container = $this;
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Block $fd */
	$fd = $this->getDefinition()->getFieldDefinition("links");
	$data = $fd->preGetData($container);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set links - Links
* @param \Pimcore\Model\DataObject\Data\BlockElement[][] $links
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\NewsLinks
*/
public function setLinks(?array $links)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Block $fd */
	$fd = $this->getDefinition()->getFieldDefinition("links");
	$this->links = $fd->preSetData($this, $links);
	return $this;
}

}

