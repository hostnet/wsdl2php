<?php

namespace Controle;

/**
 * StoreThemeArrayType
 * Set of Store themes.
 */
class StoreThemeArrayType
{
	/**
	 * @var \Controle\StoreThemeType | Store theme.
	 */
	public $theme;
	/**
	 * @var \Controle\StoreColorSchemeArrayType | Set of color schemes. This set is for use with those themes that do not explicitly list
	 * a color scheme in the theme definition (these themes are also known as advanced themes).
	 */
	public $genericcolorschemearray;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param StoreThemeType $val
	 * @throws Exception
	 */
	public function setTheme($val)
	{
        $this->theme = (int)$val;
	}

	/**
	 * @param StoreColorSchemeArrayType $val
	 * @throws Exception
	 */
	public function setGenericColorSchemeArray($val)
	{
        $this->genericcolorschemearray = (int)$val;
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
