<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DocumentConfig 
{
    private $folder;
    private $page;
    private $snippet;
    private $link;
    private $hardlink;
    private $email;
    private $newsletter;
    private $printpage;
    private $printcontainer;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function folder($value): self
    {
        $this->_usedProperties['folder'] = true;
        $this->folder = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function page($value): self
    {
        $this->_usedProperties['page'] = true;
        $this->page = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function snippet($value): self
    {
        $this->_usedProperties['snippet'] = true;
        $this->snippet = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function link($value): self
    {
        $this->_usedProperties['link'] = true;
        $this->link = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hardlink($value): self
    {
        $this->_usedProperties['hardlink'] = true;
        $this->hardlink = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function email($value): self
    {
        $this->_usedProperties['email'] = true;
        $this->email = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function newsletter($value): self
    {
        $this->_usedProperties['newsletter'] = true;
        $this->newsletter = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function printpage($value): self
    {
        $this->_usedProperties['printpage'] = true;
        $this->printpage = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function printcontainer($value): self
    {
        $this->_usedProperties['printcontainer'] = true;
        $this->printcontainer = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('folder', $value)) {
            $this->_usedProperties['folder'] = true;
            $this->folder = $value['folder'];
            unset($value['folder']);
        }

        if (array_key_exists('page', $value)) {
            $this->_usedProperties['page'] = true;
            $this->page = $value['page'];
            unset($value['page']);
        }

        if (array_key_exists('snippet', $value)) {
            $this->_usedProperties['snippet'] = true;
            $this->snippet = $value['snippet'];
            unset($value['snippet']);
        }

        if (array_key_exists('link', $value)) {
            $this->_usedProperties['link'] = true;
            $this->link = $value['link'];
            unset($value['link']);
        }

        if (array_key_exists('hardlink', $value)) {
            $this->_usedProperties['hardlink'] = true;
            $this->hardlink = $value['hardlink'];
            unset($value['hardlink']);
        }

        if (array_key_exists('email', $value)) {
            $this->_usedProperties['email'] = true;
            $this->email = $value['email'];
            unset($value['email']);
        }

        if (array_key_exists('newsletter', $value)) {
            $this->_usedProperties['newsletter'] = true;
            $this->newsletter = $value['newsletter'];
            unset($value['newsletter']);
        }

        if (array_key_exists('printpage', $value)) {
            $this->_usedProperties['printpage'] = true;
            $this->printpage = $value['printpage'];
            unset($value['printpage']);
        }

        if (array_key_exists('printcontainer', $value)) {
            $this->_usedProperties['printcontainer'] = true;
            $this->printcontainer = $value['printcontainer'];
            unset($value['printcontainer']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['folder'])) {
            $output['folder'] = $this->folder;
        }
        if (isset($this->_usedProperties['page'])) {
            $output['page'] = $this->page;
        }
        if (isset($this->_usedProperties['snippet'])) {
            $output['snippet'] = $this->snippet;
        }
        if (isset($this->_usedProperties['link'])) {
            $output['link'] = $this->link;
        }
        if (isset($this->_usedProperties['hardlink'])) {
            $output['hardlink'] = $this->hardlink;
        }
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email;
        }
        if (isset($this->_usedProperties['newsletter'])) {
            $output['newsletter'] = $this->newsletter;
        }
        if (isset($this->_usedProperties['printpage'])) {
            $output['printpage'] = $this->printpage;
        }
        if (isset($this->_usedProperties['printcontainer'])) {
            $output['printcontainer'] = $this->printcontainer;
        }

        return $output;
    }

}
