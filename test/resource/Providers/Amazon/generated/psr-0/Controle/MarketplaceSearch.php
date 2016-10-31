<?php

namespace Controle;

class MarketplaceSearch
{
	/**
	 * @var \Controle\MarketplaceSearchDetailsArray
	 */
	public $marketplacesearchdetails;
	/**
	 * @param MarketplaceSearchDetailsArray $val
	 * @throws Exception
	 */
	public function setMarketplaceSearchDetails($val)
	{
        $this->marketplacesearchdetails = (int)$val;
	}
}
