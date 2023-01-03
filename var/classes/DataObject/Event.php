<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- title [input]
 * -- description [wysiwyg]
 * - tags [multiselect]
 * - locationAddress [textarea]
 * - locationMap [geopoint]
 * - fromDate [datetime]
 * - toDate [datetime]
 * - cars [manyToManyObjectRelation]
 * - mainImage [image]
 * - video [video]
 * - images [imageGallery]
 * - contactName [input]
 * - contactPhone [input]
 * - contactEmail [input]
 * - contactAddress [textarea]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Event\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByLocalizedfields($field, $value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByTitle($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByDescription($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByTags($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByLocationAddress($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByFromDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByToDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByCars($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByMainImage($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByContactName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByContactPhone($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByContactEmail($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Event\Listing|\Pimcore\Model\DataObject\Event|null getByContactAddress($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Event extends Concrete
{
protected $o_classId = "EV";
protected $o_className = "Event";
protected $localizedfields;
protected $tags;
protected $locationAddress;
protected $locationMap;
protected $fromDate;
protected $toDate;
protected $cars;
protected $mainImage;
protected $video;
protected $images;
protected $contactName;
protected $contactPhone;
protected $contactEmail;
protected $contactAddress;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Event
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
* Get title - title
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
* Get description - Description
* @return string|null
*/
public function getDescription($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("description", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
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
* @return \Pimcore\Model\DataObject\Event
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
* Set title - title
* @param string|null $title
* @return \Pimcore\Model\DataObject\Event
*/
public function setTitle (?string $title, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("title", $title, $language, !$isEqual);

	return $this;
}

/**
* Set description - Description
* @param string|null $description
* @return \Pimcore\Model\DataObject\Event
*/
public function setDescription (?string $description, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("description", $description, $language, !$isEqual);

	return $this;
}

/**
* Get tags - Tags
* @return string[]|null
*/
public function getTags(): ?array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("tags");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->tags;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set tags - Tags
* @param string[]|null $tags
* @return \Pimcore\Model\DataObject\Event
*/
public function setTags(?array $tags)
{
	$this->tags = $tags;

	return $this;
}

/**
* Get locationAddress - Location Address
* @return string|null
*/
public function getLocationAddress(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("locationAddress");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->locationAddress;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set locationAddress - Location Address
* @param string|null $locationAddress
* @return \Pimcore\Model\DataObject\Event
*/
public function setLocationAddress(?string $locationAddress)
{
	$this->locationAddress = $locationAddress;

	return $this;
}

/**
* Get locationMap - Location Map
* @return \Pimcore\Model\DataObject\Data\GeoCoordinates|null
*/
public function getLocationMap(): ?\Pimcore\Model\DataObject\Data\GeoCoordinates
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("locationMap");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->locationMap;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set locationMap - Location Map
* @param \Pimcore\Model\DataObject\Data\GeoCoordinates|null $locationMap
* @return \Pimcore\Model\DataObject\Event
*/
public function setLocationMap(?\Pimcore\Model\DataObject\Data\GeoCoordinates $locationMap)
{
	$this->locationMap = $locationMap;

	return $this;
}

/**
* Get fromDate - Start
* @return \Carbon\Carbon|null
*/
public function getFromDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("fromDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->fromDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set fromDate - Start
* @param \Carbon\Carbon|null $fromDate
* @return \Pimcore\Model\DataObject\Event
*/
public function setFromDate(?\Carbon\Carbon $fromDate)
{
	$this->fromDate = $fromDate;

	return $this;
}

/**
* Get toDate - End
* @return \Carbon\Carbon|null
*/
public function getToDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("toDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->toDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set toDate - End
* @param \Carbon\Carbon|null $toDate
* @return \Pimcore\Model\DataObject\Event
*/
public function setToDate(?\Carbon\Carbon $toDate)
{
	$this->toDate = $toDate;

	return $this;
}

/**
* Get cars - Cars
* @return \Pimcore\Model\DataObject\Car[]
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

/**
* Set cars - Cars
* @param \Pimcore\Model\DataObject\Car[] $cars
* @return \Pimcore\Model\DataObject\Event
*/
public function setCars(?array $cars)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("cars");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCars();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $cars);
	if (!$isEqual) {
		$this->markFieldDirty("cars", true);
	}
	$this->cars = $fd->preSetData($this, $cars);
	return $this;
}

/**
* Get mainImage - Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getMainImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("mainImage");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->mainImage;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set mainImage - Image
* @param \Pimcore\Model\Asset\Image|null $mainImage
* @return \Pimcore\Model\DataObject\Event
*/
public function setMainImage(?\Pimcore\Model\Asset\Image $mainImage)
{
	$this->mainImage = $mainImage;

	return $this;
}

/**
* Get video - Video
* @return \Pimcore\Model\DataObject\Data\Video|null
*/
public function getVideo(): ?\Pimcore\Model\DataObject\Data\Video
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("video");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->video;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set video - Video
* @param \Pimcore\Model\DataObject\Data\Video|null $video
* @return \Pimcore\Model\DataObject\Event
*/
public function setVideo(?\Pimcore\Model\DataObject\Data\Video $video)
{
	$this->video = $video;

	return $this;
}

/**
* Get images - Additional Images
* @return \Pimcore\Model\DataObject\Data\ImageGallery|null
*/
public function getImages(): ?\Pimcore\Model\DataObject\Data\ImageGallery
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("images");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->images;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set images - Additional Images
* @param \Pimcore\Model\DataObject\Data\ImageGallery|null $images
* @return \Pimcore\Model\DataObject\Event
*/
public function setImages(?\Pimcore\Model\DataObject\Data\ImageGallery $images)
{
	$this->images = $images;

	return $this;
}

/**
* Get contactName - Name
* @return string|null
*/
public function getContactName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("contactName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->contactName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set contactName - Name
* @param string|null $contactName
* @return \Pimcore\Model\DataObject\Event
*/
public function setContactName(?string $contactName)
{
	$this->contactName = $contactName;

	return $this;
}

/**
* Get contactPhone - Phone
* @return string|null
*/
public function getContactPhone(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("contactPhone");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->contactPhone;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set contactPhone - Phone
* @param string|null $contactPhone
* @return \Pimcore\Model\DataObject\Event
*/
public function setContactPhone(?string $contactPhone)
{
	$this->contactPhone = $contactPhone;

	return $this;
}

/**
* Get contactEmail - Email
* @return string|null
*/
public function getContactEmail(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("contactEmail");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->contactEmail;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set contactEmail - Email
* @param string|null $contactEmail
* @return \Pimcore\Model\DataObject\Event
*/
public function setContactEmail(?string $contactEmail)
{
	$this->contactEmail = $contactEmail;

	return $this;
}

/**
* Get contactAddress - Address
* @return string|null
*/
public function getContactAddress(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("contactAddress");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->contactAddress;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set contactAddress - Address
* @param string|null $contactAddress
* @return \Pimcore\Model\DataObject\Event
*/
public function setContactAddress(?string $contactAddress)
{
	$this->contactAddress = $contactAddress;

	return $this;
}

}

