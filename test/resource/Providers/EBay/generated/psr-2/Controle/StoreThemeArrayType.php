<?php

namespace Controle;

/**
 * StoreThemeArrayType
 * Set of Store themes.
 */
class StoreThemeArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StoreThemeType | Store theme.
     */
    public $Theme;
    /**
     * @var \Controle\StoreColorSchemeArrayType | Set of color schemes. This set is for use with those themes that do not explicitly list
     * a color scheme in the theme definition (these themes are also known as advanced themes).
     */
    public $GenericColorSchemeArray;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreThemeType $val
     * @throws Exception
     */
    public function setTheme($val)
    {
        $this->Theme = (StoreThemeType)$val;
    }

    /**
     * @param StoreColorSchemeArrayType $val
     * @throws Exception
     */
    public function setGenericColorSchemeArray($val)
    {
        $this->GenericColorSchemeArray = (StoreColorSchemeArrayType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
