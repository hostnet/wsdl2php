<?php

namespace Controle\sub1\sub2;
class ThirdPartyProductInfo {
	/**
	 * @var \Controle\sub1\sub2\ThirdPartyProductDetailsArray
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

