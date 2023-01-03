<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - name [input]
 * - logo [image]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Manufacturer\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Manufacturer\Listing|\Pimcore\Model\DataObject\Manufacturer|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Manufacturer\Listing|\Pimcore\Model\DataObject\Manufacturer|null getByLogo($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Manufacturer extends Concrete
{
protected $o_classId = "MA";
protected $o_className = "Manufacturer";
protected $name;
protected $logo;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Manufacturer
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return \Pimcore\Model\DataObject\Manufacturer
*/
public function setName(?string $name)
{
	$this->name = $name;

	return $this;
}

/**
* Get logo - Logo
* @return \Pimcore\Model\Asset\Image|null
*/
public function getLogo(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("logo");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->logo;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set logo - Logo
* @param \Pimcore\Model\Asset\Image|null $logo
* @return \Pimcore\Model\DataObject\Manufacturer
*/
public function setLogo(?\Pimcore\Model\Asset\Image $logo)
{
	$this->logo = $logo;

	return $this;
}

}

