<?php

namespace Controle;

/**
 * ProductArrayType
 * Container for a list of eBay Express products. Can contain zero, one, or multiple ExpressProductType
 * objects, each of which conveys the data for one product.
 */
class ProductArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ExpressProductType | A suggested product to use to list an item with Pre-filled Item Information.
     *     Returned from GetItemRecommendations when the Suggested Attributes engine is used
     *             See the Developer's Guide for additional details.
     */
    public $Product;
    // @codingStandardsIgnoreEnd

    /**
     * @param ExpressProductType $val
     * @throws Exception
     */
    public function setProduct($val)
    {
        $this->Product = ()$val;
    }
}
