<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerProfile
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerProfileDetailsArray
     */
    public $sellerprofiledetails;
    /**
     * @param SellerProfileDetailsArray $val
     * @throws Exception
     */
    public function setSellerProfileDetails($val)
    {
        $this->sellerprofiledetails = (int)$val;
    }
}
