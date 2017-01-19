<?php

namespace Controle\sub1\sub2;

class ListingProductInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ListingProductDetailsArray
	 */
	public $ListingProductDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ListingProductDetailsArray $val
	 * @throws \Exception
	 */
	public function setListingProductDetails($val)
	{
        $this->ListingProductDetails = $val;
	}
}
