<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Catalog
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Virtual product type implementation
 *
 * @category   Mage
 * @package    Mage_Catalog
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Mage_Catalog_Model_Product_Type_Virtual extends Mage_Catalog_Model_Product_Type_Abstract
{
    /**
     * Check is virtual product
     *
     * @param Mage_Catalog_Model_Product $product
     * @return bool
     */
    public function isVirtual($product)
    {
        return true;
    }

    /**
     * Check that product of this type has weight
     *
     * @return bool
     */
    public function hasWeight()
    {
        return false;
    }

    /**
     * Delete data specific for Virtual product type
     *
     * @param Mage_Catalog_Model_Product $product
     */
    public function deleteTypeSpecificData(Mage_Catalog_Model_Product $product)
    {
    }
}
