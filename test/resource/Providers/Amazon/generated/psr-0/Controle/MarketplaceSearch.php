<?php

namespace Controle;

class MarketplaceSearch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\MarketplaceSearchDetailsArray
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
