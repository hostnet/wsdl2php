<?php

namespace Controle\sub1\sub2;
class MarketplaceSearch {
	/**
	 * @var \Controle\sub1\sub2\MarketplaceSearchDetailsArray
	 */
	public $MarketplaceSearchDetails;
	/**
	 * @param MarketplaceSearchDetailsArray $val
	 * @throws Exception
	 */
	public function setMarketplaceSearchDetails($val) {
		
		$this->MarketplaceSearchDetails = (int)$val;
	}

}

