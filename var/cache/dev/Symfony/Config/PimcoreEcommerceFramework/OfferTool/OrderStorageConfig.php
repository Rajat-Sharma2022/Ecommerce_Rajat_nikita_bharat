<?php

namespace Symfony\Config\PimcoreEcommerceFramework\OfferTool;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrderStorageConfig 
{
    private $offerClass;
    private $offerItemClass;
    private $parentFolderPath;
    private $_usedProperties = [];

    /**
     * Pimcore object class for offers
     * @default 'Pimcore\\Model\\DataObject\\OfferToolOffer'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function offerClass($value): self
    {
        $this->_usedProperties['offerClass'] = true;
        $this->offerClass = $value;

        return $this;
    }

    /**
     * Pimcore object class for offer items
     * @default 'Pimcore\\Model\\DataObject\\OfferToolOfferItem'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function offerItemClass($value): self
    {
        $this->_usedProperties['offerItemClass'] = true;
        $this->offerItemClass = $value;

        return $this;
    }

    /**
     * default path for new offers
     * @default '/offertool/offers/%%Y/%%m'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parentFolderPath($value): self
    {
        $this->_usedProperties['parentFolderPath'] = true;
        $this->parentFolderPath = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('offer_class', $value)) {
            $this->_usedProperties['offerClass'] = true;
            $this->offerClass = $value['offer_class'];
            unset($value['offer_class']);
        }

        if (array_key_exists('offer_item_class', $value)) {
            $this->_usedProperties['offerItemClass'] = true;
            $this->offerItemClass = $value['offer_item_class'];
            unset($value['offer_item_class']);
        }

        if (array_key_exists('parent_folder_path', $value)) {
            $this->_usedProperties['parentFolderPath'] = true;
            $this->parentFolderPath = $value['parent_folder_path'];
            unset($value['parent_folder_path']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['offerClass'])) {
            $output['offer_class'] = $this->offerClass;
        }
        if (isset($this->_usedProperties['offerItemClass'])) {
            $output['offer_item_class'] = $this->offerItemClass;
        }
        if (isset($this->_usedProperties['parentFolderPath'])) {
            $output['parent_folder_path'] = $this->parentFolderPath;
        }

        return $output;
    }

}
