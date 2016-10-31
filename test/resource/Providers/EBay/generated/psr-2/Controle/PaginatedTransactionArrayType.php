<?php

namespace Controle;

/**
 * PaginatedTransactionArrayType
 * Contains a paginated list of transactions.
 */
class PaginatedTransactionArrayType
{
    /**
     * @var \Controle\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
     * exist.
     */
    public $transactionarray;
    /**
     * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @param TransactionArrayType $val
     * @throws Exception
     */
    public function setTransactionArray($val)
    {
        $this->transactionarray = (int)$val;
    }

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->paginationresult = (int)$val;
    }
}
