<?php

namespace Controle;

class ThirdPartyProductInfo
{
	/**
	 * @var \Controle\ThirdPartyProductDetailsArray
	 */
	public $thirdpartyproductdetails;
	/**
	 * @param ThirdPartyProductDetailsArray $val
	 * @throws Exception
	 */
	public function setThirdPartyProductDetails($val)
	{
        $this->thirdpartyproductdetails = (int)$val;
	}
}
