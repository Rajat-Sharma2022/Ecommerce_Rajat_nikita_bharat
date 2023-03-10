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

namespace Pimcore\Model\Asset\MetaData\ClassDefinition\Data;

class Date extends Data
{
    /**
     * {@inheritdoc}
     */
    public function getDataFromEditMode($data, $params = [])
    {
        return $this->normalize($data, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function normalize($value, $params = [])
    {
        if ($value && !is_numeric($value)) {
            $value = strtotime($value);
        }

        return $value;
    }

    /**
     * @param mixed $value
     * @param array $params
     *
     * @return string
     */
    public function getVersionPreview($value, $params = [])
    {
        return (string)date('m/d/Y', $value);
    }
}
