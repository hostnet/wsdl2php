<?php

namespace Controle;

/**
 * PaginatedTransactionArrayType
 * Contains a paginated list of transactions.
 */
class PaginatedTransactionArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
	 * exist.
	 */
	public $TransactionArray;
	/**
	 * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $PaginationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param TransactionArrayType $val
	 * @throws Exception
	 */
	public function setTransactionArray($val)
	{
        $this->TransactionArray = $val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->PaginationResult = $val;
	}
}
