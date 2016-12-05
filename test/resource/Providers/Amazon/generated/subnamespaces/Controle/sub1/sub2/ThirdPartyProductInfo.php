<?php

namespace Controle\sub1\sub2;

class ThirdPartyProductInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ThirdPartyProductDetailsArray
	 */
	public $ThirdPartyProductDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ThirdPartyProductDetailsArray $val
	 * @throws Exception
	 */
	public function setThirdPartyProductDetails($val)
	{
        $this->ThirdPartyProductDetails = (ThirdPartyProductDetailsArray)$val;
	}
}
