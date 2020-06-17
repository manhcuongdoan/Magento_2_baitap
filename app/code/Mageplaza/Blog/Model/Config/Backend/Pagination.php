<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Blog
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\Blog\Model\Config\Backend;

use Magento\Framework\App\Config\Value;
use Magento\Framework\Exception\ValidatorException;

/**
 * Class Author
 * @package Mageplaza\Blog\Model\Config\Backend
 */
class Pagination extends Value
{
    /**
     * @return Value|void
     * @throws ValidatorException
     */
    public function beforeSave()
    {
        if (!empty($this->getValue())) {
            $valueArray = explode(',', $this->getValue());
            foreach ($valueArray as $value) {
                if (!is_numeric($value) || $value < 1) {
                    throw new ValidatorException(__('Pagination value must be a positive integer.'));
                }
            }
        }
        parent::beforeSave(); // TODO: Change the autogenerated stub
    }
}