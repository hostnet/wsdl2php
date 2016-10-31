<?php

namespace Controle;

/**
 * BuyerType
 * Contains information about a user as a buyer.
 */
class BuyerType
{
	/**
	 * @var \Controle\AddressType | The address to which the item is to be shipped.
	 */
	public $shippingaddress;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param AddressType $val
	 * @throws Exception
	 */
	public function setShippingAddress($val)
	{
        $this->shippingaddress = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
