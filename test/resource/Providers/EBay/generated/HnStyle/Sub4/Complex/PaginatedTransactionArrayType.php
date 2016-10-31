<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PaginatedTransactionArrayType
 * Contains a paginated list of transactions.
 */
class PaginatedTransactionArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
     * exist.
     */
    public $transactionarray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
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
