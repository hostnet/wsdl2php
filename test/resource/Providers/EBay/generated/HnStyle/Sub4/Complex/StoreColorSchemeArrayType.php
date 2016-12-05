<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreColorSchemeArrayType
 * Set of eBay Store color schemes.
 */
class StoreColorSchemeArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreColorSchemeType | Theme color scheme.
     */
    public $ColorScheme;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreColorSchemeType $val
     * @throws Exception
     */
    public function setColorScheme($val)
    {
        $this->ColorScheme = ()$val;
    }
}
