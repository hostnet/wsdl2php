<?php

namespace Controle\sub1\sub2;

/**
 * TransactionArrayType
 * Contains an array of transactions.
 */
class TransactionArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
	 */
	public $Transaction;
	// @codingStandardsIgnoreEnd

	/**
	 * @param TransactionType $val
	 * @throws Exception
	 */
	public function setTransaction($val)
	{
        $this->Transaction = (TransactionType)$val;
	}
}
