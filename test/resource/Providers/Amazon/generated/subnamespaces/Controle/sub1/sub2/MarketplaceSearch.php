<?php

namespace Controle\sub1\sub2;

class MarketplaceSearch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\MarketplaceSearchDetailsArray
	 */
	public $MarketplaceSearchDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param MarketplaceSearchDetailsArray $val
	 * @throws Exception
	 */
	public function setMarketplaceSearchDetails($val)
	{
        $this->MarketplaceSearchDetails = $val;
	}
}
