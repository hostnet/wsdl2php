<?php

namespace Controle;

/**
 * TransactionArrayType
 * Contains an array of transactions.
 */
class TransactionArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
	 */
	public $Transaction;
	// @codingStandardsIgnoreEnd

	/**
	 * @param TransactionType $val
	 * @throws Exception
	 */
	public function setTransaction($val)
	{
        $this->Transaction = $val;
	}
}
