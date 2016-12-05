<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PricingRecommendationsType
 * Pricing data returned from the Product Pricing engine.
 */
class PricingRecommendationsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfoType | A product's pricing data (if any) and brief information about the product.
     */
    public $ProductInfo;
    // @codingStandardsIgnoreEnd

    /**
     * @param ProductInfoType $val
     * @throws Exception
     */
    public function setProductInfo($val)
    {
        $this->ProductInfo = (ProductInfoType)$val;
    }
}
