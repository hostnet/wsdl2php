<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ThirdPartyProductInfo
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ThirdPartyProductDetailsArray
     */
    public $ThirdPartyProductDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param ThirdPartyProductDetailsArray $val
     * @throws Exception
     */
    public function setThirdPartyProductDetails($val)
    {
        $this->ThirdPartyProductDetails = (ThirdPartyProductDetailsArray)$val;
    }
}
