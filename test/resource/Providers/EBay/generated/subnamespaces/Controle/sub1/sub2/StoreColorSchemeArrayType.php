<?php

namespace Controle\sub1\sub2;

/**
 * StoreColorSchemeArrayType
 * Set of eBay Store color schemes.
 */
class StoreColorSchemeArrayType
{
	/**
	 * @var \Controle\sub1\sub2\StoreColorSchemeType | Theme color scheme.
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
