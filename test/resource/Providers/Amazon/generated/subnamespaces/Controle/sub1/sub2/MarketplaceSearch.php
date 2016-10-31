<?php

namespace Controle\sub1\sub2;

class MarketplaceSearch
{
	/**
	 * @var \Controle\sub1\sub2\MarketplaceSearchDetailsArray
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
