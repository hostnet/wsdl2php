<?php

namespace Controle;

class ShoppingCart
{
	/**
	 * @var string
	 */
	public $cartid;
	/**
	 * @var string
	 */
	public $hmac;
	/**
	 * @var string
	 */
	public $purchaseurl;
	/**
	 * @var \Controle\ItemArray
	 */
	public $items;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CartId');
        }
        $this->cartid = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HMAC');
        }
        $this->hmac = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPurchaseUrl($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PurchaseUrl');
        }
        $this->purchaseurl = (int)$val;
	}

	/**
	 * @param ItemArray $val
	 * @throws Exception
	 */
	public function setItems($val)
	{
        $this->items = (int)$val;
	}
}
