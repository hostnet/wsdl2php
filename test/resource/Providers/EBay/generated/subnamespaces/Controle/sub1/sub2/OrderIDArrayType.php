<?php

namespace Controle\sub1\sub2;
/**
 * OrderIDArrayType
 * A list of unique identifiers for orders.
 */
class OrderIDArrayType {
	/**
	 * @var \Controle\sub1\sub2\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
	 * orders.
	 */
	public $OrderID;
	/**
	 * @param OrderIDType $val
	 * @throws Exception
	 */
	public function setOrderID($val) {
		
		$this->OrderID = (int)$val;
	}

}

