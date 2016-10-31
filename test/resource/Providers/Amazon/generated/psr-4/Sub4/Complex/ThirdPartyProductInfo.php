<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ThirdPartyProductInfo
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ThirdPartyProductDetailsArray
     */
    public $thirdpartyproductdetails;
    /**
     * @param ThirdPartyProductDetailsArray $val
     * @throws Exception
     */
    public function setThirdPartyProductDetails($val)
    {
        $this->thirdpartyproductdetails = (int)$val;
    }
}
