<?php

namespace Controle;

class SellerSearch
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\SellerSearchDetailsArray
     */
    public $SellerSearchDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param SellerSearchDetailsArray $val
     * @throws Exception
     */
    public function setSellerSearchDetails($val)
    {
        $this->SellerSearchDetails = (int)$val;
    }
}
