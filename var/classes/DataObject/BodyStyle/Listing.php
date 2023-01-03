<?php

namespace Pimcore\Model\DataObject\BodyStyle;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\BodyStyle|false current()
 * @method DataObject\BodyStyle[] load()
 * @method DataObject\BodyStyle[] getData()
 * @method DataObject\BodyStyle[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "BS";
protected $className = "BodyStyle";


/**
* Filter by name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}



}
