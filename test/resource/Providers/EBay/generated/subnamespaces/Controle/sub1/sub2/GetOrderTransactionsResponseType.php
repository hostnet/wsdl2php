<?php

namespace Controle\sub1\sub2;
/**
 * GetOrderTransactionsResponseType
 * Response to GetOrderTransactions request.
 */
class GetOrderTransactionsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\OrderArrayType | The set of orders that match the order IDs or filter criteria specified. Also applicable
	 * to Half.com (only returns orders that have not been marked as shipped).
	 */
	public $OrderArray;
	/**
	 * @param OrderArrayType $val
	 * @throws Exception
	 */
	public function setOrderArray($val) {
		
		$this->OrderArray = (int)$val;
	}

}

