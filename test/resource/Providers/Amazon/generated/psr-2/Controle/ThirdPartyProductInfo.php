<?php

namespace Controle;

class ThirdPartyProductInfo
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ThirdPartyProductDetailsArray
     */
    public $ThirdPartyProductDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param ThirdPartyProductDetailsArray $val
     * @throws Exception
     */
    public function setThirdPartyProductDetails($val)
    {
        $this->ThirdPartyProductDetails = ()$val;
    }
}
