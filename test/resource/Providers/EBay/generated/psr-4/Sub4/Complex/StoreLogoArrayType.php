<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreLogoArrayType
 * Set of Store logos.
 */
class StoreLogoArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreLogoType | Store logo.
     */
    public $logo;
    /**
     * @param StoreLogoType $val
     * @throws Exception
     */
    public function setLogo($val)
    {
        $this->logo = (int)$val;
    }
}
