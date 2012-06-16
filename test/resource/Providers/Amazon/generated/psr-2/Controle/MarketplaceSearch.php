<?php

namespace Controle;
class MarketplaceSearch {
    /**
     * @var \Controle\MarketplaceSearchDetailsArray
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

