<?php

namespace Pimcore\Model\DataObject\AccessoryPart;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class SaleInformation extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['SaleInformation'];


protected $SaleInformation = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation|null
*/
public function getSaleInformation(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->SaleInformation) &&
		$this->SaleInformation->getDoDelete()) {
			return null;
	}
	return $this->SaleInformation;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation $SaleInformation
* @return \Pimcore\Model\DataObject\AccessoryPart\SaleInformation
*/
public function setSaleInformation($SaleInformation)
{
	$this->SaleInformation = $SaleInformation;
	return $this;
}

}

