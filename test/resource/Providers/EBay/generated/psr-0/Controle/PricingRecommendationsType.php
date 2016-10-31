<?php

namespace Controle;

/**
 * PricingRecommendationsType
 * Pricing data returned from the Product Pricing engine.
 */
class PricingRecommendationsType
{
	/**
	 * @var \Controle\ProductInfoType | A product's pricing data (if any) and brief information about the product.
	 */
	public $productinfo;
	/**
	 * @param ProductInfoType $val
	 * @throws Exception
	 */
	public function setProductInfo($val)
	{
        $this->productinfo = (int)$val;
	}
}
