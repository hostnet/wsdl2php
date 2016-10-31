<?php

namespace Controle\sub1\sub2;

/**
 * ProductRecommendationsType
 * A list of products returned from the Suggested Attributes engine.
 */
class ProductRecommendationsType
{
	/**
	 * @var \Controle\sub1\sub2\ProductInfoType | A suggested product to use to list an item with Pre-filled Item Information.
	 *  Returned from GetItemRecommendations when the Suggested Attributes engine is used
	 *         See the Developer's Guide for additional details.
	 */
	public $product;
	/**
	 * @param ProductInfoType $val
	 * @throws Exception
	 */
	public function setProduct($val)
	{
        $this->product = (int)$val;
	}
}
