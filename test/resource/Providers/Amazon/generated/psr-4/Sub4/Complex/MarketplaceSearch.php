<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class MarketplaceSearch
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MarketplaceSearchDetailsArray
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
