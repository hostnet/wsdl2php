<?php

namespace Controle\sub1\sub2;

/**
 * StoreThemeArrayType
 * Set of Store themes.
 */
class StoreThemeArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StoreThemeType | Store theme.
	 */
	public $Theme;
	/**
	 * @var \Controle\sub1\sub2\StoreColorSchemeArrayType | Set of color schemes. This set is for use with those themes that do not explicitly list
	 * a color scheme in the theme definition (these themes are also known as advanced themes).
	 */
	public $GenericColorSchemeArray;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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
