<?php

namespace Controle\sub1\sub2;
class SellerProfile {
	/**
	 * @var \Controle\sub1\sub2\SellerProfileDetailsArray
	 */
	public $SellerProfileDetails;
	/**
	 * @param SellerProfileDetailsArray $val
	 * @throws Exception
	 */
	public function setSellerProfileDetails($val) {
		
		$this->SellerProfileDetails = (int)$val;
	}

}

