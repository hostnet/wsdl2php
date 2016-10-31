<?php

namespace Controle\sub1\sub2;

class SellerProfile
{
	/**
	 * @var \Controle\sub1\sub2\SellerProfileDetailsArray
	 */
	public $sellerprofiledetails;
	/**
	 * @param SellerProfileDetailsArray $val
	 * @throws Exception
	 */
	public function setSellerProfileDetails($val)
	{
        $this->sellerprofiledetails = (int)$val;
	}
}
