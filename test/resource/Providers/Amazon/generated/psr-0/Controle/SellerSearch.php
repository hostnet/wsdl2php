<?php

namespace Controle;

class SellerSearch
{
	/**
	 * @var \Controle\SellerSearchDetailsArray
	 */
	public $sellersearchdetails;
	/**
	 * @param SellerSearchDetailsArray $val
	 * @throws Exception
	 */
	public function setSellerSearchDetails($val)
	{
        $this->sellersearchdetails = (int)$val;
	}
}
