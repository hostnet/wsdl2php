<?php

namespace Controle;
/**
 * PaginatedTransactionArrayType
 * Contains a paginated list of transactions.
 */
class PaginatedTransactionArrayType {
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
}

