<?php

namespace Controle;
/**
 * BuyerType
 * Contains information about a user as a buyer.
 */
class BuyerType {
	/**
	 * @var \Controle\AddressType | The address to which the item is to be shipped.
	 */
	public $ShippingAddress;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

