<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ListingProductInfo
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingProductDetailsArray
     */
    public $ListingProductDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param ListingProductDetailsArray $val
     * @throws Exception
     */
    public function setListingProductDetails($val)
    {
        $this->ListingProductDetails = $val;
    }
}
