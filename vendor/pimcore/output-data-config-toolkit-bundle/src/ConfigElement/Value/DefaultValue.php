<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace OutputDataConfigToolkitBundle\ConfigElement\Value;

use OutputDataConfigToolkitBundle\ConfigElement\AbstractConfigElement;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\DefaultMockup;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Classificationstore;

class DefaultValue extends AbstractConfigElement
{
    protected $icon;
    private $localized;

    public function __construct($config, $context = null)
    {
        parent::__construct($config, $context);
        $this->icon = $config->icon ?? null;
        $this->localized = false;
    }

    public function getLabeledValue($object)
    {
        $this->localized = false;
        $attributeParts = explode('~', $this->attribute);
        $label = $this->label;

        $getter = 'get' . ucfirst($this->attribute);

        $brickInfos = null;
        if (substr($this->attribute, 0, 1) == '~') {
            // key value, ignore for now
        } elseif (count($attributeParts) > 1) {
            $brickType = $attributeParts[0];
            $brickKey = $attributeParts[1];

            if ($brickKey && strpos($brickType, '?') === 0) {
                $definitionJson = substr($brickType, 1);
                $brickInfos = json_decode($definitionJson);
                $containerKey = $brickInfos->containerKey;
                $fieldName = $brickInfos->fieldname;
                $brickfield = $brickInfos->brickfield;

                $brickType = $containerKey;

                $getter = 'get'.ucfirst($fieldName);
                $brickTypeGetter = 'get'.ucfirst($brickType);
                $brickGetter = 'get'.ucfirst($brickfield);
            } elseif ($object instanceof DefaultMockup || $object instanceof AbstractObject) {
                $getter = 'get' . ucfirst(\Pimcore\Model\DataObject\Service::getFieldForBrickType($object->getClass(), $brickType));
                $brickTypeGetter = 'get' . ucfirst($brickType);
                $brickGetter = 'get' . ucfirst($brickKey);
            }
        } elseif (substr($this->attribute, 0, 4) == '#cs#') {
            // checking classification store fieldname
            if (!$this->classificationstore) {
                return null;
            }
            $getter = 'get' . ucfirst($this->classificationstore);
            // checking classification sote group
            if (!$this->classificationstore_group) {
                return null;
            }
            $groupDef = Classificationstore\GroupConfig::getByName($this->classificationstore_group);

            // classification store
            $attribute = str_replace('#cs#', '', $this->attribute);
            list($keyId) = explode('#', $attribute);

            $value = $object->$getter()->getLocalizedKeyValue($groupDef->getId(), $keyId);

            $result = new \stdClass();
            $result->value = $value;
            $result->label = $this->label;
            $result->attribute = $this->attribute;

            $config = Classificationstore\KeyConfig::getById($keyId);
            if ($config) {
                $result->def = \Pimcore\Model\DataObject\Classificationstore\Service::getFieldDefinitionFromKeyConfig($config);
            }

            if (empty($value) || (is_object($value) && method_exists($value, 'isEmpty') && $value->isEmpty())) {
                $result->empty = true;
            } else {
                $result->empty = false;
            }

            return $result;
        }
        if (method_exists($object, $getter) || $object instanceof DefaultMockup) {
            $value = $object->$getter();

            if ($object instanceof DefaultMockup || $object instanceof AbstractObject) {
                $def = $object->getClass()->getFieldDefinition($this->attribute);
                if (!$def && method_exists($object, 'getClass')) {
                    /**
                     * @var \Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields $lf
                     */
                    $lf = $object->getClass()->getFieldDefinition('localizedfields');
                    if ($lf) {
                        $def = $lf->getFieldDefinition($this->attribute);
                        if ($def) {
                            $this->localized = true;
                        }
                    }
                }

                if (empty($label)) {
                    if ($def) {
                        $label = $def->getTitle();
                    }
                }

                if (!empty($value) && !empty($brickGetter)) {
                    $brickDef = \Pimcore\Model\DataObject\Objectbrick\Definition::getByKey($brickType);
                    $def = $brickDef->getFieldDefinition($brickKey);
                    if (!$def) {
                        /**
                         * @var \Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields $lf
                         */
                        $lf = $brickDef->getFieldDefinition('localizedfields');
                        if ($lf) {
                            $def = $lf->getFieldDefinition($brickInfos ? $brickfield : $this->attribute);
                            if ($def) {
                                $this->localized = true;
                            }
                        }
                    }

                    if (empty($label) && !empty($value)) {
                        if ($def) {
                            $label = $def->getTitle();
                        }
                    }

                    if (is_object($value) && method_exists($value, $brickTypeGetter)) {
                        $value = $value->$brickTypeGetter();

                        if (is_object($value) && method_exists($value, $brickGetter)) {
                            $value = $value->$brickGetter();
                        } elseif ($brickInfos && !is_null($value)) {
                            $lfs = $value->getLocalizedfields();
                            $value = $lfs->getLocalizedValue($brickfield);
                            $this->localized = true;
                        } else {
                            $value = null;
                        }
                    } else {
                        $value = null;
                    }
                }
            }

            $result = new \stdClass();
            $result->value = $value;
            $result->label = $label;

            if (empty($value) || (is_object($value) && method_exists($value, 'isEmpty') && $value->isEmpty())) {
                $result->empty = true;
            } else {
                $result->empty = false;
            }

            $result->def = $def;

            return $result;
        }

        return null;
    }
}
