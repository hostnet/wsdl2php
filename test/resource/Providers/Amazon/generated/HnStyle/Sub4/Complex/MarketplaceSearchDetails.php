<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class MarketplaceSearchDetails
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $NumberOfOpenListings;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingProductInfo
     */
    public $ListingProductInfo;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfOpenListings($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfOpenListings');
        }
        $this->NumberOfOpenListings = (int)$val;
    }

    /**
     * @param ListingProductInfo $val
     * @throws Exception
     */
    public function setListingProductInfo($val)
    {
        $this->ListingProductInfo = (int)$val;
    }
}
