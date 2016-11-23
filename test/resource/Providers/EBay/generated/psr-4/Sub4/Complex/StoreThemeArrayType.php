<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreThemeArrayType
 * Set of Store themes.
 */
class StoreThemeArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreThemeType | Store theme.
     */
    public $Theme;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreColorSchemeArrayType | Set of color schemes. This set is for use with those themes that do not explicitly list
     * a color scheme in the theme definition (these themes are also known as advanced themes).
     */
    public $GenericColorSchemeArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreThemeType $val
     * @throws Exception
     */
    public function setTheme($val)
    {
        $this->Theme = (int)$val;
    }

    /**
     * @param StoreColorSchemeArrayType $val
     * @throws Exception
     */
    public function setGenericColorSchemeArray($val)
    {
        $this->GenericColorSchemeArray = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
