<?php

namespace Controle;

/**
 * PricingRecommendationsType
 * Pricing data returned from the Product Pricing engine.
 */
class PricingRecommendationsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ProductInfoType | A product's pricing data (if any) and brief information about the product.
	 */
	public $ProductInfo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ProductInfoType $val
	 * @throws Exception
	 */
	public function setProductInfo($val)
	{
        $this->ProductInfo = ()$val;
	}
}
