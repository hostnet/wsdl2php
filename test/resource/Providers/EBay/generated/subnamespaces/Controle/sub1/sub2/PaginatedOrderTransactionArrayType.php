<?php

namespace Controle\sub1\sub2;

/**
 * PaginatedOrderTransactionArrayType
 * Contains a paginated list of orders, transactions, or both, with each item an OrderTransactionType.
 */
class PaginatedOrderTransactionArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\OrderTransactionArrayType | Contains the list of orders, transactions, or both.
	 */
	public $OrderTransactionArray;
	/**
	 * @var \Controle\sub1\sub2\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param OrderTransactionArrayType $val
	 * @throws \Exception
	 */
	public function setOrderTransactionArray($val)
	{
        $this->OrderTransactionArray = $val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws \Exception
	 */
	public function setPaginationResult($val)
	{
        $this->PaginationResult = $val;
	}
}
