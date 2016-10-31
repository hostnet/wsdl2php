<?php

namespace Controle;

/**
 * StoreColorSchemeArrayType
 * Set of eBay Store color schemes.
 */
class StoreColorSchemeArrayType
{
    /**
     * @var \Controle\StoreColorSchemeType | Theme color scheme.
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
