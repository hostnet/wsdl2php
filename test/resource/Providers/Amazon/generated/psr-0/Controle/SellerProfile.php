<?php

namespace Controle;
class SellerProfile {
	/**
	 * @var \Controle\SellerProfileDetailsArray
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

