<?php

namespace Controle\sub1\sub2;

/**
 * PricingRecommendationsType
 * Pricing data returned from the Product Pricing engine.
 */
class PricingRecommendationsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ProductInfoType | A product's pricing data (if any) and brief information about the product.
	 */
	public $ProductInfo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ProductInfoType $val
	 * @throws Exception
	 */
	public function setProductInfo($val)
	{
        $this->ProductInfo = (int)$val;
	}
}
