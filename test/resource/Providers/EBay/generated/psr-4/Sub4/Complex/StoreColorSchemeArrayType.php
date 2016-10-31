<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreColorSchemeArrayType
 * Set of eBay Store color schemes.
 */
class StoreColorSchemeArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreColorSchemeType | Theme color scheme.
     */
    public $colorscheme;
    /**
     * @param StoreColorSchemeType $val
     * @throws Exception
     */
    public function setColorScheme($val)
    {
        $this->colorscheme = (int)$val;
    }
}
