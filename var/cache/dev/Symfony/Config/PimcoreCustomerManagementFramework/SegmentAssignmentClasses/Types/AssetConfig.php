<?php

namespace Symfony\Config\PimcoreCustomerManagementFramework\SegmentAssignmentClasses\Types;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AssetConfig 
{
    private $folder;
    private $image;
    private $text;
    private $audio;
    private $video;
    private $document;
    private $archive;
    private $unknown;
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
    public function image($value): self
    {
        $this->_usedProperties['image'] = true;
        $this->image = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function text($value): self
    {
        $this->_usedProperties['text'] = true;
        $this->text = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function audio($value): self
    {
        $this->_usedProperties['audio'] = true;
        $this->audio = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function video($value): self
    {
        $this->_usedProperties['video'] = true;
        $this->video = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function document($value): self
    {
        $this->_usedProperties['document'] = true;
        $this->document = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function archive($value): self
    {
        $this->_usedProperties['archive'] = true;
        $this->archive = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function unknown($value): self
    {
        $this->_usedProperties['unknown'] = true;
        $this->unknown = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('folder', $value)) {
            $this->_usedProperties['folder'] = true;
            $this->folder = $value['folder'];
            unset($value['folder']);
        }

        if (array_key_exists('image', $value)) {
            $this->_usedProperties['image'] = true;
            $this->image = $value['image'];
            unset($value['image']);
        }

        if (array_key_exists('text', $value)) {
            $this->_usedProperties['text'] = true;
            $this->text = $value['text'];
            unset($value['text']);
        }

        if (array_key_exists('audio', $value)) {
            $this->_usedProperties['audio'] = true;
            $this->audio = $value['audio'];
            unset($value['audio']);
        }

        if (array_key_exists('video', $value)) {
            $this->_usedProperties['video'] = true;
            $this->video = $value['video'];
            unset($value['video']);
        }

        if (array_key_exists('document', $value)) {
            $this->_usedProperties['document'] = true;
            $this->document = $value['document'];
            unset($value['document']);
        }

        if (array_key_exists('archive', $value)) {
            $this->_usedProperties['archive'] = true;
            $this->archive = $value['archive'];
            unset($value['archive']);
        }

        if (array_key_exists('unknown', $value)) {
            $this->_usedProperties['unknown'] = true;
            $this->unknown = $value['unknown'];
            unset($value['unknown']);
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
        if (isset($this->_usedProperties['image'])) {
            $output['image'] = $this->image;
        }
        if (isset($this->_usedProperties['text'])) {
            $output['text'] = $this->text;
        }
        if (isset($this->_usedProperties['audio'])) {
            $output['audio'] = $this->audio;
        }
        if (isset($this->_usedProperties['video'])) {
            $output['video'] = $this->video;
        }
        if (isset($this->_usedProperties['document'])) {
            $output['document'] = $this->document;
        }
        if (isset($this->_usedProperties['archive'])) {
            $output['archive'] = $this->archive;
        }
        if (isset($this->_usedProperties['unknown'])) {
            $output['unknown'] = $this->unknown;
        }

        return $output;
    }

}
