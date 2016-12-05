<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerProfile
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerProfileDetailsArray
     */
    public $SellerProfileDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param SellerProfileDetailsArray $val
     * @throws Exception
     */
    public function setSellerProfileDetails($val)
    {
        $this->SellerProfileDetails = (SellerProfileDetailsArray)$val;
    }
}
