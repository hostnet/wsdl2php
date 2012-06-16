<?php

namespace Controle\sub1\sub2;
class SellerSearch {
	/**
	 * @var \Controle\sub1\sub2\SellerSearchDetailsArray
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

