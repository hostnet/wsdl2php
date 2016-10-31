<?php

namespace Controle;

class SellerProfile
{
	/**
	 * @var \Controle\SellerProfileDetailsArray
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
