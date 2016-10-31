<?php

namespace Controle;
class SellerSearch {
	/**
	 * @var \Controle\SellerSearchDetailsArray
	 */
	public $SellerSearchDetails;
	/**
	 * @param SellerSearchDetailsArray $val
	 * @throws Exception
	 */
	public function setSellerSearchDetails($val) {
		
		$this->SellerSearchDetails = (int)$val;
	}

}

