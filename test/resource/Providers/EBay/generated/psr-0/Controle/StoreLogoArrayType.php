<?php

namespace Controle;

/**
 * StoreLogoArrayType
 * Set of Store logos.
 */
class StoreLogoArrayType
{
	/**
	 * @var \Controle\StoreLogoType | Store logo.
	 */
	public $logo;
	/**
	 * @param StoreLogoType $val
	 * @throws Exception
	 */
	public function setLogo($val)
	{
        $this->logo = (int)$val;
	}
}
