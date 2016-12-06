<?php

namespace Controle;

class ListingProductInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ListingProductDetailsArray
	 */
	public $ListingProductDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ListingProductDetailsArray $val
	 * @throws Exception
	 */
	public function setListingProductDetails($val)
	{
        $this->ListingProductDetails = $val;
	}
}
