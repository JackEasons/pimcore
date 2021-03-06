<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Element
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Normalizer;

/**
 * Marker interface for data types that support normalization/denormalization
 */
interface NormalizerInterface
{
    /**
     * @param mixed $value
     * @param array $params
     *
     * @return mixed
     */
    public function normalize($value, $params = []);

    /**
     * @param mixed $value
     * @param array $params
     *
     * @return mixed
     */
    public function denormalize($value, $params = []);
}
