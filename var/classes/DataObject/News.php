<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- title [input]
 * -- shortText [textarea]
 * - content [fieldcollections]
 * - date [datetime]
 * - gallery [imageGallery]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\News\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByLocalizedfields($field, $value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByTitle($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByShortText($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\News\Listing|\Pimcore\Model\DataObject\News|null getByDate($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class News extends Concrete
{
protected $o_classId = "NE";
protected $o_className = "News";
protected $localizedfields;
protected $content;
protected $date;
protected $gallery;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\News
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
* Get title - Title
* @return string|null
*/
public function getTitle($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("title", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("title");
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
* Get shortText - Short Text
* @return string|null
*/
public function getShortText($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("shortText", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("shortText");
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
* @return \Pimcore\Model\DataObject\News
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
* @return \Pimcore\Model\DataObject\News
*/
public function setTitle (?string $title, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("title", $title, $language, !$isEqual);

	return $this;
}

/**
* Set shortText - Short Text
* @param string|null $shortText
* @return \Pimcore\Model\DataObject\News
*/
public function setShortText (?string $shortText, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("shortText", $shortText, $language, !$isEqual);

	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection|null
*/
public function getContent(): ?\Pimcore\Model\DataObject\Fieldcollection
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("content");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("content")->preGetData($this);
	return $data;
}

/**
* Set content - Content
* @param \Pimcore\Model\DataObject\Fieldcollection|null $content
* @return \Pimcore\Model\DataObject\News
*/
public function setContent(?\Pimcore\Model\DataObject\Fieldcollection $content)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections $fd */
	$fd = $this->getClass()->getFieldDefinition("content");
	$this->content = $fd->preSetData($this, $content);
	return $this;
}

/**
* Get date - Date
* @return \Carbon\Carbon|null
*/
public function getDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("date");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->date;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set date - Date
* @param \Carbon\Carbon|null $date
* @return \Pimcore\Model\DataObject\News
*/
public function setDate(?\Carbon\Carbon $date)
{
	$this->date = $date;

	return $this;
}

/**
* Get gallery - Gallery
* @return \Pimcore\Model\DataObject\Data\ImageGallery|null
*/
public function getGallery(): ?\Pimcore\Model\DataObject\Data\ImageGallery
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gallery");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gallery;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gallery - Gallery
* @param \Pimcore\Model\DataObject\Data\ImageGallery|null $gallery
* @return \Pimcore\Model\DataObject\News
*/
public function setGallery(?\Pimcore\Model\DataObject\Data\ImageGallery $gallery)
{
	$this->gallery = $gallery;

	return $this;
}

}

