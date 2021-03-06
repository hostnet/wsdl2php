<?php

namespace Controle;

/**
 * StoreColorSchemeArrayType
 * Set of eBay Store color schemes.
 */
class StoreColorSchemeArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StoreColorSchemeType | Theme color scheme.
     */
    public $ColorScheme;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreColorSchemeType $val
     * @throws \Exception
     */
    public function setColorScheme($val)
    {
        $this->ColorScheme = $val;
    }
}
