<?php

namespace Pimcore\Model\DataObject\Category;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Category|false current()
 * @method DataObject\Category[] load()
 * @method DataObject\Category[] getData()
 * @method DataObject\Category[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "CA";
protected $className = "Category";


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

/**
* Filter by productNamePart (Product Name Part)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductNamePart ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("productNamePart")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by filterDefinition (Filter Definition)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFilterDefinition ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("filterDefinition")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by cars (Cars)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCars ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("cars")->addListingFilter($this, $data, $operator);
	return $this;
}



}
