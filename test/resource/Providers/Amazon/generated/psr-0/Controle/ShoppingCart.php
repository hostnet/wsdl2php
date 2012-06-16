<?php

namespace Controle;
class ShoppingCart {
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var string
	 */
	public $PurchaseUrl;
	/**
	 * @var \Controle\ItemArray
	 */
	public $Items;
}

