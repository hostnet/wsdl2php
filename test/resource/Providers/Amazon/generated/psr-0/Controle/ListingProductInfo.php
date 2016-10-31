<?php

namespace Controle;
class ListingProductInfo {
	/**
	 * @var \Controle\ListingProductDetailsArray
	 */
	public $ListingProductDetails;
	/**
	 * @param ListingProductDetailsArray $val
	 * @throws Exception
	 */
	public function setListingProductDetails($val) {
		
		$this->ListingProductDetails = (int)$val;
	}

}

