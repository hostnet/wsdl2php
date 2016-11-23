<?php

namespace Controle;

/**
 * StoreLogoArrayType
 * Set of Store logos.
 */
class StoreLogoArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StoreLogoType | Store logo.
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
