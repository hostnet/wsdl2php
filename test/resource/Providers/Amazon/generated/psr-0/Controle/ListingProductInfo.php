<?php

namespace Controle;

class ListingProductInfo
{
	/**
	 * @var \Controle\ListingProductDetailsArray
	 */
	public $listingproductdetails;
	/**
	 * @param ListingProductDetailsArray $val
	 * @throws Exception
	 */
	public function setListingProductDetails($val)
	{
        $this->listingproductdetails = (int)$val;
	}
}
