<?php

namespace Controle\sub1\sub2;

/**
 * StoreColorSchemeArrayType
 * Set of eBay Store color schemes.
 */
class StoreColorSchemeArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StoreColorSchemeType | Theme color scheme.
	 */
	public $ColorScheme;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreColorSchemeType $val
	 * @throws Exception
	 */
	public function setColorScheme($val)
	{
        $this->ColorScheme = (StoreColorSchemeType)$val;
	}
}
