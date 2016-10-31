<?php

namespace Controle;
class ThirdPartyProductInfo {
	/**
	 * @var \Controle\ThirdPartyProductDetailsArray
	 */
	public $ThirdPartyProductDetails;
	/**
	 * @param ThirdPartyProductDetailsArray $val
	 * @throws Exception
	 */
	public function setThirdPartyProductDetails($val) {
		
		$this->ThirdPartyProductDetails = (int)$val;
	}

}

