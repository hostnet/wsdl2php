<?php

namespace Controle\sub1\sub2;

class SellerProfile
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\SellerProfileDetailsArray
	 */
	public $SellerProfileDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SellerProfileDetailsArray $val
	 * @throws Exception
	 */
	public function setSellerProfileDetails($val)
	{
        $this->SellerProfileDetails = (SellerProfileDetailsArray)$val;
	}
}
