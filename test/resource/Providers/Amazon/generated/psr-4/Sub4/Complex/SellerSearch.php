<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerSearch
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerSearchDetailsArray
     */
    public $sellersearchdetails;
    /**
     * @param SellerSearchDetailsArray $val
     * @throws Exception
     */
    public function setSellerSearchDetails($val)
    {
        $this->sellersearchdetails = (int)$val;
    }
}
