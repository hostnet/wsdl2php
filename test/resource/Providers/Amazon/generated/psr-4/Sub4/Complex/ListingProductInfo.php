<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ListingProductInfo
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingProductDetailsArray
     */
    public $listingproductdetails;
    /**
     * @param ListingProductDetailsArray $val
     * @throws Exception
     */
    public function setListingProductDetails($val)
    {
        $this->listingproductdetails = (int)$val;
    }
}
