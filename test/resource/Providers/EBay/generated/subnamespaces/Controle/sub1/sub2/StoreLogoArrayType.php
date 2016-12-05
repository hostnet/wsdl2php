<?php

namespace Controle\sub1\sub2;

/**
 * StoreLogoArrayType
 * Set of Store logos.
 */
class StoreLogoArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StoreLogoType | Store logo.
	 */
	public $Logo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreLogoType $val
	 * @throws Exception
	 */
	public function setLogo($val)
	{
        $this->Logo = (StoreLogoType)$val;
	}
}
