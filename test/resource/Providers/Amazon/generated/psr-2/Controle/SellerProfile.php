<?php

namespace Controle;

class SellerProfile
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\SellerProfileDetailsArray
     */
    public $SellerProfileDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param SellerProfileDetailsArray $val
     * @throws \Exception
     */
    public function setSellerProfileDetails($val)
    {
        $this->SellerProfileDetails = $val;
    }
}
