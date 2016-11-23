<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreLogoArrayType
 * Set of Store logos.
 */
class StoreLogoArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreLogoType | Store logo.
     */
    public $Logo;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreLogoType $val
     * @throws Exception
     */
    public function setLogo($val)
    {
        $this->Logo = (int)$val;
    }
}
