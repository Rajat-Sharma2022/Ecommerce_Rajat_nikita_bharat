<?php

namespace Pimcore\Model\DataObject\OnlineShopOrder;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class PaymentProvider extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['PaymentProviderPayPalSmartButton'];


protected $PaymentProviderPayPalSmartButton = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton|null
*/
public function getPaymentProviderPayPalSmartButton(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->PaymentProviderPayPalSmartButton) &&
		$this->PaymentProviderPayPalSmartButton->getDoDelete()) {
			return null;
	}
	return $this->PaymentProviderPayPalSmartButton;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPalSmartButton $PaymentProviderPayPalSmartButton
* @return \Pimcore\Model\DataObject\OnlineShopOrder\PaymentProvider
*/
public function setPaymentProviderPayPalSmartButton($PaymentProviderPayPalSmartButton)
{
	$this->PaymentProviderPayPalSmartButton = $PaymentProviderPayPalSmartButton;
	return $this;
}

}

