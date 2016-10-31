<?php

namespace Controle;

/**
 * GetOrderTransactionsResponseType
 * Response to GetOrderTransactions request.
 */
class GetOrderTransactionsResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\OrderArrayType | The set of orders that match the order IDs or filter criteria specified. Also applicable
	 * to Half.com (only returns orders that have not been marked as shipped).
	 */
	public $orderarray;
	/**
	 * @param OrderArrayType $val
	 * @throws Exception
	 */
	public function setOrderArray($val)
	{
        $this->orderarray = (int)$val;
	}
}
