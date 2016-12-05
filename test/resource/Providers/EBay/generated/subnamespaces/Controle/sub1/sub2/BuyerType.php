<?php

namespace Controle\sub1\sub2;

/**
 * BuyerType
 * Contains information about a user as a buyer.
 */
class BuyerType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\AddressType | The address to which the item is to be shipped.
	 */
	public $ShippingAddress;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param AddressType $val
	 * @throws Exception
	 */
	public function setShippingAddress($val)
	{
        $this->ShippingAddress = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
