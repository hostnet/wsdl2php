<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class MarketplaceSearchDetails
{
    /**
     * @var string
     */
    public $numberofopenlistings;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingProductInfo
     */
    public $listingproductinfo;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfOpenListings($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfOpenListings');
        }
        $this->numberofopenlistings = (int)$val;
    }

    /**
     * @param ListingProductInfo $val
     * @throws Exception
     */
    public function setListingProductInfo($val)
    {
        $this->listingproductinfo = (int)$val;
    }
}
