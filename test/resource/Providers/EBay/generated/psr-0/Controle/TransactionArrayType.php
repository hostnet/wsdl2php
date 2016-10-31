<?php

namespace Controle;

/**
 * TransactionArrayType
 * Contains an array of transactions.
 */
class TransactionArrayType
{
	/**
	 * @var \Controle\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
	 */
	public $transaction;
	/**
	 * @param TransactionType $val
	 * @throws Exception
	 */
	public function setTransaction($val)
	{
        $this->transaction = (int)$val;
	}
}
